 <footer class="bg-primary">
     <div class="container-xl lg:pt-14 lg:pb-3">
         <div
             class="flex relative w-full h-40 self-center items-center px-4 pt-14 lg:px-32 lg:justify-between lg:pt-0 sm:px-14">
             <div>
                 <img src="/../image/logoputih.png" alt="" class="w-36 h-fit lg:w-52">
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
                     <img src="/../image/ig.png" alt="" class="w-[15px] h-[15px]">
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
                 // $(".nav-text").removeClass("underlink");
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
 </footer>
