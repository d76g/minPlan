<div class="relative bg-white rounded-lg text-left text-base w-11/12 mx-auto sm:text-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-2xl sm:w-full sm:text-md">
        <div class="w-auto pt-4 mx-auto flex justify-between px-4">
            <h4 class="text-[22px]"><i class="fa-solid fa-circle-info pr-2"></i>Fill the form</h4>
            <button id="closeForm" wire:click="clearForm"><img class="w-[30px] fill-red-500 cursor-pointer" src="{{url('/images/close-outline.svg')}}" alt="closeButton" ></button>
        </div>
        <form wire:submit.prevent="submit" class="w-auto pt-6 mx-auto">
            
            @if (session()->has('message'))
                <div class="bg-green-200 mx-4 text-black text-sm py-3 px-4 mb-4 rounded">
                    {{ session('message') }}
                </div>
            @endif
            @if ($priority !== 'help')
            <div class="w-auto flex justify-center text-sm">
                <div class="flex w-auto content-center justify-center mx-2 my-4">
                    <div class="flex flex-col mx-2 justify-center items-center sm:mx-8">
                        <a href="#step-1" type="button" class="h-6 w-6 rounded text-white flex justify-center items-center my-1 
                        {{$currentStep != 1 ? 'bg-gray-500':'bg-blue-500'}}">1</a>
                        <p class="text-center text-xs">Personal Information</p>
                        <div class="w-full h-1 {{$currentStep != 1 ? 'bg-gray-500':'bg-blue-500'}} rounded mt-1"></div>
                    </div>
                    <div class="flex flex-col mx-2 justify-center items-center sm:mx-8">
                        <a href="#step-2" type="button" class="h-6 w-6 rounded text-white flex justify-center items-center my-1 
                        {{$currentStep != 2 ? 'bg-gray-500':'bg-blue-500'}}">2</a>
                        <p class="text-center text-xs">Contact Information</p>
                        <div class="w-full h-1 {{$currentStep != 2 ? 'bg-gray-500':'bg-blue-500'}} rounded mt-1"></div>
                    </div>
                    @if ($priority === 'invited')
                    <div class="flex flex-col mx-2 justify-center items-center sm:mx-8">
                        <a href="#step-3" type="button" class="h-6 w-6 rounded text-white flex justify-center items-center my-1 
                        {{$currentStep != 3 ? 'bg-gray-500':'bg-blue-500'}}">3</a>
                        <p class="text-center text-xs">Contact Information (2)</p>
                        <div class="w-full h-1 {{$currentStep != 3 ? 'bg-gray-500':'bg-blue-500'}} rounded mt-1"></div>
                    </div>
                    @endif
                    
                </div>
            </div>
            @endif
            <div class="container flex-col">
                <div class="w-auto {{$currentStep == 1 ? 'block' : 'hidden'}}" id="step-1">
                    <div class="flex px-2 gap-2 mb-2 text-sm">
                        <div class="flex bg-mainColor h-auto w-6 text-white rounded justify-center items-center mr-2">
                            1
                        </div>
                        <div class="flex flex-col py-2">
                            <p>What is your main priorities right now ?</p>
                            <label>
                                <input type="radio" value="help" name="priority" wire:model="priority">
                                Help
                            </label>
                            <label>
                                <input type="radio" value="invited" name="ropriorityle" wire:model="priority">
                                Invited by Someone
                            </label>
                            <label>
                                <input type="radio" value="lookingAround" name="priority" wire:model="priority">
                                Looking Around
                            </label>
                        </div>
                    </div>
                    @if ($priority === 'help')
                            <div class="px-6 py-2 flex justify-center">
                                
                                <a href="/help" class="bg-red-600 py-2 px-6 rounded text-white hover:bg-red-800">
                                    <i class="fas fa-ambulance pr-1 text-md animate-pulse"></i>
                                     Click for Emergency</a>
                            </div>
                    @endif
                    @if ($priority === 'invited')
                        
                    <div class="flex px-2 gap-2 mb-2 text-sm">
                        <div class="flex bg-mainColor h-auto w-6 text-white rounded justify-center items-center mr-2 ">
                            2
                        </div>
                        <div class="flex flex-col py-2">
                                <p>What is your age ?</p>
                            <label>
                                <input type="radio" value="15-30" name="age" wire:model="age">
                                15 - 30
                            </label>
                            <label>
                                <input type="radio" value="31-65" name="age" wire:model="age">
                                31 - 65
                            </label>
                            <label>
                                <input type="radio" value="65+" name="age" wire:model="age">
                                65+
                            </label>
                            <div>
                                @error('age') <span class="error text-red-400 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        
                        </div>
                    @endif
                    @if ($priority === 'lookingAround')
                    <div class="flex px-2 gap-2 mb-2 text-sm">
                        <div class="flex bg-mainColor h-auto w-6 text-white rounded justify-center items-center mr-2 ">
                            2
                        </div>
                        <div class="flex flex-col py-2">
                                <p>What is your age ?</p>
                            <label>
                                <input type="radio" value="15-30" name="age" wire:model="age">
                                15 - 30
                            </label>
                            <label>
                                <input type="radio" value="31-65" name="age" wire:model="age">
                                31 - 65
                            </label>
                            <label>
                                <input type="radio" value="65+" name="age" wire:model="age">
                                65+
                            </label>
                            <div>
                                @error('age') <span class="error text-red-400 text-xs">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        </div>
                    @endif
                </div>
                        <div class="w-auto {{$currentStep == 2 ? 'block' : 'hidden'}}" id="step-2">
                            @if ($priority === 'invited')
                                
                            <div class="flex px-2 gap-2 mb-2 text-sm">
                                <div class="flex bg-mainColor h-auto w-14 sm:w-6 text-white rounded justify-center items-center mr-2">
                                    3
                                </div>
                                <div class="flex flex-col py-2">
                                        <p class="text-justify">Do you want to receive SMS when the person who invited you make changes in the MinPlan App? </p>
                                        <label>
                                            <input type="radio" value="yes" name="confirmSMS" wire:model="confirmSMS">
                                            Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="no" name="confirmSMS" wire:model="confirmSMS">
                                            No
                                        </label>
                                        @error('confirmSMS') <span class="error text-left text-red-400 text-xs">{{ $message }}</span> @enderror
                                        
                                </div>
                                
                            </div>
                            @if ($confirmSMS === 'yes')
                            <div class="flex px-2 gap-2 mb-2 text-sm">
                                <div class="flex bg-mainColor h-auto w-6 text-white rounded justify-center items-center mr-2">
                                    3a
                                </div>
                                <div class="flex flex-col py-2">
                                    <p>Please Provide us with your phone number.</p>
                                    <input type="tel" wire:model.debounce.500ms="phoneNumber" class="w-full my-2 p-2 border rounded  @error('phoneNumber') border-red-500 @enderror"
                                    placeholder="Enter Your Phone Number">
                                    <div class="px-2">
                                        @error('phoneNumber') <span class="error text-red-400 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                
                            </div>
                            @endif
                        @endif
                    
                        @if ($priority === 'lookingAround')
                        <div class="flex px-2 gap-2 mb-2 text-sm">
                            <div class="flex bg-mainColor h-auto w-6 sm:w-6 text-white rounded justify-center items-center mr-2">
                                3
                            </div>
                            <div class="flex flex-col py-2">
                                <p>Do you want us to Provide you with a Safty Plan ? </p>
                                <label>
                                    <input type="radio" value="yes" name="confirmSaftyplan" wire:model="confirmSaftyplan">
                                    Yes
                                </label>
                                <label>
                                    <input type="radio" value="no" name="confirmSaftyplan" wire:model="confirmSaftyplan">
                                    No
                                </label>

                                @error('confirmSaftyplan') <span class="error text-left text-red-400 text-xs">{{ $message }}</span> @enderror
                                    
                            </div>
                            
                        </div>
                        @if ($confirmSaftyplan === 'yes')
                        <div class="flex px-2 gap-2 mb-2 text-sm">
                            <div class="flex bg-mainColor h-auto w-6 sm:w-6 text-white rounded justify-center items-center mr-2">
                                4
                            </div>
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
                        @endif
                        </div>
                        <div class="w-auto {{$currentStep == 3 ? 'block' : 'hidden'}}" id="step-3">
                            <div class="flex px-2 gap-2 mb-2 text-sm">
                                <div class="flex bg-mainColor h-auto w-6 text-white rounded justify-center items-center mr-2">
                                    4
                                </div>
                                <div class="flex flex-col py-2">
                                    <p>What about receiving E-mails too ?</p>
                                    <label>
                                        <input type="radio" value="yes" name="confirmEmail" wire:model="confirmEmail">
                                        Yes
                                    </label>
                                    <label>
                                        <input type="radio" value="no" name="confirmEmail" wire:model="confirmEmail">
                                        No
                                    </label>
                                    <div class="px-2">
                                        @error('confirmEmail') <span class="error text-red-400 text-sm">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                
                            </div>
                            
                            @if ($confirmEmail === 'yes')
                            <div class="flex px-2 gap-2 mb-2 text-sm">
                                <div class="flex bg-mainColor h-auto w-6 text-white rounded justify-center items-center mr-2">
                                    4a
                                </div>
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
                    
                </div>
            
            @if ($priority !== 'help')
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                @if ($currentStep == 3 )
                <div class="flex ">
                    <button type="button"  class="w-1/2 mr-1 inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-2 py-2 bg-gray-400 text-base font-medium text-white hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm {{$currentStep == 3 ? 'block':'hidden'}}" wire:click="goBack">Back</button>
                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
                </div>
                @endif
                @if ($priority === 'lookingAround' && $currentStep == 2 )
                <div class="flex">
                    <button type="button"  class="mr-1 w-1/2 inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-2 py-2 bg-gray-400 text-base font-medium text-white hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" wire:click="goBack">Back</button>
                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
                </div>
                @endif
                <div class="relative">
                    <button type="button"  class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm {{$currentStep == 1 ? 'block':'hidden'}}" wire:click="stepOne">Next</button>
                    @if ($priority === 'invited')
                    <div class="flex">
                        <button type="button" id="closeFormBtn" class="mt-1 mr-1 w-1/2 inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-2 py-2 bg-gray-400 text-base font-medium text-white hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm {{$currentStep == 2 ? 'block':'hidden'}}" wire:click="goBack">Back</button>
                        <button type="button" id="closeFormBtn" class="mt-1 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-2 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm {{$currentStep == 2 ? 'block':'hidden'}}" wire:click="stepTwo">Next</button>
                    </div>
                    @endif
                </div>
                <button type="button" id="closeFormBtn" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" wire:click ="clearForm" >Cancel</button>
            </div>
            @endif
            
        
        </form>
        
</div>
