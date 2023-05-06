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

        <style>
            .link-underline {
                border-bottom-width: 0;
                background-image: linear-gradient(transparent, transparent), linear-gradient(#fff, #fff);
                background-size: 0 2px;
                background-position: 0 100%;
                background-repeat: no-repeat;
                transition: background-size .3s ease-in-out;
            }

            .link-underline-black {
                background-image: linear-gradient(transparent, transparent), linear-gradient(white, white)
            }

            .link-underline:hover {
                background-size: 100% 2px;
                background-position: 0 100%
            }
        </style>

    </head>
    <body>
        <header class="bg-primary w-full"> 
            <nav class="py-5 w-[94%] mx-auto flex items-center justify-between px-3 md:px-0">
                <a href="/" class="flex justify-start">
                    <img class="h-10" src="/img/ShareBy_Logo_Bianco.svg" alt="ShareBy Logo">
                </a>
                <div class="">
                    <ul class="hidden lg:flex gap-20">
                        <li>
                            <a class="link link-underline link-underline-black hover:text-white text-gray-100" href="#">Home</a>
                        </li>
                        <li>
                            <a class="link link-underline link-underline-black hover:text-white  text-gray-100" href="#">Prodotti</a>
                        </li>
                        <li>
                            <a class="link link-underline link-underline-black hover:text-white  text-gray-100" href="#">Algoritmo</a>
                        </li>
                        <li>
                            <a class="link link-underline link-underline-black hover:text-white  text-gray-100"href="#">Contatti</a>
                        </li>
                    </ul>
                </div>
                @if (Route::has('login'))
                <div class="hidden lg:flex gap-3">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">
                            <button type="button" class="border border-white text-white rounded-lg py-1 px-5 hover:text-primary hover:bg-white">Log in</button>
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <button type="button" class="border border-white text-white rounded-lg py-1 px-5 hover:text-primary hover:bg-white">Register</button>
                            </a>
                        @endif
                    @endauth
                </div>
                @endif
                {{-- secondary navbar --}}
                <div class="lg:hidden flex items-center">
                    <button id="mobile-menu-button" class="outline-none">
                        <svg
                            class="w-6 h-6 text-white"
                            x-show="!showMenu"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <div id="mobile-menu" class="hidden absolute left-0 right-0 mx-auto my-3 items-center justify-center w-[94%] top-20 bg-gray-100 rounded border border-gray-200 p-3">
                    <ul class="">
                        <li >
                            <a href="index.html" class="flex justify-center py-4 mb-1 rounded text-sm text-white bg-primary font-semibold">Home</a>
                        </li>
                        <li>
                            <a href="#services" class="flex justify-center py-4 mb-1 rounded text-sm hover:bg-gray-200 transition duration-100">Services</a>
                        </li>
                        <li>
                            <a href="#about" class="flex justify-center py-4 mb-1 rounded text-sm hover:bg-gray-200 transition duration-100">About</a>
                        </li>
                        <li>
                            <a href="#contact" class="flex justify-center py-4 mb-1 rounded text-sm hover:bg-gray-200 transition duration-100">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}" class="flex justify-center py-4 mb-1 rounded-xl text-sm text-primary font-semibold border-2 border-primary hover:bg-white transition duration-100">Log in</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="flex justify-center py-4 mb-1 rounded-xl text-sm text-primary font-semibold border-2 border-primary hover:bg-white transition duration-100">Register</a>
                        </li>
                    </ul>
                </div>
                <script>
                    const button = document.querySelector('#mobile-menu-button');
                    const menu = document.querySelector('#mobile-menu');
        
                    button.addEventListener("click", () => {
                    menu.classList.toggle("hidden");
                    });
                </script>
            </nav>
        </header>
    </body>
</html>