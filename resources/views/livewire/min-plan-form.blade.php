<div class="relative bg-white rounded-lg text-left text-base w-11/12 mx-auto sm:text-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-2xl sm:w-full sm:text-md">
        <div class="w-auto pt-4 mx-auto  flex justify-between px-4  ">
            <h4 class="text-[22px]"><i class="fa-solid fa-circle-info pr-2"></i>Fill the form</h4>
            <i class="fa-solid fa-xmark text-red-500 hover:text-red-700 text-[24px] cursor-pointer" id="closeForm"></i>
        </div>
        <form wire:submit.prevent="submit" class="w-auto pt-6 mx-auto">
            
            @if (session()->has('message'))
                <div class="bg-green-200 mx-4 text-black text-sm py-3 px-4 mb-4 rounded">
                    {{ session('message') }}
                </div>
            @endif
            <div class="container flex-col">
                
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
                                
                                <button class="bg-red-600 py-2 px-6 rounded text-white hover:bg-red-800">
                                    <i class="fas fa-ambulance pr-1 text-md animate-pulse"></i>
                                    Click for Emergency</button>
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
                        </div>
                        <div>
                            @error('age') <span class="error text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                        </div>
                            @if ($age !== '')
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
                            
                            @endif
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
                            @if ($phoneNumber !== '')
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
                            
                            @endif
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
                        </div>
                        <div>
                            @error('age') <span class="error text-red-400 text-sm">{{ $message }}</span> @enderror
                        </div>
                        </div>
                        @if ($age !== '')
                        <div class="flex px-2 gap-2 mb-2 text-sm">
                            <div class="flex bg-mainColor h-auto w-6 sm:w-6 text-white rounded justify-center items-center mr-2">
                                3
                            </div>
                            <div class="flex flex-col py-2">
                                <p>Do you want us to Provide your with a Safty Plan ? </p>
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
                        @endif
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
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                @if ($priority !== 'help' )
                <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
                @endif
                <button type="button" id="closeFormBtn" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" >Cancel</button>
            </div>
            
        
        </form>
        
</div>
