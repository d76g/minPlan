@section('title','Help Care')
    {{-- Main Container --}}
    <div class="container relative w-auto h-[93vh] text-base flex flex-col emergencyColor">
        {{-- Content Container --}}
        <div class="relative flex items-center flex-col w-auto h-full">
            <div class="relative flex justify-center h-16 my-4">
                <span class="absolute top-10 material-icons-outlined text-8xl">health_and_safety</span>
            </div>
            {{-- Steps Container --}}
            <div class="relative flex justify-center items-center flex-col h-[80vh] w-auto">
            {{-- Step 1 --}}
            <di class="static flex flex-col items-center {{$currentStep == 1 ? 'block' : 'hidden'}}">
                
                <div class="flex flex-col items-center justify-center text-base w-64 h-44 text-justify">
                    <p class="py-2 leading-5">{{GoogleTranslate::trans('Think about your environment.',session()->get('locale'))}}</p>
                    <p class="py-4 leading-5">{{GoogleTranslate::trans('The goal here is to reduce access to resources or items which can be used to cause harm.',session()->get('locale'))}}</p>
                    <p class="py-2 leading-5 text-center w-60" style="color: rgba(66, 192, 183, 1);">{{GoogleTranslate::trans("Press the items you've already secured:",session()->get('locale'))}}</p>
                </div>
                <div class="grid grid-cols-2 grid-rows-3 gap-x-1 items-center justify-center text-sm my-6" style="color: #476F6C">
                        <a id="rope" class="px-4 py-2 rounded-full bg-notSelected my-1 ">{{GoogleTranslate::trans('String ropes',session()->get('locale'))}}</a>
                        <a id="alcohol" class="px-4 py-2 rounded-full bg-notSelected my-1 ">{{GoogleTranslate::trans('Alcohol',session()->get('locale'))}}</a>
                        <a id="med" class="px-4 py-2 rounded-full bg-notSelected my-1">{{GoogleTranslate::trans('Medication',session()->get('locale'))}}</a>
                        <a id="razor" class="px-4 py-2 rounded-full bg-notSelected my-1">{{GoogleTranslate::trans('Razors',session()->get('locale'))}}</a>
                        <a id="sharp" class="px-4 py-2 rounded-full bg-notSelected my-1 ">{{GoogleTranslate::trans('Sharp objects',session()->get('locale'))}}</a>
                        <a id="firearms" class="px-4 py-2 rounded-full bg-notSelected my-1 ">{{GoogleTranslate::trans('Firearms',session()->get('locale'))}}</a>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p class="py-2 text-center w-64 h-14">{{GoogleTranslate::trans('Go away from locations which are unsafe or may be triggering unwanted behavior',session()->get('locale'))}}</p>
                </div>
            </di>
            {{GoogleTranslate::trans('',session()->get('locale'))}}
            {{-- End of Step 1 --}}
            {{-- Step 3 --}}
            <div class="relative flex flex-col items-center {{$currentStep == 2 ? 'block' : 'hidden'}} text-start">
                <p class="mb-10 w-60">{{GoogleTranslate::trans("Take up an conversation and don't be afradi to ask direct questions, such as:",session()->get('locale'))}}</p>
                <div class="grid grid-rows-4 gap-y-3 w-60">
                    <p class="leading-5">{{GoogleTranslate::trans('Is this safe?',session()->get('locale'))}}</p>
                    <p class="leading-5">{{GoogleTranslate::trans('Can this situation be harmful?',session()->get('locale'))}}</p>
                    <p class="leading-5">{{GoogleTranslate::trans('Can you cope with this?',session()->get('locale'))}}</p>
                    <p class="leading-5">{{GoogleTranslate::trans('Are you thinking about self harming?',session()->get('locale'))}}</p>
                </div>
            </div>
            {{-- End of Step 2 --}}
            {{-- Step 3 --}}
            <div class="relative flex flex-col items-center {{$currentStep == 3 ? 'block' : 'hidden'}}">
                <p class="mb-10 w-60">{{GoogleTranslate::trans('Please make sure that you:',session()->get('locale'))}}</p>
                <div class="w-60">
                    <ul class="list-disc list-inside">
                        <li class="py-1">{{GoogleTranslate::trans('Stay Calm.',session()->get('locale'))}}</li>
                        <li class="py-1">{{GoogleTranslate::trans('Acknowledge that the feelings are legitimate',session()->get('locale'))}}</li>
                        <li class="py-1">{{GoogleTranslate::trans('Encourage not to act upon the feelings',session()->get('locale'))}} </li>
                        <li class="py-1">{{GoogleTranslate::trans('Avoid confrontation',session()->get('locale'))}}</li>
                        <li class="py-1">{{GoogleTranslate::trans('Instill hope',session()->get('locale'))}}</li>
                    </ul>
                </div>
            </div>
            {{-- End of Step 3 --}}
            {{-- Step 4 --}}
            <div class="relative flex flex-col items-center justify-evenly {{$currentStep == 4 ? 'block' : 'hidden'}}">
                <div class="grid grid-rows-2 gap-4 w-60 text-center">
                    <div>
                        <p>{{GoogleTranslate::trans('Please reach out for help, if you cant handle it.',session()->get('locale'))}} </p>
                    </div>
                    <div>
                        <p>{{GoogleTranslate::trans('You can call somebody in the the network. Or ask for  professional assistance.',session()->get('locale'))}}</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-x-6 h-44 w-60 justify-center items-center">
                    <a href="">
                        <img src="{{URL::asset('/images/Helpline.svg')}}" alt="Helpline">
                    </a>
                    <a href="">
                        <img src="{{URL::asset('/images/Emergency Calls.svg')}}" alt="Emergency Calls">
                    </a>
                    <a href="">
                        <img src="{{URL::asset('/images/Ambulance.svg')}}" alt="Ambulance">
                    </a>
                        
                </div>
            </div>
            {{-- End of Step 4 --}}
            </div>
            {{-- End of Steps Container --}}
        </div>
        {{-- Stepper --}}
        <div class="w-auto h-14 flex justify-center items-center absolute inset-x-0 bottom-0 {{$currentStep <= 4 ? 'block' : 'hidden'}}">
            <div>
                <button type="button"  class="{{$currentStep > 1 ? 'block':'hidden'}}" wire:click="stepBack"><i class="fas fa-chevron-left fa-2xl"></i></button>
            </div>
            <div class="w-44 flex justify-center items-center">
                <div class="flex justify-center items-center">
                    
                        @if ($currentStep == 1)
                        <div class="mx-2 w-4 h-4 bg-amber-300 rounded-full mt-1"></div>
                        @else
                        <div class="mx-2 w-4 h-4 bg-orange-100 rounded-full mt-1"></div>
                        @endif
    
                        @if ($currentStep == 2)
                        <div class="mx-2 w-4 h-4 bg-amber-300 rounded-full mt-1"></div>
                        @else
                        <div class="mx-2 w-4 h-4 bg-orange-100 rounded-full mt-1"></div>
                        @endif
    
                        @if ($currentStep == 3)
                        <div class="mx-2 w-4 h-4 bg-amber-300 rounded-full mt-1"></div>
                        @else
                        <div class="mx-2 w-4 h-4 bg-orange-100 rounded-full mt-1"></div>
                        @endif
                        @if ($currentStep == 4)
                        <div class="mx-2 w-4 h-4 bg-amber-300 rounded-full mt-1"></div>
                        @else
                        <div class="mx-2 w-4 h-4 bg-orange-100 rounded-full mt-1"></div>
                        @endif
                        
                    
                </div>
            </div>
            <div>
                <button type="button" class="{{$currentStep <= 3 ? 'block':'hidden'}}" wire:click="nextStep"><i class="fas fa-chevron-right fa-2xl "></i></button>
            </div>
        </div>
    </div>
    <script src="{{asset('js/helpPage.js')}}"></script>
