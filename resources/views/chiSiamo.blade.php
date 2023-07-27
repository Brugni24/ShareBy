@extends('layouts.web-layout')

@section('content')
    {{-- Chi siamo --}}
    <section class="px-[5vw] pt-[5vh] pb-[10vh] md:pt-[10vh] md:pb-[15vh] bg-secondary">
        <h1 class="text-center text-5xl font-bold text-white sm:text-7xl xl:text-[5rem] watch fade-in">Chi siamo?</h1>
        <div class="m-auto pt-[3vh] px-[5vw] lg:pt-[5vh] lg:px-0">
            <p class="text-white text-center m-auto font-medium text-lg max-w-[700px] watch fade-in">
                ShareBy è la prima piattaforma che semplifica complicate analisi finanziarie, fino ad ora accessibili solo agli esperti del settore, 
                rendendole facili, veloci, intutitive ed acessibili a chiunque... <br> E lo fa sfruttando la stretta connessione tra l’informatizzazione e il mondo finanziario.
            </p>
        </div>
    </section>
    <section class="px-[5vw] py-[5vh] sm:py-[10vh]">
        <h2 class="text-3xl text-secondary font-bold text-center sm:text-4xl md:text-[2.75rem] lg:text-5xl">Mission aziendale</h2>
        <div class="pt-3 lg:pt-[3vh] px-[5vw] md:px-0">
            <p class="text-gray-800 m-auto text-center font-medium text-lg max-w-[700px]">L’Italia è un paese con una bassa educazione finanziaria, solo il 30% dei giovani ha delle buone conoscenze finanziarie e il 90% degli italiani vorrebbe introdurre l’educazione finanziaria nelle scuole.</p>
        </div>
        <div class="flex flex-col w-[70vw] m-auto py-[5vh] md:py-[7vh] sm:max-w-[500px]">
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
            <p class="text-gray-800 m-auto text-center font-medium text-lg max-w-[700px]">La <b>nostra mission</b> è quella di ridurre questo divario informazionale su mondo della finanza cos’ da renderlo libero , democratico e facilmente accessibile.</p>
        </div>
    </section>
    {{-- immagini team --}}
    <section class="py-[5vh]">
        <h1 class="text-4xl text-secondary font-bold text-center md:text-[2.75rem] lg:text-5xl">Team</h1>
        <div class="flex flex-col items-center gap-16 px-[5vw] py-12 sm:grid grid-cols-2 justify-items-center xmd:grid-cols-6 lg:pb-24 pt-16">
            <div class="w-[40vw] sm:w-[25vw] xmd:w-[15vw] col-span-2 lg:w-[15vw] xl:w-[10vw]">
                <div class="m-auto aspect-square bg-white rounded-full border border-gray-500">
                    <img src="" alt="">
                </div>
                <p class="text-center font-regular pt-6">
                    Nome Cognome<br>
                    Funder & CEO
                </p>
            </div>
            <div class="w-[40vw] sm:w-[25vw] xmd:w-[17vw] col-span-2 lg:w-[15vw]">
                <div class="m-auto aspect-square bg-white rounded-full border border-gray-500 xmd:w-[15vw] xl:w-[10vw]">
                    <img src="" alt="">
                </div>
                <p class="text-center font-regular pt-6">
                    Nome Cognome<br>
                    Co-Funder & CFO
                </p>
            </div>
            <div class="w-[40vw] sm:w-[25vw] xmd:w-[15vw] col-span-2 lg:w-[15vw] xl:w-[10vw]">
                <div class="m-auto aspect-square bg-white rounded-full border border-gray-500">
                    <img src="" alt="">
                </div>
                <p class="text-center font-regular pt-6">
                    Nome Cognome<br>
                    Co-Funder
                </p>
            </div>
            <div class="w-[40vw] sm:w-[25vw] xmd:w-[15vw] col-span-3 lg:w-[15vw] xl:w-[10vw]">
                <div class="m-auto aspect-square bg-white rounded-full border border-gray-500">
                    <img src="" alt="">
                </div>
                <p class="text-center font-regular pt-6">
                    Nome Cognome<br>
                    Co-Funder
                </p>
            </div>
            <div class="w-[40vw] sm:w-[25vw] col-span-2 xmd:w-[15vw] xmd:col-span-3 lg:w-[15vw] xl:w-[10vw]">
                <div class="m-auto aspect-square bg-white rounded-full border border-gray-500">
                    <img src="" alt="">
                </div>
                <p class="text-center font-regular pt-6">
                    Nome Cognome<br>
                    Co-Funder
                </p>
            </div>
        </div>
    </section>
@endsection