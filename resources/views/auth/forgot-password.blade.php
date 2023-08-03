<x-guest-layout>
    <div class="mx-[10vw] max-w-[500px] md:mx-[7vw]">
        <div class="mb-4 font-medium text-gray-800">
            {{ __('Hai dimenticato la password? Nessun problema. Scrivi la tua email qui sotto e ti faremo ricevere una mail che conterrà un link per cambiare la tua password con una nuova.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="max-w-[380px]">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-6 mb-2">
                <x-submit-button class="py-2 px-3">
                    {{ __('Email Password Reset Link') }}
                </x-submit-button>
            </div>
        </form>
    </div>
</x-guest-layout>
