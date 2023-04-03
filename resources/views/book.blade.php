<!doctype html>
<html class="scroll-smooth">

<head>
    @include('components/head')
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

    </section>
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
