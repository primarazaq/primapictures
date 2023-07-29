@extends('admin.admin')
@section('content')

<nav class="flex bg-white mb-4 text-black py-3 px-5 rounded-lg justify-between" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="" class=" text-black hover:text-primary inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
                Admin
            </a>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                Dashboard
            </div>
        </li>
    </ol>
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li>
            <div class="flex items-center">
                <a href="{{ url('/admin/dashboard/cetak-dokumen') }}" target="_blank">
                <button id="btnPrint" class="flex space-x-3 bottom-0 p-2 rounded-full px-6 py-2 text-base font-normal text-white bg-primary hover:shadow-md hover:border-1 hover:border-black hover:bg-white hover:text-primary hover:scale-105 duration-300 ease-in-out fill-white hover:fill-primary" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                  </svg>
     
                <span>Cetak Dokumen</span>
                </button></a>
            </div>
        </li>
    </ol>
</nav>
<div class="flex flex-row space-x-4">
    <div class="h-52 basis-1/4 bg-white p-8 rounded-2xl shadow-xl">
        <h2 class="text-xl font-bold mb-2 text-gray-800 text-center">Pendapatan Hari ini</h2>
        <p class="text-gray-700 mt-14 lg:text-4xl font-bold md:text-lg">@currency($Day->pendapatan)</p>
    </div>
    <div class="h-52 basis-1/4 bg-white p-8 rounded-2xl shadow-xl">
        <h2 class="text-xl font-bold mb-2 text-gray-800 text-center">Pendapatan Bulan ini</h2>
        <p class="text-gray-700 mt-14 lg:text-4xl font-bold md:text-lg">@currency($Month->pendapatan)</p>
    </div>
    <div class="h-52 basis-1/4 bg-white p-8 rounded-2xl shadow-xl">
        <h2 class="text-xl font-bold mb-2 text-gray-800 text-center">Pendapatan Tahun ini</h2>
        <p class="text-gray-700 mt-14 lg:text-4xl font-bold md:text-lg">@currency($Year->pendapatan)</p>
    </div>
    <div class="h-52 basis-1/4 bg-white p-8 rounded-2xl shadow-xl">
        <h2 class="text-xl font-bold mb-2 text-gray-800 text-center">Pendapatan Keseluruhan</h2>
        <p class="text-gray-700 mt-14 lg:text-4xl font-bold md:text-lg">@currency($Total->pendapatan)</p>
    </div>
</div>
{{-- <div>
    <div class="h-96 bg-white p-8 rounded-2xl shadow-xl">
        <h2 class="text-xl font-bold mb-2 text-gray-800 text-center">Pendapatan Keseluruhan</h2>
        <p class="text-gray-700 mt-14 text-4xl font-bold">Rp.000.000</p>
    </div>
</div> --}}
@endsection

