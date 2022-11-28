@section('title', 'Web Testing')
<x-app-layouts>
    <div class="bg-slate-200 w-auto h-screen flex justify-center items-center flex-col">
        <div class="bg-blue-300 w-20 h-[15vh] flex justify-center items-center">
            <img src="{{URL::asset('/images/outline_health_and_safety.svg')}}" alt="Guidance Icon">
        </div>
        <div class="bg-red-300 w-auto h-130 flex justify-center items-center text-xs sm:text-base flex-col px-6">
            <p class="mb-10 w-60 text-center">{{GoogleTranslate::trans("As a person in need, the best you can do is to seek help from somebody you trust.",session()->get('locale'))}}</p>
                <div class="grid grid-rows-4 w-60">
                    <p class="leading-loose underline underline-offset-4 text-center">
                        {{GoogleTranslate::trans('It can be:',session()->get('locale'))}}</p>
                    
                    <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                        {{GoogleTranslate::trans('a friend',session()->get('locale'))}}</p>
                    <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                        {{GoogleTranslate::trans('a teacher',session()->get('locale'))}}</p>
                    <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                        {{GoogleTranslate::trans('a family member',session()->get('locale'))}}</p>
                    <p class="leading-loose flex"><span class="pt-1 material-icons-round">check</span>
                        {{GoogleTranslate::trans('or, a sport coach',session()->get('locale'))}}</p>
                </div>
        </div>
        <div class="bg-yellow-300 w-auto h-[15vh] flex justify-center sm:items-center mainColor mt-5 sm:my-1">
            <div>
                <button type="button"><i class="fas fa-chevron-left fa-2xl mainColor"></i></button>
            </div>
            <div class="w-56 flex justify-center sm:items-center">
                <div class="flex justify-center sm:items-center">
                    
                    <div class="mx-2 w-4 h-4 bg-mainColor rounded-full mt-1"></div>
                    
                    <div class="mx-2 w-4 h-4 box-bg rounded-full mt-1"></div>
                    
                    <div class="mx-2 w-4 h-4 bg-mainColor rounded-full mt-1"></div>
                    
                    <div class="mx-2 w-4 h-4 box-bg rounded-full mt-1"></div>
                    
                    <div class="mx-2 w-4 h-4 bg-mainColor rounded-full mt-1"></div>
                    
                    <div class="mx-2 w-4 h-4 box-bg rounded-full mt-1"></div>
                        
                </div>
            </div>
            <div>
                <button type="button" wire:click="welcomePage"><i class="fas fa-chevron-right fa-2x sm:fa-3x "></i></button>
            </div>
        </div>
    </div>
</x-app-layouts>