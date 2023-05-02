<div class="container lg:container-xl">
    <div class="flex items-center md:w-screen md:max-w-auto lg:w-screen lg:max-w-[1900px] justify-between relative">
        <div class="px-4 -mt-10">
            {{-- <a id="title" href="#home" class="text-lg font-bold block py-6 text-white gilroy">Primapictures</a> --}}
            <a id="title" href="/" class="block py-6 w-32 mt-11"> <img src="image/logohitam.png" class="logo"
                    alt=""></a>
        </div>
        <div class="flex items-center px-4 -mt-1">

            <div x-data="{ modelOpen: false }">
                <button @click="modelOpen =!modelOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </button>

                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto -top-[580px]"
                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                    <div
                        class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                        <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                            x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            class="fixed inset-0 transition-opacity bg-black bg-opacity-40" aria-hidden="true"></div>

                        <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                            x-transition:enter-start="opacity-0 -translate-y-4 sm:translate-y-0 sm:scale-95"
                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave="transition ease-in duration-200 transform"
                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                            x-transition:leave-end="opacity-0 -translate-y-4 sm:translate-y-0 sm:scale-95"
                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                            <div class="flex items-center justify-between space-x-4">
                                <h1 class="text-xl font-medium text-gray-800 ">Keranjang</h1>

                                <button @click="modelOpen = false"
                                    class="text-gray-600 focus:outline-none hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>

                            <p class="mt-2 text-sm text-gray-500 ">
                                Cek keranjang anda
                            </p>

                            <form class="mt-5">

                                <div class="flex justify-end mt-6">
                                    <button type="button"
                                        class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-primary rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                        Checkout
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
