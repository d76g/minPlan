<x-app-layouts>
    <section id="home">
        <div class="container flex flex-col  w-auto h-screen bg-gray-100 items-center justify-center">
            <div class="flex sm:mt-6 flex-col items-center justify-center">
                <h1 class="text-base font-bold sm:text-4xl ">Welcome to <span class="mainColor">MinPlan</span> onboarding Program.</h1>
                <h4 class="text-sm font-bold sm:text-2xl py-4 text-blue-500">We are here to <span class="italic">HELP</span> you in a time of crisis...</h4>
                
            </div>
            <div class="container 2xl h-auto block justify-center">
                <div class="flex flex-col items-center justify-center">
                    <p class="text-sm font-bold sm:text-2xl pb-4">Fill the Form to stay in touch with us.</p>
                    <button class="bg-blue-400 px-4 py-2 rounded hover:bg-blue-300" id="formBtn">Fill the Form</button>
                </div>
                
                <div class="invisible" id="formContent">
                    <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="relative z-10 " aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            
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