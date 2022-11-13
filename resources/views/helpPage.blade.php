@section('title','Help Page')
<x-app-layouts>
    {{-- Main Container --}}
    <div class="container w-auto h-5/6 emergencyColor flex items-center flex-col text-base">
        {{-- Content Container --}}
        <div class="w-screen flex justify-center mb-12">
            <span class="material-icons-outlined text-8xl">health_and_safety</span>
        </div>
        <div class="flex flex-col items-center justify-center text-base w-64 h-44 text-justify">
            <p class="py-2">{{GoogleTranslate::trans('Think about your environment.',session()->get('locale'))}}</p>
            <p class="py-4">{{GoogleTranslate::trans('The goal here is to reduce access to resources or items which can be used to cause harm.',session()->get('locale'))}}</p>
            <p class="py-2 text-center" style="color: rgba(66, 192, 183, 1);">Press the items you've already secured:</p>
        </div>
        <div class="grid grid-cols-2 grid-rows-3 gap-x-1 items-center justify-center text-sm my-6" style="color: #476F6C">
                <button id="rope" class="px-4 py-2 rounded-full bg-gray-200 my-1 ">String ropes</button>
                <button id="alcohol" class="px-4 py-2 rounded-full bg-gray-200 my-1 ">Alcohol</button>
                <button id="med" class="px-4 py-2 rounded-full bg-gray-200 my-1">Medication</button>
                <button id="razor" class="px-4 py-2 rounded-full bg-gray-200 my-1">Razors</button>
                <button id="sharp" class="px-4 py-2 rounded-full bg-gray-200 my-1 ">Sharp objects</button>
                <button id="firearms" class="px-4 py-2 rounded-full bg-gray-200 my-1 ">Firearms</button>
        </div>
        <div class="flex flex-col items-center justify-center">
            <p class="py-2 text-center w-64 h-14">{{GoogleTranslate::trans('Go away from locations which are unsafe or may be triggering unwanted behavior',session()->get('locale'))}}</p>
        </div>
    </div>
    <div>
        
    </div>
    

    <script src="{{asset('js/helpPage.js')}}"></script>
</x-app-layouts>