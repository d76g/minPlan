@section('title','Relative Advices')
<x-app-layouts>
    @php
            if(session()->missing('locale')){
                session()->put('locale','en');
            }

            if(session()->get('locale',''))
            {
                session()->put('locale',session()->get('locale' ?? 'en'));
            }

    @endphp

<div class="relative h-auto sm:h-screen flex flex-col bg-gray-50 w-auto sm:w-screen">
    <div class="static h-[250px] sm:h-1/2 w-full sm:w-auto sm:grid sm:grid-cols-3 flex flex-col justify-center items-center box-bg">
        <div class="flex justify-center items-center w-44 sm:w-[350px] sm:pl-6">
            <img src="{{asset('images/parent-help.png')}}" alt="mental-care">
            {{-- Illustration by <a href="https://icons8.com/illustrations/author/627444">Julia G</a> from <a href="https://icons8.com/illustrations">Ouch!</a> --}}
        </div>
        <div class="flex flex-col items-center sm:items-start justify-center sm:col-span-2">
            <h1 class="text-black font-bold text-lg sm:text-3xl py-2 sm:py-4">
                {{GoogleTranslate::trans('How Can You Help ?',session()->get('locale'))}}</h1>
            <p class="text-center w-52 sm:w-auto text-xs sm:text-base text-gray-700">
                {{GoogleTranslate::trans('As a relative to someone in crisis - you could help them to reach for help.',session()->get('locale'))}}</p>
        </div>
    </div>
    <div class="bg-white w-64 sm:w-[700px] sm:h-[350px] h-[450px] mt-6 sm:mt-0 absolute left-16 top-64 sm:top-80 sm:left-96 rounded-xl drop-shadow-lg grid grid-cols-1 sm:grid-cols-3 justify-center place-items-center">
        <div class="flex flex-col justify-center items-center">
            <a href="/help"><div class="border-2 border-gray-300 w-16 h-16 sm:w-28 sm:h-28 rounded-lg hover:drop-shadow-lg hover:border-blue-400 cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-110 flex justify-center items-center sm:text-5xl text-3xl">
                <i class="fas fa-ambulance mainColor"></i>
            </div></a>
            <div class="w-28 h-10 text-xs sm:text-sm text-center py-3">
                <h1>{{GoogleTranslate::trans('Emergency Lines',session()->get('locale'))}}</h1>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <a href="/advices"><div class="border-2 border-gray-300 w-16 h-16 sm:w-28 sm:h-28 rounded-lg hover:drop-shadow-lg hover:border-blue-400 cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-110 flex justify-center items-center sm:text-5xl text-3xl">
                <i class="fas fa-comment-medical mainColor"></i>
            </div></a>
            <div class="w-28 h-10 text-xs sm:text-sm text-center py-3">
                <h1>{{GoogleTranslate::trans('Help Advices',session()->get('locale'))}}</h1>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <a href="/downloadApp"><div class="border-2 border-gray-300 w-16 h-16 sm:w-28 sm:h-28 rounded-lg hover:drop-shadow-lg hover:border-blue-400 cursor-pointer transition ease-in-out hover:-translate-y-1 hover:scale-110 flex justify-center items-center">
                <img src="{{asset('images/MP-circle.png')}}" alt="minplanLogo" class="w-[40px] sm:w-[70px]">
            </div></a>
            <div class="w-28 h-10 text-xs sm:text-sm text-center py-3">
                <h1>{{GoogleTranslate::trans('Download MinPlan App',session()->get('locale'))}}</h1>
            </div>
        </div>
       
    </div>
    <div class="absolute w-12 h-12 rounded-full bg-gradient-to-r from-gray-200 to-red-400 sm:top-[26rem] sm:left-[22rem] top-80 left-8"></div>
    <div class="absolute w-14 h-14 rounded-full bg-gradient-to-r from-gray-200 to-blue-400 sm:top-[33rem] sm:right-[26rem] top-[35rem] right-10"></div>
</div>
</x-app-layouts>