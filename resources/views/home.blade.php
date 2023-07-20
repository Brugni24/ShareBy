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
                background-image: linear-gradient(transparent, transparent), linear-gradient(white, white);
            }

            .link-underline:hover {
                background-size: 100% 2px;
                background-position: 0 100%;
            }
            .first-background{
                background: radial-gradient(50% 50% at 50% 50%, rgba(14, 94, 204, 0.8) 0%, rgba(14, 94, 204, 0.9) 48.96%, #0E5ECC 100%);
            }
        </style>
    </head>
    <body class="antialiased font-main bg-[#010E43]">
        {{-- navbar --}}
        <nav class="w-full h-[10vh] bg-[#010E43] py-4 pl-6 pr-4 sm:px-6">
            <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto">
                {{-- logo --}}
                <a href="{{ url('/')}}" class="flex">
                    <img class="h-[3rem]" src="/img/logo_shareBy_white.svg" alt="ShareBy Logo">
                </a>
                {{-- desktop navigation menu --}}
                <div class="hidden md:flex w-[50%] font-medium text-lg flex-row justify-evenly items-center">
                    <a class="link link-underline link-underline-black hover:text-white text-gray-100" href="/">Home</a>
                    <a class="link link-underline link-underline-black hover:text-white  text-gray-100" href="{{ url('/prodotti') }}">Prodotti</a>
                    <a class="link link-underline link-underline-black hover:text-white  text-gray-100"href="{{ url('/contatti')}}">Contatti</a>
                </div>
                {{-- menu --}}
                <div class="flex items-center sm:pt-0 md:order-2">
                    @if (Route::has('login'))
                        @auth
                        {{-- desktop user menu --}}
                        <button type="button" class="hidden md:flex aspect-square w-10 mr-3 rounded-full md:mr-0 md:w-11" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <div class="flex items-center justify-center aspect-square w-10 md:w-11 bg-gray-300 rounded-full">
                                <span class="text-gray-800 font-bold text-lg">A</span>
                            </div>
                        </button>
                        {{-- dropdown desktop user menu --}}
                        <div class="hidden absolute right-0 w-min top-20 bg-gray-100 rounded-xl border border-gray-200 p-3 mr-4 sm:mx-6" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-md text-gray-900">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                                <span class="block text-sm  text-gray-500 truncate">{{ Auth::user()->email }}</span>
                            </div>
                            <hr class="rounded border-gray-300">
                            <ul class="py-2 px-2 text-md" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="{{ url('/dashboard') }}" class="block px-4 py-3 text-gray-700 hover:bg-gray-100">Dashboard</a>
                                </li>
                                <li>
                                    <x-dropdown-link class="block px-4 py-3 text-gray-700 hover:bg-gray-100" :href="route('profile.edit')">
                                        {{ __('Impostazioni') }}
                                    </x-dropdown-link>
                                </li>
                                <li>
                                    {{-- Authentication --}}
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link class="block px-4 py-3 text-gray-700 hover:bg-gray-100" :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Esci') }}
                                        </x-dropdown-link>
                                    </form>
                                </li>
                            </ul>
                            <script>
                                const user_button = document.querySelector('#user-menu-button');
                                const user_menu = document.querySelector('#user-dropdown');
                    
                                user_button.addEventListener("click", () => {
                                    user_menu.classList.toggle("hidden");
                                });
                            </script>
                        </div>
                        {{-- bottoni accedi e registrati mostrati in formato desktop nel caso l'utente non abbia fatto l'accesso --}}
                        <div class="hidden md:flex font-regular">
                            @else
                                <div class="flex items-center justify-center px-3 py-2 mr-3 rounded-xl border-2 border-white hover:bg-primary">
                                    <a href="{{ route('login') }}" class="text-white text-md font-semibold">Accedi</a>
                                </div>
                                @if (Route::has('register'))
                                    <div class="flex items-center justify-center px-3 py-2 rounded-xl bg-primary border-2 border-primary hover:bg-white hover:border-white">
                                        <a href="{{ route('register') }}" class="text-white text-md font-semibold hover:text-[#010E43]">Registrati</a>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    @endif
                    {{-- mobile menu --}}
                    <button id="mobile-menu-button" data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 aspect-square w-10 sm:w-11 justify-center text-sm text-gray-500 rounded-lg md:hidden focus:outline-none" aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg id="menu-logo" class="aspect-square w-10 sm:w-11" viewBox="0 0 20.00 20.00" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ffffff" stroke-width="0.8"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#ffffff" fill-rule="evenodd" d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z"></path> </g></svg>
                        <svg id="cross-logo" class="aspect-square w-10 sm:w-11" style="display: none"  fill="#ffffff" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18.8,16l5.5-5.5c0.8-0.8,0.8-2,0-2.8l0,0C24,7.3,23.5,7,23,7c-0.5,0-1,0.2-1.4,0.6L16,13.2l-5.5-5.5 c-0.8-0.8-2.1-0.8-2.8,0C7.3,8,7,8.5,7,9.1s0.2,1,0.6,1.4l5.5,5.5l-5.5,5.5C7.3,21.9,7,22.4,7,23c0,0.5,0.2,1,0.6,1.4 C8,24.8,8.5,25,9,25c0.5,0,1-0.2,1.4-0.6l5.5-5.5l5.5,5.5c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L18.8,16z"></path> </g></svg>
                    </button>
                    {{-- dropdown mobile menu --}}
                    <div id="mobile-menu" class="hidden absolute left-0 right-0 mx-auto h-[90vh] w-full top-[10vh] px-12 py-12 bg-[#010E43]">
                        <div class="h-full flex flex-col justify-between">
                            <ul class="font-regular text-xl text-white">
                                <li>
                                    <a href="{{ url('/')}}" class="flex py-4 rounded-xl font-medium">Home</a>
                                </li>
                                <li>
                                    <a href="{{ url('/prodotti')}}" class="flex py-4 rounded-xl font-medium">Prodotti</a>
                                </li>
                                <li>
                                    <a href="{{ url('/contatti')}}" class="flex py-4 rounded-xl font-medium">Chi Siamo</a>
                                </li>
                            </ul>
                            {{-- parte di registrazione del menu --}}
                            <div class="flex flex-row">
                                @if (Route::has('login'))
                                {{-- se è loggato --}}
                                    @auth
                                        <div class="pb-20">
                                            <h1 class="text-white text-3xl font-bold pb-4">Account</h1>
                                            <div class="flex items-center pl-2 pb-2">
                                                <div class="flex items-center justify-center aspect-square w-10 sm:w-11 md:w-12 bg-white rounded-full">
                                                    <span class="text-gray-800 font-bold text-lg">A</span>
                                                </div>
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
                                    @else
                                    {{-- se non è loggato --}}
                                    <div class="w-full flex flex-row items-center justify-center gap-4">
                                        <div class="flex items-center justify-center px-3 py-2 rounded-xl border-2 border-white hover:bg-primary">
                                            <a href="{{ route('login') }}" class="text-white text-lg font-semibold">Accedi</a>
                                        </div>
                                        @if (Route::has('register'))
                                        <div class="flex items-center justify-center px-3 py-2 rounded-xl bg-primary border-2 border-primary hover:bg-white hover:border-white">
                                            <a href="{{ route('register') }}" class="text-white text-lg font-semibold hover:text-[#010E43]">Registrati</a>
                                        </div>
                                        @endif
                                    </div>                                        
                                    @endauth
                                @endif
                            </div>
                        </div>
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
                </div>
            </div>
        </nav>
        {{-- landing page --}}
        <section style="background-image: url(/img/bg_landing_page.jpg)" class="bg-cover bg-center">
            <div class="px-[5%] bg-trasparent">
            <div class="pt-10 md:pt-16 xmd:flex">
                <div class="basis-[50%]">
                    <div class="flex justify-center mb-10 md:mb-14">
                        <h1 class="text-white text-5xl font-extrabold text-center xs:text-[3.7em] lg:text-[4.25em] xl:text-[5em]">
                            Entra nel mondo della FINANZA con ShareBY
                        </h1>
                    </div>
                    <div class="flex justify-center flex-col">
                        <p class="text-white text-md font-medium text-center leading-7 px-4 xs:text-base xl:text-lg">
                            Shareby è la piattaforma che sfrutta la stretta connessione tra l’informatizzazione
                            e il mondo finanziario, al fine di ottenere analisi approfondite e dettagliate 
                            in pochi click.
                        </p>
                    </div>
                </div> 
                <div class="basis-1/2 flex items-center justify-center mt-16 xmd:ml-[5%]">
                    <img class="w-full" src="/img/undraw_investor_update_re_qnuu.svg" alt="">
                </div>
            </div>    
            <div class="py-24 xmd:flex items-center xl:py-26">
                <div class="basis-[50%] flex items-center justify-center">
                    <button class="font-semibold text-white rounded-xl bg-gray-700 px-12 py-3">Scopri di più</button>
                </div>
            </div>
            </div>
        </section>
        {{-- Il nostro algoritmo --}}
        <section class="bg-white px-[5vw] py-[10vh]">
            {{-- <div class="flex flex-col justify-center items-center py-16">
                <span class="text-4xl text-center text-gray-500 py-6">
                    “I don’t pick stocks, I pick companies.”
                </span>
                <span class="text-md text-center text-gray-400">
                    ~ Warren Buffet
                </span>
            </div> --}}
            <div class="xmd:grid grid-cols-2 gap-10">
                <div class="flex justify-center pb-14">
                    <img class="w-[80vw] sm:w-[70vw] md:w-[60vw] xmd:w-[40vw]" src="/img/Facile,Veloce,Intuitivo.svg" alt="Facile, Veloce, Intuitivo">
                </div>
                <div class="xmd:pt-[8vh]">
                    <div class="px-[7%]">
                        <p class="text-center text-gray-400 text-md">
                            Il nostro algortimo fornisce una dettagliata analisi dei bilanci aziendali, 
                            che semplifica e riduce il tempo richiesto per valutare un investimento.
                        </p>
                    </div>
                    <div class="flex justify-center py-[8vh]">
                        <img class="w-[80vw] sm:w-[60vw] md:w-[50vw] xmd:w-[35vw]" src="/img/numeri_statistiche_algoritmo.svg" alt="Numeri Statistiche Algoritmo">
                    </div>
                </div>
                <div class="flex justify-center">
                    <button class="font-semibold text-white rounded-xl bg-primary px-12 py-3">Provalo!</button>
                </div>
            </div>
        </section>
        {{-- I nostri servizi --}}
        <section class="bg-white px-[5vw] py-14">
            <div class="pb-16">
                <p class="text-center text-title text-5xl font-bold">
                    Che servizi offriamo:
                </p>
            </div>
            {{-- cards --}}
            <div class="flex flex-col items-center xmd:flex-row justify-around gap-8 min-h-fit">
                <div class="relative h-[65vh] flex flex-col justify-center w-full max-w-[22rem] bg-clip-border rounded-xl border border-gray-200 shadow-xl px-[4%] pt-[4%] pb-[8%] bg-white mb-10 xmd:mb-0 xl:h-[70vh]">
                    <div class="absolute inset-0 m-0 h-full w-full bg-[url('/public/img/white_card.svg')] bg-cover bg-clip-border rounded-xl bg-center">
                    </div>
                    <div class="relative h-full">
                        <div class="flex justify-center pt-[15%] xmd:pt-4">
                            <img class="w-[28%]" src="/img/Wallet.svg" alt="">
                        </div>
                        <p class="text-center text-gray-500 font-light py-8">
                            #1
                        </p>
                        <h2 class="block text-2xl font-bold text-center py-4">
                            Algoritmo di Analisi dei report finanziari
                        </h2>
                        <p class="block text-sm text-center font-medium text-gray-400 py-6">
                            Ottieni una comoda e rapida analisi finanziaria tra le 300+ aziende a tua disposozione 
                        </p>
                    </div>
                </div>
                <div class="relative h-[65vh] flex flex-col justify-center w-full max-w-[22rem] bg-clip-border rounded-xl border border-gray-200 shadow-xl px-[4%] pt-[4%] pb-[8%] bg-primary mb-10 xmd:mb-0 xl:h-[70vh]">
                    <div class="absolute inset-0 m-0 h-full w-full bg-[url('/public/img/blue_card.svg')] bg-cover bg-clip-border rounded-xl bg-center">
                    </div>
                    <div class="relative flex flex-col h-full">
                        <div class="flex justify-center pt-[15%] xmd:pt-4">
                            <img class="w-[28%]" src="/img/Work.svg" alt="">
                        </div>
                        <p class="text-center text-gray-400 font-light py-8">
                            #2
                        </p>
                        <h2 class="block text-2xl font-bold text-white text-center py-4">
                            ShareBYOU
                        </h2>
                        <p class="block text-sm text-center font-medium text-gray-300 py-8">
                            ShareBYOU, consente agli utenti di condividere contenuti (video-corsi, analisi, post ecc.) sulla piattaforma.
                        </p>
                        <p class="self-end w-full text-red-500 text-md text-center font-extrabold">
                            In arrivo!
                        </p>
                    </div>
                </div>
                <div class="relative h-[65vh] flex flex-col justify-center w-full max-w-[22rem] bg-clip-border rounded-xl border border-gray-200 shadow-xl px-[4%] pt-[4%] pb-[8%] bg-secondary xl:h-[70vh]">
                    <div class="absolute inset-0 m-0 h-full w-full bg-[url('/public/img/blue_card.svg')] bg-cover bg-clip-border rounded-xl bg-center">
                    </div>
                    <div class="relative flex flex-col h-full">
                        <div class="flex justify-center pt-[15%] xmd:pt-4">
                            <img class="w-[28%]" src="/img/Chart.svg" alt="">
                        </div>
                        <p class="text-center text-gray-400 font-light py-8">
                            #3
                        </p>
                        <h2 class="block text-2xl font-bold text-white text-center py-4">
                            AI consultant
                        </h2>
                        <p class="block text-sm text-center font-medium text-gray-400 py-8">
                            Questa sezione consente all’utente di avere un consulente finanziario 24/7, tramite l’utilizzo di ChatGPT.
                        </p>
                        <p class="self-end w-full text-red-500 text-md text-center font-extrabold">
                            In arrivo!
                        </p>
                    </div>
                </div>
            </div>   
        </section>        
        {{-- FAQ --}}
        <section class="bg-white px-[5vw] pt-16 pb-28">
            <div class="pb-14">
                <p class="text-center text-title text-7xl font-bold">
                    FAQs
                </p>
            </div>
            <div class="flex flex-col gap-4 w-[80vw] m-auto">
                <div class="border border-gray-300 rounded-xl hover:bg-gray-50 transition duration-300">
                    <button class="accordion flex justify-between w-full py-5 px-6">
                        <span class="text-lg">Come funziona?</span>
                        <div class="">
                            <svg id="svg_plus" width="26px" height="26px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7V17M7 12H17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#0E5ECC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <svg id="svg_minus" style="display: none" width="26px" height="26px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C10.22 21 8.47991 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89472 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17294C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36628 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C21 14.387 20.0518 16.6761 18.364 18.364C16.6761 20.0518 14.387 21 12 21ZM12 4.5C10.5166 4.5 9.0666 4.93987 7.83323 5.76398C6.59986 6.58809 5.63856 7.75943 5.07091 9.12988C4.50325 10.5003 4.35473 12.0083 4.64411 13.4632C4.9335 14.918 5.64781 16.2544 6.6967 17.3033C7.7456 18.3522 9.08197 19.0665 10.5368 19.3559C11.9917 19.6453 13.4997 19.4968 14.8701 18.9291C16.2406 18.3614 17.4119 17.4001 18.236 16.1668C19.0601 14.9334 19.5 13.4834 19.5 12C19.5 10.0109 18.7098 8.10323 17.3033 6.6967C15.8968 5.29018 13.9891 4.5 12 4.5Z" fill="#0E5ECC"></path> <path d="M16 12.75H8C7.80109 12.75 7.61032 12.671 7.46967 12.5303C7.32902 12.3897 7.25 12.1989 7.25 12C7.25 11.8011 7.32902 11.6103 7.46967 11.4697C7.61032 11.329 7.80109 11.25 8 11.25H16C16.1989 11.25 16.3897 11.329 16.5303 11.4697C16.671 11.6103 16.75 11.8011 16.75 12C16.75 12.1989 16.671 12.3897 16.5303 12.5303C16.3897 12.671 16.1989 12.75 16 12.75Z" fill="#0E5ECC"></path> </g></svg>
                        </div>
                    </button>
                    <div style="display: none" class="px-6 pb-6 overflow-hidden">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio earum obcaecati nam officia, voluptates inventore doloremque similique, itaque, ex perferendis at tenetur aliquid rem laudantium exercitationem quas consectetur voluptas ab?
                        </p>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-xl hover:bg-gray-50 transition duration-300">
                    <button class="accordion flex justify-between w-full py-5 px-6">
                        <span class="text-lg">Come funziona?</span>
                        <div>
                            <svg id="svg_plus" width="26px" height="26px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7V17M7 12H17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#0E5ECC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <svg id="svg_minus" style="display: none" width="26px" height="26px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C10.22 21 8.47991 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89472 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17294C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36628 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C21 14.387 20.0518 16.6761 18.364 18.364C16.6761 20.0518 14.387 21 12 21ZM12 4.5C10.5166 4.5 9.0666 4.93987 7.83323 5.76398C6.59986 6.58809 5.63856 7.75943 5.07091 9.12988C4.50325 10.5003 4.35473 12.0083 4.64411 13.4632C4.9335 14.918 5.64781 16.2544 6.6967 17.3033C7.7456 18.3522 9.08197 19.0665 10.5368 19.3559C11.9917 19.6453 13.4997 19.4968 14.8701 18.9291C16.2406 18.3614 17.4119 17.4001 18.236 16.1668C19.0601 14.9334 19.5 13.4834 19.5 12C19.5 10.0109 18.7098 8.10323 17.3033 6.6967C15.8968 5.29018 13.9891 4.5 12 4.5Z" fill="#0E5ECC"></path> <path d="M16 12.75H8C7.80109 12.75 7.61032 12.671 7.46967 12.5303C7.32902 12.3897 7.25 12.1989 7.25 12C7.25 11.8011 7.32902 11.6103 7.46967 11.4697C7.61032 11.329 7.80109 11.25 8 11.25H16C16.1989 11.25 16.3897 11.329 16.5303 11.4697C16.671 11.6103 16.75 11.8011 16.75 12C16.75 12.1989 16.671 12.3897 16.5303 12.5303C16.3897 12.671 16.1989 12.75 16 12.75Z" fill="#0E5ECC"></path> </g></svg>
                        </div>
                    </button>
                    <div style="display: none" class="px-6 pb-6 overflow-hidden">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio earum obcaecati nam officia, voluptates inventore doloremque similique, itaque, ex perferendis at tenetur aliquid rem laudantium exercitationem quas consectetur voluptas ab?
                        </p>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-xl hover:bg-gray-50 transition duration-300">
                    <button class="accordion flex justify-between w-full py-5 px-6">
                        <span class="text-lg">Come funziona?</span>
                        <div class="">
                            <svg id="svg_plus" width="26px" height="26px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 7V17M7 12H17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="#0E5ECC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            <svg id="svg_minus" style="display: none" width="26px" height="26px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 21C10.22 21 8.47991 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89472 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17294C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36628 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C21 14.387 20.0518 16.6761 18.364 18.364C16.6761 20.0518 14.387 21 12 21ZM12 4.5C10.5166 4.5 9.0666 4.93987 7.83323 5.76398C6.59986 6.58809 5.63856 7.75943 5.07091 9.12988C4.50325 10.5003 4.35473 12.0083 4.64411 13.4632C4.9335 14.918 5.64781 16.2544 6.6967 17.3033C7.7456 18.3522 9.08197 19.0665 10.5368 19.3559C11.9917 19.6453 13.4997 19.4968 14.8701 18.9291C16.2406 18.3614 17.4119 17.4001 18.236 16.1668C19.0601 14.9334 19.5 13.4834 19.5 12C19.5 10.0109 18.7098 8.10323 17.3033 6.6967C15.8968 5.29018 13.9891 4.5 12 4.5Z" fill="#0E5ECC"></path> <path d="M16 12.75H8C7.80109 12.75 7.61032 12.671 7.46967 12.5303C7.32902 12.3897 7.25 12.1989 7.25 12C7.25 11.8011 7.32902 11.6103 7.46967 11.4697C7.61032 11.329 7.80109 11.25 8 11.25H16C16.1989 11.25 16.3897 11.329 16.5303 11.4697C16.671 11.6103 16.75 11.8011 16.75 12C16.75 12.1989 16.671 12.3897 16.5303 12.5303C16.3897 12.671 16.1989 12.75 16 12.75Z" fill="#0E5ECC"></path> </g></svg>
                        </div>
                    </button>
                    <div style="display: none" class="px-6 pb-6 overflow-hidden">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio earum obcaecati nam officia, voluptates inventore doloremque similique, itaque, ex perferendis at tenetur aliquid rem laudantium exercitationem quas consectetur voluptas ab?
                        </p>
                    </div>
                </div>
                <div class="flex flex-col items-center w-[70vw] m-auto mt-10 bg-blue-50 rounded-xl px-8 py-10">
                    <h2 class="text-center text-xl font-semibold mb-4">Hai ancora delle domande?</h2>
                    <p class="text-center">
                        Ci dispiace di non essere riusciti a fornirti le informazioni di cui avevi bisogno. 
                        Ti preghiamo di contattarci e saremo felici di risponderti.
                    </p>
                    <button class="bg-primary text-white rounded-xl px-8 py-4 font-medium mt-8">
                        Conttataci!
                    </button>
                </div>
            </div>
            <script>
                var acc = document.getElementsByClassName('accordion');
                var i;
                
                for(i = 0; i < acc.length; i++){
                    acc[i].addEventListener("click", function() {
                        var pannel = this.nextElementSibling;
                        var svgMinus = this.querySelector('#svg_minus');
                        var svgPlus = this.querySelector('#svg_plus');

                        if(pannel.style.display === "block"){
                            pannel.style.display = "none";
                            svgMinus.style.display = "none";
                            svgPlus.style.display = "block";
                        }else{
                            pannel.style.display = "block";
                            svgPlus.style.display = "none";
                            svgMinus.style.display = "block";
                        }
                    });
                }
            </script>
        </section>
        {{-- footer --}}
        <footer class="bg-white dark:bg-[#010E43]">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="/" class="flex items-center">
                        <img src="/img/logo_shareBy_white.svg" class="h-16 mr-3" alt="ShareBy Logo" />
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Azienda</h2>
                        <ul class="text-gray-600 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">About Us</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Contatti</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Lavora con noi</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Prodotti</h2>
                        <ul class="text-gray-600 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline ">Algoritmo</a>
                            </li>
                            <li class="mb-4">
                                <a href="#" class="hover:underline">ShareBYOU</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Consultant AI</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-600 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="/" class="hover:underline">ShareBy™</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        <span class="sr-only">Instagram page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                </div>
            </div>
            </div>
        </footer>
    </body>
</html>