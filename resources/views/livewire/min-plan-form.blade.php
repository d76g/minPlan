@section('title','Onboarding Form')
<div class="flex flex-col w-full h-screen sm:text-lg overflow-hidden sm:text-md">
    
    {{-- Logo --}}
    <div class="flex flex-col justify-center items-center mx-auto h-screen">

    
        <div class="w-48 mt-4 md:w-36 {{$currentStep <= 4 ? 'block' : 'hidden'}}">
            <a href="/"><img src="{{asset('images/MP-LOGO-Final.png')}}" alt="Minplan Logo"></a>
            <p class="text-center text-base mainColor">onboarding</p>
        </div>
        <div class="{{$currentStep == 4 ? 'block' : 'hidden'}} flex justify-center content-center flex-col">
            <div class="w-auto mt-4 flex justify-center">
                <a href="/help"><span class="material-icons-outlined text-orange-300 text-5xl">health_and_safety</span></a>
            </div>
            <div class="w-44 text-xs">
                <p class="mb-2 text-center">Press the emergency shield if you are in an emergency</p>
                <p class="mt-4 text-center">If you are not in a hurry please tell us, why you are here:</p>
            </div>
        </div>
    {{-- Form --}}
    <div class="w-60 sm:w-72 mx-auto">
            {{-- Welcome Page --}}
            <div class="w-auto {{$currentStep == 1 ? 'block' : 'hidden'}}" id="step-1">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center w-18">
                            {{GoogleTranslate::trans('We are here to help in a time of crisis',session()->get('locale'))}}</p>
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
                            
                            <label for="country" class="pb-2">{{GoogleTranslate::trans('Choose your country',session()->get('locale'))}}</label>
                            <select wire:model.prevent="country" id="country" class="box-bg py-2 px-4 my-1 rounded-full cursor-pointer text-sm block focus:ring-blue-500 focus:border-blue-500" name="country">
                                <option selected>{{GoogleTranslate::trans('Select Country',session()->get('locale'))}}</option>
                                <option value="AF">Afghanistan</option><option value="AX">Aland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option> <option value="AS">American Samoa</option> <option value="AD">Andorra</option> <option value="AO">Angola</option> <option value="AI">Anguilla</option> <option value="AQ">Antarctica</option> <option value="AG">Antigua and Barbuda</option> <option value="AR">Argentina</option> <option value="AM">Armenia</option> <option value="AW">Aruba</option> <option value="AU">Australia</option> <option value="AT">Austria</option> <option value="AZ">Azerbaijan</option> <option value="BS">Bahamas</option> <option value="BH">Bahrain</option> <option value="BD">Bangladesh</option> <option value="BB">Barbados</option> <option value="BY">Belarus</option> <option value="BE">Belgium</option> <option value="BZ">Belize</option> <option value="BJ">Benin</option> <option value="BM">Bermuda</option> <option value="BT">Bhutan</option> <option value="BO">Bolivia</option> <option value="BQ">Bonaire</option> <option value="BA">Bosnia and Herzegovina</option> <option value="BW">Botswana</option> <option value="BV">Bouvet Island</option> <option value="BR">Brazil</option> <option value="BN">Brunei Darussalam</option> <option value="BG">Bulgaria</option> <option value="BF">Burkina Faso</option> <option value="BI">Burundi</option> <option value="KH">Cambodia</option> <option value="CM">Cameroon</option> <option value="CA">Canada</option> <option value="CV">Cape Verde</option> <option value="KY">Cayman Islands</option> <option value="CF">Central African Republic</option> <option value="TD">Chad</option> <option value="CL">Chile</option> <option value="CN">China</option> <option value="CO">Colombia</option> <option value="KM">Comoros</option> <option value="CG">Congo</option> <option value="CR">Costa Rica</option> <option value="CI">Cote D'Ivoire</option> <option value="HR">Croatia</option> <option value="CU">Cuba</option> <option value="CW">Curacao</option> <option value="CY">Cyprus</option> <option value="CZ">Czech Republic</option> <option value="DK">Denmark</option> <option value="DJ">Djibouti</option> <option value="DM">Dominica</option> <option value="DO">Dominican Republic</option> <option value="EC">Ecuador</option> <option value="EG">Egypt</option> <option value="SV">El Salvador</option> <option value="GQ">Equatorial Guinea</option> <option value="ER">Eritrea</option> <option value="EE">Estonia</option> <option value="ET">Ethiopia</option> <option value="FO">Faroe Islands</option> <option value="FJ">Fiji</option> <option value="FI">Finland</option> <option value="FR">France</option> <option value="GA">Gabon</option> <option value="GM">Gambia</option> <option value="GE">Georgia</option> <option value="DE">Germany</option> <option value="GH">Ghana</option> <option value="GI">Gibraltar</option> <option value="GR">Greece</option> <option value="GL">Greenland</option> <option value="GD">Grenada</option> <option value="GP">Guadeloupe</option> <option value="GU">Guam</option> <option value="GT">Guatemala</option> <option value="GG">Guernsey</option> <option value="GN">Guinea</option> <option value="GW">Guinea-Bissau</option> <option value="GY">Guyana</option> <option value="HT">Haiti</option> <option value="HN">Honduras</option> <option value="HK">Hong Kong</option> <option value="HU">Hungary</option> <option value="IS">Iceland</option> <option value="IN">India</option> <option value="ID">Indonesia</option> <option value="IR">Iran</option> <option value="IQ">Iraq</option> <option value="IE">Ireland</option> <option value="IM">Isle of Man</option> <option value="IT">Italy</option> <option value="JM">Jamaica</option> <option value="JP">Japan</option> <option value="JE">Jersey</option> <option value="JO">Jordan</option> <option value="KZ">Kazakhstan</option> <option value="KE">Kenya</option> <option value="KI">Kiribati</option> <option value="KP">Korea</option> <option value="XK">Kosovo</option> <option value="KW">Kuwait</option> <option value="KG">Kyrgyzstan</option> <option value="LV">Latvia</option> <option value="LB">Lebanon</option> <option value="LS">Lesotho</option> <option value="LR">Liberia</option> <option value="LY">Libyan</option> <option value="LI">Liechtenstein</option> <option value="LT">Lithuania</option> <option value="LU">Luxembourg</option> <option value="MO">Macao</option> <option value="MK">Macedonia</option> <option value="MG">Madagascar</option> <option value="MW">Malawi</option> <option value="MY">Malaysia</option> <option value="MV">Maldives</option> <option value="ML">Mali</option> <option value="MT">Malta</option> <option value="MQ">Martinique</option> <option value="MR">Mauritania</option> <option value="MU">Mauritius</option> <option value="YT">Mayotte</option> <option value="MX">Mexico</option> <option value="FM">Micronesia</option> <option value="MD">Moldova</option> <option value="MC">Monaco</option> <option value="MN">Mongolia</option> <option value="ME">Montenegro</option> <option value="MS">Montserrat</option> <option value="MA">Morocco</option> <option value="MZ">Mozambique</option> <option value="MM">Myanmar</option> <option value="NA">Namibia</option> <option value="NR">Nauru</option> <option value="NP">Nepal</option> <option value="NL">Netherlands</option> <option value="NC">New Caledonia</option> <option value="NZ">New Zealand</option> <option value="NI">Nicaragua</option> <option value="NE">Niger</option> <option value="NG">Nigeria</option> <option value="NU">Niue</option> <option value="NF">Norfolk Island</option> <option value="NO">Norway</option> <option value="OM">Oman</option> <option value="PK">Pakistan</option> <option value="PW">Palau</option> <option value="PS">Palestinian</option> <option value="PA">Panama</option> <option value="PG">Papua New Guinea</option> <option value="PY">Paraguay</option> <option value="PE">Peru</option> <option value="PH">Philippines</option> <option value="PN">Pitcairn</option> <option value="PL">Poland</option> <option value="PT">Portugal</option> <option value="PR">Puerto Rico</option> <option value="QA">Qatar</option> <option value="RE">Reunion</option> <option value="RO">Romania</option> <option value="RU">Russian</option> <option value="RW">Rwanda</option> <option value="WS">Samoa</option> <option value="SM">San Marino</option> <option value="SA">Saudi Arabia</option> <option value="SN">Senegal</option> <option value="RS">Serbia</option> <option value="CS">Serbia and Montenegro</option> <option value="SC">Seychelles</option> <option value="SL">Sierra Leone</option> <option value="SG">Singapore</option> <option value="SX">Sint Maarten</option> <option value="SK">Slovakia</option> <option value="SI">Slovenia</option> <option value="SB">Solomon Islands</option> <option value="SO">Somalia</option> <option value="ZA">South Africa</option> <option value="SS">South Sudan</option> <option value="ES">Spain</option> <option value="LK">Sri Lanka</option> <option value="SD">Sudan</option> <option value="SR">Suriname</option> <option value="SZ">Swaziland</option> <option value="SE">Sweden</option> <option value="CH">Switzerland</option> <option value="SY">Syria</option> <option value="TW">Taiwan</option> <option value="TJ">Tajikistan</option> <option value="TZ">Tanzania</option> <option value="TH">Thailand</option> <option value="TL">Timor-Leste</option> <option value="TG">Togo</option> <option value="TK">Tokelau</option> <option value="TO">Tonga</option> <option value="TT">Trinidad and Tobago</option> <option value="TN">Tunisia</option> <option value="TR">Turkey</option> <option value="TM">Turkmenistan</option> <option value="TV">Tuvalu</option> <option value="UG">Uganda</option> <option value="UA">Ukraine</option> <option value="AE">United Arab Emirates</option> <option value="GB">United Kingdom</option> <option value="US">United States</option> <option value="UY">Uruguay</option> <option value="UZ">Uzbekistan</option> <option value="VU">Vanuatu</option> <option value="VE">Venezuela</option> <option value="VN">Vietnam</option> <option value="WF">Wallis and Futuna</option> <option value="EH">Western Sahara</option> <option value="YE">Yemen</option> <option value="ZM">Zambia</option> <option value="ZW">Zimbabwe</option>
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
                        <div class="radio-button flex flex-col py-2 content-center justify-center ">
                            <p class="my-2 text-center">What is your main priorities right now ?</p>
                            <input type="radio" id="invited" value="invited" name="priority" wire:model="priority" class="hidden" onclick="changeColor();">
                            <label for="invited" id="invited-label" class="border-[1px] border-gray-300 py-2 px-2 my-0.5 rounded-full text-center cursor-pointer hover:bg-gray-200 select-none">
                                    Invited by Someone
                            </label>                            
                            <input type="radio" value="needhelp" id="looking" name="priority" wire:model="priority" class="hidden ">
                            <label for="looking" class="border-[1px] border-gray-300 py-2 px-2 my-0.5 rounded-full text-center cursor-pointer hover:bg-gray-200 select-none">
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
                        <div class="radio-button flex flex-col py-2 content-center justify-center">
                            <p class="my-2 text-center">Tell us your age to let us help you better</p>

                            <div x-data="{showText : false}" class="flex flex-col content-center justify-center">
                                <input type="radio" name="age" wire:model="age" value="14-17" class="hidden" id="age14to17">
                                <label @click =" showText = ! showText" for="age14to17" id="ageLabel" class="h-8 sm:h-10 border-[1px] border-gray-300 py-2 px-2 my-1 rounded-full text-center cursor-pointer hover:bg-gray-200">
                                        14-17
                                </label>
                                <p x-show="showText" class="text-xs text-center" id="adviceText">You need more advice, <a class="text-blue-500 underline" href="/relative-advice" target="_blank">click here</a>.</p>
                            </div>
                            <input type="radio" name="age" wire:model="age" value="18-25" class="hidden" id="age18to25">
                            <label for="age18to25" class="h-8 sm:h-10 border-[1px] border-gray-300 py-2 px-2 my-1 rounded-full text-center cursor-pointer hover:bg-gray-200">
                                18 - 25
                            </label>
                            <input type="radio" value="26-39" name="age" wire:model="age" class="hidden" id="age26to39">
                            <label for="age26to39" class="h-8 sm:h-10 border-[1px] border-gray-300 py-2 px-2 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200">
                                26 - 39
                            </label>
                            <input type="radio" value="40-64" name="age" wire:model="age" class="hidden" id="age40to64">
                            <label for="age40to64" class="h-8 sm:h-10 border-[1px] border-gray-300 py-2 px-2 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200">
                                40 - 64
                            </label>
                            <input type="radio" value="65+" name="age" wire:model="age" class="hidden" id="age65">
                            <label for="age65" class="h-8 sm:h-10 border-[1px] border-gray-300 py-2 px-2 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200">
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
                            <div class="radio-button flex px-2 content-center justify-evenly">
                                <input type="radio" value="yes" name="confirmSMS" id="smsYes" wire:model="confirmSMS" class="hidden">
                                <label for="smsYes" class="border-[1px] border-gray-300 py-2 px-2 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200 select-none selected">
                                    Yes
                                </label>
                                <input type="radio" value="no" id="smsNo" name="confirmSMS" wire:model="confirmSMS" class="hidden">
                                <label for="smsNo"class="border-[1px] border-gray-300 py-2 px-2 my-1 rounded-full text-center  cursor-pointer hover:bg-gray-200 select-none">
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
                    <div class="radio-button flex flex-col px-2 content-center justify-center">
                        <div>
                            <p class="my-2 text-center">Do you want us to Provide you with a Safty Plan ? </p>
                        </div>
                        <div class="flex px-2 content-center justify-evenly">
                            <input type="radio" value="yes" id="planYes" name="confirmSaftyplan" wire:model="confirmSaftyplan" class="hidden">
                            <label for="planYes" class="border-[1px] border-gray-300 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                                Yes
                            </label>
                            <input type="radio" value="no" id="planNo" name="confirmSaftyplan" wire:model="confirmSaftyplan" class="hidden">
                            <label for="planNo" class="border-[1px] border-gray-300 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
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
                    <div class="radio-button flex px-2 content-center justify-evenly">
                        <input type="radio" value="yes" name="confirmEmail" id="emailYes" wire:model="confirmEmail" class="hidden">
                        <label for="emailYes" class="border-[1px] border-gray-300 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                            Yes
                        </label>
                        <input type="radio" value="no" name="confirmEmail" id="emailNo" wire:model="confirmEmail" class="hidden">
                        <label for="emailNo" class="border-[1px] border-gray-300 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
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
            <div class="w-auto {{$currentStep < 8 ? 'block' : 'hidden'}} mt-3 flex justify-center items-center">
                <div class="w-44 flex justify-center items-center">
                    <div class="flex justify-center items-center">
                        
                            @if ($currentStep == 1)
                            <div class="mx-2 w-2 h-2 bg-mainColor rounded-full mt-1"></div>
                            @else
                            <div class="mx-2 w-2 h-2 box-bg rounded-full mt-1"></div>
                            @endif

                            @if ($currentStep == 2)
                            <div class="mx-2 w-2 h-2 bg-mainColor rounded-full mt-1"></div>
                            @else
                            <div class="mx-2 w-2 h-2 box-bg rounded-full mt-1"></div>
                            @endif

                            @if ($currentStep == 3)
                            <div class="mx-2 w-2 h-2 bg-mainColor rounded-full mt-1"></div>
                            @else
                            <div class="mx-2 w-2 h-2 box-bg rounded-full mt-1"></div>
                            @endif
                            @if ($currentStep == 4)
                            <div class="mx-2 w-2 h-2 bg-mainColor rounded-full mt-1"></div>
                            @else
                            <div class="mx-2 w-2 h-2 box-bg rounded-full mt-1"></div>
                            @endif
                            @if ($currentStep == 5)
                            <div class="mx-2 w-2 h-2 bg-mainColor rounded-full mt-1"></div>
                            @else
                            <div class="mx-2 w-2 h-2 box-bg rounded-full mt-1"></div>
                            @endif
                            @if ($currentStep == 6)
                            <div class="mx-2 w-2 h-2 bg-mainColor rounded-full mt-1"></div>
                            @else
                            <div class="mx-2 w-2 h-2 box-bg rounded-full mt-1"></div>
                            @endif
                            @if ($currentStep == 7)
                            <div class="mx-2 w-2 h-2 bg-mainColor rounded-full mt-1"></div>
                            @else
                            <div class="mx-2 w-2 h-2 box-bg rounded-full mt-1"></div>
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
