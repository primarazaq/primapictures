<!doctype html>
<html class="scroll-smooth">

<head>
    @include('components/head')
</head>

<body>
    <header
        class="bg-transparent absolute top-0 left-0 w-full h-[69px] flex items-center z-10 transition duration-500 ease-in-out">
        @include('components/navbar')
    </header>
    <section id="home">
        <div class="container-xl">
            <div class="flex flex-wrap">
                <div class="w-full h-80 sm:h-[480px] lg:h-screen self-center px-4 relative z-0">
                    <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden">
                        <video class="min-w-full min-h-full absolute object-cover" src="video/video.mp4" type="video/mp4"
                            autoplay muted loop></video>
                    </div>
                    <div
                        class="video-content relative space-y-0 text-center mt-36 sm:mt-52 sm:space-y-2 lg:mt-96 lg:space-y-5">
                        <h1 data-aos="fade-down" data-aos-duration="3000"
                            class="text-white gilroy text-base sm:text-2xl lg:text-4xl">Primapictures.</h1>
                        <p data-aos="fade" data-aos-duration="3000"
                            class="text-white helvetica text-[10px] sm:text-xs lg:text-lg">
                            Capture your moment's beautifully</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="-mt-10 mb-14 pt-20 lg:-mt-0 scroll-mt-5 lg:scroll-mt-16">
        <div class="container-xl lg:flex lg:flex-row">
            <div class="flex flex-wrap lg:basis-1/2 pr-5">
                <div class="w-full h-80 self-center px-4 relative z-0">
                    <div class="absolute w-full h-full lg:px-10 lg:-mt-28">
                        <p data-aos="fade-down" data-aos-duration="2000"
                            class="relative sm:text-2xl lg:text-4xl font-bold text-left gilroy text-primary mb-10 lg:mb-20 sm:mb-16 sm:pt-5 sm:px-6">
                            Tentang Primapictures
                        </p>
                        <p data-aos="fade-down" data-aos-duration="3000"
                            class="absolute helvetica tracking-widest text-[10px] sm:text-sm lg:text-lg text-left text-gray-800 lg:pr-28 leading-loose lg:leading-10 lg:text-justify sm:leading-8 sm:text-justify sm:px-6 sm:pr-8">
                            <span>Kami merupakan penyedia jasa di bidang</span>
                            <span class="font-bold">Photography &#x26; Videography </span>
                            <span>profesional yang siap
                                mengabadikan
                                momen-momen spesialmu dengan indah.
                            </span><br /><br />
                            <span>Kami selalu berusaha untuk memahami
                                kebutuhan dan
                                harapan pelanggan untuk mendapatkan hasil
                                akhir yang sesuai dengan yang dingiinkan.</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:basis-1/2 -mt-16 sm:mt-10 lg:-mt-20 overflow-hidden">

                <img src="image/foto1.png"
                    class="w-full h-40 sm:h-72 lg:h-[350px] self-center relative z-0 overflow-hidden object-cover transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out"
                    alt="">

                <img src="image/foto2.png"
                    class="w-full h-40 sm:h-72 lg:h-[350px] self-center relative z-0 overflow-hidden object-cover transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out"
                    alt="">

            </div>
        </div>
    </section>
    <section id="about2" class="mt-20">
        <div class="container-xl lg:flex lg:flex-row-reverse">
            <div class="flex flex-wrap lg:basis-1/2 mt-14 pr-5">
                <div class="w-full h-80 self-center px-4 relative z-0">
                    <div class="absolute w-full h-full sm:px-6 lg:px-10 -mt-10 lg:-mt-28">
                        <p data-aos="fade-down" data-aos-duration="2000"
                            class="relative sm:text-2xl lg:text-4xl font-bold gilroy text-left text-primary mb-10 lg:mb-20 sm:pt-5 sm:mb-16">
                            Mengapa harus kami
                        </p>
                        <p data-aos="fade-down" data-aos-duration="3000"
                            class="absolute text-[10px] sm:text-sm helvetica tracking-widest text-left text-gray-800 lg:pr-28 sm:pr-7 leading-loose lg:leading-10 lg:text-lg lg:text-justify sm:leading-8 sm:text-justify">
                            <span>Tim kami memiliki pengalaman yang luas dalam setiap bidangnya dan selalu siap
                                memberikan
                                hasil terbaik untuk pelanggan.
                            </span><br /><br />
                            <span>Kami melayani berbagai acara seperti pernikahan, ulang tahun, acara keluarga, event
                                perusahaan, bahkan layanan pengeditan foto dan video profesional.</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col lg:basis-1/2 -mt-24 sm:mt-10 lg:-mt-20 overflow-hidden">

                <img src="image/foto1.png"
                    class="w-full h-40 sm:h-72 lg:h-[350px] self-center relative z-0 overflow-hidden object-cover transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out"
                    alt="">

                <img src="image/foto2.png"
                    class="w-full h-40 sm:h-72 lg:h-[350px] self-center relative z-0 overflow-hidden object-cover transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out"
                    alt="">

            </div>
        </div>
    </section>
    <section id="banner">
        <div class="container-xl">
            <div
                class="absolute text-center text-white py-7 self-center z-50 lg:inset-x-0 lg:translate-y-36 lg:space-y-20 sm:space-y-8 sm:translate-y-8">
                <p data-aos="fade-down" data-aos-duration="3000" class="text-md sm:text-lg font-bold lg:text-4xl">
                    <span>Segera abadikan momen indah</span><br />
                    <span>anda bersama kami</span>
                </p>
                <p data-aos="fade-up" data-aos-duration="3000"
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
        </div>
    </section>
    <section id="services" class="pt-8 bg-gray-100 scroll-mt-10 lg:scroll-mt-16">
        <div class="container-xl">
            <p data-aos="fade-down" data-aos-duration="2000"
                class="relative gilroy sm:text-2xl font-bold text-center text-primary mb-8 lg:text-4xl lg:py-3">
                Layanan Kami
            </p>
            <div class="lg:grid lg:grid-cols-3 lg:gap-10 lg:p-20 sm:grid sm:grid-cols-2 sm:grap-5 sm:p-10">
                <div
                    class="transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out">
                    <div data-aos="zoom-out" data-aos-duration="500"
                        class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-gray-100 mb-5 lg:text-left">
                        <img src="image/vector1.png" alt=""
                            class="inline-block pb-3 w-12 h-auto sm:w-auto lg:-translate-y-4 transition-transform hover:scale-110 hover:rotate-12 hover:transition hover:duration-300 hover:ease-in-out">

                        <p class="relative text-sm sm:text-xl font-medium uppercase text-black mb-4 lg:text-2xl">
                            Wedding
                        </p>
                        <p class="relative text-[10px] sm:text-sm text-center sm:text-left lowercase text-black">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>

                    </div>
                </div>
                <div
                    class="transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out">
                    <div data-aos="zoom-out" data-aos-duration="600"
                        class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-gray-100 mb-5 sm:-mt-8 lg:text-left">
                        <img src="image/vector2.png" alt=""
                            class="inline-block pb-3 w-14 h-auto sm:w-auto transition-transform hover:scale-110 hover:rotate-6 hover:transition hover:duration-300 hover:ease-in-out">

                        <p class="relative text-sm sm:text-xl font-medium uppercase text-black mb-4 lg:text-2xl">
                            Event
                        </p>
                        <p class="relative text-[10px] sm:text-sm text-center sm:text-left lowercase text-black">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>

                    </div>
                </div>

                <div
                    class="transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out">
                    <div data-aos="zoom-out" data-aos-duration="700"
                        class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-gray-100 mb-5 lg:-mt-1 sm:mt-4 lg:text-left">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-12 h-12 inline-block relative sm:w-20 sm:h-20 -translate-y-1 sm:-translate-y-4 transition-transform hover:scale-110 hover:rotate-6 hover:transition hover:duration-300 hover:ease-in-out"
                            preserveAspectRatio="none">
                            <path
                                d="M54.7719 23.2312L50.6125 16.6594C49.7359 15.6375 48.5344 15 47.1875 15H32.8125C31.4656 15 30.2641 15.6375 29.3875 16.6594L25.2281 23.2312C24.3516 24.2547 23.2219 25 21.875 25H12.5C11.1739 25 9.90215 25.5268 8.96447 26.4645C8.02678 27.4021 7.5 28.6739 7.5 30V60C7.5 61.3261 8.02678 62.5979 8.96447 63.5355C9.90215 64.4732 11.1739 65 12.5 65H67.5C68.8261 65 70.0979 64.4732 71.0355 63.5355C71.9732 62.5979 72.5 61.3261 72.5 60V30C72.5 28.6739 71.9732 27.4021 71.0355 26.4645C70.0979 25.5268 68.8261 25 67.5 25H58.2812C56.9297 25 55.6484 24.2547 54.7719 23.2312Z"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path
                                d="M40 55C46.9036 55 52.5 49.4036 52.5 42.5C52.5 35.5964 46.9036 30 40 30C33.0964 30 27.5 35.5964 27.5 42.5C27.5 49.4036 33.0964 55 40 55Z"
                                stroke="black" stroke-width="2" stroke-miterlimit="10"></path>
                            <path d="M19.375 24.6875V21.25H15.625V24.6875" stroke="black" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>

                        <p class="relative text-sm sm:text-xl font-medium uppercase text-black mb-4 lg:text-2xl">
                            Personal
                        </p>
                        <p class="relative text-[10px] sm:text-sm text-center sm:text-left lowercase text-black">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>

                    </div>
                </div>

                {{-- <div
                    class="transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out">
                    <div data-aos="zoom-out" data-aos-duration="800"
                        class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-gray-200 mb-5 lg:text-left">
                        <img src="image/vector3.png" alt=""
                            class="inline-block pb-3 w-14 h-auto sm:w-auto transition-transform hover:scale-110 hover:rotate-6 hover:transition hover:duration-300 hover:ease-in-out">

                        <p class="relative text-sm sm:text-xl font-medium uppercase text-black mb-4 lg:text-2xl">
                            Photo Product
                        </p>
                        <p class="relative text-[10px] sm:text-sm text-center sm:text-left lowercase text-black">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>

                    </div>
                </div>

                <div
                    class="transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out">
                    <div data-aos="zoom-out" data-aos-duration="900"
                        class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-gray-200 mb-5 lg:-mt-4 lg:text-left">
                        <img src="image/vector4.png" alt=""
                            class="inline-block pb-3 w-14 h-auto sm:w-auto transition-transform hover:scale-110 hover:rotate-6 hover:transition hover:duration-300 hover:ease-in-out">

                        <p class="relative text-sm sm:text-xl font-medium uppercase text-black mb-4 lg:text-2xl">
                            Design
                        </p>
                        <p class="relative text-[10px] sm:text-sm text-center sm:text-left lowercase text-black">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div>

                <div
                    class="transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out">
                    <div data-aos="zoom-out" data-aos-duration="1000"
                        class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-gray-200 mb-5 pb-5 lg:mt-2 sm:mt-6 lg:text-left">
                        <img src="image/vector5.png" alt=""
                            class="inline-block pb-3 w-14 h-auto sm:w-auto transition-transform hover:scale-110 hover:rotate-6 hover:transition hover:duration-300 hover:ease-in-out">

                        <p class="relative text-sm sm:text-xl font-medium uppercase text-black mb-4 lg:text-2xl">
                            Editing
                        </p>
                        <p class="relative text-[10px] sm:text-sm text-center sm:text-left lowercase text-black">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- <section id="gallery" class="pt-2 lg:py-14 sm:py-10 lg:scroll-mt-16">
        <div class="container-xl">
            <p data-aos="fade-down" data-aos-duration="2000"
                class="relative gilroy sm:text-2xl font-bold text-center text-primary mb-5 lg:text-4xl">
                Gallery
            </p>
            <div data-aos="fade-up" data-aos-duration="3000"
                class="relative w-full h-full justify-between px-5 text-center items-center z-0 mb-5 lg:flex-col">
                <img src="image/galeri.png" alt="" class="pb-3 lg:translate-x-[305px]">
                <button
                    class="w-fit mt-3 ml-2 bg-primary text-white px-3 py-[2px] font-medium tracking-[2px] text-[7px] uppercase rounded-full shadow-sm hover:shadow-md transform hover:scale-110 duration-500 ease-in-out shadow-black lg:w-80 lg:h-8 lg:text-lg lg:mt-10 sm:text-[10px]">
                    Lihat Selengkapnya
                </button>
            </div>
        </div>
    </section> --}}
    @include('components/footer')

</body>


</html>
