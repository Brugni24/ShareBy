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
    <body class="bg-primary antialiased font-main">
        {{-- navigation bar --}}
        <header class="w-full"> 
            <nav class="py-5 w-[94%] mx-auto flex items-center justify-between px-3 md:px-0">
                <a href="/" class="flex justify-start">
                    <img class="h-[3.5rem]" src="/img/logo_shareBy_white.svg" alt="ShareBy Logo">
                </a>
                <div class="hidden lg:flex w-[50%] font-regular flex-row justify-evenly items-center">
                    <a class="link link-underline link-underline-black hover:text-white text-gray-100" href="/">Home</a>
                    <a class="link link-underline link-underline-black hover:text-white  text-gray-100" href="#">Prodotti</a>
                    <a class="link link-underline link-underline-black hover:text-white  text-gray-100"href="#">Contatti</a>
                </div>
                @if (Route::has('login'))
                <div class="hidden lg:flex gap-3 font-regular">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">
                            <button type="button" class="text-sm border border-white text-white rounded-lg py-1.5 px-5 hover:text-primary hover:bg-white">Log in</button>
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">
                                <button type="button" class="text-sm border border-white text-white rounded-lg py-1.5 px-5 hover:text-primary hover:bg-white">Register</button>
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
                    <ul class="font-regular text-sm">
                        <li >
                            <a href="index.html" class="flex justify-center py-4 mb-1 rounded-xl text-white bg-primary font-bold">Home</a>
                        </li>
                        <li>
                            <a href="#services" class="flex justify-center py-4 mb-1 rounded-xl hover:bg-gray-200 transition duration-100">Services</a>
                        </li>
                        <li>
                            <a href="#about" class="flex justify-center py-4 mb-1 rounded-xl hover:bg-gray-200 transition duration-100">About</a>
                        </li>
                        <li>
                            <a href="#contact" class="flex justify-center py-4 mb-1 rounded-xl hover:bg-gray-200 transition duration-100">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}" class="flex justify-center py-4 mb-1 rounded-xl text-primary font-semibold border-2 border-primary hover:bg-white transition duration-100">Log in</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}" class="flex justify-center py-4 mb-1 rounded-xl text-primary font-semibold border-2 border-primary hover:bg-white transition duration-100">Register</a>
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
        {{-- first slide --}}
        <section class="px-[5%]">
            <div class="py-[8vh] xmd:flex">
                <div class="basis-[50%]">
                    <div class="flex justify-center mb-10 md:mb-14">
                        <h1 class="text-white text-5xl font-extrabold text-center xs:text-[3.7em] xmd:text-left lg:text-[4.25em] xl:text-[5em]">
                            “Entra nel mondo della FINANZA con ShareBY"
                        </h1>
                    </div>
                    <div class="flex justify-center flex-col">
                        <p class="text-white text-sm font-medium text-center leading-7 px-4 xs:text-base xmd:text-left">
                            Shareby, si propone come una piattaforma che consente
                            sfruttando l’unione tra l’informatizzazione e il mondo finanziario,
                            di ottenere delle analisi sui report finanziari e molto altro...
                        </p>
                    </div>
                </div> 
                <div class="basis-1/2 flex items-center justify-center mt-16 xmd:ml-[5%]">
                    <img class="w-full" src="/img/data_trends_main_draw.svg" alt="">
                </div>
            </div>    
            <div class="py-[8vh] xmd:flex items-center">
                <div class="basis-[50%] flex items-center justify-center">
                    <button class="font-semibold text-white rounded-xl bg-[#3D3B4F] px-12 py-3">Scopri di più</button>
                </div>
            </div>
        </section>
        {{-- second slide --}}
        <section class="bg-white px-[5%] py-[8vh]">
            <div class="px-[5%]"> 
                <p class="text-primary text-center text-lg font-medium">
                    il nostro algoritmo
                </p>
            </div>
            <div class="xmd:grid grid-cols-2 gap-10">
                <div class="flex justify-center py-[8vh]">
                    <img class="w-[80vw] sm:w-[70vw] md:w-[60vw] xmd:w-[40vw]" src="/img/Facile,Veloce,Intuitivo.svg" alt="Facile, Veloce, Intuitivo">
                </div>
                <div class="xmd:pt-[8vh]">
                    <div class="px-[5%]">
                        <p class="text-gray-400 text-sm">
                            “Il nostro algortimo fornisce una dettagliata
                            analisi dei bilanci aziendali, che semplifica e
                            riduce il tempo richiesto per valutare una
                            investimento.(da modificare)”
                        </p>
                    </div>
                    <div class="flex justify-center py-[8vh]">
                        <img class="w-[80vw] sm:w-[60vw] md:w-[50vw] xmd:w-[35vw]" src="/img/numeri_statistiche_algoritmo.svg" alt="Numeri Statistiche Algoritmo">
                    </div>
                </div>
                <div class="flex justify-center">
                    <button class="font-semibold text-white rounded-xl bg-primary px-12 py-3">Scopri di più</button>
                </div>
            </div>
        </section>
        {{-- third slide --}}
        <section class="bg-white px-[5vw] py-[10vh]">
            <div class="px-[5%]"> 
                <p class="text-primary text-center text-lg font-medium">
                    i nostri servizi
                </p>
            </div>
            <div class="py-[10vh]">
                <p class="text-center text-4xl font-bold">
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
        {{-- footer --}}
        <footer class="bg-white dark:bg-gray-900">
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