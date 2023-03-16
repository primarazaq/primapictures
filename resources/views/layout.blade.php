<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primapictures</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="//db.onlinewebfonts.com/c/00d5a78493aed4b11e2584ad7cceee49?family=Gilroy+ExtraBold" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/didot" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Playfair+Display&display=swap"
        rel="stylesheet">


    <style>
        /*Overrides for Tailwind CSS */
        body {
            font-family: 'Poppins', sans-serif;
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
    @vite('resources/css/app.css')
</head>

<body>
    <header
        class="bg-transparent absolute top-0 left-0 w-full h-[69px] flex items-center z-10 transition duration-300 ease-in-out">
        @include('components/navbar')
    </header>
    <section id="home">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full h-80 self-center px-4 relative z-0">
                    <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden">
                        <video class="min-w-full min-h-full absolute object-cover" src="video/video.mp4"
                            type="video/mp4" autoplay muted loop></video>
                    </div>
                    <div class="video-content relative space-y-0 text-center mt-36">
                        <h1 class="text-white gilroy text-2xl">Primapictures.</h1>
                        <p class="text-white helvetica text-xs">Capture your moment's beautifully</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="mt-10 mb-14">
        <div class="container">
            <div class="flex flex-wrap pr-5">
                <div class="w-full h-80 self-center px-4 relative z-0">
                    <div class="absolute w-full h-full overflow-hidden">
                        <p class="relative text-2xl font-bold text-left text-primary mb-10">
                            Tentang Primapictures
                        </p>
                        <p class="absolute text-md text-left text-black">
                            <span>Kami merupakan penyedia jasa di bidang</span>
                            <span class="font-bold">Photography &#x26; Videography </span>
                            <span>profesional yang siap
                                mengabadikan
                                momen-momen spesialmu dengan indah.
                            </span><br /><br />
                            <span>Kemi selalu berusaha untuk memahami
                                kebutuhan dan
                                harapan pelanggan untuk mendapatkan hasil
                                akhir yang sesuai dengan yang dingiinkan.</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col relative">
                <div class="w-full h-40 self-center relative z-0">
                    <div class="w-full h-full overflow-hidden relative">
                        <img src="image/foto1.png" alt="">
                    </div>
                    <div class="w-full h-full overflow-hidden relative">
                        <img src="image/foto2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about2" class="mt-52">
        <div class="container">
            <div class="flex flex-wrap mt-14 pr-5">
                <div class="w-full h-80 self-center px-4 relative z-0">
                    <div class="absolute w-full h-full overflow-hidden">
                        <p class="relative text-2xl font-bold text-left text-primary mb-10">
                            Mengapa harus kami
                        </p>
                        <p class="absolute text-md text-left text-black">
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
            <div class="flex flex-col -mt-5">
                <div class="w-full h-40 self-center relative z-0">
                    <div class="w-full h-full overflow-hidden">
                        <img src="image/foto1.png" alt="">
                    </div>
                    <div class="w-full h-full overflow-hidden">
                        <img src="image/foto2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="banner" class="mt-48">
        <div class="container">
            <div class="relative w-[300px] h-full scale-150 self-center z-0">
                <img src="image/foto5.png" class="absolute object-cover" />
                <div class="relative text-center ml-11 text-white pt-5 self-center">
                    <p class="text-xs font-bold">
                        <span>Segera abadikan momen indah</span><br />
                        <span>anda bersama kami</span>
                    </p>
                    <p class="text-[5px] tracking-widest px-8 pt-5 pb-2 font-extralight helvetica">
                        Hal terbaik mengenai sebuah gambar adalah gambar itu tidak pernah berubah, bahkan ketika
                        orang-orang di dalamnya sudah berubah. Itulah momen yang menjadikannya abadi
                    </p>
                    <button
                        class="w-fit mt-3 ml-2 bg-white text-primary px-3 py-[2px] font-semibold inline-block tracking-[2px] text-[7px] uppercase rounded-full shadow-sm hover:shadow-md hover:scale-110 hover:transition-all hover:ease-out hover:duration-300 shadow-black">
                        ORDER SEKARANG
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="mt-24">
        <div class="container">
            <p class="relative text-2xl font-bold text-center text-primary mb-5">
                Layanan Kami
            </p>
            <div class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-secondary mb-5">
                <img src="image/vector1.png" alt="" class="inline-block pb-3">

                <p class="relative text-xl font-medium text-cemter uppercase text-black mb-4">
                    Wedding
                </p>
                <p class="relative text-sm text-left lowercase text-black">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>

            </div>
            <div class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-secondary mb-5">
                <img src="image/vector2.png" alt="" class="inline-block pb-3">

                <p class="relative text-xl font-medium text-cemter uppercase text-black mb-4">
                    Event
                </p>
                <p class="relative text-sm text-left lowercase text-black">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>

            </div>

            <div class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-secondary mb-5">
                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-16 h-16 inline-block relative" preserveAspectRatio="none">
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

                <p class="relative text-xl font-medium text-cemter uppercase text-black mb-4">
                    Personal
                </p>
                <p class="relative text-sm text-left lowercase text-black">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>

            </div>

            <div class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-secondary mb-5">
                <img src="image/vector3.png" alt="" class="inline-block pb-3">

                <p class="relative text-xl font-medium text-cemter uppercase text-black mb-4">
                    Photo Product
                </p>
                <p class="relative text-sm text-left lowercase text-black">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>

            </div>

            <div class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-secondary mb-5">
                <img src="image/vector4.png" alt="" class="inline-block pb-3">

                <p class="relative text-xl font-medium text-cemter uppercase text-black mb-4">
                    Design
                </p>
                <p class="relative text-sm text-left lowercase text-black">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>

            </div>

            <div class="relative w-full h-full justify-between px-5 text-center items-center z-0 bg-secondary mb-5">
                <img src="image/vector5.png" alt="" class="inline-block pb-3">

                <p class="relative text-xl font-medium text-cemter uppercase text-black mb-4">
                    Editing
                </p>
                <p class="relative text-sm text-left lowercase text-black">
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>

            </div>

        </div>
    </section>
</body>
<script>
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
            // textNav.classList.remove('text-white');
            // textNav.classList.add('text-primary');
            hambchild1.classList.remove('bg-white');
            hambchild2.classList.remove('bg-white');
            hambchild3.classList.remove('bg-white');
            hambchild1.classList.add('bg-black');
            hambchild2.classList.add('bg-black');
            hambchild3.classList.add('bg-black');
            $(".logo").attr("src", logo2);
        } else {
            header.classList.remove('navbar-fixed');
            // textNav.classList.remove('text-primary');
            // textNav.classList.add('text-white');
            hambchild1.classList.add('bg-white');
            hambchild2.classList.add('bg-white');
            hambchild3.classList.add('bg-white');
            hambchild1.classList.remove('bg-black');
            hambchild2.classList.remove('bg-black');
            hambchild3.classList.remove('bg-black');
            $(".logo").attr("src", logo1);
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
