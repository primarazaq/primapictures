<!DOCTYPE html>
<html lang="en">
<head>
    @include('components/head')
</head>
<style>
    .active{
       background-color: #38573e;
       opacity: 90%;
       color: white;
    }

    .active svg{
        fill: white;
    }
 
    .inactive {
        color: black; /* Mengatur warna teks menjadi hitam */
    }

    .inactive:hover {
        color: #38573e; /* Mengatur warna teks menjadi putih saat hover */
    }
    .inactive:hover p {
        color: #38573e; /* Mengatur warna teks menjadi putih saat hover */
    }

    .inactive svg {
        fill: black; /* Mengatur warna ikon menjadi hitam */
    }

    .inactive:hover svg {
        fill: #38573e; /* Mengatur warna ikon menjadi putih saat hover */
    }
  
 </style>

<body class="flex flex-col min-h-screen">
   @include('components.sidebar-admin')
         <main class="flex-grow p-6 h-full animate-fade3 mt-14">
            @yield('content')
          </main>
          @include('admin.footer-admin')
        </div>
    </div>
</body>

</html>