<!doctype html>
<html class="scroll-smooth">

<head>
    @include('components/head')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>

<body>
    <header
        class="bg-white fixed top-0 left-0 w-full h-[69px] flex items-center border-b-2 z-50 transition duration-500 ease-in-out">
        @include('components/navbar-order')
    </header>
    <section class="container my-20 mx-auto">

        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96 mx-2">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.com/docs/images/carousel/carousel-4.svg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="https://flowbite.com/docs/images/carousel/carousel-5.svg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-6 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-6 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>
    <section>
        {{-- <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
            <div
                class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                <figure class="mb-2">
                    <img src="https://srv-cdn.onedio.com/store/bf2cbc886120f284ef46fd92a48f5fb58c62e6a50fbdf8fa796d057dd0ddc242.png"
                        alt="" class="h-64 ml-auto mr-auto" />
                </figure>
                <div class="rounded-lg p-4 bg-primary flex flex-col">
                    <div>
                        <h5 class="text-white text-2xl font-bold leading-none">
                            iPhone 11 Pro Max
                        </h5>
                        <span class="text-xs text-gray-400 leading-none">And then there was Pro.</span>
                    </div>
                    <div class="flex items-center">
                        <div class="text-lg text-white font-light">
                            $1099,00
                        </div>
                        <button href="javascript:;"
                            class="rounded-full bg-green-700 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="stroke-current m-auto">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="lg:grid lg:grid-cols-3 lg:gap-10 lg:p-20 sm:grid sm:grid-cols-2 sm:gap-5 sm:p-10">
            <div class="rounded-full m-h-64 p-2">
                <div x-data="{ open: false }"
                    class="w-full bg-white shadow-md shadow-slate-600 rounded-lg overflow-hidden">
                    <div @mouseover="open = true" class="relative">
                        <img :class="{
                            'transform': open,
                            '-translate-x-16': open,
                            'scale-110': open
                        }"
                            class="h-full w-full object-cover transition-transform duration-500" src="image/foto6.jpg"
                            alt="Gambar">

                        <div x-show="open"
                            x-transition:enter="transition-transform transition-opacity ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-56"
                            x-transition:enter-end="opacity-100 transform"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-end="opacity-0 transform translate-x-56" @mouseout="open = false"
                            class="absolute inset-0 flex items-center justify-end">
                            <div class="p-4 bg-white h-full ml-56 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-sm font-semibold">Deskripsi</h3>
                                    <p class="mt-2">Deskripsi singkat tentang konten ini.</p>
                                </div>
                                <div class="self-end">
                                    <button
                                        class="w-fit bg-primary text-white px-16 py-[2px] font-semibold inline-block tracking-[2px] text-[7px] uppercase rounded-full shadow-sm hover:shadow-md transform hover:scale-110 duration-500 ease-in-out shadow-black lg:w-60 lg:h-8 lg:text-lg">
                                        Pesan
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- <div class="container-xl">
            <div
                class="absolute text-center text-black bg-white bg-opacity-50 opacity-0 ml-56 transform transition-all duration-300 py-7 self-center z-50 lg:inset-x-0 lg:translate-y-36 lg:space-y-20 sm:space-y-8 sm:translate-y-8 hover:ml-44 hover:opacity-100">
                <p class="text-md sm:text-lg font-bold lg:text-4xl">
                    <span>Wedding</span>
                </p>
                <p
                    class="text-[8px] tracking-widest px-4 py-5 mt-5 pb-2 font-extralight helvetica lg:text-[17px] lg:px-96 sm:text-[10px] sm:px-20">
                    Hal terbaik mengenai sebuah gambar adalah gambar itu tidak pernah berubah, bahkan ketika
                    orang-orang di dalamnya sudah berubah. Itulah momen yang menjadikannya abadi
                </p>
                <div data-aos="fade" data-aos-duration="3000">
                    <button
                        class="w-fit mt-8 bg-white text-primary px-3 py-[2px] font-semibold inline-block tracking-[2px] text-[7px] uppercase rounded-full shadow-sm hover:shadow-md transform hover:scale-110 duration-500 ease-in-out shadow-black lg:w-60 lg:h-8 lg:text-lg">
                        ORDER SEKARANG
                    </button>
                </div>
            </div>
            <div class="overflow-hidden">
                <div class="absolute bg-primary w-full h-60 opacity-60 z-40 lg:h-[700px] sm:h-80"></div>
                <img src="image/foto6.jpg"
                    class="relative w-full h-60 self-center z-0 object-cover lg:h-[700px] sm:h-80" />
            </div>
        </div> --}}
    </section>

    {{-- <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script> --}}
    @include('components/footer')
</body>


</html>
