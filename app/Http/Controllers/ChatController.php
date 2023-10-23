<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class ChatController extends Controller
{
    public function reply(Request $request)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' .env('CHAT_GPT_KEY'),
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => "gpt-3.5-turbo",
            'messages' => [
                [
                    'role' => 'user', 
                    'content' => 'Rispondi come se fossi un consulente finanziario.\n' . $request->post('content')
                ]
            ],
            'max_tokens' => 120,
        ]);

        $responseObj = json_decode($response->getBody(), true);
        $botResponse = isset($responseObj['choices'][0]['message']['content']) ? $responseObj['choices'][0]['message']['content'] : 'Errore, risposta non valida.';

        return $botResponse;
    }
}