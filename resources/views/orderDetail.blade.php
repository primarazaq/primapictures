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
        {{-- breadcrumb --}}
    <nav class="flex bg-white mb-4 text-xs lg:text-sm -translate-y-20 text-black py-3 px-5 rounded-lg" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/order" class=" text-black hover:text-primary inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>
                      
                    Home
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center hover:text-primary">
                    <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </li>
            <a href="">
                <p class="hover:text-primary">
                    {{ $kategori->nama }}
                </p>
            </a>
        </ol>
    </nav>
        <div class=" flex-col px-4 flex lg:flex-row">
            <div class="lg:basis-1/2 -mt-24 lg:-mt-20 overflow-hidden mb-12 lg:mb-0">
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
                                        <img :src="image.url" class="m-auto max-h-[600px] max-w-96">
                                    </span>
                                </li>
                            </template>
                        </ul>

                        <div class="m-auto max-w-96">
                            <div class="flex" x-show="images.length>1" x-cloak>
                                <a class="h-28 flex-grow-0 text-primary inline-flex items-center text-xl bg-white p-4"
                                    href="#" @click.prevent="prevImage">
                                    <i class="fas fa-arrow-left"></i>
                                </a>
                                <ul
                                    class="flex flex-grow-1 flex-nowrap overflow-x-scroll whitespace-nowrap snap snap-x snap-mandatory no-scrollbar scroll-behavior-smooth">
                                    <template x-for="(image, i) in images" :key="image">
                                        <li class="w-24 lg:w-40 flex-shrink-0 snap-start mx-1" @wheel="mousewheelEvent($event)">
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
                    </div>
                </div>
            </div>
            <div class="lg:basis-1/2 w-full h-72 lg:h-80 self-center px-4 relative z-0 lg:flex lg:flex-col">
                <div class="relative w-full h-full sm:px-6 lg:px-4 -mt-10 lg:-mt-24">
                    <div class="listJasa h-96" id="Jasa-default">
                        <p data-aos="fade-down" data-aos-duration="2000"
                            class="relative text-2xl lg:text-4xl font-bold gilroy text-left text-black mb-2 lg:mb-0 ">

                            {{ $jasaHigh->nama }}
                        </p>
                        <p data-aos="fade-down" data-aos-duration="2000"
                            class="relative text-2xl lg:text-4xl font-bold gilroy text-left text-primary mb-5 lg:mb-5 ">
                            @currency($jasaLow->harga) ~ @currency($jasaHigh->harga)
                        </p>
                        <p data-aos="fade-down" data-aos-duration="3000"
                            class="relative text-[10px] sm:text-sm tracking-widest text-left text-gray-800 lg:pr-28 leading-loose lg:leading-8 lg:text-base lg:text-justify ">
                            <span>@php
                                echo $jasaHigh->deskripsi;
                            @endphp</span>
                        </p>
                    </div>
                    @foreach ($jasa as $item)
                        <div class="hidden listJasa h-96" id="Jasa-{{ $item->id }}">
                            <p data-aos="fade-down" data-aos-duration="2000"
                                class="relative text-2xl lg:text-4xl font-bold gilroy text-left text-black mb-2 lg:mb-0 ">

                                {{ $item->nama }}
                            </p>
                            <p data-aos="fade-down" data-aos-duration="2000"
                                class="relative text-2xl lg:text-4xl font-bold gilroy text-left text-primary mb-5 lg:mb-5 ">
                                @currency($item->harga)
                            </p>
                            <p data-aos="fade-down" data-aos-duration="3000"
                                class="relative text-[10px] sm:text-sm tracking-widest text-left text-gray-800 lg:pr-28  leading-loose lg:leading-8 lg:text-base lg:text-justify">
                                <span>@php
                                    echo $item->deskripsi;
                                @endphp</span>
                            </p>
                        </div>
                    @endforeach
                    <div class="flex flex-col space-y-5 lg:space-y-0 -mt-32 lg:flex-row justify-center items-center lg:justify-start lg:mt-5 lg:space-x-6">
                        <div class="relative">
                            <div>
                                <select name="pilihan" id="pilihan"
                                    class="flex items-center space-x-1 cursor-pointer text-sm w-full lg:w-52 mt-3 bg-white text-primary px-10 py-[2px] font-semibold tracking-[2px] text-[13px] rounded-full shadow-sm shadow-slate-600 ">
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
                                    class=":w-fit mt-3 bg-primary text-white px-10 py-[2px] font-semibold inline-block tracking-[2px] text-[13px] uppercase rounded-full shadow-sm hover:shadow-md hover:bg-red-500 hover:text-white transform hover:scale-110 duration-500 ease-in-out shadow-black">
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
        switch ({{ $id }}) {
            case 1:
                var images = [
                {
                    url: "/image/wedding/wedding.webp", 
                    thumb: "/image/wedding/wedding.webp" 
                },
                {
                    url: "/image/wedding/1080/wedding2.webp", 
                    thumb: "/image/wedding/1080/wedding2.webp" 
                },
                {
                    url: "/image/wedding/1080/wedding (1).jpg", 
                    thumb: "/image/wedding/400/wedding (1).jpg" 
                },
                {
                    url: "/image/wedding/1080/wedding (2).jpg", 
                    thumb: "/image/wedding/400/wedding (2).jpg" 
                },
                {
                    url: "/image/wedding/1080/wedding (3).jpg", 
                    thumb: "/image/wedding/400/wedding (3).jpg" 
                },
                {
                    url: "/image/wedding/1080/wedding (4).jpg", 
                    thumb: "/image/wedding/400/wedding (4).jpg" 
                },
                {
                    url: "/image/wedding/1080/wedding (7).jpg", 
                    thumb: "/image/wedding/400/wedding (7).jpg" 
                },
                ];
            break;
            case 2:
                var images = [
                    {
                        url: "/image/event/event1.webp", 
                        thumb: "/image/event/event1.webp" 
                    },
                    {
                        url: "/image/event/event2.webp", 
                        thumb: "/image/event/event2.webp" 
                    },
                    {
                        url: "/image/event/event3.webp", 
                        thumb: "/image/event/event3.webp" 
                    },
                    {
                        url: "/image/event/event4.webp", 
                        thumb: "/image/event/event4.webp" 
                    },
                    {
                        url: "/image/event/event5.webp", 
                        thumb: "/image/event/event5.webp" 
                    },
                ];
            break;
            case 3:
            var images = [
                    {
                        url: "/image/personal/personal1.webp", 
                        thumb: "/image/personal/personal1.webp" 
                    },
                    {
                        url: "/image/personal/personal2.webp", 
                        thumb: "/image/personal/personal2.webp" 
                    },
                    {
                        url: "/image/personal/personal3.webp", 
                        thumb: "/image/personal/personal3.webp" 
                    },
                    {
                        url: "/image/personal/personal4.webp", 
                        thumb: "/image/personal/personal4.webp" 
                    },
                    {
                        url: "/image/personal/personal5.webp", 
                        thumb: "/image/personal/personal5.webp" 
                    },
                ];
            break;
        
            
        }
        

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

                // getImageMeta(url) {
                //     return new Promise((resolve, reject) => {
                //         const img = new Image();
                //         img.onload = () => resolve(img);
                //         img.onerror = (err) => reject(err);
                //         img.src = url;
                //     });
                // }

                getImageMeta(url) {
                    return new Promise((resolve, reject) => {
                        const img = new Image();
                        img.onload = () => resolve(img);
                        img.onerror = (err) => reject(err);
                        img.src = require('./' + url);
                    });
                }
            };
        };
    </script>
</body>


</html>
