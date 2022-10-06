<x-app-layouts>
    <div class="w-auto flex items-center justify-start m-6 text-gray-300">
        <a href="/" class="flex items-center justify-start"><i class="fa-solid fa-angle-left fa-2x"></i>
            <p class="text-xs px-1">Home</p>
        </a>
        
    </div>
{{-- Messages Based on Age --}}
<div class="w-auto h-screen flex justify-center content-center">
    <div class="flex flex-col justify-center content-center w-56">
        <div class="my-4 p-2 text-center">
            <h4>As a relative to someone in crisis - you could help them to reach for help</h4>
        </div>
        <div x-data="{popUp:false} "class="my-4 p-2">
            <div class="flex justify-center content-center">
                <button @click="popUp = ! popUp" class="bg-red-500 py-4 px-6 rounded-lg text-white hover:bg-red-600">Reach for Help</button>
            </div>
            <div class="flex justify-center content-center">
                <div>
                    
                    <div x-show="popUp" x-cloak class="bg-gray-100 w-auto z-20">
                        <div class="w-screen h-auto sm:w-[500px] flex justify-around items-end ">
                            <div class="w-[50px] h-[50px]  rounded-full flex justify-center items-center">
                                <a href="tel:+601128563327"><img src="{{asset('images/HelpLines-icon-04.png')}}" alt="helpline"></a>
                            </div>
                            <div class="w-[70px] h-[70px] bg-white drop-shadow-lg rounded-full  flex justify-center items-center">
                                <a href="tel:+601128563327"><button><i class="fas fa-phone-alt fa-3x text-red-500"></i></button></a>
                            </div>
                            <div class="w-[50px] h-[50px]  rounded-full flex justify-center items-center">
                                <a href="tel:+601128563327"><img src="{{asset('images/car-emergency-smc.png')}}" alt="emergency car"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-bg my-4 p-2 flex flex-col justify-center content-center rounded-lg">
            <div class="my-2 text-center">
                <h4>Do you need another advice?</h4>
            </div>
            <div class="my-2 flex justify-evenly">
                <a href="/relative-advice/advice"><button class="p-3 bg-blue-600 text-white rounded-xl hover:bg-blue-500">Yes</button></a>
                <a href=""><button class="p-3 bg-red-600 text-white rounded-xl hover:bg-red-500">No</button></a>
            </div>
        </div>
    </div>
</div>
{{-- End of Messages --}}
</x-app-layouts>