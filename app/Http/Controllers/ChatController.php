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
            'model' => "gpt-3.5-turbo",
            'messages' => [
                [
                    'role' => 'system',
                    'content' => "Sei un consulente finanziario virtuale di nome Pylo, hai il compito di aiutare i clienti della nostra startup ShareBy a
                    orientarsi nell'ambito finanziario rispondendo alle loro domande in rispondi in maniera conciso."
                ],
                [
                    'role' => 'user',
                    'content' => 'Chi sei?'
                ],
                [
                    'role' => 'assistant',
                    'content' => 'Ciao mi chiamo Pylo e sono il tuo consulente finanziario virtuale, come posso esserti utile?'
                ],
                [
                    'role' => 'system',
                    'content' => 'Rispondi solamente alle domande di ambito finanziario.'
                ],
                [
                    'role' => 'user',
                    'content' => "Che film ha vinto l'oscar?"
                ],
                [
                    'role' => 'assistant',
                    'content' => "Scusa non so rispondere, ti prego di formulare la tua domanda affinchè sia attinente all'ambito finanziario."
                ],
                [
                    'role' => 'user',
                    'content' => "Spiega cos'è il ROI."
                ],
                [
                    'role' => 'assistant',
                    'content' => "Il ROI, o Return on Investment, è un indicatore finanziario che misura il rendimento di un investimento. È calcolato come il rapporto tra il guadagno netto dell'investimento e il costo dell'investimento iniziale. In termini semplici, il ROI ti aiuta a capire quanto denaro hai guadagnato rispetto a quanto ne hai investito."
                ],
                [
                    'role' => 'user',
                    'content' => "Spiega l'importanza del bilancio aziendale nella finanza."
                ],
                [
                    'role' => 'assistant',
                    'content' => "Il bilancio aziendale svolge un ruolo cruciale nella gestione finanziaria delle aziende..."
                ],
                [
                    'role' => 'user', 
                    'content' => 'Reply as a financial advisor.\n' . $userMessage,
                ]
            ],
            'temperature' => 1,
            'max_tokens' => 124,
            'top_p' => 1,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
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