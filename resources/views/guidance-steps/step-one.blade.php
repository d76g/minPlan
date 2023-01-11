<div class="relative flex flex-col items-center text-start">
                            
    <p class="mb-10 w-60 text-center">{{GoogleTranslate::trans("As a young person in need it is a good idea to ask for help from somebody you trust",session()->get('locale'))}}</p>
    <div class="grid grid-rows-4 w-60 text-black">
        <p class="leading-loose underline underline-offset-4 text-center">
            {{GoogleTranslate::trans('It can be:',session()->get('locale'))}}</p>
        
        <p class="leading-loose flex"><span class="px-1 material-icons-round mainColor text-sm font-bold sm:text-md sm:pt-1">check</span>
            {{GoogleTranslate::trans('a friend',session()->get('locale'))}}</p>
        <p class="leading-loose flex"><span class="px-1 material-icons-round mainColor text-sm font-bold sm:text-md sm:pt-1">check</span>
            {{GoogleTranslate::trans('a teacher',session()->get('locale'))}}</p>
        <p class="leading-loose flex"><span class="px-1 material-icons-round mainColor text-sm font-bold sm:text-md sm:pt-1">check</span>
            {{GoogleTranslate::trans('a family member',session()->get('locale'))}}</p>
        <p class="leading-loose flex"><span class="px-1 material-icons-round mainColor text-sm font-bold sm:text-md sm:pt-1">check</span>
            {{GoogleTranslate::trans('or, a sport coach',session()->get('locale'))}}</p>
    </div>
</div>
