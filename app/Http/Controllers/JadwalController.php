<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Jasa;
use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function jadwal(){
        $jadwal = DB::table('pesanan as a')
                    ->select('a.id','b.id as id_transaksi','e.nama as kategori' ,'a.nama_plg','a.hp_plg','a.tgl_acara','a.wilayah','a.lokasi','c.nama')
                    ->where('b.status','1')->orWhere('b.status','2')
                    ->join('transaksi as b', 'b.id_pesanan' ,'=', 'a.id')
                    ->join('jasa as c', 'c.id' ,'=', 'a.id_jasa')
                    ->join('status as d', 'd.id' ,'=', 'b.status')
                    ->join('kategori as e', 'e.id' ,'=', 'c.id_kategori')
                    ->orderBy('b.created_at')
                    ->get();

        return view('admin.jadwalpemotretan', compact('jadwal'));
    }

    public function nonaktifjadwal(){
        $jadwal = DB::table('pesanan as a')
        ->select('a.tgl_acara')
        ->where('b.status','1')->orWhere('b.status','2')
        ->join('transaksi as b', 'b.id_pesanan' ,'=', 'a.id')
        ->orderBy('a.tgl_acara')
        ->get();

        return $jadwal;
    }
}
