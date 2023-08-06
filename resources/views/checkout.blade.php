<!doctype html>
<html class="scroll-smooth">

<head>
    @include('components/head')
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
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
            <a href="/order/{{ $id }}">
                <p class="hover:text-primary">
                    {{ $kategori->nama }}
                </p>
            </a>
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
            <a href="/order/{{ $id }}/formOrder">
                <p class="hover:text-primary">
                    Order
                </p>
            </a>
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
                    Checkout
                </p>
            </a>
        </ol>
    </nav>
        <div class="flex-col px-4 flex lg:flex-row">
            <div class="lg:basis-1/4 -mt-24 lg:-mt-20 overflow-hidden">
                <div class="col-span-12 md:col-span-6 md:mr-2">
                    <div class="transition-all duration-100 ease-in-out w-full" x-data="ProductGallery($el)">
                        <ul
                            class="flex flex-grow-1 flex-nowrap overflow-x-scroll whitespace-nowrap snap snap-x snap-mandatory no-scrollbar scroll-behavior-smooth mb-2">
                            <template x-for="(image, i) in images" :key="image">
                                <li class="relative w-full h-full flex-shrink-0 snap-start">
                                    <span href="#">
                                        <img :src="image.url" class="rounded-lg lg:max-h-[350px] lg:max-w-[350px]">
                                    </span>
                                </li>
                            </template>
                        </ul>
                        <ul class="relative font-bold text-center">
                            {{ $kategori->nama }}
                        </ul>
                            <ul>
                                <div class="relative justify-start self-start text-left border-b">
                                
                                        <p name="id_jasa" id="id_jasa"
                                            class="flex space-x-1 text-sm mt-3 text-primary px-10 py-[2px] font-semibold tracking-[2px] text-[13px] ">
                                            {{ $jasa->nama }}
                                        </p>
                             
                                </div>
                            </ul>
                            <ul>
                                <p class="relative text-xl lg:text-lg font-bold gilroy text-center lg:text-left text-black sm:pt-5">
                                    Total Harga
                                </p>
                                <div class="listJasa" id="Jasa-default">
                                    <p class="relative text-xl lg:text-4xl font-bold gilroy text-center lg:text-left text-red">
                                        @currency($order->total_harga)
                                    </p>
                                </div>
                            </ul>

                    </div>
                </div>
            </div>
            <div class="lg:basis-3/4 w-full h-[450px] lg:h-80 self-left relative z-0 lg:flex lg:flex-col mb-60">
                <div class="relative w-full h-full sm:px-6 lg:px-4  lg:-mt-24">
                    <div class="flex flex-col justify-start mt-5 space-x-6">
                        <div class="relative">
                            <div class="mb-5 -mt-3">
                                
                                <div id="alert" class="flex justify-center px-6 py-2 mt-2 bg-green-100 bg-opacity-50 rounded-lg alert-del" role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Info</span>
                                    <p  class=" text-xs ml-2 items-center font-medium text-green-800 inline-flex"> 
                                      Pesanan anda berhasil diproses! Segera selesaikan pembayaran anda dalam &nbsp;<span id="timer" class="font-bold"></span>
                                    </p>
                                    <script>
                                        // Waktu awal dalam detik (30 menit)
                                        var countdownTime = 30 * 60;
                                        var timerDisplay = document.getElementById('timer');
                                
                                        // Fungsi untuk mengupdate timer setiap detik
                                        function updateTimer() {
                                            var minutes = Math.floor(countdownTime / 60);
                                            var seconds = countdownTime % 60;
                                
                                            // Tampilkan timer pada halaman
                                            timerDisplay.innerHTML = minutes + " menit " + seconds + " detik";
                                
                                            // Kurangi waktu mundur sebanyak 1 detik
                                            countdownTime--;
                                
                                            // Jika waktu habis (0 detik), arahkan pengguna kembali ke halaman utama
                                            if (countdownTime < 0) {
                                                alert("Waktu pembayaran sudah habis! Lakukan pemesanan kembali!");
                                                window.location.href = '/';
                                            }
                                        }
                                
                                        // Panggil fungsi updateTimer setiap 1 detik (1000 ms)
                                        var timerInterval = setInterval(updateTimer, 1000);
                                    </script>
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="text" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Nama Pemesan
                                </label>
                                <input type="text" name="nama_plg" id="nama_plg" placeholder="Nama Lengkap Pemesan" value="{{ $order->nama_plg }}" readonly
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-5">
                                <label for="hp" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Nomor HP Pemesan
                                </label>
                                <input type="number" name="hp_plg" id="hp_plg" placeholder="Nomor HP Pemesan" value="{{ $order->hp_plg }}" readonly
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-5">
                                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                    E-mail Pemesan
                                </label>
                                <input type="email" name="email_plg" id="email_plg" placeholder="E-mail Pemesan" value="{{ $order->email_plg }}" readonly
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-5">
                                <label for="datetime" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Tanggal dan Jam Acara
                                </label>
                                <input type="dateTime-local" name="tgl_acara" id="tgl_acara"
                                    placeholder="Tanggal dan Jam Acara yang Hendak dipesan" value="{{ $order->tgl_acara }}" readonly
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            <div class="mb-5">
                                <label for="text" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Lokasi Acara
                                </label>
                                <input name="wilayah" id="wilayah" value="{{ $order->wilayah }}" readonly
                                    class=" w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                <input name="lokasi" value="{{ $order->lokasi }}" readonly
                                    class=" h-32 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                            </div>
                        </div>
                        <div class="relative mb-10 self-center">
                            <button id="pay-button"
                                class=" w-fit mt-3 bg-primary text-white px-20 py-[5px] font-semibold inline-block tracking-[2px] text-[13px] uppercase rounded-full shadow-sm hover:shadow-md hover:bg-red-500 hover:text-white transform hover:scale-110 duration-500 ease-in-out shadow-black">
                                Bayar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>

    @include('components/footer')
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('{{ $snapToken }}', {
            onSuccess: function(result){
              /* You may add your own implementation here */
              window.location.href = '/status-transaksi/{{ $order->id }}'
              alert("payment success!"); console.log(result);
            },
            onPending: function(result){
              /* You may add your own implementation here */
              alert("wating your payment!"); console.log(result);
            },
            onError: function(result){
              /* You may add your own implementation here */
              alert("payment failed!"); console.log(result);
            },
            onClose: function(){
              /* You may add your own implementation here */
              alert('you closed the popup without finishing the payment');
            }
          })
        });
    </script>
    <script>
      switch ({{ $id }}) {
            case 1:
                var images = [
                {
                    url: "/image/wedding/wedding.webp", 
                    thumb: "/image/wedding/wedding.webp" 
                },
                ];
            break;
            case 2:
                var images = [
                    {
                        url: "/image/event/event1.webp", 
                        thumb: "/image/event/event1.webp" 
                    },
                ];
            break;
            case 3:
            var images = [
                    {
                        url: "/image/personal/personal1.webp", 
                        thumb: "/image/personal/personal1.webp" 
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
