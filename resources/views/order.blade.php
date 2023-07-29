<!doctype html>
<html class="scroll-smooth">

<head>
    @include('components/head')
</head>

<body>
    <header
        class="bg-white fixed top-0 left-0 w-full h-[69px] flex items-center border-b-2 z-50 transition duration-500 ease-in-out">
        @include('components/navbar-order')
    </header>
    <section class="2xl:my-16 2xl:mb-28 w-full 2xl:h-96 md:my-0 md:mb-3 md:h-72 lg:my-10 my-8 mb-0">

        <div id="default-carousel" class="relative w-full duration-1000  " data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-48 overflow-hidden rounded-lg sm:h-64  md:h-96 lg:h-[400px] 2xl:h-[550px] mx-2">
                <!-- Item 1 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="image/banner1.webp"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="image/banner3.webp"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="image/banner2.webp"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="image/banner4.webp"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="image/banner5.webp"
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

    <section class="md:mt-0 px-4 sm:px-2 md:px-0 mt-0 mb-10">
        <div class="lg:grid lg:grid-cols-3 lg:gap-10 lg:p-20 sm:grid sm:grid-cols-1 sm:gap-5 sm:p-10">
            @foreach ($kategori as $item)
                <div class="rounded-full p-2">
                    <div x-data="{ open: false }"
                        class="w-full bg-white shadow-md shadow-slate-600 rounded-lg overflow-hidden">
                        <div @mouseover="open = true" class="relative">
                            
                            @switch($item->nama)
                                @case('Wedding')
                                <img :class="{
                                    'transform': open,
                                    '-translate-x-16': open,
                                    'scale-110': open
                                }"
                                class="md:h-96 h-60 sm:h-80 w-full object-cover transition-transform duration-500"
                                src="image/wedding/wedding.webp" alt="Gambar">
                                    @break
                                @case('Event')
                                <img :class="{
                                    'transform': open,
                                    '-translate-x-16': open,
                                    'scale-110': open
                                }"
                                class="md:h-96 h-60 sm:h-80 w-full object-cover transition-transform duration-500"
                                src="image/event/event.webp" alt="Gambar">
                                    @break
                                @case('Personal')
                                <img :class="{
                                    'transform': open,
                                    '-translate-x-16': open,
                                    'scale-110': open
                                }"
                                class="md:h-96 h-60 sm:h-80 w-full object-cover transition-transform duration-500"
                                src="image/personal/personal.webp" alt="Gambar">
                                @break
                                    
                            @endswitch

                            <div x-show="open"
                                x-transition:enter="transition-transform transition-opacity ease-out duration-300"
                                x-transition:enter-start="opacity-0 translate-x-56"
                                x-transition:enter-end="opacity-100 transform"
                                x-transition:leave="transition ease-in duration-300"
                                x-transition:leave-end="opacity-0 transform translate-x-56"
                                @mouseover.away="open = false" class="absolute inset-0 flex items-center justify-end">
                                <div class="p-4 bg-white h-full md:ml-96 sm:ml-[600px] ml-0 flex flex-col justify-between">
                                    <div>
                                        <h3 class="text-sm font-semibold text-center">{{ $item->nama }}</h3>
                                        <p class="mt-2 text-xs ">{{ $item->deskripsi }}</p>
                                    </div>
                                    <div class="self-center">
                                        <a href="/order/{{ $item->id }}">
                                            <button
                                                class="w-fit bg-primary text-white px-16 py-[2px] font-semibold inline-block tracking-[2px] text-[7px] uppercase rounded-full shadow-sm hover:shadow-md transform hover:scale-110 duration-500 ease-in-out shadow-black lg:w-60 lg:h-8 lg:text-lg">
                                                Pesan
                                            </button></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </section>
    @include('components/footer')
</body>


</html>
