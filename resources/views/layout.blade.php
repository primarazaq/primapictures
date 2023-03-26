<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primapictures</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.cdnfonts.com/css/times-new-roman" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="//db.onlinewebfonts.com/c/00d5a78493aed4b11e2584ad7cceee49?family=Gilroy+ExtraBold" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/didot" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Playfair+Display&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <style>
        html,
        body {
            width: 100vw;
            overflow-x: hidden;
        }

        /*Overrides for Tailwind CSS */
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Firefox */
        * {
            scrollbar-width: auto;
            scrollbar-color: #38573e #ffffff;
        }

        /* Chrome, Edge, and Safari */
        *::-webkit-scrollbar {
            width: 13px;
        }

        *::-webkit-scrollbar-track {
            background: #ffffff;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #38573e;
            border-radius: 0px;
            border: -10px solid #ffffff;
        }

        .nav-text {
            color: #fff;
            font-size: 20px;
            margin: 0px 30px 0px 30px;
            text-decoration: none;
            position: relative;
        }

        .nav-text:after {
            bottom: -4px;
            content: "";
            display: block;
            height: 2px;
            left: 0;
            position: absolute;
            background: #fff;
            opacity: 0.6;
            transition: width 0.3s ease 0s, opacity 0.3s ease 0s;
            width: 0;
        }

        .nav-text:hover:after {
            width: 100%;
            opacity: 0.9;
        }

        .underlink {
            color: #38573e;
            font-size: 20px;
            margin: 0px 30px 0px 30px;
            text-decoration: none;
            position: relative;
        }

        .underlink:after {
            bottom: -4px;
            content: "";
            display: block;
            height: 2px;
            left: 0;
            position: absolute;
            background: #38573e;
            opacity: 0.6;
            transition: width 0.3s ease 0s, opacity 0.3s ease 0s;
            width: 0;
        }

        .underlink:hover:after {
            width: 100%;
            opacity: 0.9;
        }

        .gilroy {
            font-family: 'Gilroy ExtraBold';
        }

        .helvetica {
            font-family: 'Libre Baskerville', serif;
        }

        .video-docker video {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .video-docker::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }

        .video-content {
            z-index: 2;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js"
        integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <header
        class="bg-transparent absolute top-0 left-0 w-full h-[69px] flex items-center z-10 transition duration-500 ease-in-out">
        @include('components/navbar')
    </header>
    <section id="home">
        <div class="container-xl">
            <div class="flex flex-wrap">
                <div class="w-full h-80 lg:h-screen self-center px-4 relative z-0">
                    <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden">
                        <video class="min-w-full min-h-full absolute object-cover" src="video/video.mp4"
                            type="video/mp4" autoplay muted loop></video>
                    </div>
                    <div class="video-content relative space-y-0 text-center mt-36 lg:mt-96 lg:space-y-5">
                        <h1 data-aos="fade-down" data-aos-duration="3000"
                            class="text-white gilroy text-2xl lg:text-4xl">Primapictures.</h1>
                        <p data-aos="fade" data-aos-duration="3000" class="text-white helvetica text-xs lg:text-lg">
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
                            class="relative text-2xl lg:text-4xl font-bold text-left gilroy text-primary mb-10 lg:mb-20 ">
                            Tentang Primapictures
                        </p>
                        <p data-aos="fade-down" data-aos-duration="3000"
                            class="absolute helvetica tracking-widest text-xs lg:text-lg text-left text-gray-800 lg:pr-28 leading-loose lg:leading-10 lg:text-justify">
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
            <div class="flex flex-col lg:basis-1/2 -mt-7 lg:-mt-20 overflow-hidden">

                <img src="image/foto1.png"
                    class="w-full h-40 lg:h-[350px] self-center relative z-0 overflow-hidden object-cover transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out"
                    alt="">

                <img src="image/foto2.png"
                    class="w-full h-40 lg:h-[350px] self-center relative z-0 overflow-hidden object-cover transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out"
                    alt="">

                {{-- <div class="w-full h-40 lg:h-[350px] self-center relative z-0">
                    <div class="w-full h-full overflow-hidden relative">
                        <img src="image/foto1.png" class="lg:object-cover" alt="">
                    </div>
                    <div class="w-full h-full overflow-hidden relative">
                        <img src="image/foto2.png" class="lg:object-cover" alt="">
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <section id="about2" class="mt-20">
        <div class="container-xl lg:flex lg:flex-row-reverse">
            <div class="flex flex-wrap lg:basis-1/2 mt-14 pr-5">
                <div class="w-full h-80 self-center px-4 relative z-0">
                    <div class="absolute w-full h-full lg:px-10 -mt-10 lg:-mt-28">
                        <p data-aos="fade-down" data-aos-duration="2000"
                            class="relative text-2xl lg:text-4xl font-bold gilroy text-left text-primary mb-10 lg:mb-20">
                            Mengapa harus kami
                        </p>
                        <p data-aos="fade-down" data-aos-duration="3000"
                            class="absolute text-xs helvetica tracking-widest text-left text-gray-800 lg:pr-28 leading-loose lg:leading-10 lg:text-lg lg:text-justify">
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
            <div class="flex flex-col lg:basis-1/2 -mt-7 lg:-mt-20 overflow-hidden">

                <img src="image/foto1.png"
                    class="w-full h-40 lg:h-[350px] self-center relative z-0 overflow-hidden object-cover transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out"
                    alt="">

                <img src="image/foto2.png"
                    class="w-full h-40 lg:h-[350px] self-center relative z-0 overflow-hidden object-cover transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out"
                    alt="">

            </div>
        </div>
    </section>
    <section id="banner">
        <div class="container-xl">
            <div
                class="absolute text-center text-white py-7 self-center z-50 lg:inset-x-0 lg:translate-y-36 lg:space-y-20">
                <p data-aos="fade-down" data-aos-duration="2000" class="text-md font-bold lg:text-4xl">
                    <span>Segera abadikan momen indah</span><br />
                    <span>anda bersama kami</span>
                </p>
                <p data-aos="fade-up" data-aos-duration="3000"
                    class="text-[8px] tracking-widest px-4 py-5 mt-5 pb-2 font-extralight helvetica lg:text-[17px] lg:px-96">
                    Hal terbaik mengenai sebuah gambar adalah gambar itu tidak pernah berubah, bahkan ketika
                    orang-orang di dalamnya sudah berubah. Itulah momen yang menjadikannya abadi
                </p>
                <button data-aos="fade-up" data-aos-duration="3000"
                    class="w-fit mt-8 bg-white text-primary px-3 py-[2px] font-semibold inline-block tracking-[2px] text-[7px] uppercase rounded-full shadow-sm hover:shadow-md transform hover:scale-110 duration-500 ease-in-out shadow-black lg:w-60 lg:h-8 lg:text-lg">
                    ORDER SEKARANG
                </button>
            </div>
            <div class="overflow-hidden">
                <div class="absolute bg-primary w-full h-60 opacity-60 z-40 lg:h-[700px]"></div>
                {{-- <div class="relative w-full h-60 self-center z-0 lg:h-96"> --}}
                <img src="image/foto6.jpg" class="relative w-full h-60 self-center z-0 lg:object-cover lg:h-[700px]" />
                {{-- </div> --}}
            </div>
        </div>
    </section>
    <section id="services" class="pt-14 bg-secondary scroll-mt-10 lg:scroll-mt-16">
        <div class="container-xl">
            <p data-aos="fade-down" data-aos-duration="2000"
                class="relative gilroy text-2xl font-bold text-center text-primary mb-5 lg:text-4xl lg:py-3">
                Layanan Kami
            </p>
            <div class="lg:grid lg:grid-cols-3 lg:gap-10 lg:p-20">
                <div
                    class="transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out">
                    <div data-aos="zoom-out" data-aos-duration="500"
                        class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-secondary mb-5 lg:text-left">
                        <img src="image/vector1.png" alt=""
                            class="inline-block pb-3 lg:-translate-y-4 transition-transform hover:scale-110 hover:rotate-12 hover:transition hover:duration-300 hover:ease-in-out">

                        <p class="relative text-xl font-medium uppercase text-black mb-4 lg:text-2xl">
                            Wedding
                        </p>
                        <p class="relative text-sm text-left lowercase text-black">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>

                    </div>
                </div>
                <div
                    class="transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out">
                    <div data-aos="zoom-out" data-aos-duration="600"
                        class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-secondary mb-5 lg:-mt-8 lg:text-left">
                        <img src="image/vector2.png" alt=""
                            class="inline-block pb-3 transition-transform hover:scale-110 hover:rotate-6 hover:transition hover:duration-300 hover:ease-in-out">

                        <p class="relative text-xl font-medium uppercase text-black mb-4 lg:text-2xl">
                            Event
                        </p>
                        <p class="relative text-sm text-left lowercase text-black">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>

                    </div>
                </div>

                <div
                    class="transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out">
                    <div data-aos="zoom-out" data-aos-duration="700"
                        class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-secondary mb-5 lg:-mt-1 lg:text-left">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-16 h-16 inline-block relative lg:w-20 lg:h-20 lg:-translate-y-4 transition-transform hover:scale-110 hover:rotate-6 hover:transition hover:duration-300 hover:ease-in-out"
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

                        <p class="relative text-xl font-medium uppercase text-black mb-4 lg:text-2xl">
                            Personal
                        </p>
                        <p class="relative text-sm text-left lowercase text-black">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>

                    </div>
                </div>

                <div
                    class="transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out">
                    <div data-aos="zoom-out" data-aos-duration="800"
                        class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-secondary mb-5 lg:text-left">
                        <img src="image/vector3.png" alt=""
                            class="inline-block pb-3 transition-transform hover:scale-110 hover:rotate-6 hover:transition hover:duration-300 hover:ease-in-out">

                        <p class="relative text-xl font-medium uppercase text-black mb-4 lg:text-2xl">
                            Photo Product
                        </p>
                        <p class="relative text-sm text-left lowercase text-black">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>

                    </div>
                </div>

                <div
                    class="transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out">
                    <div data-aos="zoom-out" data-aos-duration="900"
                        class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-secondary mb-5 lg:-mt-4 lg:text-left">
                        <img src="image/vector4.png" alt=""
                            class="inline-block pb-3 transition-transform hover:scale-110 hover:rotate-6 hover:transition hover:duration-300 hover:ease-in-out">

                        <p class="relative text-xl font-medium uppercase text-black mb-4 lg:text-2xl">
                            Design
                        </p>
                        <p class="relative text-sm text-left lowercase text-black">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div>

                <div
                    class="transition-transform hover:scale-110 hover:transition hover:duration-1000 hover:ease-in-out">
                    <div data-aos="zoom-out" data-aos-duration="1000"
                        class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-secondary mb-5 pb-5 lg:mt-2 lg:text-left">
                        <img src="image/vector5.png" alt=""
                            class="inline-block pb-3 transition-transform hover:scale-110 hover:rotate-6 hover:transition hover:duration-300 hover:ease-in-out">

                        <p class="relative text-xl font-medium uppercase text-black mb-4 lg:text-2xl">
                            Editing
                        </p>
                        <p class="relative text-sm text-left lowercase text-black">
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="pt-2 lg:py-14 lg:scroll-mt-16">
        <div class="container-xl">
            <p data-aos="fade-down" data-aos-duration="2000"
                class="relative gilroy text-2xl font-bold text-center text-primary mb-5 lg:text-4xl">
                Gallery
            </p>
            <div data-aos="fade-up" data-aos-duration="3000"
                class="relative w-full h-full justify-between px-5 text-center items-center z-0 mb-5 lg:flex-col">
                <img src="image/galeri.png" alt="" class="pb-3 lg:translate-x-[305px]">
                <button
                    class="w-fit mt-3 ml-2 bg-primary text-white px-3 py-[2px] font-medium tracking-[2px] text-[7px] uppercase rounded-full shadow-sm hover:shadow-md transform hover:scale-110 duration-500 ease-in-out shadow-black lg:w-80 lg:h-8 lg:text-lg lg:mt-10">
                    Lihat Selengkapnya
                </button>
            </div>
        </div>
    </section>
    <footer class="bg-primary">
        <div class="container-xl lg:pt-14 lg:pb-3">

            <div
                class="flex relative w-full h-40 self-center items-center px-4 pt-14 lg:px-32 lg:justify-between lg:pt-0">
                <div>
                    <img src="image/logoputih.png" alt="" class="w-36 h-fit lg:w-52">
                    <p class="relative w-48 mt-4 text-[9px] text-left text-white lg:text-[14px]">
                        Jl. Rumah Sakit No.48A, Kota Bandung, Jawa Barat, Indonesia.
                    </p>
                </div>
                <div class="text-white text-[9px] text-left ml-10 pt-10 lg:text-center lg:-translate-y-5">
                    <p class="font-bold lg:text-sm lg:mb-2">Contact</p>
                    <span class="lg:text-xs">
                        +62 896-7649-3653
                    </span>
                    <p class="font-bold mt-4 lg:text-sm lg:mb-2">Social Media</p>
                    <div class="flex space-x-1">
                        <img src="image/ig.png" alt="" class="w-[15px] h-[15px]">
                        <span class="lg:text-xs">
                            @primapictures.bdg
                        </span>
                    </div>

                </div>
            </div>
            <div class="flex flex-col items-center justify-center relative h-20 pt-10 text-white">
                <hr class="w-72 border-[0.1px] border-white drop-shadow-xl rounded-full lg:w-[600px]">
                <p class="text-[8px] mt-1 lg:text-xs lg:pt-2">© Copyright 2023 Primapictures. All Rights Reserved</p>
            </div>



        </div>
    </footer>

</body>
<script>
    AOS.init();

    // navbbar fixed
    window.onscroll = function() {
        const header = document.querySelector('header');
        const fixedNav = header.offsetTop;
        const textNav = document.querySelector('#title');
        const hambchild1 = document.querySelector('#l1');
        const hambchild2 = document.querySelector('#l2');
        const hambchild3 = document.querySelector('#l3');

        var logo1 = "image/logoputih.png";
        var logo2 = "image/logohitam.png";

        if (window.pageYOffset > fixedNav) {
            header.classList.add('navbar-fixed');

            hambchild1.classList.remove('bg-white');
            hambchild2.classList.remove('bg-white');
            hambchild3.classList.remove('bg-white');
            hambchild1.classList.add('bg-black');
            hambchild2.classList.add('bg-black');
            hambchild3.classList.add('bg-black');
            $(".logo").attr("src", logo2);
            $(".nav-text").removeClass("lg:text-white");
            $(".nav-text").addClass("lg:text-black");
            $(".nav-text").addClass("lg:hover:text-primary");
            $(".nav-text").addClass("underlink");
        } else {
            header.classList.remove('navbar-fixed');

            hambchild1.classList.add('bg-white');
            hambchild2.classList.add('bg-white');
            hambchild3.classList.add('bg-white');
            hambchild1.classList.remove('bg-black');
            hambchild2.classList.remove('bg-black');
            hambchild3.classList.remove('bg-black');
            $(".logo").attr("src", logo1);
            $(".nav-text").removeClass("lg:text-black");
            $(".nav-text").addClass("lg:text-white");
            $(".nav-text").removeClass("lg:hover:text-primary");
            $(".nav-text").removeClass("underlink");
        }
    }

    // hamburger
    const hamburger = document.querySelector('#hamburger');
    const navMenu = document.querySelector('#nav-menu');

    hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('hamburger-active');
        navMenu.classList.toggle('hidden');
    })
</script>

</html>
