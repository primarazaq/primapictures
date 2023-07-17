@extends('admin.admin')
@section('content')

{{-- breadcrumb --}}
<nav class="flex bg-white mb-4 text-blue-700 py-3 px-5 rounded-lg" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="/pengadaan" class="text-sm text-blue-700 hover:text-gray-900 inline-flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                </svg>
                Admin
            </a>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </li>
    </ol>
</nav>
<div class=" text-gray-900 mb-5">
    <div class="flex justify-between">
        <div class="mb-3 ml-3 font-extrabold">
            <h3>Tabel Buku</h3>
        </div>
        @include('components.formCreate')
    </div>
    <!--Container-->
    <div class="w-full xl:w-auto mx-auto px-2">

        <!--Card-->
        <div id='recipients' class="p-8 lg:mt-0 rounded-lg shadow-lg bg-white border-2">
            <table id="TBtaskComplt" class="stripe hover text-center w-full "
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
                                {{ $data->harga }}
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
<div>      
    <label for="deskripsi"
            class="ml-4 text-lg font-semibold text-gray-900 dark:text-gray-300"></label>
        <input id="deskripsi" class="inline-block w-5/6" type="hidden" name="deskripsi"
            required>
        @error('deskripsi')
            <p>{{ $message }}</p>
        @enderror
        <trix-editor input="deskripsi" placeholder="Tambahkan respon baru..."
            style="overflow-y:auto"></trix-editor>
</div>
@endsection

