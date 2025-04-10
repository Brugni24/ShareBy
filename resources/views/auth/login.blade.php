<x-guest-layout>
    <div class="p-2 sm:px-6 py-4 xl:w-[380px]">
        <!-- Session Status -->
        <x-auth-session-status class="" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary shadow-sm" name="remember">
                    <span class="ml-2 text-sm text-gray-800">{{ __('Ricordarmi') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-6">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-800 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" href="{{ route('password.request') }}">
                        {{ __('Password dimenticata?') }}
                    </a>
                @endif

                <x-submit-button class="ml-3 py-2 px-4">
                    {{ __('Log in') }}
                </x-submit-button>
            </div>
        </form>
        <div class="mt-12 mb-4 md:mt-16">
            <p class="text-center text-xs text-gray-800">Non ti sei ancora registrato? <a href="/register" class="text-primary underline">Clicca qui</a></p>
        </div>
    </div>
</x-guest-layout>