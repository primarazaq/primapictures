<div class="container lg:container-xl">
    <div class="flex items-center md:w-screen md:max-w-auto lg:w-screen lg:max-w-[1900px] justify-between relative">
        <div class="px-4 -mt-10">
            {{-- <a id="title" href="#home" class="text-lg font-bold block py-6 text-white gilroy">Primapictures</a> --}}
            <a id="title" href="/" class="block py-6 w-32 mt-11"> <img src="/../image/logohitam.png" class=""
                    alt=""></a>
        </div>
        <div class="flex items-center px-4 -mt-1">
            <button type="button" id="hamburger" name="hamburger" class="block absolute right-4 lg:hidden">
                <span class="hamburger-line bg-black transition duration-300 ease-in-out origin-top-left"></span>
                <span class="hamburger-line bg-black transition duration-300 ease-in-out"></span>
                <span class="hamburger-line bg-black transition duration-300 ease-in-out origin-bottom-left "></span>
            </button>
            <nav id="nav-menu"
                class="hidden absolute py-5 bg-white shadow-2xl rounded-lg max-w-[175px] w-full right-4 top-20 lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                <ul class="block lg:flex transition">
                    <li class="group flex justify-center items-center relative">
                        <a href="/login">
                            <button
                                class="w-fit mt-3 bg-primary text-white px-10 py-[2px] font-semibold inline-block tracking-[2px] text-[13px] uppercase rounded-full shadow-sm hover:shadow-md hover:bg-white hover:text-primary transform hover:scale-110 duration-500 ease-in-out shadow-black">
                                Login
                            </button>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>
