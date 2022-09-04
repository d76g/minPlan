<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MinPlan - onboarding</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
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
                font-family: 'Urbanist', sans-serif;
 
            }
        </style>
        @livewireStyles
    </head>
    <body class="antialiased">
        <div class="container w-auto h-[50px] mb-2">

            <nav class="container block bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
                <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="https://minplan.org/" class="flex items-center">
                    <img src="{{url('/images/MP-circle.png')}}" class="mr-3 h-6 sm:h-9" alt="MinPlan Logo">
                    <span class="self-center mainColor text-xl font-semibold whitespace-nowrap dark:text-white">MinPlan</span>
                </a>
                <div class="flex justify-center">
                    <ul class=" flex flex-row text-l gap-6 justify-center mainColor font-semibold">
                        <a href="/" class="hover:bg-gray-100 p-2 rounded hover:dark:bg-gray-700 dark:text-white"><li>Home</li></a>
                    </ul>
                </div>
                </div>
            </nav>
        </div>
        
        
            {{$slot}}
        
        @livewireScripts
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
