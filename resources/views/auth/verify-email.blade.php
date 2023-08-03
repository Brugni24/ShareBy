<x-guest-layout>
    <div class="mx-[10vw] max-w-[500px] md:mx-[7vw]">
        <div class="mb-4 text-2xl text-center text-title font-semibold">
            {{ __('Grazie per esserti registrato!') }}
            <br>
        </div>
        <div class="mb-4 font-medium text-center text-gray-800">
            {{ __('Prima di iniziare, verifica il tuo indirizzo email cliccando sul link che ti abbiamo appena inviato. Se non hai ricevuto nessuna mail, te ne spediremo un\'altra.') }}
        </div>
    
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Un nuovo link di verificare è stato mandato all\'indirizzo email che ha inserito nelal fase di registrazione.') }}
            </div>
        @endif
    
        <div class="mt-16 flex flex-col items-center justify-center gap-8 mb-16">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
    
                <div>
                    <x-submit-button class="py-2 px-3">
                        {{ __('Rinvia mail di verifica') }}
                    </x-submit-button>
                </div>
            </form>
    
            <form method="POST" action="{{ route('logout') }}">
                @csrf
    
                <x-submit-button class="py-2 px-4 text-sm bg-secondary border-secondary hover:text-secondary">
                    {{ __('Log out') }}
                </x-submit-button>
            </form>
        </div>
    </div>
</x-guest-layout>
