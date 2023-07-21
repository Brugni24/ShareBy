@extends('layouts.web-layout')

@section('content')
    {{-- first slide --}}
    <section class="px-[5vw]">
        <div class="flex flex-col items-center justify-center py-16 md:py-20 xmd:py-24">
            <h1 class="text-center text-7xl font-bold text-title sm:text-8xl md:text-[7rem] xmd:text-9xl">I nostri prodotti</h1>
            <div class="py-12 px-6 md:px-0 md:py-20 w-[80vw] xmd:w-[70vw] xmd:py-24 xl:w-[60vw]">
                <p class="text-center text-lg text-gray-500 md:text-xl xl:text-2xl">
                    Sono collegati tra loro da un filo logico comune: aiutare le persone a migliorare 
                    la propria FINANCIAL AWARNESS e comprendere al meglio le società su cui si vuole investire
                </p>
            </div>
            <div class="w-[80vw] md:py-4 xmd:w-[70vw] xl:w-[65vw]">
                <img src="/img/products_tour.svg" alt="Products Tour">
            </div>
        </div>
    </section>
    {{-- Algoritmo di analisi aziendale --}}
    <section class="px-[5vw]">
        <div class="flex flex-col items-center justify-center md:py-12">
            <h1 class="text-center text-5xl font-bold text-title leading-tight sm:text-6xl sm:leading-[4.5rem] xmd:text-7xl xl:text-8xl">Algoritmo di analisi aziendale</h1>
            <div class="py-12 w-[80vw] xmd:w-[70vw] xmd:py-16">
                <p class="text-center text-lg text-gray-500 md:text-xl xl:text-2xl">
                    L’obiettivo dell’analizi aziendale è quello di dare una visione a 360 gradi dell’azienda d’interesse, 
                    combinando gli indici e i margini più importanti della strategia d’impresa
                </p>
            </div>
            <div class="flex items-center justify-center w-[80vw] h-fit border rounded-3xl my-12 py-10 shadow-md sm:mb-20 xl:mb-28">
                <img class="w-[80%]" src="/img/analysis_charts.png" alt="">
            </div>
            <div class="flex items-center justify-center">
                <a href="{{ url('/dashboard')}}" class="px-6 py-5 text-md rounded-[2rem] bg-primary text-white font-semibold xl:px-12 xl:py-7 xl:text-xl">
                    Effettua la Prova Gratuita
                </a>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center py-28">
            <h1 class="text-primary text-4xl font-bold uppercase sm:text-5xl md:text-6xl xl:text-7xl">Come funziona?</h1>
            <div class="pt-12 w-[80vw] xmd:w-[70vw]">
                <p class="text-center text-lg text-gray-500 md:text-x xl:text-2xl">
                    Il nostro algoritmo si basa su un ottimizzazione economica e statitistica 
                    per sfruttare al meglio l’innovativa tecnologia sul mercato
                </p>
                <p class="text-center text-lg text-gray-500 py-6 md:text-xl xl:text-2xl">
                    Si basa su tre tipi di analisi:
                </p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <div class="flex flex-col justify-center items-center xl:py-10">
                    <div class="bg-[#F0F6FF] w-14 aspect-square rounded-xl my-10 p-2">
                        <svg class="w-full aspect-square" fill="#0E5ECC" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve" stroke="#000000" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:none;} </style> <g> <path d="M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10S17.5,2,12,2z M12,20c-4.5,0-8-3.5-8-8s3.5-8,8-8s8,3.5,8,8 S16.5,20,12,20z"></path> <polygon points="9.8,16.8 6.1,13.2 7.5,11.7 9.8,14 15.5,7.9 17,9.3 "></polygon> </g> <rect class="st0" width="24" height="24"></rect> </g></svg>
                    </div>
                    <h1 class="text-center text-4xl font-semibold text-title sm:text-[2.6rem] md:text-5xl xl:text-6xl">Analisi di redditività</h1>
                    <div class="w-[80vw] xmd:w-[70vw]">
                        <p class="text-center text-gray-500 text-lg py-8 md:text-xl xl:text-2xl">
                            Quest’analisi si avvale di alcuni indici come ROE, ROS e ROI, 
                            che vengono opportunamente confrontati con la media nazionale, 
                            così da ricavare il trend sulla reddività aziendale rispetto al mercato di riferimento
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center xl:pb-10">
                    <div class="bg-[#F0F6FF] w-14 aspect-square rounded-xl my-10">
                        <img src="" alt="">
                    </div>
                    <h1 class="text-center text-4xl font-semibold text-title sm:text-[2.6rem] md:text-5xl xl:text-6xl">Analisi della struttura patrimoniale</h1>
                    <div class="w-[80vw] xmd:w-[70vw]">
                        <p class="text-center text-gray-500 text-lg py-8 md:text-xl xl:text-2xl">
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
                    <h1 class="text-center text-4xl font-semibold text-title sm:text-[2.6rem] md:text-5xl xl:text-6xl">Analisi sull' indebitamento pubblico</h1>
                    <div class="w-[80vw] xmd:w-[70vw]">
                        <p class="text-center text-gray-500 text-lg py-8 md:text-xl xl:text-2xl">
                            La struttura patrimoniale viene analizzata tramite l’uso del ROD, Leverage e Leva finanziaria, 
                            strumenti che vengono valutati sia in maniera statica che in maniera dinamica con 
                            l’utilizzo di contatori
                        </p>
                    </div>
                </div>
                <div class="flex items-center justify-center pt-20">
                    <a href="{{ url('/dashboard')}}" class="px-6 py-5 text-md rounded-[2rem] bg-primary text-white font-semibold xl:px-12 xl:py-7 xl:text-xl">
                        Effettua la Prova Gratuita
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- ShareBYOU --}}
    <section class="px-[5vw]">
        <div class="flex flex-col items-center justify-center py-8 md:py-16">
            <h1 class="text-center text-5xl font-bold text-title sm:text-6xl md:text-7xl xmd:text-8xl">ShareBYOU</h1>
            <div class="flex flex-col pt-12 xmd:grid items-center justify-center grid-cols-2 xmd:pt-0">
                <div class="flex items-center justify-center">
                    <p class="text-center text-lg text-gray-500 md:text-xl xl:text-2xl">
                        ShareBYOU è il nostro servizio B2B che permette ai professionisti di creare e gestire 
                        la propria community attraverso un programma di fidelizzazione custom che viene stabilito 
                        dai professionisti.
                    </p>
                </div>
                <div class="flex items-center justify-center my-12 sm:my-16 md:my-20">
                    <img class="h-[24rem] sm:h-[30rem] xmd:h-[34rem] xl:h-[38rem]" src="/img/shareBYOU_post.svg" alt="Products Tour">
                </div>
            </div>
            <div class="flex flex-col gap-16 justify-around items-center pt-12 pb-16 bg-primary shadow-md my-12 rounded-[3rem] mx-[5%] sm:px-10 xmd:w-[75vw] xl:w-[70vw] xl:my-16">
                <div class="flex flex-col justify-center items-center">
                    <div class="bg-white w-16 aspect-square rounded-xl p-2">
                        <svg class="aspect-square w-full" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 19H20M4 5V16H20V5L16 9L12 5L8 9L4 5Z" stroke="#0E5ECC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </div>
                    <h1 class="text-white text-center font-bold text-2xl pt-8 pb-3 sm:pb-5 sm:text-4xl">Remunerazione</h1>
                    <div class="px-6">
                        <p class=" text-center text-white font-regular sm:text-lg md:text-xl xl:text-2xl">
                            I "professionisti” potranno guadagnare dalla pubblicazione di contenuti esclusivi.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div class="bg-white w-16 aspect-square rounded-xl p-3">
                        <svg class="aspect-square w-full" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#0E5ECC"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g clip-path="url(#clip0_901_2869)"> <path d="M31 3V21C31 21.55 30.55 22 30 22H16H2C1.45 22 1 21.55 1 21V3C1 2.45 1.45 2 2 2H16H30C30.55 2 31 2.45 31 3Z" fill="#"></path> <path d="M10 31L16 25M16 25L22 31M16 25V22H2C1.447 22 1 21.553 1 21V3C1 2.447 1.447 2 2 2H30C30.553 2 31 2.447 31 3V21C31 21.553 30.553 22 30 22H19M16 1V2M10 10H22M10 14H15" stroke="#0E5ECC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> <defs> <clipPath id="clip0_901_2869"> <rect width="32" height="32" fill="white"></rect> </clipPath> </defs> </g></svg>
                    </div>
                    <h1 class="text-white text-center font-bold text-2xl pt-8 pb-3 sm:pb-5 sm:text-4xl">Contenuti Esclusivi</h1>
                    <div class="px-6">
                        <p class="text-center text-white font-regular sm:text-lg md:text-xl xl:text-2xl">
                            I "professionisti" potranno pubblicare analisi finanziarie, consulenze, video-corsi e articoli.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- PYLO --}}
    <section class="px-[5vw]">
        <div class="flex flex-col items-center justify-center pt-20 pb-28">
            <h1 class="text-center text-8xl font-bold text-title xmd:text-7xl">PYLO</h1>
            <div class="flex flex-col items-center justify-center pt-10 xmd:grid grid-cols-2 xl:w-[80vw]">
                <div class="flex items-center justify-center">
                    <p class="text-center text-lg text-gray-500 w-[80%] md:text-xl xmd:w-[97%] xl:text-2xl">
                        Il sistema di intelligenza artificiale, che ti permette di chiedere 24h/7 ogni tipo di domanda, 
                        dubbio o curiosità, proprio come se fosse un consulente fisico!
                    </p>
                </div>
                <div class="flex items-center justify-center m-[7vw] mt-12 md:mt-20 xmd:m-0">
                    <img class="" src="/img/ai_bot.svg" alt="Products Tour">
                </div>
            </div>
        </div>
    </section>
@endsection