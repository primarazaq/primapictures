<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Carbon;

class KeuanganController extends Controller
{
    public function index(){
        
        $Day = DB::table('pesanan as a')
        ->select(DB::raw('COALESCE(SUM(a.total_harga), 0)as pendapatan'))
        ->join('transaksi as b', 'b.id_pesanan', '=', 'a.id')
        ->where(function ($query) {
            $today = Carbon::today()->toDateString();
            $query->whereDate('b.created_at', $today);
        })
        ->where(function ($query) {
            $query->where('b.status', '1')
                  ->orWhere('b.status', '2');
        })
        ->first();

        $Month = DB::table('pesanan as a')
        ->select(DB::raw('COALESCE(SUM(a.total_harga), 0)as pendapatan'))
        ->join('transaksi as b', 'b.id_pesanan', '=', 'a.id')
        ->whereMonth('b.created_at', Carbon::now()->month)
        ->where(function ($query) {
            $query->where('b.status', '1')
                  ->orWhere('b.status', '2');
        })
        ->first();

        $Year = DB::table('pesanan as a')
        ->select(DB::raw('COALESCE(SUM(a.total_harga), 0)as pendapatan'))
        ->join('transaksi as b', 'b.id_pesanan', '=', 'a.id')
        ->whereYear('b.created_at', Carbon::now()->year)
        ->where(function ($query) {
            $query->where('b.status', '1')
                  ->orWhere('b.status', '2');
        })
        ->first();

        $Total = DB::table('pesanan as a')
                    ->select(DB::raw('COALESCE(SUM(a.total_harga), 0) as pendapatan'))
                    ->where('b.status','1')->orWhere('b.status','2')
                    ->join('transaksi as b', 'b.id_pesanan' ,'=', 'a.id')
                    ->first();
        
        return view('admin.dashboard', compact('Day','Month','Year','Total'));
    }

    function cetak(){
        $ordersCountByMonth = DB::table('pesanan as a')
    ->select('kategori.nama as nama_kategori', 'jasa.nama as nama_jasa', 'jasa.harga', DB::raw('MONTH(b.created_at) as bulan'), DB::raw('COUNT(*) as pesanan_count'), DB::raw('SUM(jasa.harga) as total_harga_jasa'))
    ->join('transaksi as b', 'b.id_pesanan', '=', 'a.id')
    ->join('jasa', 'jasa.id', '=', 'a.id_jasa')
    ->join('kategori', 'kategori.id', '=', 'jasa.id_kategori')
    ->where(function ($query) {
        $query->where('b.status', '1')
            ->orWhere('b.status', '2');
    })
    ->groupBy('nama_kategori', 'nama_jasa', 'harga', 'bulan')
    ->orderBy('kategori.id')
    ->get();

    $ordersByMonthAndCategory = collect();

    foreach ($ordersCountByMonth as $order) {
        $month = Carbon::createFromDate(null, $order->bulan, null)->format('F');
        $category = $order->nama_kategori;
        $serviceName = $order->nama_jasa;
        $servicePrice = $order->harga;
        $pesananCount = $order->pesanan_count;
        $totalHargaJasa = $order->total_harga_jasa;

        // Menambahkan total harga di dalam kategori
        $totalHarga = $totalHargaJasa;
        $totalHargaByCategory = $ordersByMonthAndCategory
            ->where('bulan', $month)
            ->where('nama_kategori', $category)
            ->pluck('total_harga')
            ->first();
        $totalHarga += $totalHargaByCategory ?? 0;

        // Menambahkan jumlah pesanan di dalam data jasa
        $data = [
            'nama_jasa' => $serviceName,
            'harga' => $servicePrice,
            'pesanan_count' => $pesananCount,
            'total_harga' => $totalHarga,
        ];

        $categoryData = [
            'nama_kategori' => $category,
            'bulan' => $month,
            'data_jasa' => $data,
        ];

        $ordersByMonthAndCategory->push($categoryData);
    }

    // Menambahkan pesanan_count_total untuk setiap kategori
    $ordersByMonthAndCategory = $ordersByMonthAndCategory->map(function ($categoryData) use ($ordersByMonthAndCategory) {
        $category = $categoryData['nama_kategori'];
        $pesananCountTotal = $ordersByMonthAndCategory->where('nama_kategori', $category)->sum('data_jasa.pesanan_count');
        $categoryData['pesanan_count_total'] = $pesananCountTotal;
        return $categoryData;
    });

        // dd($ordersByMonthAndCategory);
            return view('admin.cetak', compact('ordersByMonthAndCategory'));
        }
}
