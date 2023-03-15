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
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quos rem vero nihil eius velit, error
                    aliquid officia iste odit esse dicta debitis illum amet quas mollitia voluptas dolor itaque, saepe
                    blanditiis laborum non. Dolorum, laborum eaque, ipsum corrupti eius at amet error vel necessitatibus
                    reiciendis a repellendus blanditiis, aliquam veritatis facilis assumenda accusamus sunt ab id libero
                    et ratione officia vitae. Tempora tenetur enim velit dolore et perspiciatis reiciendis, placeat
                    itaque veniam doloremque, odit eligendi sint quod earum quaerat magnam voluptatem inventore omnis
                    ratione optio voluptatibus? Nesciunt mollitia at sint, dignissimos impedit id earum quaerat dolore
                    reprehenderit cumque dolor eaque ad quia similique nulla corrupti atque necessitatibus nihil hic
                    animi sit adipisci quas consectetur. Excepturi quasi, doloremque omnis maiores ut, ex cupiditate,
                    dolor neque ipsam reprehenderit eaque! Facere recusandae enim mollitia optio velit odio, est officia
                    quisquam molestiae ipsum illum, eos aut odit, aliquid quibusdam possimus voluptate quae! Repellat
                    odit, fugiat hic quis rerum alias repellendus enim aspernatur perspiciatis quae optio. Natus, esse
                    et. Dolorem architecto neque distinctio porro rerum illo quidem vero quo ratione, tempora
                    perferendis explicabo. Voluptatibus neque deleniti maiores molestias aliquam aut autem saepe
                    excepturi molestiae sapiente asperiores quaerat quidem at eveniet illum nulla dignissimos, nihil
                    laudantium odio repellendus ipsam, ipsa eligendi impedit! Eaque libero nobis molestias doloremque
                    est. Odio eaque iste tempora, eligendi nobis incidunt aliquam voluptate accusamus aut a esse
                    dolores? Error nemo consequuntur, eveniet similique maxime animi ducimus quisquam ad odio libero
                    perferendis fugiat quos corporis aspernatur ab recusandae quia veniam neque perspiciatis amet
                    mollitia eos aut unde? Incidunt, ducimus ipsam asperiores porro laboriosam amet inventore magni
                    labore odit numquam dignissimos enim veniam maiores iste aperiam itaque quibusdam, facilis id nisi
                    nobis sit. Blanditiis fuga incidunt illo animi culpa minus molestias libero, laboriosam sit velit
                    natus perspiciatis hic voluptatum nihil consequatur non autem molestiae corrupti maiores dicta
                    numquam labore? Vel, delectus. Exercitationem at repudiandae tempore repellat harum velit
                    reprehenderit, soluta fuga veritatis quo dolorum dicta, non eveniet et eos asperiores, aliquid
                    consequatur voluptates nam reiciendis illo numquam nesciunt. Quo laborum vero quidem deleniti omnis
                    animi aperiam illo maxime? Delectus ab, blanditiis alias quibusdam, voluptatem soluta deserunt ad
                    neque iure eius a debitis. Exercitationem soluta tempora consectetur eveniet excepturi nihil minima
                    necessitatibus unde, reiciendis nobis ratione doloribus ad optio dicta eaque iusto delectus ipsum
                    placeat. Libero corporis, blanditiis dolore fugit aliquid ut iste accusantium maxime accusamus.
                    Incidunt similique eaque sit quis, obcaecati, blanditiis vitae facilis rerum ipsum excepturi quidem
                    quo odit et quisquam. A sunt provident consequuntur harum sequi eos vel impedit, nobis aperiam
                    laboriosam in cupiditate saepe odio similique fuga magnam ea! Corporis veritatis suscipit aut
                    accusamus quis eligendi animi architecto ad nulla, similique quo vel laudantium sequi saepe illum
                    aspernatur accusantium cum laboriosam placeat ab illo. Numquam, et! Consequuntur saepe ab
                    accusantium hic asperiores neque repellendus totam, commodi alias quia aliquam id rerum! Eum
                    provident dolore tempora atque nam praesentium nisi asperiores, id vero veritatis optio sapiente,
                    nesciunt at accusantium? Nemo fuga corrupti ad magni alias aliquam quisquam vel aspernatur beatae
                    totam.
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
