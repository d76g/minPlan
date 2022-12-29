@section('title', 'Form Data')
  @include('layouts.navigation')

<div class="overflow-x-auto relative mt-4 border-t-4 border-indigo-500">
    <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
      <div class="px-6 my-4">
        {{$responces->links()}}
      </div>
      
</div>
