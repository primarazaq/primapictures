<div x-data="{ sidebarOpen: true }" class="flex overflow-x-hidden h-screen">
    <aside class="flex-shrink-0 w-72 border-r-2 flex flex-col transition-all duration-300 ease-in-out" :class="{ '-ml-72': !sidebarOpen }">
      <div class="fixed h-full w-72 bg-white shadow-2xl">
        <nav class=" h-full flex-1 flex flex-col text-black px-8 py-2 space-y-2 absolute animate-fade3">
            <div class="mb-2 ">
                <img src="../../image/logohitam.png" width="200" alt="" srcset="" />
            </div>
            <hr class="border-black rounded-xl">
                <ul class="space-y-4 translate-y-4 ">
                    <li>
                        <a href="/admin/dashboard" class="{{ Request::is('admin/dashboard*') ? 'active' : 'inactive' }} flex hover:transition ease-in-out duration-300 items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:text-white hover:opacity-70">
                            <svg class="w-8 fill-black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"/><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></g></svg>
                            {{-- <img src="imgs/Vector.png" alt="" class="w-5"> --}}
                            <p class="flex-1 ml-3 inline-flex whitespace-nowrap {{ Request::is('admin/dashboard*') ? 'text-white' : 'text-black' }}">Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/jadwalpemotretan" class="{{ Request::is('admin/jadwalpemotretan*') ? 'active' : 'inactive' }} flex hover:transition ease-in-out duration-300 items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:text-white hover:opacity-70">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#38573e" class="w-8 h-8 fill-black">
                                <path d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                                <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z" clip-rule="evenodd" />
                            </svg>
                            
                            <p class="flex-1 ml-3 inline-flex whitespace-nowrap {{ Request::is('admin/jadwalpemotretan*') ? 'text-white' : 'text-black' }}">Jadwal Pemotretan</p>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/kelolajasa" class="{{ Request::is('admin/kelolajasa*') ? 'active' : 'inactive' }} flex hover:transition ease-in-out duration-300 items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:text-white hover:opacity-70">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#38573e" class="w-7 h-7 fill-white">
                                <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 016.775-5.025.75.75 0 01.313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 011.248.313 5.25 5.25 0 01-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 112.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0112 6.75zM4.117 19.125a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z" clip-rule="evenodd" />
                                <path d="M10.076 8.64l-2.201-2.2V4.874a.75.75 0 00-.364-.643l-3.75-2.25a.75.75 0 00-.916.113l-.75.75a.75.75 0 00-.113.916l2.25 3.75a.75.75 0 00.643.364h1.564l2.062 2.062 1.575-1.297z" />
                                <path fill-rule="evenodd" d="M12.556 17.329l4.183 4.182a3.375 3.375 0 004.773-4.773l-3.306-3.305a6.803 6.803 0 01-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 00-.167.063l-3.086 3.748zm3.414-1.36a.75.75 0 011.06 0l1.875 1.876a.75.75 0 11-1.06 1.06L15.97 17.03a.75.75 0 010-1.06z" clip-rule="evenodd" />
                            </svg>
                            
                            <p class="flex-1 ml-3 inline-flex whitespace-nowrap {{ Request::is('admin/kelolajasa*') ? 'text-white' : 'text-black' }}">Kelola Jasa</p>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/riwayatpesanan" class="{{ Request::is('admin/riwayatpesanan*') ? 'active' : 'inactive' }} flex hover:transition ease-in-out duration-300 items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:text-white hover:opacity-70">
                            <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <svg viewBox="0 0 24 24" class="w-8 h-8 fill-black" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 8V12L14.5 14.5" fill=" {{ Request::is('admin/riwayatpesanan*') ? 'white' : 'black' }}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.60423 5.60423L5.0739 5.0739V5.0739L5.60423 5.60423ZM4.33785 6.87061L3.58786 6.87438C3.58992 7.28564 3.92281 7.61853 4.33408 7.6206L4.33785 6.87061ZM6.87963 7.63339C7.29384 7.63547 7.63131 7.30138 7.63339 6.88717C7.63547 6.47296 7.30138 6.13549 6.88717 6.13341L6.87963 7.63339ZM5.07505 4.32129C5.07296 3.90708 4.7355 3.57298 4.32129 3.57506C3.90708 3.57715 3.57298 3.91462 3.57507 4.32882L5.07505 4.32129ZM3.75 12C3.75 11.5858 3.41421 11.25 3 11.25C2.58579 11.25 2.25 11.5858 2.25 12H3.75ZM16.8755 20.4452C17.2341 20.2378 17.3566 19.779 17.1492 19.4204C16.9418 19.0619 16.483 18.9393 16.1245 19.1468L16.8755 20.4452ZM19.1468 16.1245C18.9393 16.483 19.0619 16.9418 19.4204 17.1492C19.779 17.3566 20.2378 17.2341 20.4452 16.8755L19.1468 16.1245ZM5.14033 5.07126C4.84598 5.36269 4.84361 5.83756 5.13505 6.13191C5.42648 6.42626 5.90134 6.42862 6.19569 6.13719L5.14033 5.07126ZM18.8623 5.13786C15.0421 1.31766 8.86882 1.27898 5.0739 5.0739L6.13456 6.13456C9.33366 2.93545 14.5572 2.95404 17.8017 6.19852L18.8623 5.13786ZM5.0739 5.0739L3.80752 6.34028L4.86818 7.40094L6.13456 6.13456L5.0739 5.0739ZM4.33408 7.6206L6.87963 7.63339L6.88717 6.13341L4.34162 6.12062L4.33408 7.6206ZM5.08784 6.86684L5.07505 4.32129L3.57507 4.32882L3.58786 6.87438L5.08784 6.86684ZM12 3.75C16.5563 3.75 20.25 7.44365 20.25 12H21.75C21.75 6.61522 17.3848 2.25 12 2.25V3.75ZM12 20.25C7.44365 20.25 3.75 16.5563 3.75 12H2.25C2.25 17.3848 6.61522 21.75 12 21.75V20.25ZM16.1245 19.1468C14.9118 19.8483 13.5039 20.25 12 20.25V21.75C13.7747 21.75 15.4407 21.2752 16.8755 20.4452L16.1245 19.1468ZM20.25 12C20.25 13.5039 19.8483 14.9118 19.1468 16.1245L20.4452 16.8755C21.2752 15.4407 21.75 13.7747 21.75 12H20.25ZM6.19569 6.13719C7.68707 4.66059 9.73646 3.75 12 3.75V2.25C9.32542 2.25 6.90113 3.32791 5.14033 5.07126L6.19569 6.13719Z" fill="black hover:fill-white"/>
                            </svg>
                            <p class="flex-1 ml-3 inline-flex whitespace-nowrap {{ Request::is('admin/riwayatpesanan*') ? 'text-white' : 'text-black' }}">Riwayat Pesanan</p>
                        </a>
                    </li>
                </ul>
                </nav>
                <div class="flex flex-col items-center h-full justify-end pb-4">
                    <div class="mt-auto">
                      @include('components.logout')
                    </div>
                  </div>
                  
                  
                  
    
      </div>
    </aside>
    <div class="flex-1">
      <header class="flex items-center p-4 text-semibold text-white bg-primary justify-between pr-8 topscreen w-full">
        <button class="p-1 mr-4" @click="sidebarOpen = !sidebarOpen">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
        <p class="fixed right-4">
            Selamat Datang, Admin!
        </p>
      </header>