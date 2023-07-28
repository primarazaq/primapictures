<!DOCTYPE html>
<html lang="en">
<head>
    @include('components/head')
</head>
<style>
    th{
        text-align: left;
    }

    thead{
        background-color: #4d6953;
        color: white;
        padding: 10px;
    }
</style>
<body>
    <div class="w-full px-2">
        <div class="flex flex-col justify-center text-center font-black text-lg leading-relaxed tracking-wider mb-2">
            <img class="self-center mb-2" src="../../image/logohitam.png" width="200" alt="" srcset="" />
            <h4>DOKUMEN KEUANGAN PRIMAPICTURES</h4>
            <span>TAHUN 2023</span>
        </div>
        <div>
        <!-- Loop data dari bulan -->
        @foreach ($ordersByMonthAndCategory->groupBy('bulan') as $bulan => $orders)
    <table class="flex-grow justify-between w-full px-4">
        @php
            $previousKategori = null;
        @endphp

        @foreach ($orders as $item)
            @php
                $bulanSebelumnya = isset($bulanSebelumnya) ? $bulanSebelumnya : null;
            @endphp

            @if ($bulanSebelumnya !== $item['bulan'])
                @php
                    $bulanSebelumnya = $item['bulan'];
                @endphp

                <thead>
                    <tr>
                        <th class="pl-2">{{ $item['bulan'] }}</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-100">
                        <th class="pl-4">
                            Pendapatan tiap Kategori
                        </th>
                        <td class="text-right px-2">
                            qty
                        </td>
                    </tr>
            @endif

            @if ($previousKategori !== $item['nama_kategori'])
                <tr>
                    <td class="pl-6">
                        {{ $item['nama_kategori'] }} 
                    </td>
                    <td class="text-right px-4">
                        {{ $item['pesanan_count_total'] }}
                    </td>
                </tr>
            @endif

            @if ($previousKategori !== $item['nama_kategori'] || $previousNamaJasa !== $item['data_jasa']['nama_jasa'])
                <tr>
                    <td class="pl-8">
                        {{ $item['data_jasa']['nama_jasa'] }} (@currency($item['data_jasa']['harga']))
                    </td>
                    <td class="text-right px-4">
                        {{ $item['data_jasa']['pesanan_count'] }}
                    </td>
                </tr>
                @php
                    $previousNamaJasa = $item['data_jasa']['nama_jasa'];
                @endphp
            @endif

            @if ($previousKategori == $item['nama_kategori'] || $previousKategori !== $item['nama_kategori'])
                <tr class="text-sm border-t border-b border-gray-700 font-black">
                    <td class="pl-8">
                        Total
                    </td>
                    <td class="text-right px-4">
                        @currency($item['data_jasa']['total_harga'])
                    </td>
                </tr>
            @endif

            @php
                $previousKategori = $item['nama_kategori'];
            @endphp
        @endforeach

        <tr class="bg-gray-100">
            <th class="pl-4">
                Pendapatan Total
            </th>
            <td class="text-right px-4 font-black">
                @php
                    $total = 0; // Inisialisasi variabel total
                @endphp
                @foreach ($orders as $item)
                    @php
                        $total += $item['data_jasa']['total_harga']; // Menambahkan nilai total_harga pada setiap iterasi
                    @endphp
                @endforeach
                @currency($total)
            </td>
        </tr>
    </tbody>
</table>
@endforeach



        </div>
    </div>
</body>
<div class="fixed bottom-0 w-full ">

    @include('admin.footer-admin')
</div>
<script>
    const btnPrint = document.getElementById('btnPrint');
    btnPrint.addEventListener('click', () => {
      window.print();
    });
  </script>
</html>