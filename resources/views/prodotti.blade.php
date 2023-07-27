@extends('layouts.web-layout')

@section('content')
    {{-- first slide --}}
    <section class="px-[5vw] py-[5vh] sm:py-[7vh] min-h-[90vh]">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-center text-6xl font-bold text-secondary sm:text-7xl xl:text-[5rem] watch fade-in">I nostri servizi</h1>
            <p class="text-center text-lg text-gray-800 font-medium pt-[3vh] pb-[10vh] px-[7vw] md:px-0 md:max-w-[600px] watch fade-in">
                ShareBy offre una serie di servizi con lo scopo di aiutare le persone a migliorare 
                la propria FINANCIAL AWARNESS e comprendere al meglio le società su cui si intende investire
            </p>
            <div class="w-[80vw] md:w-[60vw] max-w-[700px]">
                <img src="/img/products_tour.svg" alt="Products Tour">
            </div>
        </div>
    </section>
    {{-- Algoritmo di analisi aziendale --}}
    <section class="lg:py-[7vh] xl:py-[12vh]">
        <div class="flex flex-col items-center justify-center px-[5vw]">
            <h1 class="text-center text-5xl font-bold text-secondary pb-[5vh] md:pb-[8vh] lg:text-[3.25rem] xl:text-6xl watch fade-in">
                Analisi Aziendale
            </h1>
            <div class="md:flex gap-6 md:pb-[5vh]">
                <div class="md:basis-[50%] md:flex items-center">
                    <img class="w-[80vw] m-auto max-w-[350px] md:max-w-[400px] md:w-[40vw]" src="/img/facile_veloce_intuitivo.svg" alt="Facile, Veloce, Intuitivo">
                </div>
                <div class="md:basis-[50%]">
                    <p class="text-lg text-gray-800 text-center font-medium px-[10vw] py-[5vh] max-w-[600px] md:px-6 md:pt-0 watch fade-in">
                        Abbiamo sviluppato un algortimo in grado di fornire velocemente una dettagliata analisi dei bilanci aziendali, che semplifica e riduce il tempo richiesto per valutare un investimento.
                    </p>
                    <img class="m-auto w-[80vw] pb-[5vh] max-w-[350px] md:max-w-[400px] md:w-[40vw]" src="/img/statistiche_analisi.svg" alt="Statistiche Analisi">
                </div>
            </div>
            <a href="{{url('/register')}}">
                <x-primary-button class="bg-primary py-3 px-6 border-4 text-lg border-primary hover:text-primary hover:bg-white">
                    Provala!
                </x-primary-button>
            </a>
        </div>
        <div class="my-[10vh] bg-secondary py-[10vh] w-full md:py-[15vh] md:my-[15vh]">
            <p class="px-[7vh] text-white font-medium m-auto text-lg text-center max-w-[700px] lg:px-0 watch fade-in">
                L’obiettivo dell’analisi aziendale è quello di dare una visione a 360 gradi dell’azienda d’interesse, combinando gli indici e i margini più importanti della strategia d’impresa.
            </p>
            <div class="w-[80%] m-auto p-[5%] max-w-[800px]">
                <img class="w-full bg-white rounded-xl p-[5%] my-[5vh] sm:my-[2vh]" src="/img/analysis_charts.png" alt="">
            </div>
            <div class="flex items-center justify-center">
                <a href="{{ url('/dashboard')}}">
                    <x-primary-button class="px-6 py-3 bg-primary text-white border-4 text-lg border-white hover:bg-white hover:text-primary hover:border-primary">
                        Prova!
                    </x-primary-button>
                </a>
            </div>
        </div>
        </div>
        <div class="flex flex-col items-center justify-center">
            <div class="">
                <h1 class="text-secondary text-[2rem] text-center sm:text-4xl md:text-5xl font-bold uppercase pb-2 md:pb-4 watch fade-in">Come funziona?</h1>
                <p class="text-center text-lg text-gray-800 font-medium px-[10vw] max-w-[700px] lg:px-0 watch fade-in">
                    Il nostro algoritmo si basa su un ottimizzazione economica e statitistica 
                    per sfruttare al meglio l’innovativa tecnologia sul mercato
                </p>
                <p class="text-center text-lg text-gray-800 font-medium pt-3 watch fade-in">
                    Si basa su tre tipi di analisi:
                </p>
            </div>
            <div class="flex flex-col items-center justify-center px-[10vw] gap-10 mt-[7vh] lg:flex-row md:gap-6 lg:px-[5vw] xl:gap-12">
                {{-- 1. Analisi di redditività --}}
                <div class="h-[58vh] border-2 border-gray-300 shadow-xl rounded-2xl max-w-[18rem] md:basis-1/3 hover:scale-110 focus:scale-110 transition-all duration-300 ease-in-out">
                    <div class="pt-8 pb-12 px-8">
                        <div class="m-auto flex items-center justify-center rounded-full aspect-square w-14 p-3 mb-3 bg-gray-300">
                            <h1 class="text-lg text-center font-bold text-secondary">1</h1>
                        </div>
                        <h1 class="text-2xl text-center text-secondary font-bold">Analisi Redditività</h1>
                        <p class="font-medium text-center text-gray-800 pt-4">
                            Quest’analisi si avvale di alcuni indici come ROE, ROS e ROI, 
                            che vengono opportunamente confrontati con la media nazionale, 
                            così da ricavare il trend sulla reddività aziendale rispetto al mercato di riferimento
                        </p>
                    </div>
                </div>
                {{-- 2. Analisi della struttura patrimoniale --}}
                <div class="h-[58vh] border-2 border-gray-300 shadow-xl rounded-2xl max-w-[18rem] md:basis-1/3 hover:scale-110 focus:scale-110 transition-all duration-300 ease-in-out">
                    <div class="pt-8 pb-12 px-6">
                        <div class="m-auto flex items-center justify-center rounded-full aspect-square w-14 p-3 mb-3 bg-primary">
                            <h1 class="text-lg text-center font-bold text-white">2</h1>
                        </div>
                        <h1 class="text-2xl text-center text-secondary font-bold">Analisi Struttura Patrimoniale</h1>
                        <p class="font-medium text-center text-gray-800 pt-4">
                            La struttura patrimoniale viene analizzata tramite l’uso dell’IGGC e MRI 
                            che vengono anch’essi valutati in maniera statica, confrontati con la media nazionale 
                            e in maniera dinamica, valutati tramite l’uso della statistica interferenziale
                        </p>
                    </div>
                </div>
                {{-- 3. Analisi sull'indebitamento pubblico  --}}
                <div class="h-[58vh] border-2 border-gray-300 shadow-xl rounded-2xl max-w-[18rem] md:basis-1/3 hover:scale-110 focus:scale-110 transition-all duration-300 ease-in-out">
                    <div class="pt-8 pb-12 px-6">
                        <div class="m-auto flex items-center justify-center rounded-full aspect-square w-14 p-3 mb-3 bg-secondary">
                            <h1 class="text-lg text-center font-bold text-white">3</h1>
                        </div>
                        <h1 class="text-2xl text-center text-secondary font-bold">Analisi Indebitamento Pubblico</h1>
                        <p class="font-medium text-center text-gray-800 pt-4">
                            La struttura patrimoniale viene analizzata tramite l’uso del ROD, Leverage e Leva finanziaria, 
                            strumenti che vengono valutati sia in maniera statica che in maniera dinamica con 
                            l’utilizzo di contatori
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center pt-[7vh]">
                <a href="{{ url('/dashboard')}}">
                    <x-primary-button class="px-6 py-3 bg-primary text-white border-4 text-lg border-primary hover:bg-white hover:text-primary hover:border-primary">
                        Prova!
                    </x-primary-button>
                </a>
            </div>
            </div>
        </div>
    </section>
    {{-- ShareBYOU --}}
    <section class="px-[5vw] py-[10vh]">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-center text-5xl font-bold text-secondary lg:text-[3.25rem] xl:text-6xl watch fade-in">ShareBYOU</h1>
            <div class="flex flex-col pt-[3vh] md:grid items-center justify-center grid-cols-2 md:pt-0">
                <div class="flex items-center justify-center px-[5vw] md:px-0">
                    <p class="text-center text-lg text-gray-800 font-medium watch fade-in max-w-[500px]">
                        ShareBYOU è il nostro servizio B2B che permette ai professionisti di creare e gestire 
                        la propria community attraverso un programma di fidelizzazione custom che viene stabilito 
                        dai professionisti.
                    </p>
                </div>
                <div class="flex items-center justify-center my-12 sm:my-16 md:my-20">
                    <img class="h-[20rem] sm:h-[25rem] xl:h-[30rem]" src="/img/shareBYOU_post.svg" alt="Products Tour">
                </div>
            </div>
            <div class="flex flex-col gap-16 justify-around items-center pt-12 pb-16 bg-primary shadow-md my-12 rounded-[3rem] mx-[5%] sm:px-10 md:w-[75vw] max-w-[700px] xl:my-16">
                <div class="flex flex-col justify-center items-center">
                    <div class="bg-white w-12 lg:w-14 aspect-square rounded-xl p-2">
                        <svg class="aspect-square w-full" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 19H20M4 5V16H20V5L16 9L12 5L8 9L4 5Z" stroke="#0E5ECC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </div>
                    <h1 class="text-white text-center font-bold text-2xl pt-8 pb-2 sm:pb-5">Remunerazione</h1>
                    <div class="px-[10%] sm:px-0">
                        <p class=" text-center text-white font-medium text-lg max-w-[415px]">
                            I "professionisti” potranno guadagnare dalla pubblicazione di contenuti esclusivi.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <div class="bg-white w-12 lg:w-14 aspect-square rounded-xl p-3">
                        <svg class="aspect-square w-full" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#0E5ECC"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g clip-path="url(#clip0_901_2869)"> <path d="M31 3V21C31 21.55 30.55 22 30 22H16H2C1.45 22 1 21.55 1 21V3C1 2.45 1.45 2 2 2H16H30C30.55 2 31 2.45 31 3Z" fill="#"></path> <path d="M10 31L16 25M16 25L22 31M16 25V22H2C1.447 22 1 21.553 1 21V3C1 2.447 1.447 2 2 2H30C30.553 2 31 2.447 31 3V21C31 21.553 30.553 22 30 22H19M16 1V2M10 10H22M10 14H15" stroke="#0E5ECC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> <defs> <clipPath id="clip0_901_2869"> <rect width="32" height="32" fill="white"></rect> </clipPath> </defs> </g></svg>
                    </div>
                    <h1 class="text-white text-center font-bold text-2xl pt-8 pb-2 sm:pb-5">Contenuti Esclusivi</h1>
                    <div class="px-[10%] sm:px-0">
                        <p class="text-center text-white font-medium text-lg max-w-[415px]">
                            I "professionisti" potranno pubblicare analisi finanziarie, consulenze, video-corsi e articoli.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- PYLO --}}
    <section class="px-[5vw] pb-[10vh] xl:pb-[20vh]">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-center text-5xl font-bold text-secondary lg:text-[3.25rem] xl:text-6xl watch fade-in">PYLO</h1>
            <div class="flex flex-col items-center justify-center pt-3 lg:grid grid-cols-2 xl:w-[80vw]">
                <div class="flex items-center justify-center px-[5vw] md:px-0">
                    <p class="text-center text-lg text-gray-800 font-medium watch fade-in max-w-[500px] watch fade-in">
                        Il sistema di intelligenza artificiale, che ti permette di chiedere 24h/7 ogni tipo di domanda, 
                        dubbio o curiosità, proprio come se fosse un consulente fisico!
                    </p>
                </div>
                <div class="flex items-center justify-center w-[70vw] sm:w-[530px] lg:w-[400px] xl:w-[500px] mt-[7vh]">
                    <img class="" src="/img/ai_bot.svg" alt="Products Tour">
                </div>
            </div>
        </div>
    </section>
@endsection