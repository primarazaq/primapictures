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
    <section class="container my-40 mx-auto">
        <div class=" flex lg:flex-row">
            <div class="lg:basis-1/2 -mt-24 sm:mt-10 lg:-mt-20 overflow-hidden">

                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96 mx-2">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.com/docs/images/carousel/carousel-4.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://flowbite.com/docs/images/carousel/carousel-5.svg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="...">
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
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7">
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
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="lg:basis-1/2 w-full h-80 self-center px-4 relative z-0 lg:flex lg:flex-col">
                <div class="absolute w-full h-full sm:px-6 lg:px-4 -mt-10 lg:-mt-24">
                    <div class="listJasa" id="Jasa-default">
                        <p data-aos="fade-down" data-aos-duration="2000"
                            class="relative sm:text-2xl lg:text-4xl font-bold gilroy text-left text-black mb-2 lg:mb-0 sm:pt-5 sm:mb-16">

                            {{ $jasaHigh->nama }}
                        </p>
                        <p data-aos="fade-down" data-aos-duration="2000"
                            class="relative sm:text-2xl lg:text-4xl font-bold gilroy text-left text-primary mb-5 lg:mb-5 sm:pt-5 sm:mb-16">
                            @currency($jasaLow->harga) ~ @currency($jasaHigh->harga)
                        </p>
                        <p data-aos="fade-down" data-aos-duration="3000"
                            class="relative text-[10px] sm:text-sm tracking-widest text-left text-gray-800 lg:pr-28 sm:pr-7 leading-loose lg:leading-8 lg:text-base lg:text-justify sm:leading-8 sm:text-justify">
                            <span>{{ $jasaHigh->deskripsi }}</span>
                        </p>
                    </div>
                    @foreach ($jasa as $item)
                        <div class="hidden listJasa" id="Jasa-{{ $item->id }}">
                            <p data-aos="fade-down" data-aos-duration="2000"
                                class="relative sm:text-2xl lg:text-4xl font-bold gilroy text-left text-black mb-2 lg:mb-0 sm:pt-5 sm:mb-16">

                                {{ $item->nama }}
                            </p>
                            <p data-aos="fade-down" data-aos-duration="2000"
                                class="relative sm:text-2xl lg:text-4xl font-bold gilroy text-left text-primary mb-5 lg:mb-5 sm:pt-5 sm:mb-16">
                                @currency($item->harga)
                            </p>
                            <p data-aos="fade-down" data-aos-duration="3000"
                                class="relative text-[10px] sm:text-sm tracking-widest text-left text-gray-800 lg:pr-28 sm:pr-7 leading-loose lg:leading-8 lg:text-base lg:text-justify sm:leading-8 sm:text-justify">
                                <span>{{ $item->deskripsi }}</span>
                            </p>
                        </div>
                    @endforeach
                    <div class="flex flex-row justify-start mt-5 space-x-6">
                        <div class="relative">
                            <div>
                                <select name="pilihan" id="pilihan"
                                    class="flex items-center space-x-1 cursor-pointer text-sm w-52 mt-3 bg-white text-primary px-10 py-[2px] font-semibold tracking-[2px] text-[13px] rounded-full shadow-sm shadow-slate-600 ">
                                    <option value="default">Lihat Paket</option>
                                    @foreach ($jasa as $list)
                                        <option value="{{ $list->id }}">{{ $loop->iteration }}. {{ $list->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                <script>
                                    $(document).ready(function() {
                                        $('#pilihan').change(function() {
                                            var pilihan = $(this).val();
                                            $('.listJasa').addClass(
                                                'hidden'); // Menambahkan class 'hidden' pada semua div dengan class 'jasa'
                                            $('#Jasa-' + pilihan).removeClass(
                                                'hidden'); // Menghapus class 'hidden' pada div dengan id 'jasa-pilihan'
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <div>
                        </div>
                        <div class="relative">
                            <button
                                class=" w-fit mt-3 bg-primary text-white px-10 py-[2px] font-semibold inline-block tracking-[2px] text-[13px] uppercase rounded-full shadow-sm hover:shadow-md hover:bg-red-500 hover:text-white transform hover:scale-110 duration-500 ease-in-out shadow-black">
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('components/footer')
</body>


</html>
