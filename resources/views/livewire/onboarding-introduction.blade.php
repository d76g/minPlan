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
<div class="flex flex-col w-full h-screen text-base sm:text-base overflow-hidden">
    {{-- Content Container --}}
    <div class="flex flex-col justify-center items-center mx-auto h-screen relative">
    {{-- Form --}}
    <div class="relative flex items-center flex-col w-full h-[80vh] my-7">
         {{-- Logo --}}
         <div class="relative w-32 md:w-36 h-50 {{$currentStep <=4  ? 'block':'hidden'}}">
            <img src="{{URL::asset('images/MP-LOGO-Final.png')}}" alt="Minplan Logo">
        </div>  
        <div class="relative flex justify-center items-center flex-col h-130 sm:h-150 w-60 sm:w-72">  
        {{-- Welcome Page --}}
            <div class="w-auto {{$currentStep == 1 ? 'block' : 'hidden'}}" id="step-1">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center w-[240px] h-[33px]">
                            {{GoogleTranslate::trans('We are here for you in times of crisis.',session()->get('locale'))}}</p>
                    </div>
                    
                </div>
            </div>
            <div class="w-auto {{$currentStep == 2 ? 'block' : 'hidden'}}" id="step-2">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center w-[240px] h-[33px]">
                            {{GoogleTranslate::trans('We will help you and your loved ones cope with this',session()->get('locale'))}}</p>
                          
                    </div>
                    
                </div>
            </div>
            {{-- End Welcome Page--}}

            {{-- Choose Country - Step 3 --}}
            <div class="w-auto {{$currentStep == 3 ? 'block' : 'hidden'}}" id="step-3">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center w-60">
                            {{GoogleTranslate::trans('To provide the best Information we need to know which country you are in:',session()->get('locale'))}}</p>
                        <div class="flex flex-col justify-center items-center pt-4">
                            <label for="country" class="pb-2">{{GoogleTranslate::trans('Choose your country',session()->get('locale'))}}</label>
                            <select wire:model="country" id="country" class="box-bg py-2 px-4 my-1 rounded-full cursor-pointer block focus:ring-blue-500 focus:border-blue-500" name="country">
                                <option selected>{{GoogleTranslate::trans('Select Country',session()->get('locale'))}}</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Netherland">The Netherland</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Australia">Australia</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Norway">Norway</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Japan">Japan</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Iran">Iran</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Spain">Spain</option>
                                <option value="Greenland">Greenland</option>
                            </select>
                        </div>
                           
                    </div>
                </div>
                <div>
                    @error('country') <span class="error text-red-400 text-xs">{{GoogleTranslate::trans($message,session()->get('locale'))}}</span> @enderror
                </div>
            </div>
            {{-- End Step 3 --}}
            {{-- Step 4 --}}
            <div class="w-auto {{$currentStep == 4 ? 'block' : 'hidden'}} mt-6 mb-4" id="step-3">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center flex-col">
                    <div class="w-auto mt-4 flex justify-center flex-col items-center">
                        <a href="/help"><span class="material-icons-outlined text-orange-300 text-7xl">health_and_safety</span></a>
                        <p class="mb-2 text-center w-60 h-11">{{GoogleTranslate::trans('Press the shield icon, if you are in an acute mental crisis.',session()->get('locale'))}}</p>
                    </div>
                    <div class="w-auto mt-4 flex justify-center flex-col items-center">
                        <a href="/home/guidance"><img src="{{URL::asset('/images/outline_health_and_safety.svg')}}" alt="Guidance Icon"></a>
                        <p class="mb-2 text-center w-60 h-11">{{GoogleTranslate::trans('Press the guidance icon, if you need support',session()->get('locale'))}}</p>
                    </div>
                </div>
            </div>
                
            
            {{-- End Step 4 --}}
                  
            {{-- End of Steps --}}
                </div>
            </div>
            {{-- Buttons --}}
            <div class="static w-auto mt-4 sm:mt-0 flex justify-center items-center mainColor">
                {{-- Back --}}
                <div>
                    <button type="button" class="{{$currentStep > 1  ? 'block':'hidden'}}" wire:click="goBack"><i class="fas fa-chevron-left fa-2x sm:fa-3x"></i></button>
                </div>
                <div class="w-44 flex justify-center items-center ">
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
                    <button type="button" class="{{$currentStep == 1 ? 'block':'hidden'}}" wire:click="welcomePage"><i class="fas fa-chevron-right fa-2x sm:fa-3x "></i></button>
                    <button type="button" class="{{$currentStep == 2 ? 'block':'hidden'}}" wire:click="infoPage"><i class="fas fa-chevron-right fa-2x sm:fa-3x "></i></button>
                    <button type="button" class="{{$currentStep == 3 ? 'block':'hidden'}}" wire:click="getCountry"><i class="fas fa-chevron-right fa-2x sm:fa-3x "></i></button>
                </div>
            </div>
        </div>
    </div>
