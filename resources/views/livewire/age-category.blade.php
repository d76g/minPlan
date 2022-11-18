@section('title','Guidance Tips')
    @php
            if(session()->missing('locale')){
                session()->put('locale','en');
            }

            if(session()->get('locale',''))
            {
                session()->put('locale',session()->get('locale' ?? 'en'));
            }

    @endphp
    {{-- Main Container --}}
    <div class="container relative w-auto h-[93vh] text-base flex flex-col ">
        {{-- Content Container --}}
        <div class="relative flex items-center flex-col w-auto h-full mainColor">
            <div class="relative flex justify-center h-20 sm:h-16 my-2 sm:my-4">
                <span class=" material-icons-outlined text-6xl sm:text-7xl material-icons-round">volunteer_activism</span>
            </div>
            {{-- Steps Container --}}
            <div class="relative flex justify-center items-center flex-col h-[70vh] sm:h-[80vh] w-auto">
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
                            
                    <p class="mb-10 w-60 text-center">{{GoogleTranslate::trans("As a person in need, the best you can do is to seek help from somebody you trust.",session()->get('locale'))}}</p>
                <div class="grid grid-rows-4 w-60">
                    <p class="leading-loose underline underline-offset-4 text-center">
                        {{GoogleTranslate::trans('It can be:',session()->get('locale'))}}</p>
                    
                    <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                        {{GoogleTranslate::trans('a friend',session()->get('locale'))}}</p>
                    <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                        {{GoogleTranslate::trans('a teacher',session()->get('locale'))}}</p>
                    <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                        {{GoogleTranslate::trans('a family member',session()->get('locale'))}}</p>
                    <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                        {{GoogleTranslate::trans('or, a sport coach',session()->get('locale'))}}</p>
                </div>
            </div>
            {{-- End of Step 2 --}}
            {{-- Step 3 --}}
            <div class="relative flex flex-col items-center {{$currentStep == 3 ? 'block' : 'hidden'}}">
                <p class="mb-5 text-center w-80">{{GoogleTranslate::trans('There are also different hotlines and safe spaces where you can look for help.',session()->get('locale'))}}</p>
                <p class="mb-5 text-center w-80">{{GoogleTranslate::trans('Sometimes you have the option of being anonymous if you ask about it.',session()->get('locale'))}}</p>
                <div class="w-60 text-sm text-black my-1">
                    <p>{{GoogleTranslate::trans('You can start by calling one of these',session()->get('locale'))}}</p>
                    <ul class="list-inside">
                        <li class="py-1">XXX</li>
                        <li class="py-1">XXX</li>
                        <li class="py-1">XXX</li>
                    </ul>
                </div>
                <div class="w-60 text-sm text-black">
                  <p>{{GoogleTranslate::trans('Or, trying to visit these places',session()->get('locale'))}}</p>
                  <ul class="list-inside">
                    <li class="py-1">XXX</li>
                    <li class="py-1">XXX</li>
                    <li class="py-1">XXX</li>
                </ul>
                </div>
            </div>
            {{-- End of Step 3 --}}
            {{-- Step 4 for age 14 -17 --}}
            @if ($age == '14-17')
            <div class="relative flex flex-col items-center justify-evenly {{$currentStep == 4 ? 'block' : 'hidden'}}">
                <div class="flex flex-col gap-y-4 w-60 text-center text-sm sm:text-base">
                    <div>
                        <p>{{GoogleTranslate::trans('Make yourself a safety plan',session()->get('locale'))}} </p>
                    </div>
                    <div class="text-black">
                        <p>{{GoogleTranslate::trans('With a safety plan you identify what leads to a crisis, and how you can help yourself to stay safe.',session()->get('locale'))}}</p>
                    </div>
                    <div>
                        <p>{{GoogleTranslate::trans("Having it written down and planned out means - it'll be ready for you next time your facing a crisis.",session()->get('locale'))}}</p>
                    </div>
                </div>
                <div class="flex flex-col h-44 w-60 justify-center items-center mt-4 sm:mt-6">
                    <div>
                        <img class="w-24 sm:w-full" src="{{URL::asset('/images/MinplanApp.svg')}}" alt="Minplan App">
                    </div>
                    <p class="w-24 h-8 text-sm text-center my-3">Download Minplan App</p>
                </div>
            </div>
            @endif
            {{-- End of Step 4 (Age = 14 -17) --}}
            <div class="relative flex flex-col items-center {{$currentStep == 4 ? 'block' : 'hidden'}} text-start text-sm">
                            
                <p class="mb-2 sm:mb-4 w-80 text-center text-black">{{GoogleTranslate::trans("Most often a crisis are the result of feelings you can't cope with.",session()->get('locale'))}}</p>
                <p class="mb-2 sm:mb-4 w-80 text-center">{{GoogleTranslate::trans("A crisis may occur facing what seems to be an overwhelming life situation. ",session()->get('locale'))}}</p>
                
            <div class="flex flex-col w-80 text-xm text-black">
                <p class="leading-loose underline underline-offset-4 text-center">
                    {{GoogleTranslate::trans('Which could be:',session()->get('locale'))}}</p>
                
                <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                    {{GoogleTranslate::trans('Experience stressful life event',session()->get('locale'))}}</p>
                <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                    {{GoogleTranslate::trans('The loss of a loved one',session()->get('locale'))}}</p>
                <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                    {{GoogleTranslate::trans('Having a substance abuse problem',session()->get('locale'))}}</p>
                <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                    {{GoogleTranslate::trans('Having an underlying psychiatric disorder',session()->get('locale'))}}
                </p>
                <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                    {{GoogleTranslate::trans('Having a medical condition',session()->get('locale'))}}
                </p>
                <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                    {{GoogleTranslate::trans('Being the victim of bullying or violence',session()->get('locale'))}}
                </p>
                <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                    {{GoogleTranslate::trans('Family legal or financial problems or other things.',session()->get('locale'))}}
                </p>
            </div>
            <p class="mt-1 sm:mt-4 w-80 text-center">{{GoogleTranslate::trans("Sometimes you have the option of being anonymous, if you ask about it. ",session()->get('locale'))}}</p>
        </div>
            </div>
            {{-- End of Steps Container --}}
        </div>
        {{-- Stepper --}}
        <div class="w-auto mt-4 sm:mt-0 flex justify-center items-center {{$currentStep <= 4 ? 'block' : 'hidden'}}">
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
