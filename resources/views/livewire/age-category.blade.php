@section('title','Guidance Tips')
    {{-- Main Container --}}
    <div class="container relative w-auto h-[93vh] text-base flex flex-col ">
        {{-- Content Container --}}
        <div class="relative flex items-center flex-col w-auto h-full mainColor">
            <div class="relative flex justify-center h-16 my-4">
                <span class="absolute top-10 material-icons-outlined text-8xl material-icons-round">volunteer_activism</span>
            </div>
            {{-- Steps Container --}}
            <div class="relative flex justify-center items-center flex-col h-[80vh] w-auto">
            {{-- Step 1 --}}
            <div class="w-auto {{$currentStep == 1 ? 'block' : 'hidden'}} flex flex-col justify-center content-center text-xs sm:text-sm" id="step-5">  
                <div class="flex px-2 gap-2 mb-2 content-center justify-center flex-col items-center">
                    <div class="radio-button flex flex-col py-2 justify-center items-center">
                        <p class="my-2 text-center">Tell us your age to let us help you better</p>
                        <input type="radio" name="age" wire:model="age" value="14-17" class="hidden" id="age14to17">
                        <label for="age14to17" class="h-12 w-[219px] sm:h-12 border-[1px] border-gray-300  my-1 rounded-full cursor-pointer hover:bg-gray-200 text-center py-3.5">
                            14 - 17
                        </label>
                        <input type="radio" name="age" wire:model="age" value="18-25" class="hidden" id="age18to25">
                        <label for="age18to25" class="h-12 w-[219px] sm:h-12 border-[1px] border-gray-300 py-3.5 my-1 rounded-full text-center cursor-pointer hover:bg-gray-200">
                            18 - 25
                        </label>
                        <input type="radio" value="26-39" name="age" wire:model="age" class="hidden" id="age26to39">
                        <label for="age26to39" class="h-12 w-[219px] sm:h-12 border-[1px] border-gray-300 py-3.5 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200">
                            26 - 39
                        </label>
                        <input type="radio" value="40-64" name="age" wire:model="age" class="hidden" id="age40to64">
                        <label for="age40to64" class="h-12 w-[219px] sm:h-12 border-[1px] border-gray-300 py-3.5 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200">
                            40 - 64
                        </label>
                        <input type="radio" value="65+" name="age" wire:model="age" class="hidden" id="age65">
                        <label for="age65" class="h-12 w-[219px] sm:h-12 border-[1px] border-gray-300 py-3.5 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200">
                           65+
                        </label>
                        
                        <div class="w-44 text-center">
                            @error('age') <span class="error text-red-400 text-xs">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    
                </div>
            </div>
            
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
                <button type="button"  class="{{$currentStep > 1 ? 'block':'hidden'}}" wire:click="stepBack"><i class="fas fa-chevron-left fa-2xl mainColor"></i></button>
            </div>
            <div class="w-44 flex justify-center items-center">
                <div class="flex justify-center items-center">
                    
                    @if ($currentStep == 1)
                    <div class="mx-2 w-4 h-4 bg-mainColor rounded-full mt-1"></div>
                    @else
                    <div class="mx-2 w-4 h-4 box-bg rounded-full mt-1"></div>
                    @endif

                    @if ($currentStep == 2)
                    <div class="mx-2 w-4 h-4 bg-mainColor rounded-full mt-1"></div>
                    @else
                    <div class="mx-2 w-4 h-4 box-bg rounded-full mt-1"></div>
                    @endif

                    @if ($currentStep == 3)
                    <div class="mx-2 w-4 h-4 bg-mainColor rounded-full mt-1"></div>
                    @else
                    <div class="mx-2 w-4 h-4 box-bg rounded-full mt-1"></div>
                    @endif
                    @if ($currentStep == 4)
                    <div class="mx-2 w-4 h-4 bg-mainColor rounded-full mt-1"></div>
                    @else
                    <div class="mx-2 w-4 h-4 box-bg rounded-full mt-1"></div>
                    @endif
                        
                </div>
            </div>
            <div>
                <button type="button"  class="{{$currentStep <= 3 ? 'block':'hidden'}}" wire:click="nextStep"><i class="fas fa-chevron-right fa-2xl mainColor"></i></button>
            </div>
        </div>
    </div>
    <script src="{{asset('js/helpPage.js')}}"></script>
