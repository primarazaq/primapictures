<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\jasa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('order', [
            'kategori' => $kategori
        ]);
    }

    public function show($id)
    {
        try {
            $jasa = Kategori::find($id)->jasa;
            $jasaLowest = DB::table('jasa')
                ->select('nama', 'deskripsi', 'harga')
                ->where('id_kategori', $id)
                ->orderBy('harga', 'asc')->first();
            $jasaHighest = DB::table('jasa')
                ->select('nama', 'deskripsi', 'harga')
                ->where('id_kategori', $id)
                ->orderBy('harga', 'desc')->first();

            if (!$jasa || !$jasaLowest || !$jasaHighest) {
                throw new \Exception('Data tidak ditemukan');
            }


            return view('formOrder', [
                'jasa' => $jasa,
                'jasaLow' => $jasaLowest,
                'jasaHigh' => $jasaHighest
            ]);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return view('error', ['errorMessage' => $errorMessage]);
        }
    }
}
