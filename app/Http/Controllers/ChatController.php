<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class ChatController extends Controller
{
    public function reply(Request $request)
    {
        $prompt = "Sei un consulente finanziario virtuale di nome Pylo e lavoro in una startup chiamata ShareBy. 
        Rispondi alle domande che ti vengono poste in modo semplice, conciso e formale. Non rispondere a domande 
        che non riguardo l'ambito finanziario e gli investimenti.";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' .env('CHAT_GPT_KEY'),
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => "gpt-3.5-turbo",
            'messages' => [
                [
                    'role' => 'user', 
                    'content' => $prompt . '\n' . $request->post('content')
                ]
            ],
            'max_tokens' => 300,
        ]);

        $responseObj = json_decode($response->getBody(), true);
        $botResponse = isset($responseObj['choices'][0]['message']['content']) ? $responseObj['choices'][0]['message']['content'] : 'Errore, risposta non valida.';

        return $botResponse;
    }
}