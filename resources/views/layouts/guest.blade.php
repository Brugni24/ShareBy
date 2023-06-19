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
    <body class="font-main bg-white antialiased">
        <div class="h-[100vh] md:grid grid-cols-2 justify-center items-center pt-6 sm:pt-0">
            <div class="hidden md:flex flex-col justify-around items-center h-[100vh] bg-primary px-[5%] py-[4rem]">
                <div class="">
                    <p class="text-white text-center text-5xl font-extrabold xmd:text-6xl">
                        "Vola nel mondo della FINANZA con ShareBy"
                    </p>
                </div>
                <img class="w-[90%]" src="/img/rocket_lunch_auth.svg" alt="">
            </div>
            <div class="grid-span-1 flex flex-col justify-center items-center">
                <a class="p-16" href="/">
                    <img class="h-20" src="/img/logo_shareBy_blue.svg" alt="ShareBy Logo">
                </a>
                    <div class="sm:px-6 py-4 overflow-hidden xl:w-[70%]">
                        {{ $slot }}
                    </div>
            </div>
        </div>

    </body>
</html>
