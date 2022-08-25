<x-app-layouts>
    <section id="home">
        <div class="container flex flex-col  w-auto h-screen bg-gray-100 items-center justify-center">
            <div class="flex sm:mt-6 flex-col items-center justify-center">
                <img class="w-[60px] my-4" src="{{url('/images/MP-circle.png')}}" alt="minPlan">
                <h1 class="text-base font-bold sm:text-4xl "><span class="mainColor">MinPlan</span> onboarding Program.</h1>
                <div class="bg-gray-200 rounded w-[200px] h-[70px] text-center my-6">
                    <h4 class="text-sm sm:text-[16px] py-4">We are here to help you<br> a time of crisis...</h4>
                </div>
                <p class="text-sm text-center font-bold sm:text-2xl pb-4">Fill the form to get everything </br>customed for you.</p>
            </div>
            <div class="container 2xl h-auto flex justify-center content-center">
                <div class="flex flex-col items-center justify-center bg-gray-200 h-[200px] w-[200px] rounded-lg">
                    <button class="bg-gray-400 mt-2 px-8 py-2 rounded-full hover:bg-gray-500 text-white" id="formBtn">Fill the Form</button>
                    <p class="mt-4 mx-4 my-2 text-left text-xs">After filling the form with your personal information,you will receveie an email containing all the information to access our app and track your relative.</p>
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
            <div class="mt-6">
                <a href="/help"><i class="text-gray-400 fas fa-exclamation-triangle fa-2xl animate-pulse"></i></a>
            </div> 
        </div>
    </section>
</x-app-layouts>