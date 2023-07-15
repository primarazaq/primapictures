<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Kategori;
use App\Models\Jasa;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function checkout(Request $request){
        $server_key = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$server_key);
        if ($hashed == $request->signature_key) {
            switch ($request->transaction_status) {
                case 'capture':
                    Transaksi::where('id_pesanan', $request->order_id)->update([
                        'status' => 1
                    ]);
                    break;
                case 'settlement':
                    Transaksi::where('id_pesanan', $request->order_id)->update([
                        'status' => 2
                    ]);
                    break;
                case 'pending':
                    Transaksi::where('id_pesanan', $request->order_id)->update([
                        'status' => 3
                    ]);
                    break;
                case 'deny':
                    Transaksi::where('id_pesanan', $request->order_id)->update([
                        'status' => 4
                    ]);
                    break;
                case 'cancel':
                    Transaksi::where('id_pesanan', $request->order_id)->update([
                        'status' => 5
                    ]);
                    break;
                case 'expired':
                    Transaksi::where('id_pesanan', $request->order_id)->update([
                        'status' => 6
                    ]);
                    break;
                
            }
        }
    }

    public function statustransaksi($id){
        $transaksi = Transaksi::where('id_pesanan',$id)->first();
        return view('statustransaksi', compact('transaksi'));
    }

    public function pending($order_id){
        $order = Pesanan::find($order_id);
        $snapToken = $order->snaptoken;
        $jasa = Jasa::find($order->id_jasa);
        $kategori = Kategori::find($jasa->id_kategori);
        return view('checkout', compact('snapToken', 'order', 'jasa', 'kategori'));
    }
}
