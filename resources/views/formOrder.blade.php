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
            <a href="">
                <p class="hover:text-primary">
                    Order
                </p>
            </a>
        </ol>
    </nav>
        <div class="flex-col px-4 flex lg:flex-row">
            <div class="lg:basis-1/4 -mt-24 lg:-mt-20 overflow-hidden">
                <div class="col-span-12 md:col-span-6 md:mr-2">
                    <div class="transition-all duration-100 ease-in-out w-full" x-data="ProductGallery($el)">
                        <ul
                            class="flex flex-grow-1 flex-nowrap overflow-x-scroll whitespace-nowrap snap snap-x snap-mandatory no-scrollbar scroll-behavior-smooth mb-0">
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
                        <form action="/order/{{ $id }}/formOrder/checkout" method="POST">
                            @csrf
                            <ul class="justify-center flex">
                                <div class="relative">
                                    <div>
                                        <select name="id_jasa" id="id_jasa"
                                            class="flex items-center space-x-1 cursor-pointer text-sm w-full mt-3 bg-white text-primary px-10 py-[2px] font-semibold tracking-[2px] text-[13px] rounded-full shadow-sm shadow-slate-600 ">
                                            <option value="default">Pilih Paket</option>
                                            @foreach ($jasa as $list)
                                                <option value="{{ $list->id }}" data-kategori="{{ $kategori->id }}">{{ $loop->iteration }}.
                                                    {{ $list->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <script type="module">
                                            $(document).ready(function() {
                                                $('#id_jasa').change(function() {
                                                    var pilihan = $(this).val();
                                                    var kategori = $('#id_jasa option:selected').data('kategori');

                                                    // Memeriksa jika jasa yang dipilih memiliki ID "1" (wedding)
                                                    if (pilihan === '1') {
                                                        // Mendapatkan elemen input date
                                                        const dateInput = document.getElementById("tgl_acara");

                                                        // Mendapatkan tanggal dan waktu saat ini
                                                        const now = new Date();
                                                        now.setDate(now.getDate() + 15); // Menambahkan 15 hari ke tanggal saat ini

                                                        // Konversi tanggal dan waktu saat ini menjadi format yang dapat dikenali oleh input date
                                                        const nowString = now.toISOString().slice(0, 16);

                                                        // Tetapkan nilai atribut min pada elemen input date
                                                        dateInput.setAttribute("min", nowString);
                                                    }

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
                                <p class="relative text-xl lg:text-lg font-bold gilroy text-center lg:text-left text-black pt-5">
                                    Total Harga
                                </p>
                                <div class="listJasa" id="Jasa-default">
                                    <p class="relative text-xl lg:text-4xl font-bold gilroy text-center lg:text-left text-primary">
                                        Rp xxx.xxx
                                    </p>
                                </div>
                                @foreach ($jasa as $item)
                                    <div class="hidden listJasa" id="Jasa-{{ $item->id }}">
                                        <p
                                            class="relative text-xl lg:text-4xl font-bold gilroy text-center lg:text-left text-red">
                                            @currency($item->harga)
                                        </p>
                                    </div>
                                @endforeach
                            </ul>

                    </div>
                </div>
            </div>
            <div class="lg:basis-3/4 w-full h-[450px] lg:h-80 self-left relative z-0 lg:flex lg:flex-col mb-60">
                <div class="relative w-full h-full sm:px-6 lg:px-4 -mt-0 lg:-mt-24">
                    <div class="flex flex-col justify-start mt-5 space-x-6">
                        <div class="relative">
                            <div>
                                @if ($errors->has('errorOrder'))
                                <div id="alert-2" class="flex justify-between px-6 py-2 mt-2 bg-rose-300 bg-opacity-50 rounded-lg alert-del" role="alert">
                                    <svg aria-hidden="true" class="flex-shrink-0 -ml-4 w-5 h-5 text-red" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Info</span>
                                    <p class=" text-[10px] ml-4 w-36 items-center font-medium text-red inline-flex"> 
                                      {{ $errors->first('errorOrder') }}
                                    </p>
                                    <div class=" text-xs items-center font-medium text-red inline-flex">
                                        <button type="button" class=" ml-5 -mx-5 -my-1.5  text-red rounded-lg p-1.5  h-8 w-8" data-dismiss-target="#alert-2" aria-label="Close">
                                          <span class="sr-only">Close</span>
                                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    </div>
                                </div>
                    
                                <script>
                                  var closeButton = document.querySelector('#alert-2 [aria-label="Close"]');
                                  closeButton.addEventListener('click', function () {
                                      var alert = closeButton.closest('.alert-del');
                                      alert.classList.add('opacity-0');
                                      setTimeout(function () {
                                          alert.classList.add('hidden');
                                      }, 300);
                                  });
                              </script>
                                
                                @endif
                            </div>
                            <div class="mb-5">
                                <label for="text" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Nama Pemesan
                                </label>
                                <input type="text" name="nama_plg" id="nama_plg" placeholder="Nama Lengkap Pemesan"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-primary focus:shadow-md" />
                            </div>
                            <div class="mb-5">
                                <label for="hp" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Nomor HP Pemesan
                                </label>
                                <input type="number" name="hp_plg" id="hp_plg" placeholder="Nomor HP Pemesan"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-primary focus:shadow-md" />
                            </div>
                            <div class="mb-5">
                                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                    E-mail Pemesan 
                                </label>
                                <input type="email" name="email_plg" id="email_plg" placeholder="E-mail Pemesan"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-primary focus:shadow-md" />
                            </div>
                            <div class="mb-5">
                                <label for="datetime" class="mb-3 flex text-base justify-between font-medium text-[#07074D]">
                                    Tanggal dan Jam Acara  <p class="text-xs text-red text-end self-center ml-3">
                                        *jika tanggal tidak dapat dipilih, berarti tanggal tersebut sudah penuh
                                      </p>
                                </label>
                                <input type="dateTime-local" name="tgl_acara" id="tgl_acara"
                                    placeholder="Tanggal dan Jam Acara yang Hendak dipesan"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-primary focus:shadow-md" />
                                    <script>
                                        // Mendapatkan elemen input date
                                        const dateInput = document.getElementById("tgl_acara");
                                      
                                        // Mendapatkan tanggal dan waktu saat ini
                                        const now = new Date();
                                        now.setDate(now.getDate() + 1);
                                      
                                        // Konversi tanggal dan waktu saat ini menjadi format yang dapat dikenali oleh input date
                                        const nowString = now.toISOString().slice(0, 16);
                                      
                                        // Tetapkan nilai atribut min pada elemen input date
                                        dateInput.setAttribute("min", nowString);
                                      
                                                                            // Ambil elemen input datepicker
                                        const datepicker = document.getElementById('tgl_acara');

                                        // Data dari collection $jadwal (diambil dari backend)
                                        const blockedDates = @json($jadwal);

                                        // Fungsi untuk memeriksa apakah tanggal berada pada tanggal yang harus dikunci
                                        function isDateBlocked(selectedDate) {
                                        return blockedDates.some(date => {
                                            const parts = date.tgl_acara.split(" ");
                                            return parts[0] === selectedDate.split("T")[0];
                                        });
                                        }

                                        // Fungsi untuk menangani event ketika pengguna mencoba memilih tanggal
                                        datepicker.addEventListener('change', function(event) {
                                        const selectedDate = event.target.value; // Nilai tanggal yang dipilih oleh pengguna
                                        if (isDateBlocked(selectedDate)) {
                                            // Jika tanggal berada pada tanggal yang harus dikunci, berikan notifikasi atau kembalikan nilai tanggal ke nilai sebelumnya
                                            alert("Maaf, tanggal ini sudah dipesan oleh pelanggan lain. Silakan pilih di tanggal lain ya..");
                                            event.target.value = ""; // Mengembalikan nilai tanggal ke nilai sebelumnya (menjadi tanggal kosong)
                                        }
                                        });

                                      </script>
                                     
                            </div>
                            <div class="mb-5">
                                <label for="text" class="mb-3 flex text-base justify-between font-medium text-[#07074D]">
                                    Lokasi Acara<p class="text-xs text-red text-end self-center ml-3">
                                        *jika di luar kota bandung, maka pembeli harus bersedia
                                        untuk membiayai seluruh kebutuhan tim kami disana
                                        (transportasi, konsumsi, penginapan)
                                      </p>
                                </label>
                                <select name="wilayah" id="wilayah"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-primary focus:shadow-md">
                                    <option>-- Dalam Kota Bandung / Luar Kota Bandung --</option>
                                    <option value="dalam kota">Dalam Kota Bandung</option>
                                    <option value="luar kota">Luar Kota Bandung</option>
                                </select>
                                <textarea name="lokasi"
                                    class="resize h-32 w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-primary focus:shadow-md" placeholder="Alamat Acara"></textarea>
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
