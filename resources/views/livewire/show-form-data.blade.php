@section('title', 'Form Data')
<div class="w-full h-auto sm:h-full flex flex-col md:items-center">
  <div class="flex flex-row md:justify-between w-full md:w-[95%] mt-4">
    <div class="flex flex-col w-auto md:w-2/6 h-auto md:items-start  bg-gray-100 rounded-md md:py-1 md:pl-6 md:mb-6 px-2 py-1 md:mx-0 mx-4 mb-3 ">
      <span class="text-base md:text-xl">Form Data</span>
      <span class="text-xs md:text-sm">Information about users who fill in the form</span>
      <a href="/form" class="text-xs md:text-sm text-blue-400 hover:text-blue-600 hover:underline" target="_blank">visit the form</a>
    </div>
    <div class="md:w-3/6 flex justify-end items-center">
      @if ($responces->isNotEmpty())
      <button type="button" class="text-black bg-green-300  hover:bg-green-400 border border-b focus:ring-4 focus:ring-blue-300 md:font-medium rounded-md md:rounded-lg text-xs md:text-sm px-2 py-1 md:px-5 md:py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" wire:click="export">
          <i class="fas fa-file-download"></i>
      </button>
      @endif
    </div>
  </div>
  {{-- Table Content --}}
  <div class="flex md:justify-center md:w-full min-h-fit">
  @if ($responces->isEmpty())
         <div class="h-[80vh] flex justify-center items-center">
          <span class="text-3xl text-gray-300 font-bold">No Records <i class="fa fa-table"></i></span>
        </div>
  @else
  <div class="w-fit md:w-[95%] h-auto bg-gray-100 rounded-md flex md:justify-center md:items-center mx-2 overflow-x-auto">
    <table class="table-auto w-3/5 md:w-11/12 text-xs md:text-sm text-left text-gray-500 dark:text-gray-400 my-4 mx-2">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="py-3 px-6">Country</th>
            <th scope="col" class="py-3 px-6">Priority</th>
            <th scope="col" class="py-3 px-6">Age</th>
            <th scope="col" class="py-3 px-6">Gets SMS ?</th>
            <th scope="col" class="py-3 px-6">Phone Number</th>
            <th scope="col" class="py-3 px-6">Gets Emails ?</th>
            <th scope="col" class="py-3 px-6">Safty Plan ?</th>
            <th scope="col" class="py-3 px-6">Email</th>
            <th scope="col" class="py-3 px-6">Date</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($responces as $data)
                 <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="py-4 px-6" wire:key="data-{{ $data->id }}">{{$data->country}}</td>
                    <td class="py-4 px-6" wire:key="data-{{ $data->id }}">{{$data->priority}}</td>
                    <td class="py-4 px-6" wire:key="data-{{ $data->id }}">{{$data->age}}</td>
                    <td class="py-4 px-6" wire:key="data-{{ $data->id }}">{{$data->receive_sms}}</td>
                    <td class="py-4 px-6" wire:key="data-{{ $data->id }}">{{$data->phone_number}}</td>
                    <td class="py-4 px-6" wire:key="data-{{ $data->id }}">{{$data->receive_email}}</td>
                    <td class="py-4 px-6" wire:key="data-{{ $data->id }}">{{$data->needs_safty_plan}}</td>
                    <td class="py-4 px-6" wire:key="data-{{ $data->id }}">{{$data->email}}</td>
                    <td class="py-4 px-6" wire:key="data-{{ $data->id }}" >{{$data->created_at->format('d/m/Y')}}</td>
                 </tr>
            @endforeach
          </tbody>
        </table>
        @endif
      </div>
      </div>
      <div class="px-6 my-4">
        {{$responces->links()}}
      </div>
      
</div>
