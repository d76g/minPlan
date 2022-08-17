<x-app-layouts>
    <section id="home">
        <div class="container 2xl h-screen w-auto block bg-gray-200">
            <div class="flex items-center justify-center h-1/2 text-sm font-bold sm:text-4xl">
                <h1>MinPlan onboarding project</h1>
            </div>
            <div class="container 2xl h-1/2 block">
                <div class="flex items-center justify-center">
                    <button class="bg-blue-400 px-4 py-2 rounded hover:bg-blue-300" id="formBtn">Fill the Form</button>
                </div>
                
                <div class="invisible" id="formContent">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="relative z-10 invisiable" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            
                            
                        
                            <div class="fixed z-10 inset-0 overflow-y-auto">
                                <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"> 
                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                    @livewire('min-plan-form')
                                </div>
                            
                            </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    {{-- <section id="surveForm">
        <div class="container 2xl bg-gray-300 h-screen block">
            <div class="flex items-center justify-center h-screen">
                <button class="bg-blue-400 px-4 py-2 rounded hover:bg-blue-300" id="formBtn">Fill the Form</button>
            </div>
            <div class="invisible" id="formContent">
                <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="relative z-10 invisiable" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                    
                        <div class="fixed z-10 inset-0 overflow-y-auto">
                        <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0"> 
                            @livewire('min-plan-form')
                        </div>
                        
                        </div>
                    </div>
  
                
            </div>
        </div>
    </section> --}}
</x-app-layouts>