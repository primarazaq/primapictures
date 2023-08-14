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
                Riwayat Pesanan
            </div>
        </li>
    </ol>
</nav>
<div class=" text-gray-900">
    <div class="flex justify-between">
        <div class="mb-3 ml-3 font-extrabold text-xl">
            <h3>Riwayat Pesanan</h3>
        </div>
    </div>
    <!--Container-->
    <div class="w-full xl:w-auto mx-auto px-2">

        <!--Card-->
        <div id='recipients' class="p-8 lg:mt-0 rounded-lg shadow-lg bg-white border-2">
            <table id="riwayat" class="stripe hover text-center w-full "
                style="padding-top: 1em;  padding-bottom: 1em; width: 100%; ">
                <thead>
                    <tr>
                        <th data-priority="1" class="w-16">No</th>
                        <th data-priority="2" class="w-52">Tanggal Transaksi</th>
                        <th data-priority="3" class="w-32">Kategori Jasa</th>
                        <th data-priority="4" class="w-52">Nama Pelanggan</th>
                        <th data-priority="5" class="w-40">Metode Pembayaran</th>
                        <th data-priority="6" class="w-40">Status</th>
                        <th data-priority="7" class="w-32">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat as $data)
                        <tr class="bg-white border-b ">
                            <th scope="row" class="py-4 px-6">
                                {{ $loop->iteration }}
                            </th>
                            <td class="py-4 px-6 text-center">
                                {{ $data->tgl_transaksi }}
                            </td>
                            <td class="py-4 px-6 text-center">
                                {{ $data->kategori }}
                            </td>
                            <td class="py-4 px-6 text-left">
                                {{ $data->nama_plg }}
                            </td>
                            <td class="py-4 px-6 text-center">
                                {{ $data->payment_type }}
                            </td>
                            <td class="py-4 px-6 text-center flex justify-center items-center">
                                @if ($data->status == "success" || $data->status == "settlement")
                                <div class="bg-success py-1 w-28 rounded-2xl text-white">
                                    <div class="text-center">
                                        <p>Success</p>
                                    </div>
                                </div>
                                @else
                                <div class="bg-red py-1 w-28 rounded-2xl text-white">
                                    <div class="text-center">
                                        <p>Failed</p>
                                    </div>
                                </div>
                                @endif
                            </td>
                            <td class="py-4 px-6">
                                @include('components.detailRiwayat')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- jQuery -->
{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="module">
    $(document).ready(function() {

        var table = $('#riwayat').DataTable({
                responsive: false
            })
            // .columns.adjust()
            .responsive.recalc();
    });
</script>
@endsection

