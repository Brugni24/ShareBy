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
                        <svg id="menu-logo" class="w-6 h-6" viewBox="0 0 20.00 20.00" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ffffff" stroke-width="0.8"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#ffffff" fill-rule="evenodd" d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z"></path> </g></svg>
                        <svg id="cross-logo" style="display: none" class="w-6 h-6" fill="#ffffff" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.8,16l5.5-5.5c0.8-0.8,0.8-2,0-2.8l0,0C24,7.3,23.5,7,23,7c-0.5,0-1,0.2-1.4,0.6L16,13.2l-5.5-5.5 c-0.8-0.8-2.1-0.8-2.8,0C7.3,8,7,8.5,7,9.1s0.2,1,0.6,1.4l5.5,5.5l-5.5,5.5C7.3,21.9,7,22.4,7,23c0,0.5,0.2,1,0.6,1.4 C8,24.8,8.5,25,9,25c0.5,0,1-0.2,1.4-0.6l5.5-5.5l5.5,5.5c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L18.8,16z"></path> </g></svg>
                    </button>
                </div>
                <div id="mobile-menu" class="hidden absolute left-0 right-0 mx-auto my-3 items-center justify-center w-[94%] top-20 bg-gray-100 rounded border border-gray-200 p-3">
                    <ul class="">
                        <li >
                            <a href="index.html" class="flex justify-center py-4 mb-1 rounded-xl text-sm text-white bg-primary font-semibold">Home</a>
                        </li>
                        <li>
                            <a href="#services" class="flex justify-center py-4 mb-1 rounded-xl text-sm hover:bg-gray-200 transition duration-100">Services</a>
                        </li>
                        <li>
                            <a href="#about" class="flex justify-center py-4 mb-1 rounded-xl text-sm hover:bg-gray-200 transition duration-100">About</a>
                        </li>
                        <li>
                            <a href="#contact" class="flex justify-center py-4 mb-1 rounded-xl text-sm hover:bg-gray-200 transition duration-100">Contact Us</a>
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

                    const menu_logo = document.getElementById("menu-logo");
                    const cross_logo = document.getElementById("cross-logo");
                    let menu_switch = false;
        
                    button.addEventListener("click", () => {
                        menu.classList.toggle("hidden");
                        if(!menu_switch){
                            menu_logo.style.display = "none";
                            cross_logo.style.display = "block";
                            menu_switch = true;
                        }else{
                            menu_logo.style.display = "block";
                            cross_logo.style.display = "none";
                            menu_switch = false;
                        }
                    });

                </script>
            </nav>
        </header>          
    </body>
</html>