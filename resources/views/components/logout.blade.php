<style>
    [x-cloak] { 
        display: none !important;
     }
  </style>
<div x-data="{ logout: false }">
    <button @click="logout =!logout" class="block relative bottom-0 p-2 rounded-full px-16 py-2 text-base font-normal text-white bg-primary" type="button">
      
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        class="w-6 absolute fill-white" viewBox="0 0 96.943 96.943" style="enable-background:new 0 0 96.943 96.943;"
        xml:space="preserve">
        <g>
        <g>
        <path d="M61.168,83.92H11.364V13.025H61.17c1.104,0,2-0.896,2-2V3.66c0-1.104-0.896-2-2-2H2c-1.104,0-2,0.896-2,2v89.623
        c0,1.104,0.896,2,2,2h59.168c1.105,0,2-0.896,2-2V85.92C63.168,84.814,62.274,83.92,61.168,83.92z"/>
        <path d="M96.355,47.058l-26.922-26.92c-0.75-0.751-2.078-0.75-2.828,0l-6.387,6.388c-0.781,0.781-0.781,2.047,0,2.828
        l12.16,12.162H19.737c-1.104,0-2,0.896-2,2v9.912c0,1.104,0.896,2,2,2h52.644L60.221,67.59c-0.781,0.781-0.781,2.047,0,2.828
        l6.387,6.389c0.375,0.375,0.885,0.586,1.414,0.586c0.531,0,1.039-0.211,1.414-0.586l26.922-26.92
        c0.375-0.375,0.586-0.885,0.586-1.414C96.943,47.941,96.73,47.433,96.355,47.058z"/>
        </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
        {{-- <img src="imgs/logout.png" alt="" class="w-6 absolute ml-11"> --}}
        <p class="inline-block whitespace-nowrap ml-10 text-white">Logout</p>
    </button>

    <div x-show="logout" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex overflow-x-hidden fixed w-full md:inset-0 justify-center items-center">
            <div x-cloak @click="logout = false" x-show="logout" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-800 bg-opacity-60" aria-hidden="true"
            ></div>

            <div x-cloak x-show="logout" 
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
            >

                <div class="p-6 text-center">
                    <img src="../../../../imgs/logoutImg.png" class="w-24 mx-auto" alt="">
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin keluar dari sistem?</h3>
                  <div class="flex justify-center">
                    <form action="/logout" method="post">
                        @csrf
                        <button @click="logout = false" type="submit" class="px-16 text-white py-2 bg-primary shadow-lg rounded-full">
                            logout
                        </button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
