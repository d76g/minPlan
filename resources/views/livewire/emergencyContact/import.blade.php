<div class="w-11/12 md:w-2/5 flex flex-col justify-center bg-gray-50 rounded-md my-4 py-3 px-6 drop-shadow-lg">
    <span class="border-b py-1 font-bold uppercase mb-3">Import Record using .csv</span>
    <form class="w-full" enctype="multipart/form-data">
        @csrf
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
            <input class="block w-full py-2 px-3 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="file" wire:model='file'>
            @error('file') <span class="error text-xs text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="flex my-2">
            <button x-data @store.window ="show = !show" wire:click.prevent="fileImport" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><i class="fas fa-file-excel pr-2"></i>Import</button>
        </div>
    </form>
    
</div>
