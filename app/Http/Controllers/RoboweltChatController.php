<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class RoboweltChatController extends Controller
{
    public function ask(Request $request)
    {
        // Log every incoming request (helps verify it's being hit)
        Log::info('RoboWelt Chat: incoming', [
            'ip' => $request->ip(),
            'ua' => $request->userAgent(),
            'message' => $request->input('message'),
        ]);

        $request->validate([
            'message' => 'required|string|max:2000',
        ]);

        try {
            $apiKey = env('GEMINI_API_KEY');

            if (!$apiKey) {
                Log::error('RoboWelt Chat: GEMINI_API_KEY missing in .env');
                return response()->json([
                    'reply' => "Chat is not configured yet. Please use the Contact page."
                ], 200);
            }

            $kb = config('robowelt_kb');


            $systemInstruction = "You are RoboWelt Site Assistant.
Rules:
- Answer ONLY using the provided KNOWLEDGE BASE.
- If not in KB, ask the user to use the Contact page.
- Do NOT use markdown, bullet points, asterisks (*), or formatting.
- Write in simple plain text sentences.";
            $payload = [
                "contents" => [
                    [
                        "role" => "user",
                        "parts" => [
                            ["text" => "KNOWLEDGE BASE:\n" . json_encode($kb, JSON_PRETTY_PRINT)],
                            ["text" => "SYSTEM:\n" . $systemInstruction],
                            ["text" => "USER QUESTION:\n" . $request->input('message')],
                        ],
                    ],
                ],
                "generationConfig" => [
                    "temperature" => 0.2,
                    "maxOutputTokens" => 500,
                ],
            ];

            $model = env('GEMINI_MODEL', 'gemini-2.5-flash');
            $url = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key={$apiKey}";

            Log::info('RoboWelt Chat: calling Gemini', [
                'url' => '.../gemini-1.5-flash:generateContent',
            ]);

            $res = Http::timeout(20)->post($url, $payload);

            Log::info('RoboWelt Chat: Gemini response', [
                'status' => $res->status(),
                'ok' => $res->ok(),
                'body_snippet' => substr($res->body(), 0, 500),
            ]);

            if (!$res->ok()) {
                return response()->json([
                    'reply' => "Sorry—chat is temporarily unavailable. Please use the Contact page."
                ], 200);
            }

            $reply = data_get($res->json(), 'candidates.0.content.parts.0.text')
                ?? "I can only help with RoboWelt website/services info. Please use the Contact page.";

            return response()->json(['reply' => $reply], 200);

        } catch (\Throwable $e) {
            Log::error('RoboWelt Chat: exception', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return response()->json([
                'reply' => "Sorry—chat is temporarily unavailable. Please use the Contact page."
            ], 200);
        }
    }
}
