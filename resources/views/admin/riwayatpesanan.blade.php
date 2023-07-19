@extends('admin.admin')
@section('content')


{{-- breadcrumb --}}
<nav class="flex bg-white mb-4 text-black py-3 px-5 rounded-lg" aria-label="Breadcrumb">
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
                Kelola Jasa
            </div>
        </li>
    </ol>
</nav>
<div class=" text-gray-900">
    <div class="flex justify-between">
        <div class="mb-3 ml-3 font-extrabold text-xl">
            <h3>Kategori Jasa</h3>
        </div>
    </div>
    <!--Container-->
    <div class="w-full xl:w-auto mx-auto px-2">

        <!--Card-->
        <div id='recipients' class="p-8 lg:mt-0 rounded-lg shadow-lg bg-white border-2">
            <table id="TBtaskComplt" class="stripe hover text-center w-full "
                style="padding-top: 1em;  padding-bottom: 1em; width: 100%; ">
                <thead>
                    <tr>
                        <th data-priority="1" class="w-16">No</th>
                        <th data-priority="2">No</th>
                        <th data-priority="3">Nama Pelanggan</th>
                        <th data-priority="4">Status</th>
                        <th data-priority="5" class="w-32">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat as $data)
                        <tr class="bg-white border-b ">
                            <th scope="row" class="py-4 px-6">
                                {{ $loop->iteration }}
                            </th>
                            <td class="py-4 px-6 text-left">
                                {{ $data->tgl_transaksi }}
                            </td>
                            <td class="py-4 px-6 text-left">
                                {{ $data->nama_plg }}
                            </td>
                            <td class="py-4 px-6 text-left">
                                {{ $data->status }}
                            </td>
                            <td class="py-4 px-6">
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

