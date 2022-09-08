<div class="relative bg-white rounded-lg text-left text-base w-11/12 mx-auto sm:text-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-2xl sm:w-full sm:text-md">
        <div class="w-auto pt-4 mx-auto flex justify-between px-4">
            <h4 class="text-[22px]"><i class="fa-solid fa-circle-info pr-2"></i>Fill the form</h4>
        </div>
        <form wire:submit.prevent="submit" class="w-auto pt-6 mx-auto">
            
            @if (session()->has('message'))
                <div class="bg-gray-200 mx-4 text-black text-sm py-3 px-4 mb-4 rounded">
                    {{ session('message') }}
                </div>
            @endif
            {{-- Steps --}}
            <div class="w-auto flex justify-center text-sm">
                <div class="flex w-auto content-center justify-center mx-2 my-4">
                    <div class="flex flex-col mx-2 justify-center items-center sm:mx-8">
                        <p class="text-center text-xs">Personal Information</p>
                        @if ($priority === 'lookingAround')
                        <p href="#step-1" type="button" class="h-6 w-12 rounded text-black flex justify-center items-center my-1">{{$currentStep}} of 3</p>

                        @else
                        <p type="button" class="h-6 w-12 rounded text-black flex justify-center items-center my-1">{{$currentStep}} of 4</p>
                        @endif
                        

                            @if ($currentStep == 1)
                            <div class="w-64 h-1 bg-gray-200 rounded mt-1">
                                @if ($priority === 'lookingAround')
                                    <div class="w-1/4 h-1 bg-gray-400 rounded"></div>
                                @else
                                    <div class="w-1/4 h-1 bg-gray-400 rounded"></div>
                                @endif
                            </div>
                            @endif
                            @if ($currentStep == 2)
                            <div class="w-64 h-1 bg-gray-200 rounded mt-1">
                                <div class="w-2/4 h-1 bg-gray-400 rounded"></div>
                            </div>
                            @endif
                            @if ($currentStep == 3)
                            <div class="w-64 h-1 bg-gray-200 rounded mt-1">
                                @if ($priority === 'lookingAround')
                                    <div class="w-64 h-1 bg-gray-400 rounded"></div>
                                @else
                                    <div class="w-3/4 h-1 bg-gray-400 rounded"></div>
                                @endif
                            </div>
                            @endif
                            @if ($currentStep == 4)
                            <div class="w-64 h-1 bg-gray-200 rounded mt-1">
                                <div class="w-64 h-1 bg-gray-400 rounded"></div>
                            </div>
                            @endif
                        
                    </div>
                </div>
            </div>
                {{-- Form Questions --}}
                <div class="w-auto {{$currentStep == 1 ? 'block' : 'hidden'}}" id="step-1">
                    <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                        <div class="flex flex-col py-2 content-center justify-center ">
                            <p>What is your main priorities right now ?</p>
                                
                                <input type="checkbox" id="invited" value="invited" name="priority" wire:model="priority" class="hidden">
                                <label for="invited" id="invited-label" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center cursor-pointer">
                                    Invited by Someone
                                </label>
                                
                            
                                <input type="checkbox" value="lookingAround" id="looking" name="priority" wire:model="priority" class="hidden ">
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
                <div class="w-auto {{$currentStep == 2 ? 'block' : 'hidden'}}" id="step-2">   
                    <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                        <div class="flex flex-col py-2 content-center justify-center">
                                <p>What is your age ?</p>
                            <input type="checkbox" value="15-30" name="age" wire:model="age" class="hidden peer" id="age">
                            <label for="age" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center peer-checked:bg-gray-200 cursor-pointer">
                                15 - 30
                            </label>
                            <input type="checkbox" value="31-60" name="age" wire:model="age" class="hidden peer" id="age">
                            <label for="age" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center peer-checked:bg-gray-200 cursor-pointer">
                                31 - 60
                            </label>
                            <input type="checkbox" value="61+" name="age" wire:model="age" class="hidden peer" id="age">
                            <label for="age" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center peer-checked:bg-gray-200 cursor-pointer">
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
                <div class="w-auto {{$currentStep == 3 ? 'block' : 'hidden'}}" id="step-3">
                    <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                        <div class="flex flex-col px-2 content-center justify-center">
                            <div>
                                <p class="text-justify">Do you want to receive SMS when the person who invited you make changes in the MinPlan App? </p>
                            </div>
                            <div class="flex px-2 content-center justify-evenly">
                                <input type="checkbox" value="yes" name="confirmSMS" id="smsYes" wire:model="confirmSMS" class="hidden peer">
                                <label for="smsYes" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center peer-checked:bg-gray-200 cursor-pointer">
                                    Yes
                                </label>
                                <input type="checkbox" value="no" id="smsNo" name="confirmSMS" wire:model="confirmSMS" class="hidden peer">
                                <label for="smsNo"class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center peer-checked:bg-gray-200 cursor-pointer">
                                    No
                                </label>
                            </div>
                            @error('confirmSMS') <span class="error text-left text-red-400 text-xs">{{ $message }}</span> @enderror

                        </div>
                        
                    </div>
                    @if ($confirmSMS === 'yes')
                    <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                        <div class="flex flex-col px-2 content-center justify-center">
                            <p>Please Provide us with your phone number.</p>
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
                <div class="w-auto {{$currentStep == 3 ? 'block' : 'hidden'}}" id="step-3">
                <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                    <div class="flex flex-col px-2 content-center justify-center">
                        <div>
                            <p>Do you want us to Provide you with a Safty Plan ? </p>
                        </div>
                        <div class="flex px-2 content-center justify-evenly">
                            <input type="checkbox" value="yes" id="planYes" name="confirmSaftyplan" wire:model="confirmSaftyplan" class="hidden peer">
                            <label for="planYes" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center peer-checked:bg-gray-200 cursor-pointer">
                                Yes
                            </label>
                            <input type="checkbox" value="no" id="planNo" name="confirmSaftyplan" wire:model="confirmSaftyplan" class="hidden peer">
                            <label for="planNo" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center peer-checked:bg-gray-200 cursor-pointer">
                                No
                            </label>
                        </div>

                        @error('confirmSaftyplan') <span class="error text-left text-red-400 text-xs">{{ $message }}</span> @enderror
                            
                    </div>
                    
                </div>
                @if ($confirmSaftyplan === 'yes')
                <div class="flex px-2 gap-2 mb-2 text-sm">
                    <div class="flex flex-col py-2">
                        <p>Please Provide us with your E-mail Address</p>
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
            
        
        <div class="w-auto {{$currentStep == 4 ? 'block' : 'hidden'}}" id="step-4">
            <div class="flex px-2 gap-2 mb-2 content-center justify-center text-sm">
                <div class="flex flex-col px-2 content-center justify-center"> 
                    <div>
                        <p>What about receiving E-mails too ?</p>
                    </div>
                    <div class="flex px-2 content-center justify-evenly">
                        <input type="checkbox" value="yes" name="confirmEmail" id="emailYes" wire:model="confirmEmail" class="hidden peer">
                        <label for="emailYes" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center peer-checked:bg-gray-200 cursor-pointer">
                            Yes
                        </label>
                        <input type="checkbox" value="no" name="confirmEmail" id="emailNo" wire:model="confirmEmail" class="hidden peer">
                        <label for="emailNo" class="border-[1px] border-gray-600 py-2 px-2 my-1 rounded-full text-center peer-checked:bg-gray-200 cursor-pointer">
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
                    <p>Please Provide us with your E-mail Address</p>
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
            {{-- Buttons --}}
            
            <div class="h-14 flex justify-center content-center  w-full px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <div class="flex justify-around w-full">
                    {{-- Back --}}
                    <button type="button" class="{{$currentStep > 1 ? 'block':'hidden'}}" wire:click="goBack"><i class="fas fa-chevron-left fa-2xl"></i></button>
                    {{-- Cancel --}}
                    <button type="button" id="closeFormBtn" wire:click="clearForm"><i class="fas fa-times fa-2xl"></i></button>
                    {{-- Next --}}
                    <button type="button" class="{{$currentStep == 1 ? 'block':'hidden'}}" wire:click="stepOne"><i class="fas fa-chevron-right fa-2xl "></i></button>
                    <button type="button" class="{{$currentStep == 2 ? 'block':'hidden'}}" wire:click="stepTwo"><i class="fas fa-chevron-right fa-2xl "></i></button>
                    <button type="button" class="{{$currentStep == 3 && $priority ==='invited' ? 'block':'hidden'}}" wire:click="stepThree"><i class="fas fa-chevron-right fa-2xl "></i></button>
                    @if ($currentStep == 4)
                    <button type="submit"><i class="fa-solid fa-cloud-arrow-up fa-2xl text-green-400"></i></button>
                    @endif
                    @if ($priority == 'lookingAround' && $currentStep == 3)
                    <button type="submit"><i class="fa-solid fa-cloud-arrow-up fa-2xl text-green-400"></i></button>
                    @endif
                </div>
            </div>
            </div>
            
            
            {{-- End of Steps --}}
        </form>
        
</div>
<script src="{{asset('js/app.js')}}"></script>
