<!doctype html>
<html class="scroll-smooth">

<head>
    @include('components/head')
</head>
<style>
    [x-cloak] {
        display: none;
    }

    .scroll {
        display: flex;
        flex-wrap: nowrap;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }

    /* iOS devices */
    @supports (-webkit-overflow-scrolling: touch) {
        .scroll {
            -webkit-overflow-scrolling: touch;
        }
    }

    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    .scroll-behavior-smooth {
        scroll-behavior: smooth;
    }

    .snap {
        scroll-snap-type: var(--scroll-snap-direction) var(--scroll-snap-constraint);
    }

    .snap-y {
        --scroll-snap-direction: y;
    }

    .snap-x {
        --scroll-snap-direction: x;
    }

    .snap-mandatory {
        --scroll-snap-constraint: mandatory;
    }

    .snap-start {
        scroll-snap-align: start;
    }
</style>

<body>
    <header
        class="bg-white fixed top-0 left-0 w-full h-[69px] flex items-center border-b-2 z-50 transition duration-500 ease-in-out">
        @include('components/navbar-order')
    </header>
    <section class="container my-40 mx-auto">
        <div class=" flex lg:flex-row">
            <div class="lg:basis-1/2 -mt-24 sm:mt-10 lg:-mt-20 overflow-hidden">

                {{-- <div id="default-carousel" class="relative w-full" data-carousel="slide">
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
                </div> --}}

                {{-- test --}}
                {{-- <div class="relative grid grid-cols-12 w-full lg:max-w-7xl mx-auto md:p-4"> --}}
                <div class="col-span-12 md:col-span-6 md:mr-2">

                    <div class="transition-all duration-100 ease-in-out w-full" x-data="ProductGallery($el)"
                        x-init="$watch('activeImage', value => scroll());"
                        :class="{
                            'absolute inset z-50 overflow-hidden bg-white flex flex-col gap-4 p-6': isFullScreen,
                            'relative':
                                !isFullScreen
                        }">



                        <ul
                            class="flex flex-grow-1 flex-nowrap overflow-x-scroll whitespace-nowrap snap snap-x snap-mandatory no-scrollbar scroll-behavior-smooth mb-6">
                            <template x-for="(image, i) in images" :key="image">
                                <li class="relative w-full h-full flex-shrink-0 snap-start">
                                    <span href="#">
                                        <img :src="image.url" class="m-auto max-h-full max-w-full">
                                    </span>
                                </li>
                            </template>
                        </ul>

                        <div class="m-auto max-w-full">
                            <div class="flex" x-show="images.length>1" x-cloak>
                                <a class="h-28 flex-grow-0 text-primary inline-flex items-center text-xl bg-white p-4"
                                    href="#" @click.prevent="prevImage">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <ul
                                    class="flex flex-grow-1 flex-nowrap overflow-x-scroll whitespace-nowrap snap snap-x snap-mandatory no-scrollbar scroll-behavior-smooth">
                                    <template x-for="(image, i) in images" :key="image">
                                        <li class="w-28 flex-shrink-0 snap-start mx-1" @wheel="mousewheelEvent($event)">
                                            <a class="inline-block border-4" href="#"
                                                @click.prevent="activeImage=i"
                                                :class="{
                                                    'border-primary': activeImage ==
                                                        i,
                                                    'border-white': activeImage != i
                                                }">
                                                <img :src="image.thumb" height="150" width="150">
                                            </a>
                                        </li>
                                    </template>
                                </ul>
                                <a class="h-28 flex-grow-0 inline-flex items-center text-xl text-primary bg-white p-4"
                                    href="#" @click.prevent="nextImage">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div data-zoom
                            class="absolute h-full w-full z-40 top-full left-0 -mt-36 md:left-full md:top-0 md:mt-0 transition-all ease-out duration-300 bg-indigo-500"
                            x-show="zoomIsActive && !isFullScreen"></div>
                        <div data-lens
                            class="absolute top-0 left-0 transition-transform ease-out duration-75 shadow z-50 transform-gpu pointer-events-none border-2"
                            x-show="zoomIsActive && !isFullScreen"></div>

                    </div>
                </div>
            </div>
            <div class="lg:basis-1/2 w-full h-80 self-center px-4 relative z-0 lg:flex lg:flex-col">
                <div class="absolute w-full h-full sm:px-6 lg:px-4 -mt-10 lg:-mt-24">
                    <div class="listJasa h-96" id="Jasa-default">
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
                        <div class="hidden listJasa h-96" id="Jasa-{{ $item->id }}">
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
                                        <option value="{{ $list->id }}">{{ $loop->iteration }}.
                                            {{ $list->nama }}
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
                        <div class="relative">
                            <a href="/order/{{ $id }}/formOrder">
                                <button
                                    class=" w-fit mt-3 bg-primary text-white px-10 py-[2px] font-semibold inline-block tracking-[2px] text-[13px] uppercase rounded-full shadow-sm hover:shadow-md hover:bg-red-500 hover:text-white transform hover:scale-110 duration-500 ease-in-out shadow-black">
                                    Pesan Sekarang
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>

    @include('components/footer')
    <script>
        var images = [{
                url: "https://source.unsplash.com/gKXKBY-C-Dk/1920x1080",
                thumb: "https://source.unsplash.com/gKXKBY-C-Dk/400x400",
                original: "https://source.unsplash.com/gKXKBY-C-Dk"
            },
            {
                url: "https://source.unsplash.com/9UUoGaaHtNE/1920x1080",
                thumb: "https://source.unsplash.com/9UUoGaaHtNE/400x400",
                original: "https://source.unsplash.com/9UUoGaaHtNE"
            },
            {
                url: "https://source.unsplash.com/w2DsS-ZAP4U/1920x1080",
                thumb: "https://source.unsplash.com/w2DsS-ZAP4U/400x400",
                original: "https://source.unsplash.com/w2DsS-ZAP4U"
            },
            {
                url: "https://source.unsplash.com/cWOzOnSoh6Q/1920x1080",
                thumb: "https://source.unsplash.com/cWOzOnSoh6Q/400x400",
                original: "https://source.unsplash.com/cWOzOnSoh6Q"
            },
            {
                url: "https://source.unsplash.com/NodtnCsLdTE/1920x1080",
                thumb: "https://source.unsplash.com/NodtnCsLdTE/400x400",
                original: "https://source.unsplash.com/NodtnCsLdTE"
            },
            {
                url: "https://source.unsplash.com/eMzblc6JmXM/1920x1080",
                thumb: "https://source.unsplash.com/eMzblc6JmXM/400x400",
                original: "https://source.unsplash.com/eMzblc6JmXM"
            },
            {
                url: "https://source.unsplash.com/so5nsYDOdxw/1920x1080",
                thumb: "https://source.unsplash.com/so5nsYDOdxw/400x400",
                original: "https://source.unsplash.com/so5nsYDOdxw"
            },
            {
                url: "https://source.unsplash.com/GtwiBmtJvaU/1920x1080",
                thumb: "https://source.unsplash.com/GtwiBmtJvaU/400x400",
                original: "https://source.unsplash.com/GtwiBmtJvaU"
            },
            {
                url: "https://source.unsplash.com/YCPkW_r_6uA/1920x1080",
                thumb: "https://source.unsplash.com/YCPkW_r_6uA/400x400",
                original: "https://source.unsplash.com/YCPkW_r_6uA"
            },
            {
                url: "https://source.unsplash.com/IbPxGLgJiMI/1920x1080",
                thumb: "https://source.unsplash.com/IbPxGLgJiMI/400x400",
                original: "https://source.unsplash.com/IbPxGLgJiMI"
            },
            {
                url: "https://source.unsplash.com/Hd7vwFzZpH0/1920x1080",
                thumb: "https://source.unsplash.com/Hd7vwFzZpH0/400x400",
                original: "https://source.unsplash.com/Hd7vwFzZpH0"
            },
            {
                url: "https://source.unsplash.com/0F7GRXNOG7g/1920x1080",
                thumb: "https://source.unsplash.com/0F7GRXNOG7g/400x400",
                original: "https://source.unsplash.com/0F7GRXNOG7g"
            }
        ];

        window.ProductGallery = function($el) {
            return {
                isFullScreen: false,
                showArrows: false,
                count: images.length,
                activeImage: 0,
                $imageEl: $el.querySelectorAll("ul")[0],
                $thumbNavEl: $el.querySelectorAll("ul")[1] || null,
                $zoomEl: $el.querySelector("*[data-zoom]"),
                $lensEl: $el.querySelector("*[data-lens]"),
                zoomIsActive: false,
                zoomRatio: {
                    width: 1,
                    height: 1
                },
                zoomSize: null,
                lensSize: null,
                previewSize: null,

                fullSizeZoomDisabled: true,
                fullSizeZoomIsActive: false,
                $fullSizeZoomEl: null,
                fullSizeZoomSize: null,

                nextImage: function() {
                    this.activeImage =
                        this.activeImage + 1 < this.count ? this.activeImage + 1 : 0;
                },

                prevImage: function() {
                    this.activeImage =
                        this.activeImage > 0 ? this.activeImage - 1 : this.count - 1;
                },

                mousewheelEvent: function(event) {
                    if (event.deltaY > 0) {
                        this.nextImage();
                        event.preventDefault();
                    } else if (event.deltaY < 0) {
                        this.prevImage();
                        event.preventDefault();
                    }
                },

                scroll: function() {
                    this.scrollToImage();
                    this.scrollToThumb();
                },

                scrollToThumb: function() {
                    if (!this.$thumbNavEl) {
                        return;
                    }
                    const $activeThumb = this.$thumbNavEl.querySelector(
                        "ul li:nth-child(0n+" + (this.activeImage + 1) + ")"
                    );
                    if ($activeThumb) {
                        this.$thumbNavEl.offsetTop =
                            $activeThumb.offsetTop +
                            this.$thumbNavEl.clientHeight / 2 -
                            $activeThumb.clientHeight / 2;
                        this.$thumbNavEl.scrollLeft =
                            $activeThumb.offsetLeft -
                            this.$thumbNavEl.clientWidth / 2 +
                            $activeThumb.clientWidth / 2;
                    }
                },

                scrollToImage: function() {
                    const $activeImage = this.$imageEl.children[this.activeImage + 1];
                    this.$imageEl.scrollLeft = $activeImage.offsetLeft;
                    if (this.isFullScreen) {
                        this.showFullScreenImage();
                    }
                },

                getImageMeta(url) {
                    return new Promise((resolve, reject) => {
                        const img = new Image();
                        img.onload = () => resolve(img);
                        img.onerror = (err) => reject(err);
                        img.src = url;
                    });
                }
            };
        };
    </script>
</body>


</html>
