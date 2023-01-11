@section('title','Onboarding')

    @php 
            if(session()->missing('locale')){
                        session()->put('locale','en');
                    }

                    if(session()->get('locale',''))
                    {
                        session()->put('locale',session()->get('locale' ?? 'en'));
            }
            $currentStep = session()->get('introPageCurrentStep') ?? 1;
    @endphp
{{-- Main Container --}}
<div class="w-full h-auto text-sm md:text-base overflow-hidden">
    {{-- Content Container --}}
    <div class="flex flex-row justify-center items-center mx-auto w-full h-full md:h-screen relative xs:text-xs md:text-base">
    {{-- Back Icon--}}
    <div class="static w-1/12 mt-4 sm:mt-0 flex justify-center pl-6 sm:pl-0 sm:justify-start items-center mainColor">
        <div>
            <button type="button" class="{{$currentStep > 1  ? 'block':'hidden'}}" wire:click="goBack"><i class="fas fa-chevron-left fa-2x sm:fa-4x"></i></button>
        </div>
    </div>
    {{-- Form --}}
    <div class="relative flex  items-center flex-col w-4/5 xs:h-160 sm:h-screen md:h-screen my-7">
         {{-- Logo --}}
         <div class="relative md:mt-12 mt-4 xs:w-28 md:w-36 h-50 {{$currentStep <=4  ? 'block':'hidden'}}">
            <img src="{{URL::asset('images/MP-LOGO-Final.png')}}" alt="Minplan Logo">
        </div>  
        {{-- Form --}}
        <div class="relative flex justify-center items-center flex-col h-[60vh] sm:h-130 md:h-150 w-60 sm:w-72">  
        {{-- Welcome Page --}}
            <div class="w-auto {{$currentStep == 1 ? 'block' : 'hidden'}}" id="step-1">
                <div class="flex flex-col px-2 gap-2 mb-2 items-center justify-center">
                    <div class="flex py-2 items-center justify-center mb-6 ">
                        <p class="my-2 text-center w-36 sm:w-44 md:w-48 h-8">
                            {{GoogleTranslate::trans('Welcome to Minplan. We are here to support you in times of crisis.',session()->get('locale'))}}
                        </p>
                    </div>
                    <div>
                        <img src="{{URL::asset('/images/mindtalk.svg')}}" alt="Outlined - Mind Talk">
                    </div>
                    
                </div>
            </div>
            <div class="w-auto {{$currentStep == 2 ? 'block' : 'hidden'}}" id="step-2">
                <div class="flex flex-col px-2 gap-2 mb-2 items-center justify-center">
                    <div class="flex flex-col py-2 items-center justify-center mb-6">
                        <p class="my-2 text-center w-36 sm:w-44 md:w-48 h-8">
                            {{GoogleTranslate::trans('We will help you and your loved ones cope',session()->get('locale'))}}
                        </p>  
                    </div>
                    <div class="my-4">
                        <img src="{{URL::asset('/images/OneLine-Heart.svg')}}" alt="Outlined - Heart">
                    </div>
                    
                </div>
            </div>
            {{-- End Welcome Page--}}

            {{-- Choose Country - Step 3 --}}
            <div class="w-auto {{$currentStep == 3 ? 'block' : 'hidden'}}" id="step-3">
                <div class="flex px-2 gap-2 mb-2 items-center justify-center">
                    <div class="flex flex-col py-2 items-center justify-center ">
                        <p class="my-4 sm:mb-4 md:mb-2 text-center w-52 md:w-72 h-8">
                            {{GoogleTranslate::trans('To provide you with the most relevant resources and support, please choose your country',session()->get('locale'))}}</p>
                        <div class="flex flex-col justify-center items-center mt-4 sm:mt-8">
                            <select wire:model="country" id="country" class="box-bg  py-2 px-6 mt-6 rounded-full cursor-pointer border-0 block focus:ring-slate-500 focus:border-black xs:text-xs sm:text-sm md:text-base" name="country">
                                <option selected>{{GoogleTranslate::trans('Choose country',session()->get('locale'))}}</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Australia">Australia</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Iran">Iran</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Japan">Japan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Norway">Norway</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Spain">Spain</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Netherland">The Netherlands</option>
                                <option value="United Kingdom">United Kingdom</option>
                            </select>
                        </div>
                        <div class="my-2">
                            @error('country') <span class="error text-red-400">{{GoogleTranslate::trans($message,session()->get('locale'))}}</span> @enderror
                        </div>
                        <div>
                            <div class="-translate-x-20">
                                <img src="{{URL::asset('/images/OneLine-World.svg')}}" alt="Outlined - World">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            {{-- End Step 3 --}}
            {{-- Step 4 --}}
            <div class="w-auto {{$currentStep == 4 ? 'block' : 'hidden'}} mt-6 mb-4" id="step-3">
                <div class="flex px-2 gap-2 mb-2 items-center justify-center flex-col">
                    <div class="w-auto mt-4 flex justify-center flex-col items-center">
                        <a href="/help"><span class="material-icons-outlined text-orange-300 xs:text-6xl sm:text-7xl">health_and_safety</span></a>
                        <p class="my-2 text-center w-48 md:w-60 h-11">{{GoogleTranslate::trans('Press the Shield icon if you are in an acute mental crisis.',session()->get('locale'))}}</p>
                    </div>
                    <div class="w-auto mt-4 flex justify-center flex-col items-center">
                        <a href="/home/guidance"><span class="material-symbols-rounded mainColor xs:text-6xl sm:text-7xl">volunteer_activism</span></a>
                        <p class="my-2 text-center w-48 md:w-60 h-11">{{GoogleTranslate::trans('Press the Guidance icon if you need support',session()->get('locale'))}}</p>
                    </div>
                </div>
            </div>
            {{-- End Step 4 --}}
            {{-- End of Steps --}}
            </div>
            {{-- Stepper --}}
            <div class="w-44 flex justify-center items-center sm:mt-10 h-[20vh]">
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
            </div>
            {{-- Next Icon --}}
            <div class="static w-1/12 mt-4 sm:mt-0 flex justify-center pr-6 sm:pr-2 sm:justify-end items-center mainColor">
                <div>
                    <button type="button" class="{{$currentStep == 1 ? 'block':'hidden'}}" wire:click="welcomePage"><i class="fas fa-chevron-right fa-2x sm:fa-4x"></i></button>
                    <button type="button" class="{{$currentStep == 2 ? 'block':'hidden'}}" wire:click="infoPage"><i class="fas fa-chevron-right fa-2x sm:fa-4x "></i></button>
                    <button type="button" class="{{$currentStep == 3 ? 'block':'hidden'}}" wire:click="getCountry"><i class="fas fa-chevron-right fa-2x sm:fa-4x "></i></button>
                </div>
            </div>
        </div>
    </div>