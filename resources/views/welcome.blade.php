<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ShareBy</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <p>
        <nav class="bg-primary p-6 px-12 flex items-center justify-between">
                <a href="/" class="flex justify-start">
                    <img class="h-10" src="/img/ShareBy_Logo_Bianco.svg" alt="ShareBy Logo">
                </a>
                <div class="nav-links">
                    <ul class="flex gap-20">
                        <li>
                            <a class="hover:text-white text-gray-300" href="#">Home</a>
                        </li>
                        <li>
                            <a class="hover:text-white  text-gray-300" href="#">Prodotti</a>
                        </li>
                        <li>
                            <a class="hover:text-white  text-gray-300" href="#">Algoritmo</a>
                        </li>
                        <li>
                            <a class="hover:text-white  text-gray-300"href="#">Contatti</a>
                        </li>
                    </ul>
                </div>
            </div>
                @if (Route::has('login'))
                <div class="flex gap-3">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">
                            <button type="button" class="border border-white text-white rounded py-1 px-5 hover:text-primary hover:bg-white">Log in</button>
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <button type="button" class="border border-white text-white rounded py-1 px-5 hover:text-primary hover:bg-white">Register</button>
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
        </nav>
    </body>
</html>