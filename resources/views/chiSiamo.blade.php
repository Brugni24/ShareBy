@extends('layouts.web-layout')

@section('content')
    {{-- first slide --}}
    <section class="bg-gradient-to-b from-secondary to-[#0C1031] ">
        <div class="flex flex-col justify-center items-center py-[80px] sm:min-h-[80vh] mx-[5vw] ">
            <h1 class="gradient-white-title">
                Chi siamo?
            </h1>
            <p class="sottotitolo ">
                ShareBy è una neo start-up che opera nel settore dell’educazione finanziaria sfruttando 
                innovativi sistemi informatici, quali l'intelligenza artificiale ed algoritmi.
            </p>
        </div>
    </section>
    {{-- brand vision --}}
    <section id="brand-vision" class="bg-gradient-to-b from-[#0C1031] to-[#080C26] ">
        <div class="flex flex-col justify-center items-center py-[60px] mx-[5vw] ">
            <x-page-link class="">{{ __('Brand Vision') }}</x-page-link>
            <h2 class="gradient-white-title">
                La finanza a portata di tutti
            </h2>
            <div class="bg-gradient-to-b from-secondary to-[#080C26] flex flex-col mx-[5vw] rounded-[30px] my-[40px] p-[10%] md:p-[50px] max-w-[550px] md:flex-row md:max-w-[800px] md:gap-[40px] lg:gap-[50px]">
                <div class="basis-1/2 ">
                    <h3 class="text-white font-bold text-[22px] lg:text-[24px]">
                        La situazione in Italia:
                    </h3>
                    <p class="mt-1 text-left lg:text-[18px]">
                        L’Italia è un paese con una bassa educazione finanziaria, solo il 30% dei giovani ha delle buone conoscenze 
                        finanziarie e il 90% degli italiani vorrebbe introdurre l’educazione finanziaria nelle scuole.
                    </p>
                </div>
                <div class="basis-1/2 ">
                    <div class="flex flex-col mx-auto mt-[30px] sm:max-w-[500px] md:mt-0 ">
                        <h3 class="text-white font-bold text-[22px] lg:text-[24px]">
                            Altri numeri:
                        </h3>
                        <div class="self-end">
                            <span class="text-white font-bold text-sm pr-2 md:text-base">32%</span>
                        </div>
                        <div class="relative h-4 rounded-xl border md:mb-1">
                            <div class="absolute top-0 left-0 bg-primary rounded-xl h-full w-[32%]"></div>
                            <div class="absolute top-0 left-0 bg-primary rounded-xl opacity-10 h-full w-[100%]"></div>
                        </div>
                        <div>
                            <p class="text-white text-left font-bold text-sm ml-1 mt-1 md:text-base ">Difficoltà nel comprendere la materia</p>
                        </div>
                        <div class="self-end pt-4">
                            <span class="text-white font-bold text-sm pr-2 md:text-base">81%</span>
                        </div>
                        <div class="relative h-4 rounded-xl border md:mb-1">
                            <div class="absolute top-0 left-0 bg-primary rounded-xl h-full w-[81%]"></div>
                            <div class="absolute top-0 left-0 bg-primary rounded-xl opacity-10 h-full w-[100%]"></div>
                        </div>
                        <div>
                            <p class="text-white text-left font-bold text-sm ml-1 mt-1 md:text-base ">Complessità nel trovare contenuti o referenti</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-[30px] mt-[30px] mb-[100px] md:flex-row ">
                <div class="flex flex-col ">
                    <div class="inline-flex justify-center leading-tight">
                        <span class="font-bold text-[50px] lg:text-[70px] text-white">49.2</span>
                        <span class="font-bold text-[50px] lg:text-[70px] text-primary">Mln</span>
                    </div>
                    <div class="">
                        <p class="sottotitolo">Italiani interessanti<br>a temi finanziari</p>
                    </div>
                </div>
                <div class="flex flex-col ">
                    <div class="inline-flex justify-center leading-tight">
                        <span class="font-bold text-[50px] lg:text-[70px] text-white">19</span>
                        <span class="font-bold text-[50px] lg:text-[70px] text-primary">Mln</span>
                    </div>
                    <div class="">
                        <p class="sottotitolo">Italiani che si<br>informano sui social</p>
                    </div>
                </div>
                <div class="flex flex-col ">
                    <div class="inline-flex justify-center leading-tight">
                        <span class="font-bold text-[50px] lg:text-[70px] text-white">7.2</span>
                        <span class="font-bold text-[50px] lg:text-[70px] text-primary">Mln</span>
                    </div>
                    <div class="">
                        <p class="sottotitolo">Italiani online<br>interessati alla finanza</p>
                    </div>
                </div>
            </div>
            <h2 class="gradient-white-title">
                La nostra Vision:
            </h2>
            <p class="paragrafo ">
                ShareBy mira a introdurre progressivamente sul mercato una serie di prodotti, ciascuno con un unico obiettivo: 
                semplificare e agevolare l'investimento, l'analisi e lo studio di aziende, mercati e titoli.
                <br><br>
                Attraverso questa strategia, delineeremo una gamma di prodotti, destinati a perfezionarsi ed evolversi nel 
                tempo grazie alle crescenti risorse a disposizione.
            </p>
        </div>
    </section>
    {{-- mission --}}
    <section id="mission-aziendale" class="">
        <div class="flex flex-col justify-center items-center py-[60px] mx-[5vw] ">
            <x-page-link class="">{{ __('Mission Aziendale') }}</x-page-link>
            <h2 class="gradient-white-title">
                La nostra Mission:
            </h2>
            <p class="paragrafo ">
                ShareBy mira a introdurre progressivamente sul mercato una serie di prodotti, ciascuno con un 
                unico obiettivo: semplificare e agevolare l'investimento, l'analisi e lo studio di aziende, mercati e titoli.  
                <br><br>
                Attraverso questa strategia, delineeremo una gamma di prodotti, destinati a perfezionarsi ed evolversi 
                nel tempo grazie alle crescenti risorse a disposizione.
            </p>
        </div>
    </section>
    {{-- perchè shareBy? --}}
    <section id="perche-shareby" class="">
        <div class="flex flex-col justify-center items-center py-[60px] mx-[5vw] ">
            <x-page-link class="">{{ __('Perchè ShareBy?') }}</x-page-link>
            <h2 class="gradient-white-title">
                La nostra forza è la semplicità
            </h2>
            <p class="paragrafo ">
                Il nostro target di riferimento è differente rispetto a quello dei competitor che 
                cercano di promuovere contenuti con un approccio tecnico e complesso.
                <br><br>
                Al contrario, ShareBy intende intercettare un pubblico giovane e inesperto che vuole approcciare 
                al mondo degli investimenti proponendo un servizio di qualità, ma accessibile a chiunque.
            </p>
        </div>
    </section>
    {{-- immagini team --}}
    <section id="team" class="">
        <div class="flex flex-col justify-center items-center py-[60px] mx-[5vw] ">
            <x-page-link class="">{{ __('Team') }}</x-page-link>
            <h1 class="gradient-white-title">
                Team
            </h1>
            <div class="flex flex-col items-center justify-items-center gap-[30px] px-[5vw] my-8 lg:mb-24 sm:grid sm:grid-cols-2 md:grid-cols-6">
                <div class="md:col-span-2 md:px-[50px]">
                    <div class="mx-auto w-[140px] aspect-square bg-white rounded-full border border-gray-500">
                        <img src="" alt="">
                    </div>
                    <p class="mx-auto text-center font-regular pt-6">
                        Nome Cognome<br>
                        Funder & CEO
                    </p>
                </div>
                <div class="md:col-span-2 md:px-[50px]">
                    <div class="mx-auto w-[140px] aspect-square bg-white rounded-full border border-gray-500">
                        <img src="" alt="">
                    </div>
                    <p class="mx-auto text-center font-regular pt-6">
                        Nome Cognome<br>
                        Funder & CEO
                    </p>
                </div>
                <div class="md:col-span-2 md:px-[50px]">
                    <div class="mx-auto w-[140px] aspect-square bg-white rounded-full border border-gray-500">
                        <img src="" alt="">
                    </div>
                    <p class="mx-auto text-center font-regular pt-6">
                        Nome Cognome<br>
                        Funder & CEO
                    </p>
                </div>
                <div class="md:col-span-3 md:px-[50px]">
                    <div class="mx-auto w-[140px] aspect-square bg-white rounded-full border border-gray-500">
                        <img src="" alt="">
                    </div>
                    <p class="mx-auto text-center font-regular pt-6">
                        Nome Cognome<br>
                        Funder & CEO
                    </p>
                </div>
                <div class="col-span-2 md:col-span-3 md:px-[50px]">
                    <div class="mx-auto w-[140px] aspect-square bg-white rounded-full border border-gray-500">
                        <img src="" alt="">
                    </div>
                    <p class="mx-auto text-center font-regular pt-6">
                        Nome Cognome<br>
                        Funder & CEO
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection