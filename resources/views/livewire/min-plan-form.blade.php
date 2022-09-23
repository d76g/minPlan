<div class="rounded-lg text-left text-base h-screen mx-auto sm:text-lg overflow-hidden sm:max-w-2xl sm:text-md flex flex-col justify-center items-center">
    <div class="flex justify-end">
        <div>
            <select name="lang" id="langs" class="changeLang" wire:model='language' wire:click='change'>
                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                <option value="da" {{ session()->get('locale') == 'da' ? 'selected' : '' }}>Danish</option>
                <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
            </select>
        </div>
    </div>
    {{-- Logo --}}
    <div class="w-32 mt-4 md:w-48">
        <a href="/"><img src="{{asset('images/MP-LOGO-Final.png')}}" alt="Minplan Logo"></a>
        <p class="text-center text-base mainColor">onboarding</p>
    </div>
    {{-- Form --}}
    <div class="w-64 sm:w-72 pt-6 mx-auto">
        
            
            @if (session()->has('message'))
                <div class="bg-gray-200 mx-4 text-black text-sm py-3 px-4 mb-4 rounded">
                    {{ session('message') }}
                </div>
            @endif
            {{-- Steps --}}
            <div class="w-auto {{$currentStep >= 4 ? 'block' : 'hidden'}} flex justify-center text-sm my-2">
                <div class="flex w-auto content-center justify-center mx-2 my-4">
                    <div class="flex flex-col mx-2 justify-center items-center sm:mx-8">
                        <p class="text-center text-xs">Personal Information</p>
                        @if ($priority === 'lookingAround')
                        <p href="#step-1" type="button" class="h-6 w-12 rounded text-black flex justify-center items-center my-1">{{$currentStep}} of 6</p>

                        @else
                        <p type="button" class="h-6 w-12 rounded text-black flex justify-center items-center my-1">{{$currentStep}} of 7</p>
                        @endif
                        

                            @if ($currentStep == 4)
                            <div class="w-64 h-1 bg-gray-200 rounded mt-1">
                                @if ($priority === 'lookingAround')
                                    <div class="w-1/4 h-1 bg-gray-400 rounded"></div>
                                @else
                                    <div class="w-1/4 h-1 bg-gray-400 rounded"></div>
                                @endif
                            </div>
                            @endif
                            @if ($currentStep == 5)
                            <div class="w-64 h-1 bg-gray-200 rounded mt-1">
                                <div class="w-2/4 h-1 bg-gray-400 rounded"></div>
                            </div>
                            @endif
                            @if ($currentStep == 6)
                            <div class="w-64 h-1 bg-gray-200 rounded mt-1">
                                @if ($priority === 'lookingAround')
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
            </div>
            {{-- Welcome Page --}}
            <div class="w-auto {{$currentStep == 1 ? 'block' : 'hidden'}}" id="step-1">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center w-18">{{GoogleTranslate::trans('We are here to help you a time of crisis',app()->getLocale())}}</p>
                          
                    </div>
                    
                </div>
            </div>
            <div class="w-auto {{$currentStep == 2 ? 'block' : 'hidden'}}" id="step-1">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center">{{GoogleTranslate::trans('We will help you and your loved ones cope with this',app()->getLocale())}}</p>
                          
                    </div>
                    
                </div>
            </div>
            {{-- End Welcome Page--}}
            {{-- Choose Country --}}
            <div class="w-auto {{$currentStep == 3 ? 'block' : 'hidden'}}" id="step-1">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center w-54">{{GoogleTranslate::trans('To provide the best Information we need to know which country you are in:',app()->getLocale())}}</p>
                        
                        <div class="flex flex-col w-full pt-4">
                        <label for="country" class="pb-2">{{GoogleTranslate::trans('Choose your country',app()->getLocale())}}</label>
                        <select wire:model="country" id="country" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center cursor-pointer" name="country">
                            <option>select country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Aland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia</option>
                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, Democratic Republic of the Congo</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Cote D'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curacao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and Mcdonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="XK">Kosovo</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libyan Arab Jamahiriya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="AN">Netherlands Antilles</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Reunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthelemy</option>
                            <option value="SH">Saint Helena</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="CS">Serbia and Montenegro</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.s.</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                        </select>
                        </div>
                        <div>
                            @error('country') <span class="error text-red-400 text-xs">{{ $message }}</span> @enderror
                        </div>   
                    </div>
                    
                </div>
            </div>
            {{-- End --}}
            
                {{-- Form Questions --}}    
                <div class="w-auto {{$currentStep == 4 ? 'block' : 'hidden'}}" id="step-1">
                    <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                        <div class="flex flex-col py-2 content-center justify-center ">
                            
                            <p class="my-2 text-center">What is your main priorities right now ?</p>
                            
                            <input type="checkbox" id="invited" value="invited" name="priority" wire:model="priority" class="hidden" onclick="changeColor();">
                            <label for="invited" id="invited-label" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center cursor-pointer">
                                    Invited by Someone
                            </label>
                                
                            
                            <input type="checkbox" value="lookingAround" id="looking" name="priority" wire:model.prevent="priority" class="hidden ">
                            <label for="looking" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center cursor-pointer">
                                    Looking Around
                            </label> 
                            
                            <div>
                                @error('priority') <span class="error text-red-400 text-xs">{{ $message }}</span> @enderror
                            </div>   
                        </div>
                        
                    </div>
                </div>
                {{-- Step 2 --}}
                <div class="w-auto {{$currentStep == 5 ? 'block' : 'hidden'}}" id="step-2">   
                    <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                        <div class="flex flex-col py-2 content-center justify-center">
                                <p class="my-2 text-center">What is your age ?</p>
                            <input type="checkbox" value="15-30" name="age" wire:model="age" class="hidden" id="age">
                            <label for="age" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                                15 - 30
                            </label>
                            <input type="checkbox" value="31-60" name="age" wire:model="age" class="hidden" id="age">
                            <label for="age" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                                31 - 60
                            </label>
                            <input type="checkbox" value="61+" name="age" wire:model="age" class="hidden" id="age">
                            <label for="age" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                                61+
                            </label>
                            
                            <div>
                                @error('age') <span class="error text-red-400 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        
                    </div>
                </div>
                {{-- End of Step 2 --}}
                {{-- Step 3 --}}
                @if ($priority === 'invited')
                <div class="w-auto {{$currentStep == 6 ? 'block' : 'hidden'}}" id="step-3">
                    <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                        <div class="flex flex-col px-2 content-center justify-center">
                            <div>
                                <p class="my-2 text-center">Do you want to receive SMS when the person who invited you make changes in the MinPlan App? </p>
                            </div>
                            <div class="flex px-2 content-center justify-evenly">
                                <input type="checkbox" value="yes" name="confirmSMS" id="smsYes" wire:model="confirmSMS" class="hidden">
                                <label for="smsYes" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                                    Yes
                                </label>
                                <input type="checkbox" value="no" id="smsNo" name="confirmSMS" wire:model="confirmSMS" class="hidden">
                                <label for="smsNo"class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                                    No
                                </label>
                            </div>
                            @error('confirmSMS') <span class="error text-left text-red-400 text-xs">{{ $message }}</span> @enderror

                        </div>
                        
                    </div>
                    @if ($confirmSMS === 'yes')
                    <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                        <div class="flex flex-col px-2 content-center justify-center">
                            <p class="my-2 text-center">Please Provide us with your phone number.</p>
                            <input type="tel" wire:model.debounce.500ms="phoneNumber" class="w-full my-2 p-2 border rounded  @error('phoneNumber') border-red-500 @enderror"
                            placeholder="Enter Your Phone Number">
                            <div class="px-2">
                                @error('phoneNumber') <span class="error text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        
                    </div>
                    @endif
            </div>
            @endif
                {{-- End of Step 3 --}}
                {{-- Step 3 'lookingAround' --}}
                @if ($priority === 'lookingAround')
                <div class="w-auto {{$currentStep == 6 ? 'block' : 'hidden'}}" id="step-3">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                    <div class="flex flex-col px-2 content-center justify-center">
                        <div>
                            <p class="my-2 text-center">Do you want us to Provide you with a Safty Plan ? </p>
                        </div>
                        <div class="flex px-2 content-center justify-evenly">
                            <input type="checkbox" value="yes" id="planYes" name="confirmSaftyplan" wire:model="confirmSaftyplan" class="hidden">
                            <label for="planYes" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                                Yes
                            </label>
                            <input type="checkbox" value="no" id="planNo" name="confirmSaftyplan" wire:model="confirmSaftyplan" class="hidden">
                            <label for="planNo" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                                No
                            </label>
                        </div>

                        @error('confirmSaftyplan') <span class="error text-left text-red-400 text-xs">{{ $message }}</span> @enderror
                            
                    </div>
                    
                </div>
                @if ($confirmSaftyplan === 'yes')
                <div class="flex px-2 gap-2 mb-2 text-sm">
                    <div class="flex flex-col py-2">
                        <p class="my-2 text-center">Please Provide us with your E-mail Address</p>
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
                {{-- End of Step 3 --}}
            {{-- Step Four --}}
        @if ($priority === 'invited')
            
        
        <div class="w-auto {{$currentStep == 7 ? 'block' : 'hidden'}}" id="step-4">
            <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                <div class="flex flex-col px-2 content-center justify-center"> 
                    <div>
                        <p class="my-2 text-center">What about receiving E-mails too ?</p>
                    </div>
                    <div class="flex px-2 content-center justify-evenly">
                        <input type="checkbox" value="yes" name="confirmEmail" id="emailYes" wire:model="confirmEmail" class="hidden">
                        <label for="emailYes" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center  cursor-pointer">
                            Yes
                        </label>
                        <input type="checkbox" value="no" name="confirmEmail" id="emailNo" wire:model="confirmEmail" class="hidden">
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
                    <p class="my-2 text-center">Please Provide us with your E-mail Address</p>
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
            <div class="relative h-14 flex justify-center content-center w-full px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse sm:mt-14">
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
                    @if ($priority == 'lookingAround' && $currentStep == 6)
                    <button type="submit" wire:click="submit"><i class="fa-solid fa-cloud-arrow-up fa-2xl text-green-400"></i></button>
                    @endif
                </div>
            </div>
            
    </div>
    {{-- <script>
    var url = "{{ route('form') }}"
    
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
    </script> --}}
<script src="{{asset('js/app.js')}}"></script>
