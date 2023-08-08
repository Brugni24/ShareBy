@extends('layouts.web-layout')

@section('content')
    {{-- Chi siamo --}}
    <section class="px-[5vw] pt-12 pb-16 md:pt-16 md:pb-20 bg-secondary">
        <h1 class="text-white text-[2.75rem] leading-[3rem] font-extrabold text-center sm:text-[3.5rem] sm:leading-[3.85rem] lg:text-[3.75rem] lg:leading-[4.125rem] xl:text-[4.5rem] xl:leading-[4.95rem] xxl:text-[4.75rem] xxl:leading-[5.225rem]">
            Chi siamo?
        </h1>
        <div class="m-auto pt-4 px-[5vw] lg:pt-6 lg:px-0">
            <p class="text-white text-center m-auto font-medium text-lg max-w-[700px]">
                ShareBy è la prima piattaforma che semplifica complicate analisi finanziarie, fino ad ora accessibili solo agli esperti del settore, 
                rendendole facili, veloci, intutitive ed accessibili a chiunque sfruttando la stretta connessione tra l’informatizzazione e il mondo finanziario.
            </p>
        </div>
    </section>
    <section class="mx-[5vw] my-16 sm:my-20">
        <h2 class="text-center text-4xl font-bold text-secondary sm:mb-12 sm:text-[2.75rem] md:text-[3rem] lg:text-[3.25rem] xl:text-6xl watch fade-in">
            Mission aziendale
        </h2>
        <div class="mt-4 lg:mt-6 px-[5vw] md:px-0">
            <p class="text-gray-800 m-auto text-center font-medium text-lg max-w-[700px]">
                L’Italia è un paese con una bassa educazione finanziaria, solo il 30% dei giovani ha delle buone conoscenze finanziarie e il 90% degli italiani vorrebbe introdurre l’educazione finanziaria nelle scuole.
            </p>
        </div>
        {{-- statistiche --}}
        <div class="flex flex-col w-[70vw] m-auto my-10 md:py-14 sm:max-w-[500px]">
            <div class="self-end">
                <span class="font-bold text-sm pr-2 md:text-base">32%</span>
            </div>
            <div class="relative h-4 rounded-xl border md:mb-1">
                <div class="absolute top-0 left-0 bg-primary rounded-xl h-full w-[32%]"></div>
                <div class="absolute top-0 left-0 bg-primary rounded-xl opacity-10 h-full w-[100%]"></div>
            </div>
            <div>
                <span class="font-bold text-sm pl-1 md:text-base">Difficoltà nel comprendere la materia</span>
            </div>
            <div class="self-end pt-4">
                <span class="font-bold text-sm pr-2 md:text-base">81%</span>
            </div>
            <div class="relative h-4 rounded-xl border md:mb-1">
                <div class="absolute top-0 left-0 bg-primary rounded-xl h-full w-[81%]"></div>
                <div class="absolute top-0 left-0 bg-primary rounded-xl opacity-10 h-full w-[100%]"></div>
            </div>
            <div>
                <span class="font-bold text-sm pl-1 md:text-base">Complessità nel trovare contenuti o referenti</span>
            </div>
        </div>
        <div class="m-auto px-[5vw] md:px-0">
            <p class="text-gray-800 m-auto text-center font-medium text-lg max-w-[700px]">
                La <b>nostra mission</b> è quella di ridurre questo divario informazionale su mondo della finanza cos’ da renderlo libero , democratico e facilmente accessibile.
            </p>
        </div>
    </section>
    {{-- immagini team --}}
    <section class="py-16">
        <h1 class="text-center text-4xl font-bold text-secondary sm:mb-12 sm:text-[2.75rem] md:text-[3rem] lg:text-[3.25rem] xl:text-6xl watch fade-in">
            Team
        </h1>
        <div class="flex flex-col items-center justify-items-center gap-10 px-[5vw] my-8 lg:mb-24 sm:grid sm:grid-cols-2 md:grid-cols-6">
            <div class="md:col-span-2">
                <div class="mx-auto w-[140px] aspect-square bg-white rounded-full border border-gray-500">
                    <img src="" alt="">
                </div>
                <p class="mx-auto text-center font-regular pt-6">
                    Nome Cognome<br>
                    Funder & CEO
                </p>
            </div>
            <div class="md:col-span-2">
                <div class="mx-auto w-[140px] aspect-square bg-white rounded-full border border-gray-500">
                    <img src="" alt="">
                </div>
                <p class="mx-auto text-center font-regular pt-6">
                    Nome Cognome<br>
                    Funder & CEO
                </p>
            </div>
            <div class="md:col-span-2">
                <div class="mx-auto w-[140px] aspect-square bg-white rounded-full border border-gray-500">
                    <img src="" alt="">
                </div>
                <p class="mx-auto text-center font-regular pt-6">
                    Nome Cognome<br>
                    Funder & CEO
                </p>
            </div>
            <div class="md:col-span-3">
                <div class="mx-auto w-[140px] aspect-square bg-white rounded-full border border-gray-500">
                    <img src="" alt="">
                </div>
                <p class="mx-auto text-center font-regular pt-6">
                    Nome Cognome<br>
                    Funder & CEO
                </p>
            </div>
            <div class="col-span-2 md:col-span-3">
                <div class="mx-auto w-[140px] aspect-square bg-white rounded-full border border-gray-500">
                    <img src="" alt="">
                </div>
                <p class="mx-auto text-center font-regular pt-6">
                    Nome Cognome<br>
                    Funder & CEO
                </p>
            </div>
        </div>
    </section>
@endsection