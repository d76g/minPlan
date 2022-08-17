<div class="relative bg-white rounded-lg text-left text-md sm:text-lg overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
        <div class="w-auto pt-4 mx-auto  flex justify-between px-4  ">
            <h4 class="text-[22px]"><i class="fa-solid fa-circle-info pr-2"></i>Fill the form</h4>
            <i class="fa-solid fa-xmark text-red-500 hover:text-red-700 text-[24px] cursor-pointer" id="closeForm"></i>
        </div>
        <form wire:submit.prevent="submit" class="w-auto pt-6 mx-auto">
        
            @if (session()->has('message'))
                <div class="bg-blue-100 mx-6 text-black py-3 px-4 mb-4 rounded">
                    {{ session('message') }}
                </div>
            @endif
        
            <div class="flex px-6 gap-4 mb-4">
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
            @if ($priority === 'help')
                <div class="px-6 py-4">
                    <p>If help,</p>
                    <p>Visit Our Main Website</p>
                </div>
            @endif
            @if ($priority === 'invited')
                <div class="flex px-6 gap-4 mb-4">
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
            
                    @if ($age !== '')
                        <div class="flex px-6 gap-4 mb-4">
                            <p>Do you want to receive SMS when the person who invited you make changes in the MinPlan App? </p>
                            <label>
                                <input type="radio" value="yes" name="confirmSMS" wire:model="confirmSMS">
                                Yes
                            </label>
                            <label>
                                <input type="radio" value="no" name="confirmSMS" wire:model="confirmSMS">
                                No
                            </label>
                        </div>
                    @endif
                                @if ($confirmSMS === 'yes')
                                <div class="mb-4 px-6">
                                    <p>Please Provide us with your phone number.</p>
                                    <input type="tel" wire:model.debounce.500ms="phoneNumber" class="w-full p-2 border  @error('phoneNumber') border-red-500 @enderror"
                                        placeholder="Enter Your Phone Number">
                                    @error('phoneNumber') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                @endif
                
                            @if ($phoneNumber !== '')
                                <div class="flex px-6 gap-4 mb-4">
                                    <p>What about receiving E-mail too ?</p>
                                    <label>
                                        <input type="radio" value="yes" name="confirmEmail" wire:model="confirmEmail">
                                        Yes
                                    </label>
                                    <label>
                                        <input type="radio" value="no" name="confirmEmail" wire:model="confirmEmail">
                                        No
                                    </label>
                                </div>
                            @endif
                
                                @if ($confirmEmail === 'yes')
                                <div class="mb-4 px-6">
                                    <p>Please Provide us with your E-mail Address</p>
                                    <input type="email" wire:model.debounce.1000ms="email" class="w-full p-2 border  @error('email') border-red-500 @enderror"
                                        placeholder="Enter Your Email">
                                    @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                                </div>
                                @endif
                
            @endif

            @if ($priority === 'lookingAround')
            <div class="flex px-6 gap-4 mb-4">
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
                @if ($age !== '')
                <div class="flex px-6 gap-4 mb-4">
                    <p>Do you want use to Provide your with a Safty Plan ? </p>
                    <label>
                        <input type="radio" value="yes" name="confirmSaftyplan" wire:model="confirmSaftyplan">
                        Yes
                    </label>
                    <label>
                        <input type="radio" value="no" name="confirmSaftyplan" wire:model="confirmSaftyplan">
                        No
                    </label>
                </div>
                @endif
                    @if ($confirmSaftyplan === 'yes')
                    <div class="px-6 mb-4">
                        <p>Please Provide us with your E-mail Address</p>
                        <input type="email" wire:model.debounce.500ms="email" class="w-full p-5 border  @error('email') border-red-500 @enderror"
                            placeholder="Enter Your Email">
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    @endif
            @endif
            
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    @if ($priority !== 'help' )
                    <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Submit</button>
                    @endif
                    <button type="button" id="closeFormBtn" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-red-500 text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" >Cancel</button>
                </div>
        
        </form>
        
</div>
