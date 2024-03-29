@extends('admin.admin')
@section('content')

{{-- breadcrumb --}}
<nav class="flex bg-white mb-4 text-black py-3 px-5 rounded-lg" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="/admin" class=" text-black hover:text-primary inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
                Admin
            </a>
        </li>
        <li aria-current="page">
            <div class="flex items-center hover:text-primary">
                <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </li>
        <a href="/admin/kelolajasa">
            <p class="hover:text-primary">
                Kelola Jasa
            </p>
        </a>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </li>
        <li class="inline-flex items-center">
            <p class=" text-black hover:text-primary inline-flex items-center">
                Detail Jasa
            </p>
        </li>
    </ol>
</nav>
<div class=" text-gray-900 mb-5">

    @if (session()->has('add'))
    <div class="mb-4">
        <div id="alert-2" class="flex justify-between px-6 py-2 mt-2 bg-green-100 bg-opacity-50 rounded-lg alert-del" role="alert">
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-800">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="sr-only">Info</span>
                <p  class=" text-sm ml-2 items-center font-medium text-green-800 inline-flex"> 
                {{ session('add') }}
                </p>
            </div>
            <div class=" text-xs items-center font-medium text-green-800 inline-flex">
                <button type="button" class=" ml-5 -mx-5 -my-1.5  text-green-800 rounded-lg p-1.5  h-8 w-8" data-dismiss-target="#alert-2" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
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
        </div>
    </div>
    @elseif(session()->has('edit'))
    <div class="mb-4">
        <div id="alert-2" class="flex justify-between px-6 py-2 mt-2 bg-green-100 bg-opacity-50 rounded-lg alert-del" role="alert">
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-800">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  
                <span class="sr-only">Info</span>
                <p  class=" text-sm ml-2 items-center font-medium text-green-800 inline-flex"> 
                  {{ session('edit') }}
                </p>
            </div>
            <div class=" text-xs items-center font-medium text-green-800 inline-flex">
                <button type="button" class=" ml-5 -mx-5 -my-1.5  text-green-800 rounded-lg p-1.5  h-8 w-8" data-dismiss-target="#alert-2" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
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
        </div>
    </div>
    @elseif(session()->has('destroy'))
    <div class="mb-4">
        <div id="alert-2" class="flex justify-between px-6 py-2 mt-2 bg-green-100 bg-opacity-50 rounded-lg alert-del" role="alert">
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-800">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                
                <span class="sr-only">Info</span>
                <p  class=" text-sm ml-2 items-center font-medium text-green-800 inline-flex"> 
                {{ session('destroy') }}
                </p>
            </div>
            <div class=" text-xs items-center font-medium text-green-800 inline-flex">
                <button type="button" class=" ml-5 -mx-5 -my-1.5  text-green-800 rounded-lg p-1.5  h-8 w-8" data-dismiss-target="#alert-2" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
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
        </div>
    </div>
    @endif

    <div class="flex justify-between">
        <div class="mb-3 ml-3 font-extrabold text-xl">
            <h4>{{ $kategori->nama }}</h4>
        </div>
        @include('components.formCreate')
    </div>
    <!--Container-->
    <div class="w-full xl:w-auto mx-auto px-2">

        <!--Card-->
        <div id='recipients' class="p-8 lg:mt-0 rounded-lg shadow-lg bg-white border-2 h-full">
            <table id="jasatable" class="stripe hover text-center w-full"
                style="padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th data-priority="1">No</th>
                        <th data-priority="2">Nama</th>
                        <th data-priority="3">Harga</th>
                        <th data-priority="4">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jasa as $data)
                        <tr class="bg-white border-b ">

                            <th scope="row" class="py-4 px-6">
                                {{ $loop->iteration }}
                            </th>
                            <td class="py-4 px-6  text-left">
                                {{ $data->nama }}
                            </td>
                            <td class="py-4 px-6">
                                @currency($data->harga)
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex mx-auto justify-center">
                                    @include('components.formEdit')
                                    @include('components.destroy')
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--/Card-->
    </div>
</div>
<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {

        var table = $('#jasatable').DataTable({
                responsive: false
            })
            // .columns.adjust()
            .responsive.recalc();
    });
</script>
@endsection

