@php
     $country = session()->get('country');
@endphp
<div class="relative flex flex-col items-center text-xs sm:text-base">
    <p class="mb-5 text-center sm:w-80 w-52">{{GoogleTranslate::trans('There are different hotlines and safe spaces where you can get help',session()->get('locale'))}}</p>
    <p class="mb-5 text-center sm:w-80 w-52">{{GoogleTranslate::trans('Many places its possible to be anonymous',session()->get('locale'))}}</p>
    @if ($emergency_data->isEmpty())
    <p class="my-1 p-1 bg-slate-200 rounded-md text-center text-cyan-700">{{GoogleTranslate::trans('Oh Sorry!, no Emergency Contacts, available yet.',session()->get('locale'))}}</p>
    @else
    <div class="sm:w-80 w-52 text-black my-1">
        <p>{{GoogleTranslate::trans("You can start by calling one of these in {$country}",session()->get('locale'))}}</p>
        <ul class="list-inside">
            @foreach ($emergency_data as $data)
            <li class="py-1">{{$data->phone}}</li>
            @endforeach
        </ul>
    </div>
    <div class="sm:w-80 w-52 text-black">
      <p>{{GoogleTranslate::trans('or try to visit one of these places',session()->get('locale'))}}</p>
      <ul class="list-inside">
        @foreach ($emergency_data as $data)
            <a href="{{$data->website}}" target="_blank"><li class="py-1 text-blue-500 sm:hover:underline">{{$data->name}}</li></a>
        @endforeach
    </ul>
    </div>
    @endif
</div>
