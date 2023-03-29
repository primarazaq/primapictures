<!doctype html>
<html class="scroll-smooth">

<head>
    @include('components/head')
</head>

<body>
    <header
        class="bg-transparent absolute top-0 left-0 w-full h-[69px] flex items-center z-10 transition duration-500 ease-in-out">
        @include('components/navbar-book')
    </header>
    <section class="container my-20 mx-auto">
        test
    </section>
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
