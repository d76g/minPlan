<div class="relative flex flex-col items-center justify-evenly text-xs sm:text-base">
    <div class="flex flex-col gap-y-4 w-52 sm:w-80 text-center">
        <div>
            <p>{{GoogleTranslate::trans('Create a safty plan for yourself',session()->get('locale'))}} </p>
        </div>
        <div class="text-black">
            <p>{{GoogleTranslate::trans('A safety plan help you identify what leads to a crisis, and how you can cope with it and stay safe',session()->get('locale'))}}</p>
        </div>
        <div>
            <p>{{GoogleTranslate::trans("Having it written down will make you feel prepared if you get in another crisis",session()->get('locale'))}}</p>
        </div>
    </div>
    <div class="flex flex-col h-44 w-60 justify-center items-center mt-6 sm:mt-8 ">
        <div>
            <a href="/downloadApp" target="_blank"><img class="w-24 sm:w-full transition ease-in-out delay-150 hover:translate-y-1" src="{{URL::asset('/images/MinplanApp.svg')}}" alt="Minplan App"></a>
        </div>
        <p class="w-24 h-8 text-sm text-center my-3">Download Minplan App</p>
    </div>
</div>
