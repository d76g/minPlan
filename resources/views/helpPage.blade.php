<x-app-layouts>
    <div class="w-auto flex items-center justify-start m-6 text-gray-300">
        <a href="/" class="flex items-center justify-start"><i class="fa-solid fa-angle-left fa-2x"></i>
            <p class="text-xs px-1">Home</p>
        </a>
        
    </div>
    <div class="container flex flex-col w-auto h-auto items-center justify-center text-sm" style="color:rgb(244, 193, 127);">
        <div class="w-screen flex justify-center mb-8">
            <i class="fas fa-user-shield fa-5x"></i>
        </div>
        <div class="flex flex-col items-center justify-center text-sm">
            <p class="py-2 text-jusify">Think about your environment.</p>
            <p class="py-2 text-center w-[200px]">The goal here is to reduce access to resources or items you could use to hurt yourself.</p>
            <p class="py-2 text-jusify">Press the items you've already secured:</p>
        </div>
        <div class="flex items-center justify-center text-gray-900">
            <div class="flex flex-col mx-6 my-2">
                <button id="rope" class="px-4 py-2 rounded-full bg-gray-200 my-1 flex jusify-center justify-items-center " id="item">String ropes</button>
                <button id="med" class="px-4 py-2 rounded-full bg-gray-200 my-1 flex jusify-center justify-items-center">Medication</button>
                <button id="sharp" class="px-4 py-2 rounded-full bg-gray-200 my-1 flex jusify-center justify-items-center ">Sharp objects</button>
            </div>
            <div class="flex flex-col mx-6 my-2">
                <button id="alcohol" class="px-4 py-2 rounded-full bg-gray-200 my-1 flex jusify-center justify-items-center " id="item">Alcohol</button>
                <button id="razor" class="px-4 py-2 rounded-full bg-gray-200 my-1 flex jusify-center justify-items-center">Razors</button>
                <button id="firearms" class="px-4 py-2 rounded-full bg-gray-200 my-1 flex jusify-center justify-items-center ">Firearms</button>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center">
            <p class="py-2 text-jusify">Remove yourself from locations <br> feel unsafe or maybe triggering.</p>
        </div>
        <div class="sm:hidden">
            <div class="w-screen h-auto sm:w-[500px] flex justify-around items-end ">
                <div class="w-[50px] h-[50px]  rounded-full flex justify-center items-center">
                    <a href="tel:+601128563327"><button><i class="fas fa-comment-medical fa-2x"></i></button></a>
                </div>
                <div class="w-[70px] h-[70px] bg-white drop-shadow-lg rounded-full  flex justify-center items-center">
                    <a href="tel:+601128563327"><button><i class="fas fa-phone-alt fa-3x text-red-500"></i></button></a>
                </div>
                <div class="w-[50px] h-[50px]  rounded-full flex justify-center items-center">
                    <a href="tel:+601128563327"><button><i class="fas fa-ambulance fa-2x text-cyan-600"></i></button></a>
                </div>
            </div>
        </div>
        
    </div>

    <script src="{{URL::asset('js/helpPage.js')}}"></script>
</x-app-layouts>