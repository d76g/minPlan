@section('title','Help Care')
    {{-- Main Container --}}
    @php
    if(session()->missing('locale')){
        session()->put('locale','en');
    }

    if(session()->get('locale',''))
    {
        session()->put('locale',session()->get('locale' ?? 'en'));
    }
    @endphp
        <div class="container relative w-auto h-[93vh] text-xs sm:text-base flex emergencyColor overflow-hidden">
        <div class="flex flex-row justify-center items-center mx-auto w-full h-full sm:h-screen relative">
            {{-- Content Container --}}
        <div class="static w-1/12 mt-4 sm:mt-0 flex justify-center pl-6 sm:pl-0 sm:justify-start items-center">
            <div>
                <button type="button"  class="{{$currentStep > 1 ? 'block':'hidden'}}" wire:click="stepBack"><i class="fas fa-chevron-left fa-2x sm:fa-3x"></i></button>
            </div>
        </div>
        <div class="relative flex items-center flex-col w-4/5 h-[90vh] my-7">
            <div class="relative flex justify-center items-center h-28 sm:h-16 mt-6 mb-2 sm:my-4">
                <span class="material-icons-outlined text-6xl">health_and_safety</span>
            </div>
            {{-- Steps Container --}}
            <div class="relative flex justify-center items-center flex-col h-[80vh] w-auto">
            {{-- Step 1 --}}
            <di class="static flex flex-col items-center {{$currentStep == 1 ? 'block' : 'hidden'}}">
                
                <div class="flex flex-col items-center justify-center sm:text-base w-64 h-44 text-justify">
                    <p class="py-2 leading-5">{{GoogleTranslate::trans('Think about your environment.',session()->get('locale'))}}</p>
                    <p class="py-4 leading-5">{{GoogleTranslate::trans('The goal here is to reduce access to resources or items which can be used to cause harm.',session()->get('locale'))}}</p>
                    <p class="py-2 leading-5 text-center w-60" style="color: rgba(66, 192, 183, 1);">{{GoogleTranslate::trans("Press the items you've already secured:",session()->get('locale'))}}</p>
                </div>
                <div class="grid grid-cols-2 grid-rows-3 gap-x-1 items-center justify-center text-xs my-6" style="color: #476F6C">
                        <a id="rope" class="px-4 py-2 rounded-full bg-notSelected my-1 ">{{GoogleTranslate::trans('String ropes',session()->get('locale'))}}</a>
                        <a id="alcohol" class="px-4 py-2 rounded-full bg-notSelected my-1 ">{{GoogleTranslate::trans('Alcohol',session()->get('locale'))}}</a>
                        <a id="med" class="px-4 py-2 rounded-full bg-notSelected my-1">{{GoogleTranslate::trans('Medication',session()->get('locale'))}}</a>
                        <a id="razor" class="px-4 py-2 rounded-full bg-notSelected my-1">{{GoogleTranslate::trans('Razors',session()->get('locale'))}}</a>
                        <a id="sharp" class="px-4 py-2 rounded-full bg-notSelected my-1 ">{{GoogleTranslate::trans('Sharp objects',session()->get('locale'))}}</a>
                        <a id="firearms" class="px-4 py-2 rounded-full bg-notSelected my-1 ">{{GoogleTranslate::trans('Firearms',session()->get('locale'))}}</a>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <p class="py-1 text-center w-64 h-14">{{GoogleTranslate::trans('Go away from locations which are unsafe or may be triggering unwanted behavior',session()->get('locale'))}}</p>
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
                <div class="sm:hidden {{$phoneNumber == NULL ? '' : ' grid-cols-2 gap-x-4'}} grid h-44 w-52 justify-items-center content-center">
                    @if ($phoneNumber !== NULL)                    
                        <a href="tel:{{$phoneNumber->phone}}">
                            <img src="{{URL::asset('/images/Helpline.svg')}}" alt="Helpline">
                        </a>
                    @endif
                    <a href="tel:112">
                        <img src="{{URL::asset('/images/Emergency Calls.svg')}}" alt="Emergency Calls">
                    </a>
                </div>
                <div class="hidden sm:block w-72 mt-4">
                    <div class="flex justify-center items-center">
                        @if ($emergency_data->isEmpty())
                        <div class="relative flex items-center justify-center text-white text-center w-52 text-xs">
                            <p class="py-2 px-3 bg-red-500 rounded-md">{{GoogleTranslate::trans('No Emergency contacts available for the country provided.',session()->get('locale'))}}</p>
                        </div>
                        @else
                        <div class="{{$emergency_data == NUll ? 'hidden':'block'}} flex justify-center items-center flex-col text-center">
                            <p class="my-1 ">{{GoogleTranslate::trans('Based on you the country choosen, you can call', session()->get('locale'))}}</p>
                                @foreach ($emergency_data as $phonenumber)
                                    <p class="my-1  text-black bg-slate-200 py-1 px-2 rounded-lg">+{{$phonenumber->phone}}</p>
                                @endforeach
                            <p class="my-1 ">{{GoogleTranslate::trans('or Visit their websites',session()->get('locale'))}}</p>
                            <div class="flex flex-col text-start text-blue-500 text-sm">
                                @foreach ($emergency_data as $data)
                                <a class=" hover:underline hover:text-blue-600" href="{{$data->website}}" target="_blank">‣ {{$data->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            {{-- End of Step 4 --}}
            </div>
            {{-- End of Steps Container --}}
            <div class="w-44 flex justify-center items-center sm:mt-10 h-[10vh]">
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
        </div>
        {{-- Stepper --}}
        <div class="static w-1/12 mt-4 sm:mt-0 flex justify-center pr-6 sm:pr-0 sm:justify-end items-center">
            <div>
                <button type="button" class="{{$currentStep <= 3 ? 'block':'hidden'}}" wire:click="nextStep"><i class="fas fa-chevron-right fa-2x sm:fa-3x "></i></button>
            </div>
        </div>
     </div>
    </div>
<script src="{{asset('js/helpPage.js')}}"></script>
