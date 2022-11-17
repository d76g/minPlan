@section('title','Onboarding')
    @php
            if(session()->missing('locale')){
                session()->put('locale','en');
            }

            if(session()->get('locale',''))
            {
                session()->put('locale',session()->get('locale' ?? 'en'));
            }

    @endphp
<div class="flex flex-col w-full h-screen sm:text-lg overflow-hidden sm:text-md">
    
    <div class="flex flex-col justify-center items-center mx-auto h-screen relative">
        
    {{-- Logo --}}
    <div class="absolute inset-x[119px] inset-y-[84px] w-[190px] md:w-36 h-50 {{$currentStep <=4  ? 'block':'hidden'}}">
            <img src="{{URL::asset('images/MP-LOGO-Final.png')}}" alt="Minplan Logo">
    </div>
        
    {{-- Form --}}
    <div class="relative w-60 sm:w-72 mx-auto h-80 flex flex-col justify-center items-center mt-20">
            {{-- Welcome Page --}}
            <div class="w-auto {{$currentStep == 1 ? 'block' : 'hidden'}}" id="step-1">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-base">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center w-[240px] h-[33px]">
                            {{GoogleTranslate::trans('We are here for you in times of crisis.',session()->get('locale'))}}</p>
                    </div>
                    
                </div>
            </div>
            <div class="w-auto {{$currentStep == 2 ? 'block' : 'hidden'}}" id="step-2">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-base">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center w-[240px] h-[33px]">
                            {{GoogleTranslate::trans('We will help you and your loved ones cope with this',session()->get('locale'))}}</p>
                          
                    </div>
                    
                </div>
            </div>
            {{-- End Welcome Page--}}

            {{-- Choose Country - Step 3 --}}
            <div class="w-auto {{$currentStep == 3 ? 'block' : 'hidden'}}" id="step-3">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                    <div class="flex flex-col py-2 content-center justify-center ">
                        <p class="my-2 text-center w-60">
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
            {{-- End Step 3 --}}
            {{-- Step 4 --}}
            <div class="w-auto {{$currentStep == 4 ? 'block' : 'hidden'}}" id="step-3">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm flex-col">
                    <div class="w-auto mt-4 flex justify-center flex-col items-center">
                        <a href="/help"><span class="material-icons-outlined text-orange-300 text-7xl">health_and_safety</span></a>
                        <p class="mb-2 text-center text-base w-60 h-11">{{GoogleTranslate::trans('Press the shield icon, if you are in an acute mental crisis.',session()->get('locale'))}}</p>
                    </div>
                    <div class="w-auto mt-4 flex justify-center flex-col items-center">
                        <a href="/home/guidance"><img src="{{URL::asset('/images/outline_health_and_safety.svg')}}" alt="Guidance Icon"></a>
                        <p class="mb-2 text-center text-base w-60 h-11">{{GoogleTranslate::trans('Press the guidance icon, if you need support',session()->get('locale'))}}</p>
                    </div>
                           
                </div>
            </div>
                
            
            {{-- End Step 4 --}}
                  
            {{-- End of Steps --}}
            </div>
            {{-- Buttons --}}
            <div class="w-auto h-14 flex justify-center items-center absolute inset-x-0 bottom-0 mainColor mb-6 sm:mb-4">
                {{-- Back --}}
                <div>
                    <button type="button" class="{{$currentStep > 1  ? 'block':'hidden'}}" wire:click="goBack"><i class="fas fa-chevron-left fa-2xl"></i></button>
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
                    <button type="button" class="{{$currentStep == 1 ? 'block':'hidden'}}" wire:click="welcomePage"><i class="fas fa-chevron-right fa-2xl "></i></button>
                    <button type="button" class="{{$currentStep == 2 ? 'block':'hidden'}}" wire:click="infoPage"><i class="fas fa-chevron-right fa-2xl "></i></button>
                    <button type="button" class="{{$currentStep == 3 ? 'block':'hidden'}}" wire:click="getCountry"><i class="fas fa-chevron-right fa-2xl "></i></button>
                </div>
            </div>
        </div>
    </div>
