@section('title', 'Emergecny Contacts')
<div x-data="{ open: false }">
    @include('layouts.navigation')
<div class="w-full h-auto sm:h-full flex flex-col">
    
    <div class="flex flex-col mt-4 mx-4 rounded-md" >
        <div class="w-full flex justify-end mt-2">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" x-on:click="open = ! open">
                <i class="fas fa-plus"></i>
                <span class="pl-1">Add Record</span>
            </button>
            <button type="button" class="text-black bg-transparent  hover:bg-gray-200 border border-b focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" x-on:click="open = ! open">
                <i class="fas fa-file-excel"></i>
                <span class="pl-1">Import.csv</span>
            </button>
        </div>
    <table class="text-xs text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase bg-blue-200 dark:bg-gray-700 dark:text-gray-400">
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
                 <tr wire:key="data-{{ $data->id }}" class="bg-white hover:bg-gray-50 border-b">
                    <td class="p-1">{{$data->name}}</td>
                    <td class="p-1">{{$data->address}}</td>
                    <td class="p-1">{{$data->post_code}}</td>
                    <td class="p-1">{{$data->city}}</td>
                    <td class="p-1">{{$data->country}}</td>
                    <td class="p-1">{{$data->phone}}</td>
                    <td class="p-1">{{$data->email ?? 'no email'}}</td>
                    <td class="p-1"><a href="{{$data->website}}" class="text-blue-500" target="_blank">{{$data->website}}</a></td>
                    <td class="p-1">
                        <button x-on:click="open = true" type="button"  class="font-bold text-blue-600 dark:text-blue-500 m-1" wire:click="edit({{$data->id}})"><i class="fas fa-edit"></i></button>
                        <button type="button" class="font-bold text-red-600 dark:text-red-500 m-1" wire:click="deleteConfirm({{$data->id}})"><i class="fas fa-trash-alt"></i></button>
                    </td>
                 </tr>
            @endforeach
          
        </tbody>
      </table>
    </div>
      <div class="px-6 my-4">
        {{-- {{$contacts->links()}} --}}
      </div>
</div>
<div x-show="open"  x-cloak class="w-full h-screen absolute top-0 right-0 bottom-0">
    <div class="bg-black opacity-60 w-full h-screen"></div>
    <div class="flex flex-col justify-center items-center absolute top-0 right-0 bottom-0 w-full">
        <div class="flex justify-end w-2/5 pr-2">
            <button x-on:click="open = false" wire:click="cancel"><i class="fas fa-times text-white  hover:text-black"></i></button>
        </div>
        @if ($updateMode)
            @include('livewire.emergencyContact.update')
        @else  
            @include('livewire.emergencyContact.create')
        @endif
    </div>
</div>
</div>
<script src="{{asset('js/emergencyAlerts.js')}}"></script>

