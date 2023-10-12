<x-app-layout>
    <div id="chat-container">
        @foreach ($chatLog as $message)
            @if ($message['role'] === 'user')
                <div class="user-message">
                    <div class="message-bubble">{{ $message['message'] }}</div>
                </div>
            @else
                <div class="bot-message">
                    <div class="message-bubble">{{ $message['message'] }}</div>
                </div>
            @endif
        @endforeach
    </div>
    <form method="POST" action="{{ route('consulente.reply') }}">
        @csrf
        <input type="text" name="message" placeholder="Type your message...">
        <button type="submit">Send</button>
    </form>
    <link href="{{ asset('css/chat.css') }}" rel="stylesheet">
    @livewireScripts
</x-app-layout>