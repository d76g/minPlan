<div class="flex flex-col w-full h-screen sm:text-lg overflow-hidden sm:text-md ">
    <div class="flex justify-end w-full h-auto">
        @php
            if (session()->missing('locale')) {
                session()->put('locale','en');
            }
        @endphp 

        <div class="flex ">
        <div class="hidden" id="langMenu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <select name="lang" id="langs" class="bg-gray-100 rounded-lg py-2 border-slate-500 text-sm mr-2 mt-2 changeLang"
             wire:model='language' wire:click='change' >
                <option class="bg-gray-100" value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                <option class="bg-gray-100" value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                <option class="bg-gray-100" value="da" {{ session()->get('locale') == 'da' ? 'selected' : '' }}>Danish</option>
                <option class="bg-gray-100" value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                <option class="bg-gray-100" value="no" {{ session()->get('locale') == 'no' ? 'selected' : '' }}>Norwegian</option>
                <option class="bg-gray-100" value="sv" {{ session()->get('locale') == 'sv' ? 'selected' : '' }}>Swedish</option>
                <option class="bg-gray-100" value="rw" {{ session()->get('locale') == 'rw' ? 'selected' : '' }}>Kinyarwanda</option>
                <option class="bg-gray-100" value="ur" {{ session()->get('locale') == 'ur' ? 'selected' : '' }}>Urdu</option>
            </select>
        </div>
        <div class="flex flex-col mt-2 mr-4 mainColor">
            <button id="langBtn"><span class="material-icons-outlined">translate</span></button>
            <p>{{session()->get('locale')}}</p>
        </div>
    </div>    
    </div>    
        
    {{-- Logo --}}
    <div class="flex flex-col justify-center items-center mx-auto h-screen">

    
        <div class="w-32 mt-4 md:w-36 {{$currentStep <= 4 ? 'block' : 'hidden'}}">
            <a href="/"><img src="{{asset('images/MP-LOGO-Final.png')}}" alt="Minplan Logo"></a>
            <p class="text-center text-base mainColor">onboarding</p>
        </div>
        <div class="{{$currentStep == 4 ? 'block' : 'hidden'}} flex justify-center content-center flex-col">
            <div class="w-auto mt-4 flex justify-center">
                <a href="/help"><span class="material-icons-outlined text-orange-300 text-5xl">health_and_safety</span></a>
            </div>
            <div class="w-44 text-xs">
                <p class="mb-2 text-center">Press the emergency shield if you need an acute help</p>
                <p class="mt-4 text-center">If you are not in a hurry please tell us, why you are here:</p>
            </div>
        </div>
    {{-- Form --}}
    <div class="w-60 sm:w-72 mx-auto">
            {{-- Steps --}}
            {{-- <div class="w-auto {{$currentStep >= 4 ? 'block' : 'hidden'}} flex justify-center text-sm my-2">
                <div class="flex w-auto content-center justify-center mx-2 my-4">
                    <div class="flex flex-col mx-2 justify-center items-center sm:mx-8">
                        <p class="text-center text-xs">Personal Information</p>
                        @if ($priority === 'needhelp')
                        <p href="#step-1" class="h-6 w-12 rounded text-black flex justify-center items-center my-1">{{$currentStep}} of 6</p>

                        @else
                        <p type="button" class="h-6 w-12 rounded text-black flex justify-center items-center my-1">{{$currentStep}} of 7</p>
                        @endif
                        

                            @if ($currentStep == 4)
                            <div class="w-64 h-1 bg-gray-200 rounded mt-1">
                                @if ($priority === 'needhelp')
                                    <div class="w-1/4 h-1 bg-gray-400 rounded"></div>
                                @else
                                    <div class="w-1/4 h-1 bg-gray-400 rounded"></div>
                                @endif
                            </div>
                            @endif
                            @if ($currentStep == 5)
                            <div class="w-64 h-1 bg-gray-200 rounded mt-1">
                                <div class="w-3/4 h-1 bg-gray-400 rounded"></div>
                            </div>
                            @endif
                            @if ($currentStep == 6)
                            <div class="w-64 h-1 bg-gray-200 rounded mt-1">
                                @if ($priority === 'needhelp')
                                    <div class="w-64 h-1 bg-gray-400 rounded"></div>
                                @else
                                    <div class="w-3/4 h-1 bg-gray-400 rounded"></div>
                                @endif
                            </div>
                            @endif
                            @if ($currentStep == 7)
                            <div class="w-64 h-1 bg-gray-200 rounded mt-1">
                                <div class="w-64 h-1 bg-gray-400 rounded"></div>
                            </div>
                            @endif
                        
                    </div>
                </div>
            </div> --}}
            {{-- Welcome Page --}}
            <div class="w-auto {{$currentStep == 1 ? 'block' : 'hidden'}}" id="step-1">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center w-18">
                            {{GoogleTranslate::trans('We are here to help you a time of crisis',session()->get('locale'))}}</p>
                    </div>
                    
                </div>
            </div>
            <div class="w-auto {{$currentStep == 2 ? 'block' : 'hidden'}}" id="step-2">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center">
                            {{GoogleTranslate::trans('We will help you and your loved ones cope with this',session()->get('locale'))}}</p>
                          
                    </div>
                    
                </div>
            </div>
            {{-- End Welcome Page--}}
            {{-- Choose Country --}}
            <div class="w-auto {{$currentStep == 3 ? 'block' : 'hidden'}}" id="step-3">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center w-54">
                            {{GoogleTranslate::trans('To provide the best Information we need to know which country you are in:',session()->get('locale'))}}</p>
                        <div class="flex flex-col justify-center items-center pt-4">
                            {{-- @livewire('country-list', ['country' => $country]) --}}
                            <label for="country" class="pb-2">{{GoogleTranslate::trans('Choose your country',session()->get('locale'))}}</label>
                            <select wire:model.prevent="country"  id="country" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center cursor-pointer" name="country">
                                <option selected>{{GoogleTranslate::trans('select country',session()->get('locale'))}}</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Aland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                            </select>
                        </div>
                           
                    </div>
                </div>
                <div>
                    @error('country') <span class="error text-red-400 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            {{-- End --}}
            
                {{-- Form Questions --}}    
                <div class="w-auto {{$currentStep == 4 ? 'block' : 'hidden'}} flex justify-center content-center" id="step-4">
                    <div class="flex px-2 content-center justify-center text-xs w-44 h-40">
                        <div class="flex flex-col py-2 content-center justify-center ">
                            
                            <p class="my-2 text-center">What is your main priorities right now ?</p>
                            
                            <input type="radio" id="invited" value="invited" name="priority" wire:model="priority" class="hidden" onclick="changeColor();">
                            <label for="invited" id="invited-label" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center cursor-pointer hover:bg-gray-200 select-none">
                                    Invited by Someone
                            </label>                            
                            <input type="radio" value="needhelp" id="looking" name="priority" wire:model="priority" class="hidden ">
                            <label for="looking" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center cursor-pointer hover:bg-gray-200 select-none">
                                    I Need Help Myself
                            </label> 
                            
                            <div class="text-center">
                                @error('priority') <span class="error text-red-400 text-xs">{{ $message }}</span> @enderror
                            </div>   
                        </div>
                        
                    </div>
                </div>
                {{-- Step 2 --}}
                <div class="w-auto {{$currentStep == 5 ? 'block' : 'hidden'}} flex flex-col justify-center content-center text-xs sm:text-sm" id="step-5">
                    <div x-data="{open:false}" class="flex flex-col content-center justify-start">
                        <div class="w-auto">
                            <button @click="open =! open" :class="open ? 'box-bg text-black':'bg-red-500 text-white'"class="rounded-md py-2 px-5 sm:py-2 sm:px-12 transition ease-in-out hover:translate-y-1">Here are Some Ways to Help in Acute Situations</button>
                        </div>
                        <div x-show="open" x-cloak x-transition.opacity id="acutePopup" class="box-bg mt-2 p-3 w-auto rounded-md indent-4 text-justify">
                            <p>The first thing if possible you should do is to help reducing access to lethal means of self-harm. For more help press <a href="/help" class="text-blue-500 underline">here</a>
                            </p>
                        </div>
                    </div>   
                    <div class="flex px-2 gap-2 mb-2 content-center justify-center">
                        <div  class="flex flex-col py-2 content-center justify-center">
                            <p class="my-2 text-center">Tell us your age to help you better</p>
                            <div x-data='{showText : false}' class="flex flex-col content-center justify-center">
                                <input type="radio" value="14-17" name="age" wire:model="age" class="hidden" id="age">
                                <label @click=" showText = ! showText" for="age" id="ageLabel" class="h-8 sm:h-10 border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center cursor-pointer hover:bg-gray-200">
                                        14-17
                                </label>
                                <p x-show="showText" class="text-xs text-center" id="adviceText">You need more advice, <a class="text-blue-500 underline" href="/relative-advice">click here</a>.</p>
                            </div>
                            <input type="radio" value="18-25" name="age" wire:model="age" class="hidden" id="age">
                            <label for="age" class="h-8 sm:h-10 border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center cursor-pointer hover:bg-gray-200">
                                18 - 25
                            </label>
                            <input type="radio" value="26-39" name="age" wire:model="age" class="hidden" id="age">
                            <label for="age" class="h-8 sm:h-10 border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200">
                                26 - 39
                            </label>
                            <input type="radio" value="40-64" name="age" wire:model="age" class="hidden" id="age">
                            <label for="age" class="h-8 sm:h-10 border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200">
                                40 - 64
                            </label>
                            <input type="radio" value="65+" name="age" wire:model="age" class="hidden" id="age">
                            <label for="age" class="h-8 sm:h-10 border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200">
                               65+
                            </label>
                            
                            <div class="w-44 text-center">
                                @error('age') <span class="error text-red-400 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                {{-- End of Step 2 --}}
                {{-- Step 3 --}}
                
                <div class="w-auto {{$currentStep == 6 ? 'block' : 'hidden'}}" id="step-6a">
                    @if ($priority === 'invited')
                    <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                        <div class="flex flex-col px-2 content-center justify-center">
                            <div>
                                <p class="my-2 text-center">Do you want to receive SMS when the person who invited you make changes in the MinPlan App? </p>
                            </div>
                            <div class="flex px-2 content-center justify-evenly">
                                <input type="radio" value="yes" name="confirmSMS" id="smsYes" wire:model="confirmSMS" class="hidden">
                                <label for="smsYes" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200 select-none selected">
                                    Yes
                                </label>
                                <input type="radio" value="no" id="smsNo" name="confirmSMS" wire:model="confirmSMS" class="hidden">
                                <label for="smsNo"class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200 select-none">
                                    No
                                </label>
                            </div>
                            @error('confirmSMS') <span class="error text-left text-red-400 text-xs">{{ $message }}</span> @enderror
                            </div>
                        
                    </div>
                    
                    <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                        @if ($confirmSMS === 'yes')
                        <div class="flex flex-col px-2 content-center justify-center">
                            <p class="my-2 text-center">Please Provide us with your phone number.</p>
                            <input type="tel" wire:model.debounce.500ms="phoneNumber" class="w-full my-2 p-2 border rounded  @error('phoneNumber') border-red-500 @enderror"
                            placeholder="Enter Your Phone Number">
                            <div class="px-2">
                                @error('phoneNumber') <span class="error text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @endif
                    </div>
                    @endif
            </div>
            
                {{-- End of Step 3 --}}
                {{-- Step 3 'needhelp' --}}
                
                <div class="w-auto {{$currentStep == 6 ? 'block' : 'hidden'}}" id="step-6b">
                @if ($priority === 'needhelp')
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                    <div class="flex flex-col px-2 content-center justify-center">
                        <div>
                            <p class="my-2 text-center">Do you want us to Provide you with a Safty Plan ? </p>
                        </div>
                        <div class="flex px-2 content-center justify-evenly">
                            <input type="radio" value="yes" id="planYes" name="confirmSaftyplan" wire:model="confirmSaftyplan" class="hidden">
                            <label for="planYes" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                                Yes
                            </label>
                            <input type="radio" value="no" id="planNo" name="confirmSaftyplan" wire:model="confirmSaftyplan" class="hidden">
                            <label for="planNo" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                                No
                            </label>
                        </div>

                        @error('confirmSaftyplan') <span class="error text-left text-red-400 text-xs">{{ $message }}</span> @enderror
                            
                    </div>
                    
                </div>
                
                <div class="flex px-2 gap-2 mb-2 text-sm">
                    @if ($confirmSaftyplan === 'yes')
                    <div class="flex flex-col py-2">
                        <p class="my-2 text-center text-sm">Please Provide us with your E-mail Address</p>
                            <input type="email" wire:model.debounce.1000ms="email" class="w-full my-2 p-2 rounded border  @error('email') border-red-500 @enderror"
                                placeholder="Enter Your Email">
                        <div class="px-2">
                            @error('email') <span class="error text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    @endif
                </div>
                @endif
                </div>
                
                {{-- End of Step 3 --}}
            {{-- Step Four --}}
        
        <div class="w-auto {{$currentStep == 7 ? 'block' : 'hidden'}}" id="step-7">
            @if ($priority === 'invited')
            <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                <div class="flex flex-col px-2 content-center justify-center"> 
                    <div>
                        <p class="my-2 text-center">What about receiving E-mails too ?</p>
                    </div>
                    <div class="flex px-2 content-center justify-evenly">
                        <input type="radio" value="yes" name="confirmEmail" id="emailYes" wire:model="confirmEmail" class="hidden">
                        <label for="emailYes" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                            Yes
                        </label>
                        <input type="radio" value="no" name="confirmEmail" id="emailNo" wire:model="confirmEmail" class="hidden">
                        <label for="emailNo" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                            No
                        </label>
                    </div>
                    <div class="px-2">
                        @error('confirmEmail') <span class="error text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
                
            </div>
            @if ($confirmEmail === 'yes')
            <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                <div class="flex flex-col px-2 content-center justify-center">
                    <p class="my-2 text-center">{{GoogleTranslate::trans('Please Provide us with your E-mail Address',session()->get('locale'))}}</p>
                        <input type="email" wire:model.debounce.1000ms="email" class="w-full my-2 p-2 rounded border  @error('email') border-red-500 @enderror"
                            placeholder="Enter Your Email">
                    <div class="px-2">
                        @error('email') <span class="error text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            @endif
        </div>
        @endif
            {{-- End of Step Four --}}
            {{-- End of Steps --}}
            </div>
            {{-- Buttons --}}
            <div class="relative h-14 flex justify-center content-center w-full px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse sm:my-10">
                <div class="absolute inset-x-0 top-8 flex justify-around w-full mainColor">
                    {{-- Back --}}
                    <button type="button" class="{{$currentStep > 1 ? 'block':'hidden'}}" wire:click="goBack"><i class="fas fa-chevron-left fa-2xl"></i></button>
                    {{-- Cancel --}}
                    <button type="button" class="{{$currentStep > 4 ? 'block':'hidden'}}" id="closeFormBtn" wire:click="clearForm"><i class="fas fa-times fa-2xl"></i></button>
                    {{-- Next --}}
                    <button type="button" class="{{$currentStep == 1 ? 'block':'hidden'}}" wire:click="welcomePage"><i class="fas fa-chevron-right fa-2xl "></i></button>
                    <button type="button" class="{{$currentStep == 2 ? 'block':'hidden'}}" wire:click="infoPage"><i class="fas fa-chevron-right fa-2xl "></i></button>
                    <button type="button" class="{{$currentStep == 3 ? 'block':'hidden'}}" wire:click="getCountry"><i class="fas fa-chevron-right fa-2xl "></i></button>
                    <button type="button" class="{{$currentStep == 4 ? 'block':'hidden'}}" wire:click="stepOne"><i class="fas fa-chevron-right fa-2xl "></i></button>
                    <button type="button" class="{{$currentStep == 5 ? 'block':'hidden'}}" wire:click="stepTwo"><i class="fas fa-chevron-right fa-2xl "></i></button>
                    <button type="button" class="{{$currentStep == 6 && $priority ==='invited' ? 'block':'hidden'}}" wire:click="stepThree"><i class="fas fa-chevron-right fa-2xl "></i></button>
                    @if ($currentStep == 7)
                    <button type="submit" wire:click="submit"><i class="fa-solid fa-cloud-arrow-up fa-2xl text-green-400"></i></button>
                    @endif
                    @if ($priority == 'needhelp' && $currentStep == 6)
                    <button type="submit" wire:click="submit"><i class="fa-solid fa-cloud-arrow-up fa-2xl text-green-400"></i></button>
                    @endif
                </div>
            </div>
            <div class="w-auto {{$currentStep < 4 ? 'block' : 'hidden'}} flex justify-center text-sm my-2">
                <div class="flex w-auto content-center justify-center mx-2 my-4">
                    <div class="flex mx-2 justify-center items-center sm:mx-8">
                        
                            @if ($currentStep == 1)

                            <div class="mr-6 w-3 h-3 bg-mainColor rounded-full mt-1"></div>
                            @else
                            <div class="mr-6 w-3 h-3 box-bg rounded-full mt-1"></div>
                            @endif

                            @if ($currentStep == 2)
                            <div class="mr-6 w-3 h-3 bg-mainColor rounded-full mt-1"></div>
                            @else
                            <div class="mr-6 w-3 h-3 box-bg rounded-full mt-1"></div>
                            @endif

                            @if ($currentStep == 3)
                            <div class="mr-6 w-3 h-3 bg-mainColor rounded-full mt-1"></div>
                            @else
                            <div class="mr-6 w-3 h-3 box-bg rounded-full mt-1"></div>
                            @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            window.addEventListener('submit', function(event){
            Swal.fire({
            title:event.detail.title,
            icon:event.detail.icon,
            iconColor:event.detail.iconColor,
            timer: 3000,
            width:'24em',
            toast:true,
            position:'top-end',
            timerProgressBar:true,
            showConfirmButton:false,
        });
    })
        </script>
    @endpush
<script src="{{asset('js/app.js')}}"></script>
