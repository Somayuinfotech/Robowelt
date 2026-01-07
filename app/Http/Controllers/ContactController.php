<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
use App\Services\BrevoMailService;
use App\Models\ContactInquiry;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Matches your Blade form fields
        $data = $request->validate([
            'fullname' => 'required|string|max:100',
            'mobile'   => ['required', 'regex:/^[6-9]\d{9}$/'],
            'email'    => 'required|email:rfc,dns|max:255',
            'message'  => 'nullable|string|max:1000',
        ]);

        // Save to DB
        try {
            ContactInquiry::create([
                'fullname' => $data['fullname'],
                'mobile'   => $data['mobile'],
                'email'    => $data['email'],
                'message'  => $data['message'] ?? null,
                'source'   => 'contact', // optional column; remove if you don't have it
            ]);
        } catch (QueryException $e) {
            Log::error('ContactInquiry insert failed: ' . $e->getMessage(), ['data' => $data]);
            // Even if DB fails, we can still send emails
        }

        // Mail to Admin + Acknowledgement to User
        $this->sendScenarioMail('contact_admin', $data);
        $this->sendScenarioMail('contact_user', $data);

        return back()->with('success', 'Your enquiry has been submitted successfully!');
    }

    private function sendScenarioMail(string $scenario, array $data): void
    {
        switch ($scenario) {

            case 'contact_admin':
                $name  = $data['fullname'] ?? 'Unknown';
                $email = $data['email'] ?? null;

                $toList = [
                    ['email' => 'contact@roboweltsystems.com', 'name' => 'RoboWelt Admin'],
                ];

                $subject   = "New Contact Enquiry - {$name}";
                $fromEmail = 'info@roboweltsystems.com'; // verify in Brevo
                $fromName  = 'RoboWelt Systems';

                $replyToEmail = $email;
                $replyToName  = $name;

                $html = $this->buildContactAdminHtml($data);
                break;

            case 'contact_user':
                if (empty($data['email'])) return;

                $toList = [
                    ['email' => $data['email'], 'name' => $data['fullname'] ?? 'User'],
                ];

                $subject   = 'We received your enquiry - RoboWelt Systems';
                $fromEmail = 'info@roboweltsystems.com'; // verify in Brevo
                $fromName  = 'RoboWelt Systems';

                $replyToEmail = null;
                $replyToName  = null;

                $html = $this->buildContactUserHtml($data);
                break;

            default:
                return;
        }

        $this->sendMailOrLog(
            $toList,
            $subject,
            $html,
            $scenario,
            $fromEmail,
            $fromName,
            $replyToEmail,
            $replyToName
        );
    }

    private function buildContactAdminHtml(array $data): string
    {
        $name    = $data['fullname'] ?? 'Unknown';
        $mobile  = $data['mobile'] ?? '';
        $email   = $data['email'] ?? '';
        $message = $data['message'] ?? '';
        $receivedAt = now()->toDateTimeString();

        return <<<HTML
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body style="font-family: Arial, sans-serif; background:#f6f9fc; padding:20px;">
  <div style="max-width:700px;margin:0 auto;background:#fff;border-radius:10px;box-shadow:0 2px 8px rgba(0,0,0,.08);overflow:hidden;">
    <div style="background:#0d6efd;color:#fff;padding:16px 24px;">
      <h2 style="margin:0;">New Contact Enquiry</h2>
      <p style="margin:4px 0 0;font-size:13px;opacity:.9;">Submitted from RoboWelt Contact page.</p>
    </div>
    <div style="padding:20px 24px;font-size:14px;color:#333;">
      <p><b>Name:</b> {$this->escape($name)}</p>
      <p><b>Email:</b> {$this->escape($email)}</p>
      <p><b>Mobile:</b> {$this->escape($mobile)}</p>
      <p><b>Message:</b><br>{$this->nl2brEscape($message)}</p>
      <p><b>Received At:</b> {$this->escape($receivedAt)}</p>
    </div>
    <div style="background:#f1f3f5;padding:10px 24px;font-size:12px;color:#777;">
      Automated notification from RoboWelt Systems website.
    </div>
  </div>
</body>
</html>
HTML;
    }

    private function buildContactUserHtml(array $data): string
    {
        $userName = $this->escape($data['fullname'] ?? 'there');

        return <<<HTML
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body style="font-family: Arial, sans-serif; background:#f6f9fc; padding:20px;">
  <div style="max-width:600px;margin:0 auto;background:#fff;border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,.1);overflow:hidden;">
    <div style="background:#0d6efd;color:#fff;text-align:center;padding:20px;">
      <h2 style="margin:0;">RoboWelt Systems</h2>
    </div>
    <div style="padding:30px;">
      <h3 style="margin-top:0;color:#333;">Thank you for contacting us!</h3>
      <p style="font-size:16px;color:#555;">Hi <b>{$userName}</b>,</p>
      <p style="font-size:16px;color:#555;">We’ve received your enquiry and our team will get back to you shortly.</p>
      <p style="font-size:16px;color:#555;">If you want to add more details, just reply to this email.</p>
      <p style="margin-top:26px;font-size:16px;color:#333;">
        Regards,<br><b>Team RoboWelt</b>
      </p>
    </div>
    <div style="background:#f1f1f1;text-align:center;padding:10px;font-size:13px;color:#777;">
      © 2025 RoboWelt Systems. All rights reserved.
    </div>
  </div>
</body>
</html>
HTML;
    }

    private function sendMailOrLog(
        array $toList,
        string $subject,
        string $html,
        string $context,
        string $fromEmail,
        string $fromName,
        ?string $replyToEmail = null,
        ?string $replyToName = null
    ): void {
        try {
            $ok = BrevoMailService::sendMail(
                $toList,
                $subject,
                $html,
                $fromEmail,
                $fromName,
                $replyToEmail,
                $replyToName
            );

            if (!$ok) {
                Log::error("Brevo sendMail() returned false", [
                    'context' => $context,
                    'to' => $toList,
                    'subject' => $subject,
                ]);
            }
        } catch (\Throwable $e) {
            Log::error("Brevo sendMail exception", [
                'context' => $context,
                'to' => $toList,
                'subject' => $subject,
                'error' => $e->getMessage(),
            ]);
        }
    }

    private function escape($value): string
    {
        return e($value ?? '');
    }

    private function nl2brEscape($value): string
    {
        return nl2br(e($value ?? ''));
    }
}
