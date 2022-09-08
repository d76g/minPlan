<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MinPlan - onboarding</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
                {{-- Font-Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Styles -->
        @vite('resources/css/app.css', 'resources/js/app.js')
        <style>
            :root{
                --main-color:rgb(66, 192, 183);
                --text-color:rgba(0,0,0,0.6);
                --box-color:#d6ede7;
            }
            .mainColor {
                color: var(--main-color);
            }
            .bg-mainColor{
                background-color: var(--main-color);
            }
            .box-bg{
                background-color: var(--box-color);
            }
            .textColor{
                color: var(--text-color);
            }
            body {
                font-family: 'Comfortaa', cursive;
            }
            clicked {
                background-color: antiquewhite;
            }
        </style>
        @livewireStyles
    </head>
    <body class="antialiased">
        
            {{$slot}}
        
        @livewireScripts
        
    </body>
</html>
