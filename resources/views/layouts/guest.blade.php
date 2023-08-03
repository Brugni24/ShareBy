<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-main bg-white antialiased min-h-screen">
        <div class="md:grid grid-cols-2 justify-center items-center">
            {{-- colonna a sinistra --}}
            <div style="background-image: url(/img/bg_landing_page.jpg)" class="hidden md:flex flex-col justify-around items-center min-h-screen h-full px-[5%] py-[4rem] bg-cover bg-fixed bg-center">
                <div class="">
                    <p class="text-white text-center text-5xl font-extrabold lg:text-6xl xl:mx-[7%]">
                        Vola nel mondo della FINANZA con ShareBy
                    </p>
                </div>
                <img class="w-[80%]" src="/img/rocket_lunch_auth.svg" alt="">
            </div>
            {{-- colonna a destra --}}
            <div class="grid-span-1 flex flex-col justify-center items-center py-16">
                <a class="p-6 mb-12" href="/">
                    <img class="h-20" src="/img/logo_shareBy_blue.svg" alt="ShareBy Logo">
                </a>
                    <div class="overflow-hidden">
                        {{ $slot }}
                    </div>
            </div>
        </div>
    </body>
</html>
