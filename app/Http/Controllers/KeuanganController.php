<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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
}
