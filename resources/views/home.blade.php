@extends('layouts.web-layout')

@section('content')
    {{-- landing page --}}
    <section style="background-image: url(/img/bg_landing_page.jpg)" class="bg-cover bg-center">
        <div class="px-[5%]">
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
@endsection
    