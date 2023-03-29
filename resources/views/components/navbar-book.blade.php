<div class="container lg:container-xl">
    <div class="flex items-center md:w-screen md:max-w-auto lg:w-screen lg:max-w-[1900px] justify-between relative">
        <div class="px-4 -mt-10">
            {{-- <a id="title" href="#home" class="text-lg font-bold block py-6 text-white gilroy">Primapictures</a> --}}
            <a id="title" href="/" class="block py-6 w-32 mt-11"> <img src="image/logohitam.png" class="logo"
                    alt=""></a>
        </div>
        <div class="flex items-center px-4 -mt-1">
            <button type="button" id="hamburger" name="hamburger" class="block absolute right-4 lg:hidden">
                <span id="l1"
                    class="hamburger-line bg-white transition duration-300 ease-in-out origin-top-left"></span>
                <span id="l2" class="hamburger-line bg-white transition duration-300 ease-in-out"></span>
                <span id="l3"
                    class="hamburger-line bg-white transition duration-300 ease-in-out origin-bottom-left "></span>
            </button>

            <nav id="nav-menu"
                class="hidden absolute py-5 bg-white shadow-2xl rounded-lg max-w-[175px] w-full right-4 top-20 lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                <ul class="block lg:flex transition">
                    {{-- <li class="group">
                        <a href="#home" class="text-base text-black py-2 mx-8 flex lg:text-white nav-text">Home</a>
                    </li>
                    <li class="group">
                        <a href="#about" class="text-base text-black py-2 mx-8 flex lg:text-white nav-text">About</a>
                    </li>
                    <li class="group">
                        <a href="#services"
                            class="text-base text-black py-2 mx-8 flex lg:text-white nav-text">Services</a>
                    </li>
                    <li class="group">
                        <a href="#gallery"
                            class="text-base text-black py-2 mx-8 flex lg:text-white nav-text">Gallery</a>
                    </li> --}}
                    <li class="group flex justify-center items-center relative">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                        </button>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
