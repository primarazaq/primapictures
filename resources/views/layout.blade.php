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
    <section id="about" class="mt-14 mb-14">
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
    <section id="banner" class="mt-[11.5rem]">
        <div class="container">
            <div class="relative w-[300px] h-full self-center z-0 scale-150">
                <img src="image/foto5.png" class="absolute object-cover" />
                <div class="relative text-center text-white pt-5 self-center">
                    <p class="text-xs font-bold ml-11">
                        <span>Segera abadikan momen indah</span><br />
                        <span>anda bersama kami</span>
                    </p>
                    <p class="text-[6px] px-4 pt-4 font-light helvetica ml-11">
                        Hal terbaik mengenai sebuah gambar adalah gambar itu tidak pernah berubah, bahkan ketika
                        orang-orang di dalamnya sudah berubah. Itulah momen yang menjadikannya abadi
                    </p>
                    <button
                        class="w-fit mt-4 ml-11 bg-white text-primary px-3 py-[2px] font-semibold inline-block tracking-[2px] text-[7px] uppercase rounded-full shadow-2xl">
                        ORDER SEKARANG
                    </button>
                </div>
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
