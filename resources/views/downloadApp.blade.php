@section('title','Download App')
    
<x-app-layouts>
    <div class="relative h-screen bg-mainColor text-white flex justify-center items-center w-full">
        <div class="absolute bottom-16 left-26 sm:top-40 sm:left-36 animate__animated animate__fadeIn animate__delay-1s">
            <img src="{{asset('/images/blob.svg')}}" alt="blob" class="w-44 sm:w-64 h-auto">
        </div>
        <div class="absolute top-4 left-0 sm:top-60 sm:right-28 animate__animated animate__fadeIn animate__delay-1s">
            <img src="{{asset('/images/blob.svg')}}" alt="blob" class="w-64 sm:w-80 h-auto">
        </div>
        <div class="static bg-teal-400 h-92 w-80 sm:h-[38rem] sm:w-[63rem] rounded-lg drop-shadow-lg sm:grid sm:grid-cols-2 gap-4 overflow-hidden animate__animated animate__backInLeft">
            <div class="flex justify-center items-center flex-col py-4">
                <h1 class="text-2xl sm:text-6xl font-bold">{{GoogleTranslate::trans('Download',session()->get('locale'))}}</h1>
                <h1 class="text-lg sm:text-2xl py-1">{{GoogleTranslate::trans('Our App',session()->get('locale'))}}</h1>
                <h1 class="sm:py-4 text-sm">" {{GoogleTranslate::trans('For All affected by mental crises',session()->get('locale'))}} "</h1>
                
            </div>
            <div class="bg-white flex flex-col justify-center items-center">
                <div class="h-1/2 flex flex-col justify-center items-center">
                    <img class="w-40 h-40 sm:w-52 sm:h-52" src="{{asset('/images/MP-circle.png')}}" alt="minplan-logo">
                    <h1 class="mainColor py-2 text-xl sm:text-2xl">Minplan App</h1>
                    <p class="text-black w-52 text-center text-sm sm:text-base">Because Nobody should go through this by their own.</p>
                </div>
                <div class="flex justify-center items-center h-1/4 sm:flex-row flex-col">
                    
                    <a href="https://play.google.com/store/apps/details?id=com.myplan.norway" target="_blank">
                    <div class="bg-teal-400 rounded-lg w-48 h-14 mx-2 my-2 sm:my-0 grid grid-cols-3 transition  ease-in-out hover:translate-y-3">
                        <div class="flex justify-center p-3">
                            <i class="fab fa-google-play fa-2x"></i>
                        </div>
                        <div class="col-span-2 flex justify-center flex-col text-start py-2">
                            <h1 class="text-sm">Get It On</h1>
                            <h1 class="text-base font-bold">Google Play</h1>
                        </div>
                    </div>
                    </a>
                    <a href="https://apps.apple.com/dk/app/minplan-2-0-ny-version/id1550081813" target="_blank">
                    <div class="bg-teal-400 rounded-lg w-48 h-14 mx-2 my-2 sm:my-0 grid grid-cols-3 transition  ease-in-out hover:translate-y-3">
                        <div class="flex justify-center p-3">
                            <i class="fab fa-app-store fa-2x"></i>
                        </div>
                        <div class="col-span-2 flex justify-center flex-col text-start py-2">
                            <h1 class="text-sm">Download on the</h1>
                            <h1 class="text-base font-bold">App Store</h1>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="bg-gray-200 rounded-lg py-1 px-3 my-2 sm:my-0 transition ease-in-out hover:translate-y-1">
                    <a href="https://minplan.org/" target="_blank">
                        <h1 class="text-black text-xs hover:text-blue-600 hover:underline">More Information About The App</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layouts>