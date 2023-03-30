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
    <section class="container my-24 mx-auto">
        <div class="w-full md:w-1/2 lg:w-1/4 px-5 mb-5 lg:pl-2 lg:pr-2">
            <div
                class="bg-primary rounded-lg m-h-64 p-2 transform hover:-translate-y-2 hover:shadow-xl transition duration-300">
                <figure class="mb-2">
                    <img src="https://srv-cdn.onedio.com/store/988bccbdb9ca395f581f98faa9ce3a55123f12bfcef608c838532b813646e557.png"
                        alt="" class="h-64 ml-auto mr-auto" />
                </figure>
                <div class="rounded-lg p-4 bg-gray-700 flex flex-col">
                    <div>
                        <h5 class="text-white text-2xl font-bold leading-none">
                            iPhone XR
                        </h5>
                        <span class="text-xs text-gray-400 leading-none">Brilliant. In every way.</span>
                    </div>
                    <div class="flex items-center">
                        <div class="text-lg text-white font-light">
                            $599,00
                        </div>
                        <button href="javascript:;"
                            class="rounded-full bg-gray-900 text-white hover:bg-white hover:text-purple-900 hover:shadow-xl focus:outline-none w-10 h-10 flex ml-auto transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="stroke-current m-auto">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    AOS.init();

    // navbbar fixed
    // window.onscroll = function() {
    //     const header = document.querySelector('header');
    //     const fixedNav = header.offsetTop;
    //     const textNav = document.querySelector('#title');
    //     const hambchild1 = document.querySelector('#l1');
    //     const hambchild2 = document.querySelector('#l2');
    //     const hambchild3 = document.querySelector('#l3');

    //     var logo1 = "image/logoputih.png";
    //     var logo2 = "image/logohitam.png";

    //     if (window.pageYOffset > fixedNav) {
    //         header.classList.add('navbar-fixed');

    //         hambchild1.classList.remove('bg-white');
    //         hambchild2.classList.remove('bg-white');
    //         hambchild3.classList.remove('bg-white');
    //         hambchild1.classList.add('bg-black');
    //         hambchild2.classList.add('bg-black');
    //         hambchild3.classList.add('bg-black');
    //         $(".logo").attr("src", logo2);
    //         $(".nav-text").removeClass("lg:text-white");
    //         $(".nav-text").addClass("lg:text-black");
    //         $(".nav-text").addClass("lg:hover:text-primary");
    //         $(".nav-text").addClass("underlink");
    //     } else {
    //         header.classList.remove('navbar-fixed');

    //         hambchild1.classList.add('bg-white');
    //         hambchild2.classList.add('bg-white');
    //         hambchild3.classList.add('bg-white');
    //         hambchild1.classList.remove('bg-black');
    //         hambchild2.classList.remove('bg-black');
    //         hambchild3.classList.remove('bg-black');
    //         $(".logo").attr("src", logo1);
    //         $(".nav-text").removeClass("lg:text-black");
    //         $(".nav-text").addClass("lg:text-white");
    //         $(".nav-text").removeClass("lg:hover:text-primary");
    //         $(".nav-text").removeClass("underlink");
    //     }
    // }

    // // hamburger
    // const hamburger = document.querySelector('#hamburger');
    // const navMenu = document.querySelector('#nav-menu');

    // hamburger.addEventListener('click', function() {
    //     hamburger.classList.toggle('hamburger-active');
    //     navMenu.classList.toggle('hidden');
    // })
</script>

</html>
