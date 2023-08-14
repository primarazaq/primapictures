<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Jasa;
use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\JadwalController;

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
            $kategori = Kategori::find($id);
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

            return view('descJasa', [
                'kategori' => $kategori,
                'jasa' => $jasa,
                'jasaLow' => $jasaLowest,
                'jasaHigh' => $jasaHighest,
                'id' => $id
            ]);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return view('error', ['errorMessage' => $errorMessage]);
        }
    }



    public function showForm($id)
    {
        $jasa = Kategori::find($id)->jasa;
        $kategori = Kategori::find($id);
        
        // Buat instance JadwalController
        $jadwalController = new JadwalController();

        // Panggil method nonaktifjadwal()
        $jadwal = $jadwalController->nonaktifjadwal();

        return view('formOrder', [
            'jasa' => $jasa,
            'kategori' => $kategori,
            'jadwal' => $jadwal,
            'id' => $id
        ]);
    }

    public function order(Request $request)
    {
        try {
            $jasa = Jasa::find($request->id_jasa)->jasa;
            $kategori = Kategori::find($jasa->id_kategori);
            if ($request->qty) {
                $request['total_harga'] = $request['qty'] * $jasa->harga;
            } else {
                $request['qty'] = 1;
                $request['total_harga'] = $request['qty'] * $jasa->harga;
            }

            if ($request['wilayah'] == 'luar kota') {
                $request['total_harga'] = $request['total_harga'] + 1000000;
            }
            $pesanan = $request->validate([
                'id_jasa' => 'required',
                'nama_plg' => 'required',
                'email_plg' => 'required',
                'hp_plg' => 'required',
                'tgl_acara' => 'required',
                'wilayah' => 'required',
                'lokasi' => 'required',
                'qty' => 'required',
                'total_harga' => 'required'
            ]);

            $id = $jasa->id_kategori;
            $order = Pesanan::create($pesanan);
            $snapToken = $this->snaptoken($order->id);
            $ipAddress = $request->ip();
            Pesanan::where('id', $order->id)->update(['snaptoken' => $snapToken,'ip_address'=> $ipAddress]);
            Transaksi::create([
                'id_pesanan' => $order->id,
                'status' => 7 //    waiting for payment
            ]);

            return view('checkout', compact('id', 'snapToken', 'order', 'jasa', 'kategori'));
        } catch (\Exception $e) {
            return back()->withErrors(['errorOrder' => 'Pesanan anda gagal diproses ! coba lagi !']);
        }
    }


    public function snaptoken($id){
        try{
            $order = Pesanan::find($id);
            $jasaOrder = Jasa::find($order->id_jasa);
            $kategori = Kategori::find($jasaOrder->id_kategori);
            
            // Set your Merchant Server Key
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;


            $params = array(
                'transaction_details' => array(
                    'order_id' => $order->id,
                    'gross_amount' => $order->total_harga,
                ),
                'item_details' => array(
                    array(
                        'id' => $jasaOrder->id,
                        'price' => $jasaOrder->harga,
                        'quantity' => $order->qty,
                        'name' => $jasaOrder->nama,
                        'category' => $kategori->nama,
                    )
                ),
                'customer_details' => array(
                    'first_name' => $order->nama_plg,
                    'last_name' => '',
                    'email' => $order->email_plg,
                    'phone' => $order->hp_plg,
                ),
                'custom_field1' => $order->tgl_acara,
                'custom_field2' => $order->wilayah,
                'custom_field3' => $order->lokasi
            );

            $snapToken = \Midtrans\Snap::getSnapToken($params);

            return $snapToken;
        } catch (\Exception $e) {
            return back()->withErrors(['errorOrder' => 'Pesanan anda gagal diproses ! coba lagi !']);
            }
    }

    public function riwayat(){
        $riwayat = DB::table('pesanan as a')
                    ->select('a.id','b.id as id_transaksi','e.nama as kategori' ,'a.nama_plg','a.email_plg','a.hp_plg','a.tgl_acara','a.wilayah','a.lokasi','a.qty','a.total_harga','b.payment_type','d.status','c.nama','c.harga','b.created_at as tgl_transaksi')
                    ->whereNot('b.status','7')
                    ->join('transaksi as b', 'b.id_pesanan' ,'=', 'a.id')
                    ->join('jasa as c', 'c.id' ,'=', 'a.id_jasa')
                    ->join('status as d', 'd.id' ,'=', 'b.status')
                    ->join('kategori as e', 'e.id' ,'=', 'c.id_kategori')
                    ->orderByDesc('b.created_at')
                    ->get();

        return view('admin.riwayatpesanan', compact('riwayat'));
    }
}
