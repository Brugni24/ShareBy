<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class ChatController extends Controller
{
    public function reply(Request $request)
    {
        $userMessage = $request->input('message');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' .env('CHAT_GPT_KEY'),
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/chat/completions', [
            'messages' => [[ 
                'role' => 'user', 
                'content' => 'Reply as a financial advisor.\n' . $userMessage
            ]],
            'model' => "gpt-3.5-turbo",
            'max_tokens' => 50,
        ]);
        $responseObj = json_decode($response->getBody(), true);
        $botResponse = $responseObj['choices'][0]['message']['content'];

        $chatLog = session('chatLog', []);

        $chatLog[] = ['role' => 'user', 'message' => $userMessage];
        $chatLog[] = ['role' => 'bot', 'message' => $botResponse];

        // Store the chat log in the session
        session(['chatLog' => $chatLog]);

        return view('consulente', compact('userMessage', 'chatLog'));
    }
}