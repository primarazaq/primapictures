<!doctype html>
<html class="scroll-smooth">

<head>
    @include('components/head')
</head>

<body>
<!-- component -->
<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('image/foto6.jpg')">
    <div class="rounded-xl bg-white px-16 py-10 shadow-lg backdrop-blur-sm max-sm:px-8">
      <div class="text-black">
        <div class="mb-8 flex flex-col items-center">
          <img src="image/logohitam.png" width="200" alt="" srcset="" />
          <h1 class=" text-lg mt-6 font-bold">Admin Login Page</h1>
        </div>
        <form action="/postLogin" method="post">
            @csrf
            <label for="username" class="text-sm">Username</label>
          <div class="mb-2 text-lg">
            <input class="rounded-lg border-primary bg-white px-6 py-2 text-left shadow-lg backdrop-blur-md" type="text" name="username" placeholder="username" autofocus/>
          </div>
          <label for="password" class="text-sm">Password</label>
          <div class="mb-4 text-lg">
            <input class="rounded-lg border-primary bg-white px-6 py-2 text-left shadow-lg backdrop-blur-md" type="password" name="password" placeholder="password" />
          </div>
          <p for="pesan" class="text-xs text-center">Ingin segera memesan ? <a href="/order" class="text-primary">klik disini!</a></p>
          <div class="mt-8 flex justify-center text-lg text-black">
            <button type="submit" class="rounded-3xl bg-primary px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-white hover:text-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>


</html>