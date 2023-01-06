@section('title', 'Emergecny Contacts')
<div x-data="{ open: false }" class="w-full">
<div class="w-full h-auto sm:h-full flex flex-col" x-data="{show: false}">
    {{-- Title and Buttons --}}
    <div class="flex flex-col md:flex-row mt-4 mx-4 md:justify-between md:w-[95%]" >
        <div class="flex flex-col mt-2 w-auto md:w-2/6 h-auto items-start md:ml-8 bg-slate-100 rounded-md md:py-1 p-0.5 md:pl-6 md:mb-6">
            <span class="text-base md:text-xl">Emergecny Contact Data</span>
            <span class="text-xs md:text-sm">Information about emergency websites and companies.</span>
        </div>
        <div class="flex justify-evenly md:justify-end mt-2 md:w-3/6 w-auto h-auto items-center md:ml-4 rounded-md md:py-1 md:pl-6 md:mb-6">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 md:font-medium rounded-md md:rounded-lg text-xs md:text-sm px-3 py-2 md:px-5 md:py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" x-on:click="open = ! open">
                <i class="fas fa-plus"></i>
                <span class="pl-1">Add Record</span>
            </button>
            <button type="button" class="text-black bg-yellow-300  hover:bg-yellow-500 border border-b focus:ring-4 focus:ring-yello-600 md:font-medium rounded-md md:rounded-lg text-xs md:text-sm px-3 py-2 md:px-5 md:py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" wire:click="importMode" x-on:click="show = ! show">
                <i class="fas fa-file-excel"></i>
                <span class="pl-1">Import.csv</span>
            </button>
            @if ($contacts->isNotEmpty())
            <button type="button" class="text-black bg-green-300  hover:bg-green-400 border border-b focus:ring-4 focus:ring-blue-300 md:font-medium rounded-md md:rounded-lg text-xs md:text-sm px-2 py-1 md:px-5 md:py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" wire:click="fileExport">
                <i class="fas fa-file-download"></i>
            </button>
            <button type="button" class="text-white bg-red-500  hover:bg-red-600 border border-b focus:ring-4 focus:ring-white-300 md:font-medium rounded-md md:rounded-lg text-xs md:text-sm px-2 py-1 md:px-5 md:py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" wire:click="deleteAllConfirm">
                <i class="fas fa-trash"></i>
            </button>
            @endif
        </div>
    </div>
    <div x-show="open" x-cloak class="w-full h-screen absolute top-0 right-0 bottom-0 z-20">
        <div class="bg-black opacity-60 w-full h-screen"></div>
        <div class="flex flex-col justify-center items-center absolute top-0 right-0 bottom-0 w-full">
            <div class="absolute top-6 right-10 z-10 md:relative md:flex md:justify-end md:w-2/5 md:mb-2 md:pr-2 md:top-0 md:right-0">
                <button x-on:click="open = false" wire:click="cancel"><i class="fas fa-times text-black md:text-white  md:hover:text-black"></i></button>
            </div>
            @if ($updateMode)
                @include('livewire.emergencyContact.update')
            @else
                @include('livewire.emergencyContact.create')
            @endif
        </div>
    </div>
    <div x-show="show"  x-cloak class="w-full h-screen absolute top-0 right-0 bottom-0 z-20">
        <div class="bg-black opacity-60 w-full h-screen"></div>
        <div class="flex flex-col justify-center items-center absolute top-0 right-0 bottom-0 w-full">
            <div class="absolute top-6 right-10 z-10 md:relative md:flex md:justify-end md:w-2/5 md:mb-2 md:pr-2 md:top-0 md:right-0">
                <button x-on:click="show = false" wire:click="cancel"><i class="fas fa-times text-white  md:hover:text-black"></i></button>
            </div>
            @if ($importMode)
                @include('livewire.emergencyContact.import')
            @endif
        </div>
    </div>
    {{-- Table Content --}}
    <div class="flex md:justify-center md:w-full min-h-fit">
    @if ($contacts->isEmpty())
    <div class="h-[70vh] flex justify-center items-center">
        <span class="text-3xl text-gray-300 font-bold">No Records <i class="fa fa-table"></i></span>
    </div>
    @else 
    <div class="w-fit md:w-[95%] h-auto bg-slate-50 rounded-md flex md:justify-center md:items-center md:ml-8 overflow-x-auto">
    <table class="table-auto w-3/5 md:w-11/12 text-xs md:text-sm text-left text-gray-500 dark:text-gray-400 m-2 drop-shadow-sm">
        <thead class="text-center text-xs text-gray-700 uppercase bg-blue-200 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="p-1">Name</th>
            <th scope="col" class="p-1">Address</th>
            <th scope="col" class="p-1">Post Code</th>
            <th scope="col" class="p-1">City</th>
            <th scope="col" class="p-1">Country</th>
            <th scope="col" class="p-1">Contact Number</th>
            <th scope="col" class="p-1">Email</th>
            <th scope="col" class="p-1">Website</th>
            <th scope="col" class="p-1">Actions</th>
          </tr>
        </thead>
        <tbody>  
            @foreach ($contacts as $data)
                 <tr wire:key="data-{{ $data->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">
                    <td class="p-1">{{$data->name}}</td>
                    <td class="p-1">{{$data->address}}</td>
                    <td class="p-1">{{$data->post_code}}</td>
                    <td class="p-1">{{$data->city}}</td>
                    <td class="p-1">{{$data->country}}</td>
                    <td class="p-1">{{$data->phone}}</td>
                    <td class="p-1">{{$data->email ?? 'no email'}}</td>
                    <td class="p-1"><a href="{{$data->website ?? ''}}" class="text-blue-500" target="_blank">{{$data->website ?? 'No Website'}}</a></td>
                    <td class="p-1">
                        <button x-on:click="open = true" type="button"  class="font-bold text-blue-600 dark:text-blue-500 m-1" wire:click="edit({{$data->id}})"><i class="fas fa-edit"></i></button>
                        <button type="button" class="font-bold text-red-600 dark:text-red-500 m-1" wire:click="deleteConfirm({{$data->id}})"><i class="fas fa-trash-alt"></i></button>
                    </td>
                 </tr>
            @endforeach
            
        </tbody>
    </table>
    @endif
</div>
</div>
    {{-- Pageination --}}
      <div class="px-16 my-4">
        {{$contacts->links()}}
      </div>
</div>
{{-- Forms --}}

</div>
<script src="{{asset('js/emergencyAlerts.js')}}"></script>

