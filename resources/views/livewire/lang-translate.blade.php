<div class="flex justify-between w-full">
    <div class="flex items-center text-gray-300 bg-white mt-4 ml-3 rounded-md py-2 px-3 hover:text-black transition ease-in-out hover:-translate-x-1 cursor-pointer">
        <a onclick="previousURL();" class="flex items-center justify-start"><i class="fa-solid fa-angle-left fa-xl"></i>
            <p class="text-xs px-1">{{GoogleTranslate::trans('Back', session()->get('locale') ?? app()->getLocale())}}</p>
        </a>
    </div>
    <div class="flex justify-end mr-3">
        <div x-data="{ showDropdown: false}" class="flex flex-row-reverse" id="langMenu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
            <button @click="showDropdown = ! showDropdown " class="mt-4 mr-4">
                <span class="material-icons-outlined mainColor bg-white p-1 rounded-md">translate</span>
            </button>
            
                <span><i class="absolute top-12 right-9 fas fa-caret-up fa-1xl boxColor" x-show="showDropdown" x-cloak x-transition></i></span>
            
            <div class="absolute top-14 right-6 bg-gray-100 w-10 sm:w-16 h-auto py-2 sm:px-4 rounded-md flex flex-col items-center justify-center text-sm drop-shadow-md" x-show="showDropdown" x-cloak x-transition>
                <div class="w-4 sm:w-8 h-4 my-1 sm:mr-2 transition ease-in-out hover:translate-x-1">
                    <input type="radio" name="lang" id="en" value="en" wire:model='language' wire:click='translate' class="hidden">
                    <label for="en" class="cursor-pointer hover:text-blue-600 flex" @click="showDropdown = ! showDropdown">
                        <img src="{{URL::asset('images/Flags/English_language.svg')}}" alt="English Language" class="w-4 h-4 object-cover object-center rounded-full cursor-pointer mr-1"><span class="hidden sm:block">EN</span> 
                    </label>
                </div>
                <div class="w-4 sm:w-8 -4 my-1 sm:mr-2 transition ease-in-out hover:translate-x-1">
                    <input type="radio" name="lang" id="fr" value="fr" wire:model='language' wire:click='translate' class="hidden">
                    <label for="fr" class="cursor-pointer hover:text-blue-600 flex" @click="showDropdown = ! showDropdown">
                        <img src="{{URL::asset('images/Flags/Flag_of_France.svg')}}" alt="English Language" class="w-4 h-4 object-cover object-center rounded-full cursor-pointer mr-1"><span class="hidden sm:block">FR</span></label>
                </div>
                <div class="w-4 sm:w-8 -4 my-1 sm:mr-2 transition ease-in-out hover:translate-x-1 flex">
                    <input type="radio" name="lang" id="da" value="da" wire:model='language' wire:click='translate' class="hidden">
                    <label for="da" class="cursor-pointer hover:text-blue-600 flex" @click="showDropdown = ! showDropdown">
                        <img src="{{URL::asset('images/Flags/Flag_of_Denmark.svg')}}" alt="English Language" class="w-4 h-4 object-cover object-center rounded-full cursor-pointer mr-1"><span class="hidden sm:block">DA</span> </label>
                </div>
                <div class="w-4 sm:w-8 -4 my-1 sm:mr-2 transition ease-in-out hover:translate-x-1 flex">
                    <input type="radio" name="lang" id="es" value="es" wire:model='language' wire:click='translate' class="hidden">
                    <label for="es" class="cursor-pointer hover:text-blue-600 flex" @click="showDropdown = ! showDropdown">
                        <img src="{{URL::asset('images/Flags/Flag_of_Spanish.svg')}}" alt="English Language" class="w-4 h-4 object-cover object-center rounded-full cursor-pointer mr-1"><span class="hidden sm:block">ES</span></label>
                </div>
                <div class="w-4 sm:w-8 -4 my-1 sm:mr-2 transition ease-in-out hover:translate-x-1 flex">
                    <input type="radio" name="lang" id="no" value="no" wire:model='language' wire:click='translate' class="hidden">
                    <label for="no" class="cursor-pointer hover:text-blue-600 flex" @click="showDropdown = ! showDropdown">
                        <img src="{{URL::asset('images/Flags/Flag_of_Norway.svg')}}" alt="English Language" class="w-4 h-4 object-cover object-center rounded-full cursor-pointer mr-1"><span class="hidden sm:block">NO</span> </label>
                </div>
                <div class="w-4 sm:w-8 -4 my-1 sm:mr-2 transition ease-in-out hover:translate-x-1 flex">
                    <input type="radio" name="lang" id="sv" value="sv" wire:model='language' wire:click='translate' class="hidden">
                    <label for="sv" class="cursor-pointer hover:text-blue-600 flex" @click="showDropdown = ! showDropdown">
                        <img src="{{URL::asset('images/Flags/Flag_of_Sweden.svg')}}" alt="English Language" class="w-4 h-4 object-cover object-center rounded-full cursor-pointer mr-1"><span class="hidden sm:block">SV</span> </label>
                </div>
                <div class="w-4 sm:w-8 -4 my-1 sm:mr-2 transition ease-in-out hover:translate-x-1 flex">
                    <input type="radio" name="lang" id="rw" value="rw" wire:model='language' wire:click='translate' class="hidden">
                    <label for="rw" class="cursor-pointer hover:text-blue-600 flex" @click="showDropdown = ! showDropdown">
                        <img src="{{URL::asset('images/Flags/Flag_of_Rwanda.svg')}}" alt="English Language" class="w-4 h-4 object-cover object-center rounded-full cursor-pointer mr-1"><span class="hidden sm:block">RW</span> </label>
                </div>
                <div class="w-4 sm:w-8 -4 my-1 sm:mr-2 transition ease-in-out hover:translate-x-1 flex">
                    <input type="radio" name="lang" id="ur" value="ur" wire:model='language' wire:click='translate' class="hidden">

                    <label for="ur" class="cursor-pointer hover:text-blue-600 flex" @click="showDropdown = ! showDropdown">
                        <img src="{{URL::asset('images/Flags/Flag_of_Pakistan.svg')}}" alt="English Language" class="w-4 h-4 object-cover object-center rounded-full cursor-pointer mr-1"><span class="hidden sm:block">UR</span></label>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function previousURL(){
        history.back();
    }
</script>