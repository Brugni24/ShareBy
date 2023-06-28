<x-guest-layout>
    <div class="mb-4 text-2xl text-center text-title font-semibold">
        {{ __('Grazie per esserti registrato!') }}
        <br>
    </div>
    <div class="mb-4 text-sm text-center text-gray-600">
        {{ __('Prima di iniziare, verifica il tuo indirizzo email cliccando sul link che ti abbiamo appena inviato. Se non hai ricevuto nessuna mail, te ne spediremo un\'altra.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Un nuovo link di verificare è stato mandato all\'indirizzo email che ha inserito nelal fase di registrazione.') }}
        </div>
    @endif

    <div class="mt-16 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Rinvia mail di verifica') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
