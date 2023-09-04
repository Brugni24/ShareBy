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
    <body class="antialiased font-main bg-background">
        {{-- navbar --}}
        <nav class="flex justify-center items-center w-full h-[70px] bg-secondary py-[10px] px-[24px] shadow-xl lg:px-[35px]">
            <div class="w-full flex flex-wrap items-center justify-between mx-auto">
                {{-- logo --}}
                <a href="{{ url('/')}}" class="flex">
                    <img class="h-[38px]" src="/img/logo_shareBy_white.svg" alt="ShareBy Logo">
                </a>
                {{-- desktop navigation menu --}}
                <div class="hidden md:flex w-[50%] font-medium text-lg flex-row justify-evenly items-center">
                    <a class="link link-underline link-underline-black hover:text-white text-gray-100" href="{{ url('/') }}">Home</a>
                    <div class="dropdown link link-underline link-underline-black hover:text-white  text-gray-100">
                        <a href="{{ url('/servizi') }}">
                            <button class="dropbtn">
                                Servizi
                            </button>
                        </a>
                        <div class="dropdown-container">
                            <div class="dropdown-content">
                                <a href="{{ url('/servizi#analisi') }}" class="mb-[10px]">Analisi</a>
                                <a href="{{ url('/servizi#analisi-aziendale') }}" class="mb-[10px]">Analisi Aziendale</a>
                                <a href="{{ url('/servizi#shareBYOU') }}" class="mb-[10px]">ShareBYOU</a>
                                <a href="{{ url('/servizi#PYLO') }}">PYLO</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown link link-underline link-underline-black hover:text-white  text-gray-100">
                        <a href="{{ url('/chiSiamo') }}">
                            <button class="dropbtn">
                                Chi Siamo
                            </button>
                        </a>
                        <div class="dropdown-container">
                            <div class="dropdown-content">
                                <a href="{{ url('/chiSiamo#brand-vision') }}" class="mb-[10px]">Brand Vision</a>
                                <a href="{{ url('/chiSiamo#mission-aziendale') }}" class="mb-[10px]">Mission Aziendale</a>
                                <a href="{{ url('/chiSiamo#perche-shareby') }}" class="mb-[10px]">Perchè ShareBy?</a>
                                <a href="{{ url('/chiSiamo#team') }}">Team</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- menu --}}
                <div class="flex items-center sm:pt-0 md:order-2">
                    @if (Route::has('login'))
                        @auth

                        {{-- desktop xl user menu --}}
                        <div class="hidden xl:flex items-center justify-center gap-[20px]">
                            <a href="{{ url('/dashboard') }}">
                                <span class="block text-[16px] text-gray-100 hover:underline">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                            </a>
                            <a href="{{ route('profile.edit') }}" class="hover:scale-105 transition-all duration-300">
                                <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="3" stroke="#ffffff" stroke-width="1.464"></circle> <path d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z" stroke="#ffffff" stroke-width="1.464"></path> </g></svg>
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="w-[28px] h-[28px]">
                                @csrf
                                <button class="hover:scale-105 transition-all duration-300" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 16.5V19C15 20.1046 14.1046 21 13 21H6C4.89543 21 4 20.1046 4 19V5C4 3.89543 4.89543 3 6 3H13C14.1046 3 15 3.89543 15 5V8.0625M11 12H21M21 12L18.5 9.5M21 12L18.5 14.5" stroke="#DC2626" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> 
                                </button>
                            </form>
                        </div>

                        {{-- desktop user menu --}}
                        <button type="button" id="user-menu-button" class="hidden md:flex aspect-square w-[24px] md:mr-0 xl:hidden hover:scale-105 transition-all duration-300 ease-in-out">
                            <img src="/img/profile.svg" alt="">
                        </button>
                        {{-- dropdown desktop user menu --}}
                        <div id="user-dropdown" class="h-[0vh] absolute overflow-hidden right-0 w-min top-[70px] bg-gray-700 rounded-xl mr-4 transition-all duration-1000 ease-[cubic-bezier(.215, .61, .355, 1)] sm:mx-6">
                            <div id="user-dropdown-content" class="opacity-0 p-[10px] transition-all duration-1000 ease-in-out">
                                <div class="xl:hidden">
                                    <span class="block text-md text-gray-200">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                                    <span class="block text-sm  text-gray-300 truncate">{{ Auth::user()->email }}</span>
                                </div>
                                <hr class="rounded border-gray-100 my-[5px] xl:hidden">
                                <div class="text-md text-gray-100 p-[10px] xl:p-0" aria-labelledby="user-menu-button">
                                    <div class="flex items-center mb-[10px]">
                                        <svg width="32px" height="32px" viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12.5 11.75C12.9142 11.75 13.25 11.4142 13.25 11C13.25 10.5858 12.9142 10.25 12.5 10.25V11.75ZM5.5 10.25C5.08579 10.25 4.75 10.5858 4.75 11C4.75 11.4142 5.08579 11.75 5.5 11.75V10.25ZM12.5 10.25C12.0858 10.25 11.75 10.5858 11.75 11C11.75 11.4142 12.0858 11.75 12.5 11.75V10.25ZM19.5 11.75C19.9142 11.75 20.25 11.4142 20.25 11C20.25 10.5858 19.9142 10.25 19.5 10.25V11.75ZM11.75 11C11.75 11.4142 12.0858 11.75 12.5 11.75C12.9142 11.75 13.25 11.4142 13.25 11H11.75ZM13.25 5C13.25 4.58579 12.9142 4.25 12.5 4.25C12.0858 4.25 11.75 4.58579 11.75 5H13.25ZM6.25 11C6.25 10.5858 5.91421 10.25 5.5 10.25C5.08579 10.25 4.75 10.5858 4.75 11H6.25ZM20.25 11C20.25 10.5858 19.9142 10.25 19.5 10.25C19.0858 10.25 18.75 10.5858 18.75 11H20.25ZM4.75 11C4.75 11.4142 5.08579 11.75 5.5 11.75C5.91421 11.75 6.25 11.4142 6.25 11H4.75ZM12.5 5.75C12.9142 5.75 13.25 5.41421 13.25 5C13.25 4.58579 12.9142 4.25 12.5 4.25V5.75ZM18.75 11C18.75 11.4142 19.0858 11.75 19.5 11.75C19.9142 11.75 20.25 11.4142 20.25 11H18.75ZM12.5 4.25C12.0858 4.25 11.75 4.58579 11.75 5C11.75 5.41421 12.0858 5.75 12.5 5.75V4.25ZM12.5 10.25H5.5V11.75H12.5V10.25ZM12.5 11.75H19.5V10.25H12.5V11.75ZM13.25 11V5H11.75V11H13.25ZM4.75 11V15H6.25V11H4.75ZM4.75 15C4.75 17.6234 6.87665 19.75 9.5 19.75V18.25C7.70507 18.25 6.25 16.7949 6.25 15H4.75ZM9.5 19.75H15.5V18.25H9.5V19.75ZM15.5 19.75C18.1234 19.75 20.25 17.6234 20.25 15H18.75C18.75 16.7949 17.2949 18.25 15.5 18.25V19.75ZM20.25 15V11H18.75V15H20.25ZM6.25 11V9H4.75V11H6.25ZM6.25 9C6.25 7.20507 7.70507 5.75 9.5 5.75V4.25C6.87665 4.25 4.75 6.37665 4.75 9H6.25ZM9.5 5.75H12.5V4.25H9.5V5.75ZM20.25 11V9H18.75V11H20.25ZM20.25 9C20.25 6.37665 18.1234 4.25 15.5 4.25V5.75C17.2949 5.75 18.75 7.20507 18.75 9H20.25ZM15.5 4.25H12.5V5.75H15.5V4.25Z" fill="#ffff"></path> </g></svg>
                                        <a href="{{ url('/dashboard') }}" class="block ml-[5px]">Dashboard</a>
                                    </div>
                                    <div class="flex items-center mb-[10px]">
                                        <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="3" stroke="#ffffff" stroke-width="1.464"></circle> <path d="M13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74457 2.35523 9.35522 2.74458 9.15223 3.23463C9.05957 3.45834 9.0233 3.7185 9.00911 4.09799C8.98826 4.65568 8.70226 5.17189 8.21894 5.45093C7.73564 5.72996 7.14559 5.71954 6.65219 5.45876C6.31645 5.2813 6.07301 5.18262 5.83294 5.15102C5.30704 5.08178 4.77518 5.22429 4.35436 5.5472C4.03874 5.78938 3.80577 6.1929 3.33983 6.99993C2.87389 7.80697 2.64092 8.21048 2.58899 8.60491C2.51976 9.1308 2.66227 9.66266 2.98518 10.0835C3.13256 10.2756 3.3397 10.437 3.66119 10.639C4.1338 10.936 4.43789 11.4419 4.43786 12C4.43783 12.5581 4.13375 13.0639 3.66118 13.3608C3.33965 13.5629 3.13248 13.7244 2.98508 13.9165C2.66217 14.3373 2.51966 14.8691 2.5889 15.395C2.64082 15.7894 2.87379 16.193 3.33973 17C3.80568 17.807 4.03865 18.2106 4.35426 18.4527C4.77508 18.7756 5.30694 18.9181 5.83284 18.8489C6.07289 18.8173 6.31632 18.7186 6.65204 18.5412C7.14547 18.2804 7.73556 18.27 8.2189 18.549C8.70224 18.8281 8.98826 19.3443 9.00911 19.9021C9.02331 20.2815 9.05957 20.5417 9.15223 20.7654C9.35522 21.2554 9.74457 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8477 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.902C15.0117 19.3443 15.2977 18.8281 15.781 18.549C16.2643 18.2699 16.8544 18.2804 17.3479 18.5412C17.6836 18.7186 17.927 18.8172 18.167 18.8488C18.6929 18.9181 19.2248 18.7756 19.6456 18.4527C19.9612 18.2105 20.1942 17.807 20.6601 16.9999C21.1261 16.1929 21.3591 15.7894 21.411 15.395C21.4802 14.8691 21.3377 14.3372 21.0148 13.9164C20.8674 13.7243 20.6602 13.5628 20.3387 13.3608C19.8662 13.0639 19.5621 12.558 19.5621 11.9999C19.5621 11.4418 19.8662 10.9361 20.3387 10.6392C20.6603 10.4371 20.8675 10.2757 21.0149 10.0835C21.3378 9.66273 21.4803 9.13087 21.4111 8.60497C21.3592 8.21055 21.1262 7.80703 20.6602 7C20.1943 6.19297 19.9613 5.78945 19.6457 5.54727C19.2249 5.22436 18.693 5.08185 18.1671 5.15109C17.9271 5.18269 17.6837 5.28136 17.3479 5.4588C16.8545 5.71959 16.2644 5.73002 15.7811 5.45096C15.2977 5.17191 15.0117 4.65566 14.9909 4.09794C14.9767 3.71848 14.9404 3.45833 14.8477 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224Z" stroke="#ffffff" stroke-width="1.464"></path> </g></svg>
                                        <x-dropdown-link class="block ml-[10px]" :href="route('profile.edit')">
                                            {{ __('Impostazioni') }}
                                        </x-dropdown-link>
                                    </div>
                                    <div class="flex items-center">
                                        <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 16.5V19C15 20.1046 14.1046 21 13 21H6C4.89543 21 4 20.1046 4 19V5C4 3.89543 4.89543 3 6 3H13C14.1046 3 15 3.89543 15 5V8.0625M11 12H21M21 12L18.5 9.5M21 12L18.5 14.5" stroke="#DC2626" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> 
                                        {{-- Authentication --}}
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
    
                                            <x-dropdown-link class="block ml-[10px]" :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Esci') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <script>
                                const user_button = document.querySelector('#user-menu-button');
                                const user_menu = document.querySelector('#user-dropdown');
                                const user_menu_content = document.querySelector('#user-dropdown-content');
                    
                                user_button.addEventListener("click", () => {
                                    user_menu.classList.toggle("dropdown-user-menu");
                                    user_menu_content.classList.toggle("dropdown-menu-content");
                                });
                            </script>
                        </div>
                        {{-- bottoni accedi e registrati mostrati in formato desktop nel caso l'utente non abbia fatto l'accesso --}}  
                            @else
                            <div class="hidden md:flex gap-[10px]">
                                <a href="{{ route('login') }}" class="">
                                    <x-secondary-button class="">Accedi</x-secondary-button>
                                </a>
                                @if (Route::has('register'))
                                        <a href="{{ route('register') }}">
                                            <x-primary-button class="">Registrati</x-primary-button>
                                        </a>
                                @endif
                            </div>
                            @endauth
                    @endif
                    {{-- mobile menu --}}
                    <button id="mobile-menu-button" type="button" class="inline-flex items-center py-[10px] aspect-square justify-center text-sm text-gray-500 rounded-lg md:hidden hover:scale-110 transition-all duration-300">
                        <span class="sr-only">Open main menu</span>
                        {{-- hamburger --}}
                        <div id="burger-menu">
                            <div id="line1" class="w-[25px] h-[3px] bg-white rounded-xl m-[5px] transition-all duration-300 ease-in-out"></div>
                            <div id="line2" class="w-[25px] h-[3px] bg-white rounded-xl m-[5px] transition-all duration-300 ease-in-out"></div>
                            <div id="line3" class="w-[25px] h-[3px] bg-white rounded-xl m-[5px] transition-all duration-300 ease-in-out"></div>
                        </div>
                    </button>
                    {{-- dropdown mobile menu --}}
                    <div id="mobile-menu" class="h-[0vh] absolute left-0 right-0 mx-auto w-full top-[80px] bg-secondary overflow-hidden transition-all duration-700 ease-[cubic-bezier(.215, .61, .355, 1)]">
                        <div id="mobile-menu-content" class="h-full flex flex-col justify-between opacity-0 transition-all duration-1000 ease-in-out">
                            <div class="flex flex-col gap-[20px] font-bold text-[24px] md:text-[28px] text-white">
                                <div class="">
                                    <a href="{{ url('/')}}" class="">
                                        <div class="flex items-center text-hover-effect">
                                            <span class="mr-[10px]">Home</span>
                                            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </div>
                                    </a>
                                </div>
                                <div class="">
                                    <a href="{{ url('/servizi')}}" class="">
                                        <div class="flex items-center text-hover-effect">
                                            <span class="mr-[10px]">Servizi</span>
                                            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </div>
                                    </a>
                                    <div class="flex flex-col gap-[10px] text-[18px] mt-[10px] ml-[20px] text-gray-200 font-normal">
                                        <a href="{{ url('/servizi#analisi') }}" class="text-hover-effect">Analisi</a>
                                        <a href="{{ url('/servizi#analisi-aziendale') }}" class="text-hover-effect">Analisi Aziendale</a>
                                        <a href="{{ url('/servizi#shareBYOU') }}" class="text-hover-effect">ShareBYOU</a>
                                        <a href="{{ url('/servizi#PYLO') }}" class="text-hover-effect">PYLO</a>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="{{ url('/chiSiamo')}}" class="">
                                        <div class="flex items-center text-hover-effect">
                                            <span class="mr-[10px]">Chi Siamo</span>
                                            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </div>
                                    </a>
                                    <div class="flex flex-col gap-[10px] text-[18px] mt-[10px] ml-[20px] text-gray-200 font-normal">
                                        <a href="{{ url('/chiSiamo#brand-vision') }}" class="text-hover-effect">Brand Vision</a>
                                        <a href="{{ url('/chiSiamo#mission-aziendale') }}" class="text-hover-effect">Mission Aziendale</a>
                                        <a href="{{ url('/chiSiamo#perche-shareby') }}" class="text-hover-effect">Perchè ShareBy?</a>
                                        <a href="{{ url('/chiSiamo#team') }}" class="text-hover-effect">Team</a>
                                    </div>
                                </div>
                            </div>
                            {{-- parte di registrazione del menu --}}
                            @if (Route::has('login'))
                            {{-- se è loggato --}}
                                @auth
                                    <div class="pt-[30px] pb-20">
                                        <a href="{{ url('/dashboard')}}" class="font-bold text-[24px] md:text-[28px] text-white">
                                            <div class="flex items-center text-hover-effect">
                                                <span class="mr-[10px]">Area Personale</span>
                                                <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M20 12L16 8M20 12L16 16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                            </div>
                                        </a>
                                        <div class="hidden md:block">
                                            <div class="flex items-center pl-2 pb-2">
                                                <span class="block text-white ml-6 sm:text-lg">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                                            </div>
                                            <ul class="py-2 sm:text-lg" aria-labelledby="user-menu-button">
                                                <li>
                                                    <a href="{{ url('/dashboard') }}" class="block px-8 py-3 font-medium text-md text-white">Dashboard</a>
                                                </li>
                                                <li>
                                                    <x-dropdown-link class="block px-8 py-3 text-white font-medium text-md" :href="route('profile.edit')">
                                                        {{ __('Impostazioni') }}
                                                    </x-dropdown-link>
                                                </li>
                                                <li>
                                                    <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
            
                                                        <x-dropdown-link class="block px-8 py-3 font-medium text-md text-white" :href="route('logout')"
                                                                onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                            {{ __('Esci') }}
                                                        </x-dropdown-link>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                {{-- se non è loggato --}}
                                <div class="w-full flex flex-row items-center justify-center gap-4">
                                    <a href="{{ route('login') }}" class="">
                                        <x-secondary-button class="">Accedi</x-secondary-button>
                                    </a>
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}">
                                        <x-primary-button class="">Registrati</x-primary-button>
                                    </a>
                                    @endif
                                </div>                                        
                                @endauth
                            @endif
                        </div>
                    </div>
                    <script>
                        const button = document.querySelector('#mobile-menu-button');
                        const menu = document.querySelector('#mobile-menu');
                        const menu_content = document.querySelector('#mobile-menu-content');
                        const burger = document.querySelector('#burger-menu');
            
                        button.addEventListener("click", () => {
                            menu.classList.toggle("dropdown-menu");
                            menu_content.classList.toggle("dropdown-menu-content");
                            burger.classList.toggle('toggle');
                        });
                    </script>
                </div>
            </div>
        </nav>

        <main class="bg-background">

            @yield('content')

            {{-- fade in script --}}
            <script>
                // elements
                var elements_to_watch = document.querySelectorAll('.watch');

                // callback
                var callback = function(items){
                    items.forEach((item) => {
                        if (item.isIntersecting) {
                            item.target.classList.add('in-page');
                        }else{
                            item.target.classList.remove('in-page');
                        }
                    });
                }

                // observer
                var observer = new IntersectionObserver (callback, { threshold: 0.7 });

                // apply
                elements_to_watch.forEach((element) => {
                    observer.observe(element);
                });
            </script>
            
        </main>
        {{-- footer --}}
        <footer class="bg-background pt-[60px] md:pt-[120px]">
            <div class="mx-auto w-full max-w-screen-xl px-10 py-8">
                <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="/" class="flex items-center">
                        <img src="/img/logo_shareBy_white.svg" class="h-16 mr-3" alt="ShareBy Logo" />
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h3 class="mb-6 text-sm font-semibold uppercase text-white">Azienda</h3>
                        <ul class="text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="{{ url('/chiSiamo')}}" class="hover:underline">Chi Siamo</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ url('/chiSiamo')}}" class="hidden hover:underline">Contatti</a>
                            </li>
                            <li>
                                <a href="#" class="hidden hover:underline">Lavora con noi</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mb-6 text-sm font-semibold uppercase text-white">Servizi</h3>
                        <ul class="text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="{{ url('/servizi#analisi-aziendale')}}" class="hover:underline ">Analisi Aziendale</a>
                            </li>
                            <li class="mb-4">
                                <a href="{{ url('/servizi#shareBYOU')}}" class="hover:underline">ShareBYOU</a>
                            </li>
                            <li>
                                <a href="{{ url('/servizi#PYLO')}}" class="hover:underline">Consulente AI</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hidden">
                        <h3 class="mb-6 text-sm font-semibold uppercase text-white">Legal</h3>
                        <ul class="text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Termini e Condizioni</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 sm:mx-auto border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm sm:text-center text-gray-400">© 2023 <a href="/" class="hover:underline">ShareBy™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                </div>
            </div>
            </div>
        </footer>
    </body>
</html>