<x-app-layouts>
    <section id="home">
       
        <div class="container flex flex-col content-start  w-auto h-screen bg-gray-100 items-center justify-center">
            <div class="flex justify-end">
                <div>
                    <select name="lang" id="langs" class="changeLang">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                        <option value="da" {{ session()->get('locale') == 'da' ? 'selected' : '' }}>Danish</option>
                        <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                        <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
                    </select>
                </div>
            </div>
            <div class="flex sm:mt-1 flex-col items-center justify-center">
                {{-- <img class="w-32" src="{{asset('images/MP-LOGO-Final.png')}}" alt="Minplan Logo"> --}}
                <h1 class="text-base sm:text-xl">onboarding </h1>
                <div class="boxColor w-[200px] h-[70px] text-center my-6" style="border-radius: 30px">
                    {{-- <h4 class="text-sm sm:text-[14px] py-4">We are here to help you<br> a time of crisis...</h4> --}}
                    <h4 class="text-sm sm:text-[14px] py-4">{{GoogleTranslate::trans('We are here to help you a time of crisis',app()->getLocale())}}</h4>
                </div>
                <div class="w-[160px]">
                    <p class="text-sm text-center font-bold sm:text-sm pb-4 wrap">{{GoogleTranslate::trans("Fill the form to get the app customed for you.",app()->getLocale())}}</p>
                </div>
            </div>
            <div class="container 2xl h-auto flex justify-center content-center">
                <div class="flex flex-col items-center justify-center boxColor h-[200px] w-[200px]" style="border-radius: 40px">
                    <a href="/form"><button class="bg-gray-400 mt-2 px-8 py-2 rounded-full hover:bg-gray-500 text-white" id="formBtn">Fill the Form</button></a>
                    <p class="mt-4 mx-4 my-2 text-justify text-xs">After filling the form with your personal information, you will receive an email with a link to Minplan - a free crisis management app.</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="/help"><i class="text-gray-400 fas fa-exclamation-triangle fa-2xl animate-pulse"></i></a>
            </div>
        </div>
    </section>
</x-app-layouts>