@section('title','Guidance Tips')
    {{-- Main Container --}}
    @php
            if(session()->missing('locale')){
                session()->put('locale','en');
            }
            if(session()->get('locale',''))
            {
                session()->put('locale',session()->get('locale' ?? 'en'));
            }
    @endphp
<div class="flex justify-center items-center mx-auto w-full h-full sm:h-screen relative">
    <div class="relative flex items-center flex-col w-4/5 h-[90vh] mainColor my-7">
            <div class="relative flex justify-center items-center sm:h-28 h-16 mt-6 mb-2 sm:my-4">
                <img src="{{URL::asset('/images/outline_health_and_safety.svg')}}" alt="Guidance Icon" class="sm:w-20 sm:h-20 h-16 w-16">
            </div>
            {{-- Steps Container --}}
        <div class="relative flex justify-center items-center">
            {{-- Step 1 --}}
            <div class="w-auto flex flex-col justify-center content-center text-xs sm:text-sm">  
                <div class="flex px-2 gap-2 mb-2 content-center justify-center flex-col items-center">
                    <div class="radio-button flex flex-col py-2 justify-center items-center">
                        <p class="my-2 text-center w-44">{{GoogleTranslate::trans('Tell us your age to let us help you better',session()->get('locale'))}}</p>
                        <a href="{{route('teens')}}">
                            <div class="h-12 w-[219px] sm:h-12 border-[1px] border-gray-300  my-1 rounded-full cursor-pointer hover:bg-gray-200 text-center py-3.5">
                                14 - 17
                            </div>
                        </a>
                        <a href="{{route('youngAdults')}}">
                            <div class="h-12 w-[219px] sm:h-12 border-[1px] border-gray-300  my-1 rounded-full cursor-pointer hover:bg-gray-200 text-center py-3.5">
                                18 - 25
                            </div>
                        </a>
                        <a href="{{route('adults')}}">
                            <div class="h-12 w-[219px] sm:h-12 border-[1px] border-gray-300  my-1 rounded-full cursor-pointer hover:bg-gray-200 text-center py-3.5">
                                26 - 39
                            </div>
                        </a>
                        <a href="{{route('adults')}}">
                            <div class="h-12 w-[219px] sm:h-12 border-[1px] border-gray-300  my-1 rounded-full cursor-pointer hover:bg-gray-200 text-center py-3.5">
                                40 - 64
                            </div>
                        </a>
                        <a href="{{route('adults')}}">
                            <div class="h-12 w-[219px] sm:h-12 border-[1px] border-gray-300  my-1 rounded-full cursor-pointer hover:bg-gray-200 text-center py-3.5">
                                65+
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
