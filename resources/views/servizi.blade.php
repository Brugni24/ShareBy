@extends('layouts.web-layout')

@section('content')
    {{-- first slide --}}
    <section class="bg-gradient-to-b from-secondary to-[#0C1031] ">
        <div class="flex flex-col justify-center items-center py-[80px] min-h-[80vh] mx-[5vw] ">
            <h1 class="gradient-white-title">
                I nostri servizi
            </h1>
            <p class="sottotitolo">
                ShareBy offre una serie di servizi con lo scopo di aiutare le persone a migliorare 
                la propria FINANCIAL AWARNESS e comprendere al meglio le società su cui si intende investire
            </p>
            <div class="mx-[5vw] max-w-[600px] ">
                <img class="my-[50px] w-full " src="/img/products_tour.svg" alt="Products Tour">
            </div>
            <a class="" href="{{url('/dashboard')}}">
                <x-primary-button>Prova gratis</x-primary-button>
            </a>
        </div>
    </section>
    {{-- servizi --}}
    <section class="bg-gradient-to-b from-[#0C1031] to-[#080C26] ">
        <div class="flex flex-col items-center justify-center mx-[5vw] py-[60px] sm:py-[100px]">
            <h2 class="gradient-white-title">
                Uno strumento unico come nessun'altro
            </h2>
            <p class="sottotitolo">
                L’obiettivo di ShareBy è quello di dare una visione a 360 gradi dell’azienda d’interesse, 
                concentrando tutti i servizi necessari in un unico strumento.
            </p>
            {{-- cards --}}
            <div class="flex flex-col items-center justify-center px-[10vw] gap-10 pt-[50px] md:flex-row md:gap-6 md:px-0 lg:px-[5vw] xl:gap-12 ">
                <a href="{{url('/dashboard')}}">
                    <div class="card-container bg-white shadow-xl md:h-[430px] md:basis-1/3 hover:scale-110 focus:scale-110">
                        <div class="card-background bg-[url('/public/img/white_card.svg')]">
                            <div class="card-logo">
                                <svg class="" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff" stroke-width="0.0006000000000000001"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill:none;}.cls-2{fill:#0E5ECC;}</style> </defs> <title></title> <g data-name="Layer 2" id="Layer_2"> <g id="Icons"> <g data-name="Data Analysis" id="Data_Analysis"> <rect class="cls-1" height="60" width="60"></rect> <path class="cls-2" d="M49.1,10.44,47,10V9.68a3,3,0,0,0-3-3H32.78L21.85,4.14A3,3,0,0,0,18.23,6.4l-.06.27H16a3,3,0,0,0-3,3V29.06L8.64,48a3,3,0,0,0,2.26,3.61l2.1.49v.27a3,3,0,0,0,3,3H27.32l.11.05,10.72,2.48a3,3,0,0,0,3.62-2.26l.06-.27H44a3,3,0,0,0,3-3V32.94l4.36-18.89A3,3,0,0,0,49.1,10.44ZM13,50l-1.65-.39a1,1,0,0,1-.76-1.21L13,38ZM21.4,6.09l2.49.58H20.26A1,1,0,0,1,21.4,6.09ZM38.6,55.91l-2.48-.58h3.62A1,1,0,0,1,38.6,55.91ZM45,52.32a1,1,0,0,1-1,1H16a1,1,0,0,1-1-1V9.68a1,1,0,0,1,1-1H44a1,1,0,0,1,1,1ZM49.41,13.6,47,24.05V12l1.65.38A1,1,0,0,1,49.41,13.6Z"></path> <path class="cls-2" d="M40,47.83H21V39.7a1,1,0,0,0-2,0v9.13a1,1,0,0,0,1,1H40a1,1,0,0,0,0-2Z"></path> <path class="cls-2" d="M23.33,22.22a4.34,4.34,0,0,0,4.34-4.33A4.29,4.29,0,0,0,27,15.62l1.82-1.81a1,1,0,0,0-1.42-1.42l-4.08,4.08L21.05,14.2a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.41h0A4.28,4.28,0,0,0,19,17.89,4.33,4.33,0,0,0,23.33,22.22Zm-2.19-5.11,1.49,1.49a1,1,0,0,0,.7.29A1,1,0,0,0,24,18.6l1.49-1.49a2.56,2.56,0,0,1,.14.78,2.34,2.34,0,0,1-4.67,0A2.29,2.29,0,0,1,21.14,17.11Z"></path> <path class="cls-2" d="M23.33,33.18A4.34,4.34,0,1,0,19,28.84,4.35,4.35,0,0,0,23.33,33.18Zm0-6.67A2.34,2.34,0,1,1,21,28.84,2.34,2.34,0,0,1,23.33,26.51Z"></path> <path class="cls-2" d="M40,35.38H36.08a1,1,0,0,0,0,2h1.51L32,43,28.07,39a1,1,0,0,0-1.41,0l-3.58,3.59A1,1,0,1,0,24.49,44l2.88-2.88,3.92,3.93a1,1,0,0,0,1.42,0L39,38.8v1.5a1,1,0,0,0,2,0V36.38A1,1,0,0,0,40,35.38Z"></path> <path class="cls-2" d="M31.33,27.84h4.29a1,1,0,0,0,0-2H31.33a1,1,0,0,0,0,2Z"></path> <path class="cls-2" d="M31.33,31.85h8.23a1,1,0,0,0,0-2H31.33a1,1,0,0,0,0,2Z"></path> <path class="cls-2" d="M31.33,16.89h4.29a1,1,0,0,0,0-2H31.33a1,1,0,0,0,0,2Z"></path> <path class="cls-2" d="M31.33,20.89h8.23a1,1,0,0,0,0-2H31.33a1,1,0,0,0,0,2Z"></path> </g> </g> </g> </g></svg>
                            </div>
                            <h3 class="card-title">Analisi Aziendale</h3>
                            <p class="font-medium text-center pt-4">Ottieni una comoda e rapida analisi finanziaria tra le 300+ aziende a tua disposozione</p>
                        </div>
                    </div>
                </a>
                <a href="{{url('/dashboard')}}">
                    <div class="card-container shadow-xl bg-primary md:h-[430px] md:basis-1/3 hover:scale-110 focus:scale-110">
                        <div class="card-background bg-[url('/public/img/blue_card.svg')]">
                            <div class="card-logo">
                                <svg class="" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.75 6C15.75 3.92893 14.0711 2.25 12 2.25C9.92893 2.25 8.25 3.92893 8.25 6C8.25 8.07107 9.92893 9.75 12 9.75C14.0711 9.75 15.75 8.07107 15.75 6ZM12 3.75C13.2426 3.75 14.25 4.75736 14.25 6C14.25 7.24264 13.2426 8.25 12 8.25C10.7574 8.25 9.75 7.24264 9.75 6C9.75 4.75736 10.7574 3.75 12 3.75Z" fill="#ffffff"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.25 18C9.25 15.9289 7.57107 14.25 5.5 14.25C3.42893 14.25 1.75 15.9289 1.75 18C1.75 20.0711 3.42893 21.75 5.5 21.75C7.57107 21.75 9.25 20.0711 9.25 18ZM5.5 15.75C6.74264 15.75 7.75 16.7574 7.75 18C7.75 19.2426 6.74264 20.25 5.5 20.25C4.25736 20.25 3.25 19.2426 3.25 18C3.25 16.7574 4.25736 15.75 5.5 15.75Z" fill="#ffffff"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 14.25C20.5711 14.25 22.25 15.9289 22.25 18C22.25 20.0711 20.5711 21.75 18.5 21.75C16.4289 21.75 14.75 20.0711 14.75 18C14.75 15.9289 16.4289 14.25 18.5 14.25ZM20.75 18C20.75 16.7574 19.7426 15.75 18.5 15.75C17.2574 15.75 16.25 16.7574 16.25 18C16.25 19.2426 17.2574 20.25 18.5 20.25C19.7426 20.25 20.75 19.2426 20.75 18Z" fill="#ffffff"></path> <path d="M7.20468 7.56231C7.51523 7.28821 7.54478 6.81426 7.27069 6.5037C6.99659 6.19315 6.52264 6.1636 6.21208 6.43769C4.39676 8.03991 3.25 10.3865 3.25 13C3.25 13.4142 3.58579 13.75 4 13.75C4.41421 13.75 4.75 13.4142 4.75 13C4.75 10.8347 5.69828 8.89187 7.20468 7.56231Z" fill="#ffffff"></path> <path d="M17.7879 6.43769C17.4774 6.1636 17.0034 6.19315 16.7293 6.5037C16.4552 6.81426 16.4848 7.28821 16.7953 7.56231C18.3017 8.89187 19.25 10.8347 19.25 13C19.25 13.4142 19.5858 13.75 20 13.75C20.4142 13.75 20.75 13.4142 20.75 13C20.75 10.3865 19.6032 8.03991 17.7879 6.43769Z" fill="#ffffff"></path> <path d="M10.1869 20.0217C9.7858 19.9184 9.37692 20.1599 9.27367 20.561C9.17043 20.9622 9.41192 21.3711 9.81306 21.4743C10.5129 21.6544 11.2458 21.75 12 21.75C12.7542 21.75 13.4871 21.6544 14.1869 21.4743C14.5881 21.3711 14.8296 20.9622 14.7263 20.561C14.6231 20.1599 14.2142 19.9184 13.8131 20.0217C13.2344 20.1706 12.627 20.25 12 20.25C11.373 20.25 10.7656 20.1706 10.1869 20.0217Z" fill="#ffffff"></path> </g></svg>
                            </div>
                            <h3 class="card-title text-white">ShareBYOU</h3>
                            <p class="font-medium text-center pt-4 text-white">Spazio dedicato alla condivisione di contenuti da parte degli utenti come video corsi, analisi e molto altro</p>
                            <div class="flex-grow flex justify-center items-end">
                                <p class="font-semibold text-lg text-red-500 text-center">In Arrivo!</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="{{url('/dashboard')}}">
                    <div class="card-container shadow-xl bg-secondary md:h-[430px] md:basis-1/3 hover:scale-110 focus:scale-110">
                        <div class="card-background bg-[url('/public/img/blue_card.svg')]">
                            <div class="card-logo">
                                <svg class="" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>ic_fluent_bot_24_regular</title> <desc>Created with Sketch.</desc> <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ic_fluent_bot_24_regular" fill="#ffffff" fill-rule="nonzero"> <path d="M17.7530511,13.999921 C18.9956918,13.999921 20.0030511,15.0072804 20.0030511,16.249921 L20.0030511,17.1550008 C20.0030511,18.2486786 19.5255957,19.2878579 18.6957793,20.0002733 C17.1303315,21.344244 14.8899962,22.0010712 12,22.0010712 C9.11050247,22.0010712 6.87168436,21.3444691 5.30881727,20.0007885 C4.48019625,19.2883988 4.00354153,18.2500002 4.00354153,17.1572408 L4.00354153,16.249921 C4.00354153,15.0072804 5.01090084,13.999921 6.25354153,13.999921 L17.7530511,13.999921 Z M17.7530511,15.499921 L6.25354153,15.499921 C5.83932796,15.499921 5.50354153,15.8357075 5.50354153,16.249921 L5.50354153,17.1572408 C5.50354153,17.8128951 5.78953221,18.4359296 6.28670709,18.8633654 C7.5447918,19.9450082 9.44080155,20.5010712 12,20.5010712 C14.5599799,20.5010712 16.4578003,19.9446634 17.7186879,18.8621641 C18.2165778,18.4347149 18.5030511,17.8112072 18.5030511,17.1550005 L18.5030511,16.249921 C18.5030511,15.8357075 18.1672647,15.499921 17.7530511,15.499921 Z M11.8985607,2.00734093 L12.0003312,2.00049432 C12.380027,2.00049432 12.6938222,2.2826482 12.7434846,2.64872376 L12.7503312,2.75049432 L12.7495415,3.49949432 L16.25,3.5 C17.4926407,3.5 18.5,4.50735931 18.5,5.75 L18.5,10.254591 C18.5,11.4972317 17.4926407,12.504591 16.25,12.504591 L7.75,12.504591 C6.50735931,12.504591 5.5,11.4972317 5.5,10.254591 L5.5,5.75 C5.5,4.50735931 6.50735931,3.5 7.75,3.5 L11.2495415,3.49949432 L11.2503312,2.75049432 C11.2503312,2.37079855 11.5324851,2.05700336 11.8985607,2.00734093 L12.0003312,2.00049432 L11.8985607,2.00734093 Z M16.25,5 L7.75,5 C7.33578644,5 7,5.33578644 7,5.75 L7,10.254591 C7,10.6688046 7.33578644,11.004591 7.75,11.004591 L16.25,11.004591 C16.6642136,11.004591 17,10.6688046 17,10.254591 L17,5.75 C17,5.33578644 16.6642136,5 16.25,5 Z M9.74928905,6.5 C10.4392523,6.5 10.9985781,7.05932576 10.9985781,7.74928905 C10.9985781,8.43925235 10.4392523,8.99857811 9.74928905,8.99857811 C9.05932576,8.99857811 8.5,8.43925235 8.5,7.74928905 C8.5,7.05932576 9.05932576,6.5 9.74928905,6.5 Z M14.2420255,6.5 C14.9319888,6.5 15.4913145,7.05932576 15.4913145,7.74928905 C15.4913145,8.43925235 14.9319888,8.99857811 14.2420255,8.99857811 C13.5520622,8.99857811 12.9927364,8.43925235 12.9927364,7.74928905 C12.9927364,7.05932576 13.5520622,6.5 14.2420255,6.5 Z" id="🎨-Color"> </path> </g> </g> </g></svg>
                            </div>
                            <h3 class="card-title text-white">Assistente AI</h3>
                            <p class="font-medium text-center pt-4 text-white">Un consulente finanziario disponibile 24/7 in grado di schiarire qualsiasi tipo di dubbio</p>
                            <div class="flex-grow flex justify-center items-end">
                                <p class="font-semibold text-lg text-red-500 text-center">In Arrivo!</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- analisi --}}
    <section id="analisi" class="">
        <div class="flex flex-col items-center justify-center mx-[5vw] py-[60px] sm:py-[100px]">
            <x-page-link class="">{{ __('Analisi') }}</x-page-link>
            <h2 class="gradient-white-title">
                Facile. Veloce. Intuitiva.
            </h2>
            <p class="sottotitolo">
                Abbiamo sviluppato un algoritmo in grado di fornire una dettagliata analisi dei bilanci 
                aziendali che semplifica e riduce il tempo richiesto per valutare un investimento.
            </p>
            {{-- statistiche --}}
            <div class="flex flex-col gap-[30px] mt-[50px] mb-[80px] md:flex-row ">
                <div class="flex flex-col ">
                    <div class="inline-flex justify-center leading-tight">
                        <span class="font-bold text-[50px] lg:text-[70px] text-white">05</span>
                        <span class="font-bold text-[50px] lg:text-[70px] text-primary">sec</span>
                    </div>
                    <div class="">
                        <p class="sottotitolo">Tempo di analisi</p>
                    </div>
                </div>
                <div class="flex flex-col ">
                    <div class="inline-flex justify-center leading-tight">
                        <span class="font-bold text-[50px] lg:text-[70px] text-white">20</span>
                        <span class="font-bold text-[50px] lg:text-[70px] text-primary">+</span>
                    </div>
                    <div class="">
                        <p class="sottotitolo">Indici utilizzati</p>
                    </div>
                </div>
                <div class="flex flex-col ">
                    <div class="inline-flex justify-center leading-tight">
                        <span class="font-bold text-[50px] lg:text-[70px] text-white">300</span>
                        <span class="font-bold text-[50px] lg:text-[70px] text-primary">+</span>
                    </div>
                    <div class="">
                        <p class="sottotitolo">Aziende analizzate</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center gap-[20px] mx-[5vw] pb-[40px] md:flex-row">
                <div class="bg-white/10 border border-white/20 rounded-[20px] p-[30px] max-w-[300px] h-[200px]">
                    <h3 class="text-2xl font-bold text-white">
                        Quotazioni di Mercato
                    </h3>
                    <p class="font-medium mt-2 text-left">
                        Monitora in tempo reale gli andamenti azionari di più di 500 aziende.
                    </p>
                </div>
                <div class="bg-white/10 border border-white/20 rounded-[20px] p-[30px] max-w-[300px] h-[200px]">
                    <h3 class="text-2xl font-bold text-white">
                        Analisi Aziendale
                    </h3>
                    <p class="font-medium mt-2 text-left">
                        Sfrutta la nostra innovativa analisi aziendale su più di 12 indici basata sull'intelligenza artificiale.
                    </p>
                </div>
                <div class="bg-white/10 border border-white/20 rounded-[20px] p-[30px] max-w-[300px] h-[200px]">
                    <h3 class="text-2xl font-bold text-white">
                        Dati Finanziari
                    </h3>
                    <p class="font-medium mt-2 text-left">
                        Esamina i report e i bilanci aziendali sempre aggiornati.
                    </p>
                </div>
            </div>
            <a class="" href="{{url('/dashboard')}}">
                <x-primary-button>Prova l'analisi</x-primary-button>
            </a>
        </div>  
    </section>
    {{-- analisi aziendale --}}
    <section id="analisi-aziendale" class="overflow-x-hidden">
        <div class="flex flex-col items-center justify-center mx-[5vw] py-[60px] sm:py-[100px]">
            <x-page-link class="">{{ __('Analisi Aziendale') }}</x-page-link>
            <h2 class="gradient-white-title">
                Come funziona?<br class="sm:hidden"> È facile.
            </h2>
            <p class="sottotitolo">
                Il nostro algoritmo si basa su 3 tipi di analisi basati su modelli economici e statistici ottimizzati.
            </p>
            <div class="flex flex-col items-center justify-center px-[10vw] gap-10 md:flex-row md:gap-6 md:px-0 lg:px-[5vw] xl:gap-12 mt-[50px]">
                <div style="height: 450px" class="card-container bg-white/10 border border-white/20 shadow-xl pt-[48px] pb-[32px] px-[24px]  md:h-[430px] md:basis-1/3 hover:scale-110 focus:scale-110">
                    <div class="flex items-center justify-center bg-gray-300 rounded-full aspect-square w-[45px] mx-auto">
                        <span class="text-[18px] font-bold">1</span>
                    </div>
                    <h3 class="card-title text-white mb-[10px] mx-auto">Analisi Redditività</h3>
                    <p class="mx-[10px]">
                        Quest’analisi si avvale di alcuni indici come ROE, ROS e ROI, che vengono opportunamente 
                        confrontati con la media nazionale, così da ricavare il trend sulla reddività aziendale rispetto 
                        al mercato di riferimento.
                    </p>
                </div>
                <div style="height: 450px" class="card-container bg-white/10 border border-white/20 shadow-xl pt-[48px] pb-[32px] px-[24px]  md:h-[430px] md:basis-1/3 hover:scale-110 focus:scale-110">
                    <div class="flex items-center justify-center bg-primary rounded-full aspect-square w-[45px] mx-auto">
                        <span class="text-white text-[18px] font-bold">2</span>
                    </div>
                    <h3 class="card-title text-white mb-[10px] mx-auto">Analisi Struttura Patrimoniale</h3>
                    <p class="mx-[10px]">
                        La struttura patrimoniale viene analizzata tramite l’uso dell’IGGC e MRI che vengono anch’essi 
                        valutati in maniera statica, confrontati con la media nazionale e in maniera dinamica, valutati 
                        tramite l’uso della statistica interferenziale.
                    </p>
                </div>
                <div style="height: 450px" class="card-container bg-white/10 border border-white/20 shadow-xl pt-[48px] pb-[32px] px-[24px]  md:h-[430px] md:basis-1/3 hover:scale-110 focus:scale-110">
                    <div class="flex items-center justify-center bg-secondary rounded-full aspect-square w-[45px] mx-auto">
                        <span class="text-white text-[18px] font-bold">3</span>
                    </div>
                    <h3 class="card-title text-white mb-[10px] mx-auto">Analisi Indebitamento</h3>
                    <p class="mx-[10px]">
                        La struttura patrimoniale viene analizzata tramite l’uso del ROD, Leverage e Leva finanziaria, 
                        strumenti che vengono valutati sia in maniera statica che in maniera dinamica con l’utilizzo di contatori.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- ShareBYOU --}}
    <section id="shareBYOU" class="">
        <div class="flex flex-col items-center justify-center mx-[5vw] py-[60px] sm:py-[100px]">
            <x-page-link class="">{{ __('ShareBYOU') }}</x-page-link>
            <h2 class="gradient-white-title">
                Unisciti alla Community
            </h2>
            <p class="sottotitolo">
                ShareBYOU è il nostro servizio B2B che permette ai professionisti di creare e gestire la propria 
                community attraverso un programma di fidelizzazione custom che viene stabilito dai professionisti.
            </p>
            <div class="flex flex-col items-center justify-center gap-[80px] pt-[50px] mx-[5vw] mb-[50px] md:flex-row">
                <div class="bg-gradient-to-b from-secondary to-[#080C26] h-[580px] rounded-[20px] overflow-hidden max-w-[400px] sm:h-[650px] md:h-[580px] lg:h-[640px]">
                    <div class="w-full pt-[15%] px-[10%]">
                        <div class="bg-white/95 rounded-[15px] p-[8px] w-fit">
                            <svg width="42px" height="42px" viewBox="-1.2 -1.2 26.40 26.40" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19.8706 12.3884L19.1249 12.3082V12.3082L19.8706 12.3884ZM19.6872 14.0931L20.4329 14.1733V14.1733L19.6872 14.0931ZM4.3128 14.0931L3.5671 14.1733L4.3128 14.0931ZM4.12945 12.3884L4.87514 12.3082L4.12945 12.3884ZM8.76006 10.934L9.41507 11.2993L8.76006 10.934ZM10.5495 7.7254L9.89453 7.36008L10.5495 7.7254ZM13.4505 7.7254L12.7954 8.09071L13.4505 7.7254ZM15.2399 10.934L15.895 10.5686V10.5686L15.2399 10.934ZM16.0038 11.9592L15.7015 12.6456L15.7015 12.6456L16.0038 11.9592ZM17.4705 11.2451L16.9412 10.7138L17.4705 11.2451ZM16.4533 12.0219L16.3506 11.2789L16.3506 11.2789L16.4533 12.0219ZM6.5295 11.2451L6.0002 11.7765L6.5295 11.2451ZM7.5467 12.0219L7.64943 11.2789L7.64943 11.2789L7.5467 12.0219ZM7.99621 11.9592L8.29846 12.6456L8.29846 12.6456L7.99621 11.9592ZM5.71208 20.1532L6.21228 19.5943H6.21228L5.71208 20.1532ZM18.2879 20.1532L17.7877 19.5943L18.2879 20.1532ZM18.8645 9.98013L19.432 9.48982L18.8645 9.98013ZM12.9077 6.78265L12.5668 6.11457L12.9077 6.78265ZM11.0923 6.78265L11.4332 6.11457L11.0923 6.78265ZM19.1249 12.3082L18.9415 14.0129L20.4329 14.1733L20.6163 12.4686L19.1249 12.3082ZM13.0879 20.25H10.9121V21.75H13.0879V20.25ZM5.0585 14.0129L4.87514 12.3082L3.38375 12.4686L3.5671 14.1733L5.0585 14.0129ZM9.41507 11.2993L11.2046 8.09072L9.89453 7.36008L8.10504 10.5686L9.41507 11.2993ZM12.7954 8.09071L14.5849 11.2993L15.895 10.5686L14.1055 7.36008L12.7954 8.09071ZM14.5849 11.2993C14.7467 11.5893 14.8956 11.8582 15.0399 12.0638C15.1885 12.2753 15.3911 12.5089 15.7015 12.6456L16.306 11.2728C16.3619 11.2973 16.3524 11.3226 16.2675 11.2018C16.1784 11.0749 16.0727 10.8873 15.895 10.5686L14.5849 11.2993ZM16.9412 10.7138C16.6825 10.9715 16.529 11.1231 16.4082 11.2208C16.2931 11.3139 16.2906 11.2872 16.3506 11.2789L16.556 12.7648C16.8918 12.7184 17.1507 12.5495 17.3517 12.3869C17.547 12.2289 17.7642 12.0112 17.9998 11.7765L16.9412 10.7138ZM15.7015 12.6456C15.9698 12.7637 16.2657 12.8049 16.556 12.7648L16.3506 11.2789C16.3353 11.281 16.3199 11.2789 16.306 11.2728L15.7015 12.6456ZM6.0002 11.7765C6.23578 12.0112 6.453 12.2289 6.64834 12.3869C6.84933 12.5495 7.10824 12.7184 7.44397 12.7648L7.64943 11.2789C7.70944 11.2872 7.7069 11.3139 7.5918 11.2208C7.47104 11.1231 7.31753 10.9715 7.05879 10.7138L6.0002 11.7765ZM8.10504 10.5686C7.92732 10.8873 7.82158 11.0749 7.7325 11.2018C7.64765 11.3226 7.63814 11.2973 7.69395 11.2728L8.29846 12.6456C8.60887 12.5089 8.81155 12.2753 8.96009 12.0638C9.10441 11.8583 9.2533 11.5893 9.41507 11.2993L8.10504 10.5686ZM7.44397 12.7648C7.73429 12.8049 8.03016 12.7637 8.29846 12.6456L7.69395 11.2728C7.68011 11.2789 7.66466 11.281 7.64943 11.2789L7.44397 12.7648ZM10.9121 20.25C9.47421 20.25 8.46719 20.2486 7.69857 20.1502C6.9509 20.0545 6.52851 19.8774 6.21228 19.5943L5.21187 20.712C5.84173 21.2758 6.60137 21.522 7.50819 21.6381C8.39406 21.7514 9.51399 21.75 10.9121 21.75V20.25ZM3.5671 14.1733C3.71526 15.5507 3.83282 16.8999 4.03322 17.994C4.1343 18.5459 4.26178 19.0659 4.43833 19.5172C4.61339 19.9648 4.8549 20.3925 5.21187 20.712L6.21228 19.5943C6.0962 19.4904 5.96405 19.3 5.83525 18.9708C5.70795 18.6454 5.60138 18.2299 5.50868 17.7238C5.32149 16.7018 5.21246 15.4443 5.0585 14.0129L3.5671 14.1733ZM18.9415 14.0129C18.7875 15.4443 18.6785 16.7018 18.4913 17.7238C18.3986 18.2299 18.292 18.6454 18.1647 18.9708C18.036 19.3 17.9038 19.4904 17.7877 19.5943L18.7881 20.712C19.1451 20.3925 19.3866 19.9648 19.5617 19.5172C19.7382 19.0659 19.8657 18.5459 19.9668 17.994C20.1672 16.8999 20.2847 15.5507 20.4329 14.1733L18.9415 14.0129ZM13.0879 21.75C14.486 21.75 15.6059 21.7514 16.4918 21.6381C17.3986 21.522 18.1583 21.2758 18.7881 20.712L17.7877 19.5943C17.4715 19.8774 17.0491 20.0545 16.3014 20.1502C15.5328 20.2486 14.5258 20.25 13.0879 20.25V21.75ZM10.75 5C10.75 4.30964 11.3096 3.75 12 3.75V2.25C10.4812 2.25 9.25 3.48122 9.25 5H10.75ZM12 3.75C12.6904 3.75 13.25 4.30964 13.25 5H14.75C14.75 3.48122 13.5188 2.25 12 2.25V3.75ZM20.75 9C20.75 9.41421 20.4142 9.75 20 9.75V11.25C21.2426 11.25 22.25 10.2426 22.25 9H20.75ZM19.25 9C19.25 8.58579 19.5858 8.25 20 8.25V6.75C18.7574 6.75 17.75 7.75736 17.75 9H19.25ZM20 8.25C20.4142 8.25 20.75 8.58579 20.75 9H22.25C22.25 7.75736 21.2426 6.75 20 6.75V8.25ZM4 9.75C3.58579 9.75 3.25 9.41421 3.25 9H1.75C1.75 10.2426 2.75736 11.25 4 11.25V9.75ZM3.25 9C3.25 8.58579 3.58579 8.25 4 8.25V6.75C2.75736 6.75 1.75 7.75736 1.75 9H3.25ZM4 8.25C4.41421 8.25 4.75 8.58579 4.75 9H6.25C6.25 7.75736 5.24264 6.75 4 6.75V8.25ZM20 9.75C19.997 9.75 19.994 9.74998 19.991 9.74995L19.9736 11.2498C19.9824 11.2499 19.9912 11.25 20 11.25V9.75ZM20.6163 12.4686C20.6646 12.0187 20.707 11.6258 20.7302 11.298C20.753 10.9769 20.7616 10.6689 20.7256 10.4003L19.2389 10.5995C19.2536 10.7093 19.2553 10.8908 19.234 11.192C19.2131 11.4865 19.1743 11.8486 19.1249 12.3082L20.6163 12.4686ZM19.991 9.74995C19.7681 9.74737 19.5689 9.64827 19.432 9.48982L18.2969 10.4704C18.703 10.9405 19.3032 11.2421 19.9736 11.2498L19.991 9.74995ZM19.432 9.48982C19.3181 9.35799 19.25 9.18789 19.25 9H17.75C17.75 9.56143 17.9566 10.0765 18.2969 10.4704L19.432 9.48982ZM17.9998 11.7765C18.6773 11.1017 19.0262 10.7616 19.2584 10.6183L18.4705 9.34191C18.0506 9.60109 17.547 10.1103 16.9412 10.7138L17.9998 11.7765ZM4.75 9C4.75 9.18789 4.68188 9.35799 4.56799 9.48982L5.70307 10.4704C6.0434 10.0765 6.25 9.56143 6.25 9H4.75ZM7.05879 10.7138C6.45296 10.1103 5.94936 9.60109 5.52946 9.34191L4.7416 10.6183C4.97377 10.7616 5.32273 11.1017 6.0002 11.7765L7.05879 10.7138ZM4.56799 9.48982C4.4311 9.64827 4.23192 9.74737 4.00904 9.74995L4.02639 11.2498C4.69676 11.2421 5.29701 10.9405 5.70307 10.4704L4.56799 9.48982ZM4.00904 9.74995C4.00602 9.74998 4.00301 9.75 4 9.75V11.25C4.00881 11.25 4.01761 11.2499 4.02639 11.2498L4.00904 9.74995ZM4.87514 12.3082C4.82571 11.8486 4.78687 11.4865 4.76601 11.192C4.74467 10.8908 4.74636 10.7093 4.76107 10.5995L3.27435 10.4003C3.23837 10.6689 3.24701 10.9769 3.26976 11.298C3.29298 11.6258 3.33535 12.0187 3.38375 12.4686L4.87514 12.3082ZM13.25 5C13.25 5.48504 12.9739 5.90689 12.5668 6.11457L13.2485 7.45073C14.1381 6.99685 14.75 6.07053 14.75 5H13.25ZM12.5668 6.11457C12.3975 6.20095 12.2056 6.25 12 6.25V7.75C12.448 7.75 12.873 7.6423 13.2485 7.45073L12.5668 6.11457ZM14.1055 7.36008C13.8992 6.9902 13.7138 6.65746 13.5437 6.3852L12.2716 7.1801C12.4176 7.41372 12.5828 7.70948 12.7954 8.09071L14.1055 7.36008ZM12 6.25C11.7944 6.25 11.6025 6.20095 11.4332 6.11457L10.7515 7.45073C11.127 7.6423 11.552 7.75 12 7.75V6.25ZM11.4332 6.11457C11.0261 5.90689 10.75 5.48504 10.75 5H9.25C9.25 6.07053 9.86186 6.99685 10.7515 7.45073L11.4332 6.11457ZM11.2046 8.09072C11.4172 7.70948 11.5824 7.41372 11.7284 7.1801L10.4563 6.3852C10.2862 6.65746 10.1008 6.9902 9.89453 7.36008L11.2046 8.09072Z" fill="#111849"></path> <path d="M5 17.5H19" stroke="#111849" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                        </div>
                        <h3 class="text-[28px] font-bold text-white mt-[10px]">
                            Remunerazione
                        </h3>
                        <p class="font-medium mt-2 mb-[20px] text-left lg:text-[18px]">
                            I professionisti potranno guadagnare dalla pubblicazione di contenuti esclusivi.
                        </p>
                    </div>
                    <div class="pl-[15%] mt-[30px]">
                        <img src="/img/remunerazione.svg" alt="">
                    </div>
                </div>
                <div class="bg-gradient-to-b from-secondary to-[#080C26] h-[580px] rounded-[20px] overflow-hidden max-w-[400px] sm:h-[650px] md:h-[580px] lg:h-[640px]">
                    <div class="w-full pt-[15%] px-[10%]">
                        <div class="bg-white/95 rounded-[15px] p-[8px] w-fit">
                            <svg width="42px" height="42px" viewBox="-4.8 -4.8 41.60 41.60" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#111849" stroke-width="2.2399999999999998"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g clip-path="url(#clip0_901_2869)"> <path d="M31 3V21C31 21.55 30.55 22 30 22H16H2C1.45 22 1 21.55 1 21V3C1 2.45 1.45 2 2 2H16H30C30.55 2 31 2.45 31 3Z" fill="#"></path> <path d="M10 31L16 25M16 25L22 31M16 25V22H2C1.447 22 1 21.553 1 21V3C1 2.447 1.447 2 2 2H30C30.553 2 31 2.447 31 3V21C31 21.553 30.553 22 30 22H19M16 1V2M10 10H22M10 14H15" stroke="#<svg width=" 64px"="" height="64px" viewBox="-1.2 -1.2 26.40 26.40" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19.8706 12.3884L19.1249 12.3082V12.3082L19.8706 12.3884ZM19.6872 14.0931L20.4329 14.1733V14.1733L19.6872 14.0931ZM4.3128 14.0931L3.5671 14.1733L4.3128 14.0931ZM4.12945 12.3884L4.87514 12.3082L4.12945 12.3884ZM8.76006 10.934L9.41507 11.2993L8.76006 10.934ZM10.5495 7.7254L9.89453 7.36008L10.5495 7.7254ZM13.4505 7.7254L12.7954 8.09071L13.4505 7.7254ZM15.2399 10.934L15.895 10.5686V10.5686L15.2399 10.934ZM16.0038 11.9592L15.7015 12.6456L15.7015 12.6456L16.0038 11.9592ZM17.4705 11.2451L16.9412 10.7138L17.4705 11.2451ZM16.4533 12.0219L16.3506 11.2789L16.3506 11.2789L16.4533 12.0219ZM6.5295 11.2451L6.0002 11.7765L6.5295 11.2451ZM7.5467 12.0219L7.64943 11.2789L7.64943 11.2789L7.5467 12.0219ZM7.99621 11.9592L8.29846 12.6456L8.29846 12.6456L7.99621 11.9592ZM5.71208 20.1532L6.21228 19.5943H6.21228L5.71208 20.1532ZM18.2879 20.1532L17.7877 19.5943L18.2879 20.1532ZM18.8645 9.98013L19.432 9.48982L18.8645 9.98013ZM12.9077 6.78265L12.5668 6.11457L12.9077 6.78265ZM11.0923 6.78265L11.4332 6.11457L11.0923 6.78265ZM19.1249 12.3082L18.9415 14.0129L20.4329 14.1733L20.6163 12.4686L19.1249 12.3082ZM13.0879 20.25H10.9121V21.75H13.0879V20.25ZM5.0585 14.0129L4.87514 12.3082L3.38375 12.4686L3.5671 14.1733L5.0585 14.0129ZM9.41507 11.2993L11.2046 8.09072L9.89453 7.36008L8.10504 10.5686L9.41507 11.2993ZM12.7954 8.09071L14.5849 11.2993L15.895 10.5686L14.1055 7.36008L12.7954 8.09071ZM14.5849 11.2993C14.7467 11.5893 14.8956 11.8582 15.0399 12.0638C15.1885 12.2753 15.3911 12.5089 15.7015 12.6456L16.306 11.2728C16.3619 11.2973 16.3524 11.3226 16.2675 11.2018C16.1784 11.0749 16.0727 10.8873 15.895 10.5686L14.5849 11.2993ZM16.9412 10.7138C16.6825 10.9715 16.529 11.1231 16.4082 11.2208C16.2931 11.3139 16.2906 11.2872 16.3506 11.2789L16.556 12.7648C16.8918 12.7184 17.1507 12.5495 17.3517 12.3869C17.547 12.2289 17.7642 12.0112 17.9998 11.7765L16.9412 10.7138ZM15.7015 12.6456C15.9698 12.7637 16.2657 12.8049 16.556 12.7648L16.3506 11.2789C16.3353 11.281 16.3199 11.2789 16.306 11.2728L15.7015 12.6456ZM6.0002 11.7765C6.23578 12.0112 6.453 12.2289 6.64834 12.3869C6.84933 12.5495 7.10824 12.7184 7.44397 12.7648L7.64943 11.2789C7.70944 11.2872 7.7069 11.3139 7.5918 11.2208C7.47104 11.1231 7.31753 10.9715 7.05879 10.7138L6.0002 11.7765ZM8.10504 10.5686C7.92732 10.8873 7.82158 11.0749 7.7325 11.2018C7.64765 11.3226 7.63814 11.2973 7.69395 11.2728L8.29846 12.6456C8.60887 12.5089 8.81155 12.2753 8.96009 12.0638C9.10441 11.8583 9.2533 11.5893 9.41507 11.2993L8.10504 10.5686ZM7.44397 12.7648C7.73429 12.8049 8.03016 12.7637 8.29846 12.6456L7.69395 11.2728C7.68011 11.2789 7.66466 11.281 7.64943 11.2789L7.44397 12.7648ZM10.9121 20.25C9.47421 20.25 8.46719 20.2486 7.69857 20.1502C6.9509 20.0545 6.52851 19.8774 6.21228 19.5943L5.21187 20.712C5.84173 21.2758 6.60137 21.522 7.50819 21.6381C8.39406 21.7514 9.51399 21.75 10.9121 21.75V20.25ZM3.5671 14.1733C3.71526 15.5507 3.83282 16.8999 4.03322 17.994C4.1343 18.5459 4.26178 19.0659 4.43833 19.5172C4.61339 19.9648 4.8549 20.3925 5.21187 20.712L6.21228 19.5943C6.0962 19.4904 5.96405 19.3 5.83525 18.9708C5.70795 18.6454 5.60138 18.2299 5.50868 17.7238C5.32149 16.7018 5.21246 15.4443 5.0585 14.0129L3.5671 14.1733ZM18.9415 14.0129C18.7875 15.4443 18.6785 16.7018 18.4913 17.7238C18.3986 18.2299 18.292 18.6454 18.1647 18.9708C18.036 19.3 17.9038 19.4904 17.7877 19.5943L18.7881 20.712C19.1451 20.3925 19.3866 19.9648 19.5617 19.5172C19.7382 19.0659 19.8657 18.5459 19.9668 17.994C20.1672 16.8999 20.2847 15.5507 20.4329 14.1733L18.9415 14.0129ZM13.0879 21.75C14.486 21.75 15.6059 21.7514 16.4918 21.6381C17.3986 21.522 18.1583 21.2758 18.7881 20.712L17.7877 19.5943C17.4715 19.8774 17.0491 20.0545 16.3014 20.1502C15.5328 20.2486 14.5258 20.25 13.0879 20.25V21.75ZM10.75 5C10.75 4.30964 11.3096 3.75 12 3.75V2.25C10.4812 2.25 9.25 3.48122 9.25 5H10.75ZM12 3.75C12.6904 3.75 13.25 4.30964 13.25 5H14.75C14.75 3.48122 13.5188 2.25 12 2.25V3.75ZM20.75 9C20.75 9.41421 20.4142 9.75 20 9.75V11.25C21.2426 11.25 22.25 10.2426 22.25 9H20.75ZM19.25 9C19.25 8.58579 19.5858 8.25 20 8.25V6.75C18.7574 6.75 17.75 7.75736 17.75 9H19.25ZM20 8.25C20.4142 8.25 20.75 8.58579 20.75 9H22.25C22.25 7.75736 21.2426 6.75 20 6.75V8.25ZM4 9.75C3.58579 9.75 3.25 9.41421 3.25 9H1.75C1.75 10.2426 2.75736 11.25 4 11.25V9.75ZM3.25 9C3.25 8.58579 3.58579 8.25 4 8.25V6.75C2.75736 6.75 1.75 7.75736 1.75 9H3.25ZM4 8.25C4.41421 8.25 4.75 8.58579 4.75 9H6.25C6.25 7.75736 5.24264 6.75 4 6.75V8.25ZM20 9.75C19.997 9.75 19.994 9.74998 19.991 9.74995L19.9736 11.2498C19.9824 11.2499 19.9912 11.25 20 11.25V9.75ZM20.6163 12.4686C20.6646 12.0187 20.707 11.6258 20.7302 11.298C20.753 10.9769 20.7616 10.6689 20.7256 10.4003L19.2389 10.5995C19.2536 10.7093 19.2553 10.8908 19.234 11.192C19.2131 11.4865 19.1743 11.8486 19.1249 12.3082L20.6163 12.4686ZM19.991 9.74995C19.7681 9.74737 19.5689 9.64827 19.432 9.48982L18.2969 10.4704C18.703 10.9405 19.3032 11.2421 19.9736 11.2498L19.991 9.74995ZM19.432 9.48982C19.3181 9.35799 19.25 9.18789 19.25 9H17.75C17.75 9.56143 17.9566 10.0765 18.2969 10.4704L19.432 9.48982ZM17.9998 11.7765C18.6773 11.1017 19.0262 10.7616 19.2584 10.6183L18.4705 9.34191C18.0506 9.60109 17.547 10.1103 16.9412 10.7138L17.9998 11.7765ZM4.75 9C4.75 9.18789 4.68188 9.35799 4.56799 9.48982L5.70307 10.4704C6.0434 10.0765 6.25 9.56143 6.25 9H4.75ZM7.05879 10.7138C6.45296 10.1103 5.94936 9.60109 5.52946 9.34191L4.7416 10.6183C4.97377 10.7616 5.32273 11.1017 6.0002 11.7765L7.05879 10.7138ZM4.56799 9.48982C4.4311 9.64827 4.23192 9.74737 4.00904 9.74995L4.02639 11.2498C4.69676 11.2421 5.29701 10.9405 5.70307 10.4704L4.56799 9.48982ZM4.00904 9.74995C4.00602 9.74998 4.00301 9.75 4 9.75V11.25C4.00881 11.25 4.01761 11.2499 4.02639 11.2498L4.00904 9.74995ZM4.87514 12.3082C4.82571 11.8486 4.78687 11.4865 4.76601 11.192C4.74467 10.8908 4.74636 10.7093 4.76107 10.5995L3.27435 10.4003C3.23837 10.6689 3.24701 10.9769 3.26976 11.298C3.29298 11.6258 3.33535 12.0187 3.38375 12.4686L4.87514 12.3082ZM13.25 5C13.25 5.48504 12.9739 5.90689 12.5668 6.11457L13.2485 7.45073C14.1381 6.99685 14.75 6.07053 14.75 5H13.25ZM12.5668 6.11457C12.3975 6.20095 12.2056 6.25 12 6.25V7.75C12.448 7.75 12.873 7.6423 13.2485 7.45073L12.5668 6.11457ZM14.1055 7.36008C13.8992 6.9902 13.7138 6.65746 13.5437 6.3852L12.2716 7.1801C12.4176 7.41372 12.5828 7.70948 12.7954 8.09071L14.1055 7.36008ZM12 6.25C11.7944 6.25 11.6025 6.20095 11.4332 6.11457L10.7515 7.45073C11.127 7.6423 11.552 7.75 12 7.75V6.25ZM11.4332 6.11457C11.0261 5.90689 10.75 5.48504 10.75 5H9.25C9.25 6.07053 9.86186 6.99685 10.7515 7.45073L11.4332 6.11457ZM11.2046 8.09072C11.4172 7.70948 11.5824 7.41372 11.7284 7.1801L10.4563 6.3852C10.2862 6.65746 10.1008 6.9902 9.89453 7.36008L11.2046 8.09072Z" fill="#111849"></path> <path d="M5 17.5H19" stroke="#111849" stroke-width="1.5" stroke-linecap="round"></path> </g>" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;</path> </g> <defs> <clipPath id="clip0_901_2869"> <rect width="32" height="32" fill="white"></rect> </clipPath> </defs> </g></svg>
                        </div>
                        <h3 class="text-[28px] font-bold text-white mt-[10px]">
                            Contenuti Esclusivi
                        </h3>
                        <p class="font-medium mt-2 mb-[20px] text-left lg:text-[18px]">
                            I professionisti potranno pubblicare analisi finanziarie, consulenze, video-corsi e articoli.
                        </p>
                    </div>
                    <div class="pl-[15%] mt-[30px]">
                        <img src="/img/contenuti-esclusivi.svg" alt="">
                    </div>
                </div>
            </div>
            <a class="" href="{{url('/dashboard')}}">
                <x-primary-button>Unisciti alla Community</x-primary-button>
            </a>
        </div>
    </section>
    {{-- PYLO --}}
    <section id="PYLO" class="">
        <div class="flex flex-col items-center justify-center mx-[5vw] py-[60px] sm:py-[100px]">
            <x-page-link class="">{{ __('PYLO') }}</x-page-link>
            <h2 class="gradient-white-title">
                L'intelligenza artificiale al tuo servizio
            </h2>
            <p class="sottotitolo">
                Il sistema di intelligenza artificiale, che ti permette di chiedere 24h/7 ogni tipo di domanda, 
                dubbio o curiosità, proprio come se fosse un consulente fisico!
            </p>
            <div class="mx-[5vw] max-w-[500px] ">
                <img class="my-[60px] w-full sm:mb-[100px]" src="/img/ai_bot.svg" alt="Products Tour">
            </div>
            <a class="" href="{{url('/dashboard')}}">
                <x-primary-button>Prova gratis</x-primary-button>
            </a>
        </div>
    </section>
@endsection