<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name and Surname -->
        <div class="flex gap-6">
            <div>
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="surname" :value="__('Cognome')" />
                <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus autocomplete="surname" />
                <x-input-error :messages="$errors->get('surname')" class="mt-2" />
            </div>
        </div>

        <!-- Nationality and Birth date -->
        <div class="flex gap-6 mt-4">
            <div>
                <x-input-label for="nationality" :value="__('Nazionalità')" />
                <x-text-input id="nationality" class="block mt-1 w-full" type="text" name="nationality" :value="old('nationality')" required autofocus autocomplete="nationality" />
                <x-input-error :messages="$errors->get('nationality')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="birth_date" :value="__('Data di nascita')" />
                <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <x-text-input datepicker datepicker-autohide id="birth_date" class="block mt-1 w-full pl-10 placeholder-gray-300 placeholder:text-sm" type="text" name="birth_date" :value="old('birth_date')" required autofocus placeholder="Seleziona una data" />
                    <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                </div>
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    <div class="py-10">
        <p class="text-center text-xs text-gray-600">Ti sei già registrato? <a href="/login" class="text-primary underline">Clicca qui</a></p>
    </div>
</x-guest-layout>