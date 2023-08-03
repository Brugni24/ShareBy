@extends('layouts.web-layout')

@section('content')
    {{-- landing page --}}
    <section style="background-image: url(/img/bg_landing_page.jpg)" class="bg-cover bg-fixed bg-center lg:min-h-[90vh] flex justify-center items-center">
        <div class="px-[7vw] py-12 lg:px-[5vw] lg:flex flex-col max-w-[1300px]">
            <div class="lg:flex gap-10">
                <div class="basis-[50%]">
                    <div class="flex justify-center">
                        <h1 class="text-white text-[2.75rem] leading-[3rem] font-extrabold text-center sm:text-[3.5rem] sm:leading-[3.85rem] lg:text-[3.75rem] lg:leading-[4.125rem] xl:text-[4.5rem] xl:leading-[4.95rem] xxl:text-[4.75rem] xxl:leading-[5.225rem] watch fade-in">
                            Entra nel mondo della FINANZA con ShareBY
                        </h1>
                    </div>
                    <p class="text-white text-lg font-medium text-center px-4 pt-4 pb-14 sm:max-w-[600px] lg:px-8 lg:pb-0 lg:text-xl watch fade-in">
                        Shareby è la piattaforma che sfrutta la stretta connessione tra l’informatizzazione
                        e il mondo finanziario, al fine di ottenere analisi approfondite e dettagliate 
                        in pochi click.
                    </p>
                </div> 
                <div class="basis-1/2 flex items-center justify-center">
                    <img class="w-full sm:w-[65vw] md:w-[55vw] xxl:w-[38vw]" src="/img/landing_page_illustration.svg" alt="illustration">
                </div>
            </div>    
            <div class="pt-10 pb-6 lg:flex flex-grow items-center justify-center lg:pt-12 xl:pt-14">
                <a href="{{url('/prodotti')}}" class="basis-[50%] flex items-center justify-center">
                    <x-primary-button class="bg-primary py-3 px-6 border-2 hover:bg-secondary focus:bg-secondary">Scopri di più</x-primary-button>
                </a>
            </div>
        </div>
    </section>
    {{-- intro --}}
    <section class="bg-white mx-[5vw] py-16 lg:py-20">
        <div class="flex flex-col justify-center items-center">
            <span class="text-2xl font-bold text-center text-gray-900 md:text-2xl lg:text-3xl watch fade-in">
                “Il rischio deriva dal non sapere cosa stai facendo”
            </span>
            <span class="text-sm font-medium text-center text-gray-900 mt-1 watch fade-in">
                ~ Warren Buffet
            </span>
        </div>
        <div class="my-10 lg:my-14">
            <div class="flex justify-center">
                <img class="w-[70vw] sm:w-[50vw] md:w-[40vw] max-w-[450px]" src="/img/stock_market.svg" alt="Facile, Veloce, Intuitivo">
            </div>
            <div class="px-[5vw] mt-10 m-auto max-w-[700px] lg:mt-14">
                <p class="text-center font-medium text-gray-800 text-lg leading-snug watch fade-in">
                    Non seguire i trend, noi di shareBy ti offriamo una consulenza avanzata e 
                    completa perché sia tu a costruire il tuo percorso nel campo degli investimenti con consapevolezza.
                </p>
            </div>
        </div>
        <div class="flex justify-center mb-4">
            <a href="{{url('/register')}}">
                <x-primary-button class="bg-primary px-6 py-2 text-lg border-4 border-primary hover:bg-white hover:text-primary focus:text-primary focus:bg-white">Provalo!</x-primary-button>
            </a>
        </div>
    </section>
    {{-- banner --}}
    <section style="background-image: url(/img/bg_landing_page.jpg)" class="bg-cover bg-fixed bg-center">
        <div class="px-[10%] py-20 lg:pb-0 lg:px-[15%] xl:px-[20%]">
            <h1 class="watch fade-in text-2xl text-center text-white font-bold sm:text-3xl lg:text-4xl">Cerchi una consulenza intelligente?</h1>
            <p class="watch fade-in text-center m-auto text-white font-medium text-lg pt-6 max-w-[700px]">
                Prendi il controllo del tuo futuro finanziario: iscriviti ora per ricevere una consulenza 
                completa per i tuoi investimenti, con un’analisi aziendale e una strategie personalizzata 
                in base alle tue necessità.
            </p>
        </div>
        <div class="hidden lg:flex justify-end pb-10 px-[3%]">
            <svg class="w-16 h-20 animate-freccia" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.9600000000000002"></g><g id="SVGRepo_iconCarrier"> <path d="M7.33199 16.3154C6.94146 15.9248 6.3083 15.9248 5.91777 16.3154C5.52725 16.7059 5.52725 17.339 5.91777 17.7296L10.5834 22.3952C11.3644 23.1762 12.6308 23.1762 13.4118 22.3952L18.0802 17.7267C18.4707 17.3362 18.4707 16.703 18.0802 16.3125C17.6897 15.922 17.0565 15.922 16.666 16.3125L13 19.9786V2.0001C13 1.44781 12.5523 1.0001 12 1.0001C11.4477 1.0001 11 1.44781 11 2.0001V19.9833L7.33199 16.3154Z" fill="#ffffff"></path> </g></svg>
            <span class="flex flex-col justify-end text-white font-semibold rotate-90 text-lg uppercase mb-8">scorri</span>             
        </div>         
    </section>
    {{-- I nostri servizi --}}
    <section class="bg-white mx-[5vw] my-16 lg:my-20">
        <div class="mb-10 lg:mb-14">
            <p class="text-center text-gray-900 text-4xl font-bold md:text-5xl watch fade-in">
                I nostri servizi:
            </p>
        </div>
        {{-- cards --}}
        <div class="flex flex-col items-center justify-center px-[10vw] gap-10 md:flex-row md:gap-6 md:px-0 lg:px-[5vw] xl:gap-12">
            <div class="h-[400px] border border-gray-300 shadow-xl rounded-xl max-w-[18rem] md:h-[430px] md:basis-1/3 hover:scale-110 focus:scale-110 transition-all duration-300 ease-in-out">
                <div class="bg-[url('/public/img/white_card.svg')] bg-cover w-full h-full rounded-xl pt-12 pb-8 px-6">
                    <div class="flex justify-center items-center">
                        <svg class="aspect-square w-16" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" fill="#0E5ECC" stroke="#0E5ECC" stroke-width="0.0006000000000000001"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style>.cls-1{fill:none;}.cls-2{fill:#0E5ECC;}</style> </defs> <title></title> <g data-name="Layer 2" id="Layer_2"> <g id="Icons"> <g data-name="Data Analysis" id="Data_Analysis"> <rect class="cls-1" height="60" width="60"></rect> <path class="cls-2" d="M49.1,10.44,47,10V9.68a3,3,0,0,0-3-3H32.78L21.85,4.14A3,3,0,0,0,18.23,6.4l-.06.27H16a3,3,0,0,0-3,3V29.06L8.64,48a3,3,0,0,0,2.26,3.61l2.1.49v.27a3,3,0,0,0,3,3H27.32l.11.05,10.72,2.48a3,3,0,0,0,3.62-2.26l.06-.27H44a3,3,0,0,0,3-3V32.94l4.36-18.89A3,3,0,0,0,49.1,10.44ZM13,50l-1.65-.39a1,1,0,0,1-.76-1.21L13,38ZM21.4,6.09l2.49.58H20.26A1,1,0,0,1,21.4,6.09ZM38.6,55.91l-2.48-.58h3.62A1,1,0,0,1,38.6,55.91ZM45,52.32a1,1,0,0,1-1,1H16a1,1,0,0,1-1-1V9.68a1,1,0,0,1,1-1H44a1,1,0,0,1,1,1ZM49.41,13.6,47,24.05V12l1.65.38A1,1,0,0,1,49.41,13.6Z"></path> <path class="cls-2" d="M40,47.83H21V39.7a1,1,0,0,0-2,0v9.13a1,1,0,0,0,1,1H40a1,1,0,0,0,0-2Z"></path> <path class="cls-2" d="M23.33,22.22a4.34,4.34,0,0,0,4.34-4.33A4.29,4.29,0,0,0,27,15.62l1.82-1.81a1,1,0,0,0-1.42-1.42l-4.08,4.08L21.05,14.2a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.41h0A4.28,4.28,0,0,0,19,17.89,4.33,4.33,0,0,0,23.33,22.22Zm-2.19-5.11,1.49,1.49a1,1,0,0,0,.7.29A1,1,0,0,0,24,18.6l1.49-1.49a2.56,2.56,0,0,1,.14.78,2.34,2.34,0,0,1-4.67,0A2.29,2.29,0,0,1,21.14,17.11Z"></path> <path class="cls-2" d="M23.33,33.18A4.34,4.34,0,1,0,19,28.84,4.35,4.35,0,0,0,23.33,33.18Zm0-6.67A2.34,2.34,0,1,1,21,28.84,2.34,2.34,0,0,1,23.33,26.51Z"></path> <path class="cls-2" d="M40,35.38H36.08a1,1,0,0,0,0,2h1.51L32,43,28.07,39a1,1,0,0,0-1.41,0l-3.58,3.59A1,1,0,1,0,24.49,44l2.88-2.88,3.92,3.93a1,1,0,0,0,1.42,0L39,38.8v1.5a1,1,0,0,0,2,0V36.38A1,1,0,0,0,40,35.38Z"></path> <path class="cls-2" d="M31.33,27.84h4.29a1,1,0,0,0,0-2H31.33a1,1,0,0,0,0,2Z"></path> <path class="cls-2" d="M31.33,31.85h8.23a1,1,0,0,0,0-2H31.33a1,1,0,0,0,0,2Z"></path> <path class="cls-2" d="M31.33,16.89h4.29a1,1,0,0,0,0-2H31.33a1,1,0,0,0,0,2Z"></path> <path class="cls-2" d="M31.33,20.89h8.23a1,1,0,0,0,0-2H31.33a1,1,0,0,0,0,2Z"></path> </g> </g> </g> </g></svg>
                    </div>
                    <h1 class="text-2xl text-center font-bold pt-8">Analisi Aziendale</h1>
                    <p class="font-medium text-center pt-4">Ottieni una comoda e rapida analisi finanziaria tra le 300+ aziende a tua disposozione</p>
                </div>
            </div>
            <div class="h-[400px] border border-gray-300 shadow-xl rounded-xl bg-primary max-w-[18rem] md:h-[430px]  md:basis-1/3 hover:scale-110 focus:scale-110 transition-all duration-300 ease-in-out">
                <div class="flex flex-col bg-[url('/public/img/blue_card.svg')] bg-cover w-full h-full rounded-xl pt-12 pb-8 px-6">
                    <div class="flex justify-center items-center">
                        <svg class="aspect-square w-16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M15.75 6C15.75 3.92893 14.0711 2.25 12 2.25C9.92893 2.25 8.25 3.92893 8.25 6C8.25 8.07107 9.92893 9.75 12 9.75C14.0711 9.75 15.75 8.07107 15.75 6ZM12 3.75C13.2426 3.75 14.25 4.75736 14.25 6C14.25 7.24264 13.2426 8.25 12 8.25C10.7574 8.25 9.75 7.24264 9.75 6C9.75 4.75736 10.7574 3.75 12 3.75Z" fill="#ffffff"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.25 18C9.25 15.9289 7.57107 14.25 5.5 14.25C3.42893 14.25 1.75 15.9289 1.75 18C1.75 20.0711 3.42893 21.75 5.5 21.75C7.57107 21.75 9.25 20.0711 9.25 18ZM5.5 15.75C6.74264 15.75 7.75 16.7574 7.75 18C7.75 19.2426 6.74264 20.25 5.5 20.25C4.25736 20.25 3.25 19.2426 3.25 18C3.25 16.7574 4.25736 15.75 5.5 15.75Z" fill="#ffffff"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5 14.25C20.5711 14.25 22.25 15.9289 22.25 18C22.25 20.0711 20.5711 21.75 18.5 21.75C16.4289 21.75 14.75 20.0711 14.75 18C14.75 15.9289 16.4289 14.25 18.5 14.25ZM20.75 18C20.75 16.7574 19.7426 15.75 18.5 15.75C17.2574 15.75 16.25 16.7574 16.25 18C16.25 19.2426 17.2574 20.25 18.5 20.25C19.7426 20.25 20.75 19.2426 20.75 18Z" fill="#ffffff"></path> <path d="M7.20468 7.56231C7.51523 7.28821 7.54478 6.81426 7.27069 6.5037C6.99659 6.19315 6.52264 6.1636 6.21208 6.43769C4.39676 8.03991 3.25 10.3865 3.25 13C3.25 13.4142 3.58579 13.75 4 13.75C4.41421 13.75 4.75 13.4142 4.75 13C4.75 10.8347 5.69828 8.89187 7.20468 7.56231Z" fill="#ffffff"></path> <path d="M17.7879 6.43769C17.4774 6.1636 17.0034 6.19315 16.7293 6.5037C16.4552 6.81426 16.4848 7.28821 16.7953 7.56231C18.3017 8.89187 19.25 10.8347 19.25 13C19.25 13.4142 19.5858 13.75 20 13.75C20.4142 13.75 20.75 13.4142 20.75 13C20.75 10.3865 19.6032 8.03991 17.7879 6.43769Z" fill="#ffffff"></path> <path d="M10.1869 20.0217C9.7858 19.9184 9.37692 20.1599 9.27367 20.561C9.17043 20.9622 9.41192 21.3711 9.81306 21.4743C10.5129 21.6544 11.2458 21.75 12 21.75C12.7542 21.75 13.4871 21.6544 14.1869 21.4743C14.5881 21.3711 14.8296 20.9622 14.7263 20.561C14.6231 20.1599 14.2142 19.9184 13.8131 20.0217C13.2344 20.1706 12.627 20.25 12 20.25C11.373 20.25 10.7656 20.1706 10.1869 20.0217Z" fill="#ffffff"></path> </g></svg>
                    </div>
                    <h1 class="text-2xl text-center font-bold pt-8 text-white">ShareBYOU</h1>
                    <p class="font-medium text-center pt-4 text-white">Spazio dedicato alla condivisione di contenuti da parte degli utenti come video corsi, analisi e molto altro</p>
                    <div class="flex-grow flex justify-center items-end">
                        <p class="font-semibold text-lg text-red-500 text-center">In Arrivo!</p>
                    </div>
                </div>
            </div>
            <div class="h-[400px] border border-gray-300 shadow-xl rounded-xl bg-secondary max-w-[18rem] md:h-[430px]  md:basis-1/3 hover:scale-110 focus:scale-110 transition-all duration-300 ease-in-out">
                <div class="flex flex-col bg-[url('/public/img/blue_card.svg')] bg-cover w-full h-full rounded-xl pt-12 pb-8 px-6">
                    <div class="flex justify-center items-center">
                        <svg class="aspect-square w-16" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>ic_fluent_bot_24_regular</title> <desc>Created with Sketch.</desc> <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ic_fluent_bot_24_regular" fill="#ffffff" fill-rule="nonzero"> <path d="M17.7530511,13.999921 C18.9956918,13.999921 20.0030511,15.0072804 20.0030511,16.249921 L20.0030511,17.1550008 C20.0030511,18.2486786 19.5255957,19.2878579 18.6957793,20.0002733 C17.1303315,21.344244 14.8899962,22.0010712 12,22.0010712 C9.11050247,22.0010712 6.87168436,21.3444691 5.30881727,20.0007885 C4.48019625,19.2883988 4.00354153,18.2500002 4.00354153,17.1572408 L4.00354153,16.249921 C4.00354153,15.0072804 5.01090084,13.999921 6.25354153,13.999921 L17.7530511,13.999921 Z M17.7530511,15.499921 L6.25354153,15.499921 C5.83932796,15.499921 5.50354153,15.8357075 5.50354153,16.249921 L5.50354153,17.1572408 C5.50354153,17.8128951 5.78953221,18.4359296 6.28670709,18.8633654 C7.5447918,19.9450082 9.44080155,20.5010712 12,20.5010712 C14.5599799,20.5010712 16.4578003,19.9446634 17.7186879,18.8621641 C18.2165778,18.4347149 18.5030511,17.8112072 18.5030511,17.1550005 L18.5030511,16.249921 C18.5030511,15.8357075 18.1672647,15.499921 17.7530511,15.499921 Z M11.8985607,2.00734093 L12.0003312,2.00049432 C12.380027,2.00049432 12.6938222,2.2826482 12.7434846,2.64872376 L12.7503312,2.75049432 L12.7495415,3.49949432 L16.25,3.5 C17.4926407,3.5 18.5,4.50735931 18.5,5.75 L18.5,10.254591 C18.5,11.4972317 17.4926407,12.504591 16.25,12.504591 L7.75,12.504591 C6.50735931,12.504591 5.5,11.4972317 5.5,10.254591 L5.5,5.75 C5.5,4.50735931 6.50735931,3.5 7.75,3.5 L11.2495415,3.49949432 L11.2503312,2.75049432 C11.2503312,2.37079855 11.5324851,2.05700336 11.8985607,2.00734093 L12.0003312,2.00049432 L11.8985607,2.00734093 Z M16.25,5 L7.75,5 C7.33578644,5 7,5.33578644 7,5.75 L7,10.254591 C7,10.6688046 7.33578644,11.004591 7.75,11.004591 L16.25,11.004591 C16.6642136,11.004591 17,10.6688046 17,10.254591 L17,5.75 C17,5.33578644 16.6642136,5 16.25,5 Z M9.74928905,6.5 C10.4392523,6.5 10.9985781,7.05932576 10.9985781,7.74928905 C10.9985781,8.43925235 10.4392523,8.99857811 9.74928905,8.99857811 C9.05932576,8.99857811 8.5,8.43925235 8.5,7.74928905 C8.5,7.05932576 9.05932576,6.5 9.74928905,6.5 Z M14.2420255,6.5 C14.9319888,6.5 15.4913145,7.05932576 15.4913145,7.74928905 C15.4913145,8.43925235 14.9319888,8.99857811 14.2420255,8.99857811 C13.5520622,8.99857811 12.9927364,8.43925235 12.9927364,7.74928905 C12.9927364,7.05932576 13.5520622,6.5 14.2420255,6.5 Z" id="🎨-Color"> </path> </g> </g> </g></svg>
                    </div>
                    <h1 class="text-2xl text-center font-bold pt-8 text-white">Assistente AI</h1>
                    <p class="font-medium text-center pt-4 text-white">Un consulente finanziario disponibile 24/7 in grado di schiarire qualsiasi tipo di dubbio</p>
                    <div class="flex-grow flex justify-center items-end">
                        <p class="font-semibold text-lg text-red-500 text-center">In Arrivo!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>        
    {{-- FAQ --}}
    <section class="bg-white px-[5vw] mt-10 pb-20 lg:pb-24">
        <div class="pb-8">
            <h1 class="text-center text-title text-5xl font-bold lg:text-6xl watch fade-in">
                FAQs
            </h1>
        </div>
        <div class="flex flex-col gap-4 w-[80vw] m-auto md:w-[45rem]">
            {{-- 1° domanda --}}
            <div id="faq" class="w-full border border-gray-300 rounded-xl hover:bg-gray-50 cursor-pointer py-5 px-6">
                <div id="question" class="flex justify-between items-center">
                    <h3 class="text-lg font-medium">
                        Come funziona?
                    </h3>
                    <div id="plus-minus-svg" class="w-6 h-6 rounded-full border-2 border-primary flex justify-center items-center">
                        <div id="line_1" class="w-3 h-[2px] rounded-xl bg-primary transition-all duration-700 ease-in-out"></div>
                        <div id="line_2" class="w-[2px] h-3 bg-primary absolute transition-all duration-700 ease-in-out"></div>
                    </div>
                </div>
                <div id="answer" class="max-h-0 overflow-hidden transition-all duration-700 ease-[cubic-bezier(.215, .61, .355, 1)]">
                    <p class="py-5 px-6">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ex quaerat incidunt esse quasi, magnam quas natus corrupti distinctio, delectus molestias perspiciatis aspernatur voluptate consequatur! Rerum hic similique doloribus natus.
                    </p>
                </div>
            </div>
            {{-- 2° domanda --}}
            <div id="faq" class="w-full border border-gray-300 rounded-xl hover:bg-gray-50 cursor-pointer py-5 px-6">
                <div id="question" class="flex justify-between items-center">
                    <h3 class="text-lg font-medium">
                        Come funziona?
                    </h3>
                    <div id="plus-minus-svg" class="w-6 h-6 rounded-full border-2 border-primary flex justify-center items-center">
                        <div id="line_1" class="w-3 h-[2px] rounded-xl bg-primary transition-all duration-700 ease-in-out"></div>
                        <div id="line_2" class="w-[2px] h-3 bg-primary absolute transition-all duration-700 ease-in-out"></div>
                    </div>
                </div>
                <div id="answer" class="max-h-0 overflow-hidden transition-all duration-700 ease-[cubic-bezier(.215, .61, .355, 1)]">
                    <p class="py-5 px-6">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ex quaerat incidunt esse quasi, magnam quas natus corrupti distinctio, delectus molestias perspiciatis aspernatur voluptate consequatur! Rerum hic similique doloribus natus.
                    </p>
                </div>
            </div>
            {{-- 3° domanda --}}
            <div id="faq" class="w-full border border-gray-300 rounded-xl hover:bg-gray-50 cursor-pointer py-5 px-6">
                <div id="question" class="flex justify-between items-center">
                    <h3 class="text-lg font-medium">
                        Come funziona?
                    </h3>
                    <div id="plus-minus-svg" class="w-6 h-6 rounded-full border-2 border-primary flex justify-center items-center">
                        <div id="line_1" class="w-3 h-[2px] rounded-xl bg-primary transition-all duration-700 ease-in-out"></div>
                        <div id="line_2" class="w-[2px] h-3 bg-primary absolute transition-all duration-700 ease-in-out"></div>
                    </div>
                </div>
                <div id="answer" class="max-h-0 overflow-hidden transition-all duration-700 ease-[cubic-bezier(.215, .61, .355, 1)]">
                    <p class="py-5 px-6">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ex quaerat incidunt esse quasi, magnam quas natus corrupti distinctio, delectus molestias perspiciatis aspernatur voluptate consequatur! Rerum hic similique doloribus natus.
                    </p>
                </div>
            </div>
        </div>
        <script>
            const faqs = document.querySelectorAll('#faq');

            faqs.forEach(faq => {
                faq.addEventListener("click", () => {
                    faq.classList.toggle('active');
                })
            });
        </script>
    </section>
@endsection
    