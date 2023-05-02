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
        @include('components/navbar-book')
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

        <div class="w-full md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2">
            <div
                class="bg-white rounded-lg m-h-64 p-2 transform hover:translate-y-2 hover:shadow-xl transition duration-300">
                <figure class="mb-2">
                    <img src="image/foto1.png" alt="" class="h-64 ml-auto mr-auto" />
                </figure>
                <div class="rounded-lg p-4 bg-primary flex flex-col">
                    <div>
                        <h5 class="text-white text-2xl font-bold leading-none">
                            Content Making
                        </h5>
                        <span class="text-xs text-gray-400 leading-none">Membuat konten video untuk anda</span>
                        <hr>
                        {{-- <form action="/checkout" method="POST">
                            @csrf --}}
                        <div>
                            <label for="qty" class="text-white text-xs">Jumlah pesan</label>
                            <input type="number" name="qty" class="w-max h-3 rounded-md">
                        </div>
                        <div>
                            <label for="name" class="text-white text-xs">Nama</label>
                            <input type="text" name="name" class="w-max h-3 rounded-md">
                        </div>
                        <div>
                            <label for="phone" class="text-white text-xs">No Telp.</label>
                            <input type="number" name="phone" class="w-max h-3 rounded-md">
                        </div>
                        <div>
                            <label for="address" class="text-white text-xs">Alamat</label>
                            <textarea name="address" class="w-max rounded-md"></textarea>
                        </div>

                    </div>
                    <div class="flex items-center">
                        <div class="text-lg text-white font-light">
                            Rp.750.000
                        </div>

                        <button id="pay-button"
                            class="rounded-full bg-green-700 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="stroke-current m-auto">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </button>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
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
    </script>
</body>
<script>
    AOS.init();

    // navbbar fixed
    // window.onscroll = function() {
    //     const header = document.querySelector('header');
    //     const fixedNav = header.offsetTop;
    //     const textNav = document.querySelector('#title');
    //     const hambchild1 = document.querySelector('#l1');
    //     const hambchild2 = document.querySelector('#l2');
    //     const hambchild3 = document.querySelector('#l3');

    //     var logo1 = "image/logoputih.png";
    //     var logo2 = "image/logohitam.png";

    //     if (window.pageYOffset > fixedNav) {
    //         header.classList.add('navbar-fixed');

    //         hambchild1.classList.remove('bg-white');
    //         hambchild2.classList.remove('bg-white');
    //         hambchild3.classList.remove('bg-white');
    //         hambchild1.classList.add('bg-black');
    //         hambchild2.classList.add('bg-black');
    //         hambchild3.classList.add('bg-black');
    //         $(".logo").attr("src", logo2);
    //         $(".nav-text").removeClass("lg:text-white");
    //         $(".nav-text").addClass("lg:text-black");
    //         $(".nav-text").addClass("lg:hover:text-primary");
    //         $(".nav-text").addClass("underlink");
    //     } else {
    //         header.classList.remove('navbar-fixed');

    //         hambchild1.classList.add('bg-white');
    //         hambchild2.classList.add('bg-white');
    //         hambchild3.classList.add('bg-white');
    //         hambchild1.classList.remove('bg-black');
    //         hambchild2.classList.remove('bg-black');
    //         hambchild3.classList.remove('bg-black');
    //         $(".logo").attr("src", logo1);
    //         $(".nav-text").removeClass("lg:text-black");
    //         $(".nav-text").addClass("lg:text-white");
    //         $(".nav-text").removeClass("lg:hover:text-primary");
    //         $(".nav-text").removeClass("underlink");
    //     }
    // }

    // // hamburger
    // const hamburger = document.querySelector('#hamburger');
    // const navMenu = document.querySelector('#nav-menu');

    // hamburger.addEventListener('click', function() {
    //     hamburger.classList.toggle('hamburger-active');
    //     navMenu.classList.toggle('hidden');
    // })
</script>

</html>
