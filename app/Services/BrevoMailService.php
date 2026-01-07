<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class BrevoMailService
{
    /**
     * Send an email via Brevo HTTP API
     *
     * @param array       $toList        [ ['email' => 'a@b.com', 'name' => 'Name'], ... ]
     * @param string      $subject
     * @param string      $htmlContent
     * @param string|null $fromEmail
     * @param string|null $fromName
     * @param string|null $replyToEmail
     * @param string|null $replyToName
     *
     * @return bool
     */
    public static function sendMail(
        array $toList,
        string $subject,
        string $htmlContent,
        ?string $fromEmail = null,
        ?string $fromName = null,
        ?string $replyToEmail = null,
        ?string $replyToName = null
    ): bool {
        $apiKey = env('BREVO_API_KEY');

        if (empty($apiKey)) {
            Log::error('BrevoMailService: BREVO_API_KEY is missing in .env');
            return false;
        }

        // Default sender
        $senderEmail = $fromEmail ?? env('MAIL_FROM_ADDRESS', 'contact@roboweltsystems.com');
        $senderName  = $fromName  ?? env('MAIL_FROM_NAME', 'RoboWelt Systems');

        // Build recipient list for Brevo
        $toPayload = [];
        foreach ($toList as $to) {
            if (empty($to['email'])) {
                continue;
            }
            $toPayload[] = [
                'email' => $to['email'],
                'name'  => $to['name'] ?? '',
            ];
        }

        if (empty($toPayload)) {
            Log::error('BrevoMailService: Empty toList, no valid recipients');
            return false;
        }

        $client = new Client([
            'base_uri' => 'https://api.brevo.com',
            'timeout'  => 10,
        ]);

        try {
            $payload = [
                'sender' => [
                    'name'  => $senderName,
                    'email' => $senderEmail,
                ],
                'to' => $toPayload,
                'subject'     => $subject,
                'htmlContent' => $htmlContent,
            ];

            // Optional Reply-To (user email)
            if (!empty($replyToEmail)) {
                $payload['replyTo'] = [
                    'email' => $replyToEmail,
                    'name'  => $replyToName ?? $replyToEmail,
                ];
            }

            $response = $client->post('/v3/smtp/email', [
                'headers' => [
                    'accept'        => 'application/json',
                    'api-key'       => $apiKey,
                    'content-type'  => 'application/json',
                ],
                'json' => $payload,
            ]);

            $status = $response->getStatusCode();
            $body   = (string) $response->getBody();

            if ($status >= 200 && $status < 300) {
                Log::info('BrevoMailService: Email sent via API', [
                    'to'      => $toList,
                    'subject' => $subject,
                    'from'    => $senderEmail,
                    'status'  => $status,
                ]);
                return true;
            }

            Log::error('BrevoMailService: Non-2xx response from Brevo API', [
                'to'      => $toList,
                'subject' => $subject,
                'from'    => $senderEmail,
                'status'  => $status,
                'body'    => $body,
            ]);
        } catch (\Throwable $e) {
            Log::error('BrevoMailService: API exception', [
                'to'      => $toList,
                'subject' => $subject,
                'from'    => $senderEmail,
                'error'   => $e->getMessage(),
            ]);
        }

        return false;
    }
}
