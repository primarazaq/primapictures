{{-- <div>
    <form action="{{ route('verify') }}" method="post">
        @csrf
        <label for="verification_code" class="text-sm">Kode Verifikasi</label>
        <div class="mb-2 text-lg">
            <input class="rounded-lg border-primary bg-white px-6 py-2 text-left shadow-lg backdrop-blur-md" type="text" name="verification_code" placeholder="Kode Verifikasi" autofocus/>
        </div>
        <div class="mt-8 flex justify-center text-lg text-black">
            <button type="submit" class="rounded-3xl bg-primary px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-white hover:text-primary">Verifikasi</button>
        </div>
    </form>
</div> --}}

<!doctype html>
<html class="scroll-smooth">

<head>
    @include('components/head')
</head>

<body>
<!-- component -->
<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat " style="background-image:url('image/main(2).webp')">
    <div class="rounded-xl bg-white bg-opacity-80 px-16 py-10 shadow-lg backdrop-blur-sm max-sm:px-8">
      <div class="text-black">
        <div class="mb-8 flex flex-col items-center">
          <img src="image/logohitam.png" width="200" alt="" srcset="" />
          <h1 class=" text-lg mt-6 font-bold">Admin Login Page</h1>
        </div>
        <div>
            @if (session()->has('verification_code'))
            <div id="alert-2" class="flex justify-between px-6 py-2 mt-2 bg-rose-300 bg-opacity-50 rounded-lg alert-del" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 -ml-4 w-5 h-5 text-red" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <p class=" text-[10px] ml-4 w-36 items-center font-medium text-red inline-flex"> 
                  {{ session('verification_code') }}
                </p>
                <div class=" text-xs items-center font-medium text-red inline-flex">
                    <button type="button" class=" ml-5 -mx-5 -my-1.5  text-red rounded-lg p-1.5  h-8 w-8" data-dismiss-target="#alert-2" aria-label="Close">
                      <span class="sr-only">Close</span>
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>

            <script>
              var closeButton = document.querySelector('#alert-2 [aria-label="Close"]');
              closeButton.addEventListener('click', function () {
                  var alert = closeButton.closest('.alert-del');
                  alert.classList.add('opacity-0');
                  setTimeout(function () {
                      alert.classList.add('hidden');
                  }, 300);
              });
          </script>
            
            @endif
            @error('verification_code')
            <div id="alert-2" class="flex justify-between px-6 py-2 mt-2 bg-rose-300 bg-opacity-50 rounded-lg alert-del" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 -ml-4 w-5 h-5 text-red" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <p class=" text-[10px] ml-4 w-36 items-center font-medium text-red inline-flex"> 
                  {{ $message }}
                </p>
                <div class=" text-xs items-center font-medium text-red inline-flex">
                    <button type="button" class=" ml-5 -mx-5 -my-1.5  text-red rounded-lg p-1.5  h-8 w-8" data-dismiss-target="#alert-2" aria-label="Close">
                      <span class="sr-only">Close</span>
                      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
            </div>

            <script>
              var closeButton = document.querySelector('#alert-2 [aria-label="Close"]');
              closeButton.addEventListener('click', function () {
                  var alert = closeButton.closest('.alert-del');
                  alert.classList.add('opacity-0');
                  setTimeout(function () {
                      alert.classList.add('hidden');
                  }, 300);
              });
          </script>
            @enderror
        </div>
        <div>

        
          <form action="{{ route('verify') }}" method="post">
              @csrf
              <label for="verification_code" class="text-sm">Kode Verifikasi</label>
            <div class="mb-2 text-lg">
              <input class="rounded-lg border-primary bg-white px-6 py-2 text-left shadow-lg backdrop-blur-md" type="number" name="verification_code" placeholder="Kode Verifikasi" autofocus required/>
              
            </div>
            <div class="mt-8 flex justify-center text-lg text-black">
              <button type="submit" class="rounded-3xl bg-primary px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-white hover:text-primary">Verifikasi</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>


</html>
