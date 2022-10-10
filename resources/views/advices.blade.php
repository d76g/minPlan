<x-app-layouts>
    <div class="w-auto container h-screen w-full flex flex-col justify-center">
    <div class="w-auto flex justify-start m-6 text-gray-300">
        <a href="/" class="flex items-center justify-start"><i class="fa-solid fa-angle-left fa-2x"></i>
            <p class="text-xs px-1">Home</p>
        </a>
        
    </div>
    <div class="w-auto container h-screen flex justify-center">
        <div class="w-auto flex flex-col h-auto justify-center">
          <div class="w-80 sm:w-96 h-12">
            <h1 class="font-bold text-center sm:text-2xl">Advices from MinPlan</h1>
          </div>
          <div class="flex justify-center flex-col pr-3 pl-2">
            <div x-data="{open : false}" class="w-80 sm:w-96">
              <div>
                <div @click="open = ! open" class="w-auto sm:w-90 bg-gray-300 h-12 my-1 flex justify-between">
                  <h1 class="text-center sm:text-lg p-2">Advice 1</h1>
                  <button class="p-2"><span><i :class="open ? 'fa-arrow-circle-up' : 'fa-arrow-circle-down' " class="fas"></i></span></button>
                </div>
                <div x-show="open" x-transition class="w-90 box-bg h-auto my-1">
                  <p class="px-2 py-1 text-xs text-justify">You should not be affraid and please ask for anonymity at the helplines if that is important for you or your loved one</p>
                </div>
              </div>
            </div>
    
              <div x-data="{open : false}" class="w-80 sm:w-96">
                <div>
                  <div @click="open = ! open" class="w-90 bg-gray-300 h-12 my-1 flex justify-between">
                  <h1 class="text-center sm:text-lg p-2">Advice 2</h1>
                  <button class="p-2"><span><i :class="open ? 'fa-arrow-circle-up' : 'fa-arrow-circle-down' " class="fas"></i></span></button>
                </div>
                  <div x-show="open" x-transition class="w-90 box-bg h-auto my-1">
                    <p class="px-2 py-1 text-xs text-justify">
                        Stay with the person and talk openly and don't be afraid to ask direct questions, such as “Are you thinking about self harming?”
                        <br>
                        <br>
                        During the conversation, make sure you:
                        <br>
                        -stay calm 
                        <br>
                        -acknowledge that their feelings are legitimate
                        <br>
                        -offer support, hope  and encouragement
                        <br>
                        <br>
                        Its ok if you feel you cant handle it. But then please reach out for someone! </p>
                  </div>
                </div>
              </div>
              <div x-data="{open : false}" class="w-80 sm:w-96">
                <div>
                  <div @click="open = ! open" class="w-90 bg-gray-300 h-12 my-1 flex justify-between">
                  <h1 class="text-center sm:text-lg p-2">Advice 3</h1>
                  <button class="p-2"><span><i :class="open ? 'fa-arrow-circle-up' : 'fa-arrow-circle-down' " class="fas"></i></span></button>
                </div>
                  <div x-show="open" x-transition class="w-90 box-bg h-auto my-1">
                    <p class="px-2 py-1 text-xs text-justify">
                        It is important to give lots of empathy to help them feel comfortable sharing, and hold back from trying to fix what they're going through or giving them any advice. Just really listen and show your concern by your body language and compassionate statements, so they are comfortable talking.
                        <br>
                        <br>
                        Be sure to take care of yourself, too. There's nothing easy about helping a friend who's in pain</p>
                  </div>
                </div>
              </div>
              <div x-data="{open : false}" class="w-80 sm:w-96">
                <div>
                  <div @click="open = ! open" class="w-90 bg-gray-300 h-12 my-1 flex justify-between">
                  <h1 class="text-center sm:text-lg p-2">Advice 4</h1>
                  <button class="p-2"><span><i :class="open ? 'fa-arrow-circle-up' : 'fa-arrow-circle-down' " class="fas"></i></span></button>
                </div>
                  <div x-show="open" x-transition class="w-90 box-bg h-auto my-1">
                    <p class="px-2 py-1 text-xs text-justify">

                        taking care of your own mental health will help you sustain yourself—and be a better support for your loved one in the long run.
                        <br>
                        <br>
                        Be Realistic About How Much You Can Give
                        <br>
                        <br>
                        Bring In Others to Help
                        <br>
                        <br>
                        Talk To Someone About How You’re Feeling
                        <br>
                        <br>
                        Minplan gives you psychological safety and empowerment. Minplan help you finding your own coping strategies and ways to support your loved one.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

</x-app-layouts>