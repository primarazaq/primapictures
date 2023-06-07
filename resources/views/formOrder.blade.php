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
            <div class="lg:basis-1/4 -mt-24 sm:mt-10 lg:-mt-20 overflow-hidden">
                <div class="col-span-12 md:col-span-6 md:mr-2">
                    <div class="transition-all duration-100 ease-in-out w-full" x-data="ProductGallery($el)">
                        <ul
                            class="flex flex-grow-1 flex-nowrap overflow-x-scroll whitespace-nowrap snap snap-x snap-mandatory no-scrollbar scroll-behavior-smooth mb-6">
                            <template x-for="(image, i) in images" :key="image">
                                <li class="relative w-full h-full flex-shrink-0 snap-start">
                                    <span href="#">
                                        <img :src="image.url" class="rounded-lg max-h-[350px] max-w-[350px]">
                                    </span>
                                </li>
                            </template>
                        </ul>
                        <ul class="relative font-bold">
                            {{ $kategori->nama }}
                        </ul>
                        <form action="/order/{{ $id }}/formOrder/checkout" method="POST">
                            @csrf
                            <ul>
                                <div class="relative">
                                    <div>
                                        <select name="id_jasa" id="id_jasa"
                                            class="flex items-center space-x-1 cursor-pointer text-sm w-52 mt-3 bg-white text-primary px-10 py-[2px] font-semibold tracking-[2px] text-[13px] rounded-full shadow-sm shadow-slate-600 ">
                                            <option value="default">Pilih Paket</option>
                                            @foreach ($jasa as $list)
                                                <option value="{{ $list->id }}">{{ $loop->iteration }}.
                                                    {{ $list->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <script>
                                            $(document).ready(function() {
                                                $('#id_jasa').change(function() {
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
                            </ul>
                            <ul>
                                <p class="relative sm:text-xl lg:text-lg font-bold gilroy text-left text-black sm:pt-5">
                                    Total Harga
                                </p>
                                <div class="listJasa" id="Jasa-default">
                                    <p class="relative sm:text-xl lg:text-4xl font-bold gilroy text-left text-primary">
                                        Rp xxx.xxx
                                    </p>
                                </div>
                                @foreach ($jasa as $item)
                                    <div class="hidden listJasa" id="Jasa-{{ $item->id }}">
                                        <p
                                            class="relative sm:text-xl lg:text-4xl font-bold gilroy text-left text-red-600">
                                            @currency($item->harga)
                                        </p>
                                    </div>
                                @endforeach
                            </ul>

                    </div>
                </div>
            </div>
            <div class="lg:basis-3/4 w-full h-80 self-left px-4 relative z-0 lg:flex lg:flex-col mb-60">
                <div class="absolute w-full h-full sm:px-6 lg:px-4 -mt-10 lg:-mt-24">
                    <div class="flex flex-col justify-start mt-5 space-x-6">
                        <div class="relative">
                            <div class="mb-5">
                                <label for="text" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Nama Pemesan
                                </label>
                                <input type="text" name="nama_plg" id="nama_plg" placeholder="Nama Lengkap Pemesan"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-5">
                                <label for="hp" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Nomor HP Pemesan
                                </label>
                                <input type="number" name="hp_plg" id="hp_plg" placeholder="Nomor HP Pemesan"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-5">
                                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                    E-mail Pemesan
                                </label>
                                <input type="email" name="email_plg" id="email_plg" placeholder="E-mail Pemesan"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-5">
                                <label for="datetime" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Tanggal dan Jam Acara
                                </label>
                                <input type="dateTime-local" name="tgl_acara" id="tgl_acara"
                                    placeholder="Tanggal dan Jam Acara yang Hendak dipesan"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-5">
                                <label for="text" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Lokasi Acara
                                </label>
                                <select name="wilayah" id="wilayah"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                    <option>-- Dalam Kota Bandung / Luar Kota Bandung --</option>
                                    <option value="dalam kota">Dalam Kota Bandung</option>
                                    <option value="luar kota">Luar Kota Bandung</option>
                                </select>
                                <textarea name="lokasi"
                                    class="resize h-32 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                            </div>
                        </div>
                        <div class="relative mb-10 self-center">
                            <button type="submit"
                                class=" w-fit mt-3 bg-primary text-white px-20 py-[5px] font-semibold inline-block tracking-[2px] text-[13px] uppercase rounded-full shadow-sm hover:shadow-md hover:bg-red-500 hover:text-white transform hover:scale-110 duration-500 ease-in-out shadow-black">
                                Pesan
                            </button>
                            </a>
                        </div>
                    </div>
                    </form>
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
