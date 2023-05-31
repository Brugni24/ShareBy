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
    <body class="antialiased font-main">
        {{-- navigation bar --}}
        <header class="w-full bg-primary"> 
            <nav class="py-5 w-[94%] mx-auto flex items-center justify-between px-3 md:px-0">
                <a href="/" class="flex justify-start">
                    <img class="h-[3.5rem]" src="/img/logo_shareBy_white.svg" alt="ShareBy Logo">
                </a>
                <div class="hidden lg:flex w-[50%] font-regular flex-row justify-evenly items-center">
                    <a class="link link-underline link-underline-black hover:text-white text-gray-100" href="/">Home</a>
                    <a class="link link-underline link-underline-black hover:text-white  text-gray-100" href="{{ url('/prodotti') }}">Prodotti</a>
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
                            <a href="{{ url('/')}}" class="flex justify-center py-4 mb-1 rounded-xl text-white bg-primary font-bold">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/prodotti')}}" class="flex justify-center py-4 mb-1 rounded-xl hover:bg-gray-200 transition duration-100">Services</a>
                        </li>
                        <li>
                            <a href="#about" class="flex justify-center py-4 mb-1 rounded-xl hover:bg-gray-200 transition duration-100">About</a>
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
        <section class="px-[5vw]">
            <div class="flex flex-col items-center justify-center py-24">
                <h1 class="text-center text-8xl font-bold text-title">I nostri prodotti</h1>
                <div class="pt-16 w-[50vw]">
                    <p class="text-center text-lg text-gray-500">
                        I prodotti che offriamo attualmente sono collegati tra loro da un filo logico comune: 
                        aiutare le persone a migliorare la propria FINANCIAL AWARNESS
                    </p>
                </div>
                <div class="w-[50vw] py-32">
                    <img src="/img/products_tour.svg" alt="Products Tour">
                </div>
            </div>
        </section>
        {{-- Algoritmo di analisi aziendale --}}
        <section class="px-[5vw]">
            <div class="flex flex-col items-center justify-center pb-24">
                <h1 class="text-center text-7xl font-bold text-title">Algoritmo di analisi aziendale</h1>
                <div class="pt-16 w-[50vw]">
                    <p class="text-center text-lg text-gray-500">
                        L’obiettivo dell’analizi aziendale è quello di dare una visione a 360 gradi dell’azienda d’interesse, 
                        combinando gli indici e i margini più importanti della strategia d’impresa
                    </p>
                </div>
                <div class="flex items-center justify-center w-[80vw] h-fit border rounded-3xl my-28 py-16 shadow-md">
                    <img class="w-[80%]" src="/img/analysis_charts.png" alt="">
                </div>
                <div class="flex items-center justify-center">
                    <a href="{{ url('/dashboard')}}" class="px-10 py-6 text-lg rounded-[2rem] bg-primary text-white font-semibold">
                        Effettua la Prova Gratuita
                    </a>
                </div>
                <div class="flex flex-col items-center justify-center py-28">
                    <h1 class="text-primary text-6xl font-bold uppercase">Come funziona?</h1>
                    <div class="pt-16 w-[50vw]">
                        <p class="text-center text-lg text-gray-500">
                            Il nostro algoritmo si basa su un ottimizzazione economica e statitistica 
                            per sfruttare al meglio l’innovativa tecnologia sul mercato
                        </p>
                        <p class="text-center text-lg text-gray-500 p-10">
                            Si basa su tre tipi di analisi:
                        </p>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-[#F0F6FF] w-14 aspect-square rounded-xl my-10">
                                <img src="" alt="">
                            </div>
                            <h1 class="text-center text-5xl font-semibold text-title">Analisi di redditività</h1>
                            <div class="w-[60vw]">
                                <p class="text-center text-gray-500 text-lg py-8">
                                    Quest’analisi si avvale di alcuni indici come ROE, ROS e ROI, 
                                    che vengono opportunamente confrontati con la media nazionale, 
                                    così da ricavare il trend sulla reddività aziendale rispetto al mercato di riferimento
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-[#F0F6FF] w-14 aspect-square rounded-xl my-10">
                                <img src="" alt="">
                            </div>
                            <h1 class="text-center text-5xl font-semibold text-title">Analisi della struttura patrimoniale</h1>
                            <div class="w-[60vw]">
                                <p class="text-center text-gray-500 text-lg py-8">
                                    La struttura patrimoniale viene analizzata tramite l’uso dell’IGGC e MRI 
                                    che vengono anch’essi valutati in maniera statica, confrontati con la media nazionale 
                                    e in maniera dinamica, valutati tramite l’uso della statistica interferenziale
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-[#F0F6FF] w-14 aspect-square rounded-xl my-10">
                                <img src="" alt="">
                            </div>
                            <h1 class="text-center text-5xl font-semibold text-title">Analisi sull'indebitamento pubblico</h1>
                            <div class="w-[60vw]">
                                <p class="text-center text-gray-500 text-lg py-8">
                                    La struttura patrimoniale viene analizzata tramite l’uso del ROD, Leverage e Leva finanziaria, 
                                    strumenti che vengono valutati sia in maniera statica che in maniera dinamica con 
                                    l’utilizzo di contatori
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center pt-20">
                        <a href="{{ url('/dashboard')}}" class="px-10 py-6 text-lg rounded-[2rem] bg-primary text-white font-semibold">
                            Effettua la Prova Gratuita
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{-- ShareBYOU --}}
        <section class="px-[5vw]">
            <div class="flex flex-col items-center justify-center py-24">
                <h1 class="text-center text-8xl font-bold text-title">ShareBYOU</h1>
                <div class="grid items-center justify-center grid-cols-2 pt-20">
                    <div class="flex items-center justify-center">
                        <p class="text-center text-lg text-gray-500 w-[80%]">
                            Sharebyou è il nostro servizio B2B che permette ai professionisti di creare e gestire 
                            la propria community attraverso un programma di fidelizzazione custom che viene stabilito 
                            dai professionisti.
                        </p>
                    </div>
                    <div class="flex items-center justify-center">
                        <img class="h-[40rem]" src="/img/shareBYOU_post.svg" alt="Products Tour">
                    </div>
                </div>
                <div class="bg-primary shadow-md w-[80vw] h-[20rem] my-28 rounded-[3rem]">
                    <div class="flex flex-row justify-around items-center py-14">
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-white w-16 aspect-square rounded-xl">
                                <img src="" alt="">
                            </div>
                            <h1 class="text-white text-center font-bold text-2xl py-6">Remunerazione</h1>
                            <div class="px-16">
                                <p class=" text-center text-white font-regular">
                                    I "professionisti” potranno guadagnare dalla pubblicazione di contenuti esclusivi.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <div class="bg-white w-16 aspect-square rounded-xl">
                                <img src="" alt="">
                            </div>
                            <h1 class="text-white text-center font-bold text-2xl py-6">Contenuti Esclusivi</h1>
                            <div class="px-16">
                                <p class="text-center text-white font-regular">
                                    I "professionisti" potranno pubblicare analisi finanziarie, consulenze, video-corsi e articoli.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- PYLO --}}
        <section class="px-[5vw]">
            <div class="flex flex-col items-center justify-center pb-28">
                <h1 class="text-center text-8xl font-bold text-title">PYLO</h1>
                <div class="flex flex-row items-center justify-center pt-20">
                    <div class="flex items-center justify-center">
                        <p class="text-center text-lg text-gray-500 w-[80%]">
                            Il sistema di intelligenza artificiale, che ti permette di chiedere 24h/7 ogni tipo di domanda, 
                            dubbio o curiosità, proprio come se fosse un consulente fisico!
                        </p>
                    </div>
                    <div class="flex items-center justify-center">
                        <img class="" src="/img/ai_bot.svg" alt="Products Tour">
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
                        <img src="/img/logo_shareBy_white.svg" class="h-16 mr-3" alt="ShareBy Logo"/>
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