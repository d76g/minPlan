<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - MinPlan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
        {{-- Favicon --}}
        <link rel="icon" href="{{asset('/images/minplan-favicon.png')}}">
        {{-- Font-Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- Google Icons --}}
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        {{-- CSS Animation --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                font-family: 'Comfortaa', cursive;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            [x-cloak] { display: none !important; }
        </style>
        @livewireStyles
    </head>
    <body class="antialiased">
        <div class="min-h-screen">
            @guest   
                @livewire('lang-translate')
            @endguest
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @livewireScripts
        </div>
    </body>
</html>
