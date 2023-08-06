<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Kategori;
use App\Models\Jasa;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function checkout(Request $request)
    {
        try {
            $server_key = config('midtrans.server_key');
            $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$server_key);
            if ($hashed == $request->signature_key) {
                switch ($request->transaction_status) {
                    case 'capture':
                        Transaksi::where('id_pesanan', $request->order_id)->update([
                            'status' => 1,
                            'payment_type' => $request->payment_type
                        ]);
                        break;
                    case 'settlement':
                        Transaksi::where('id_pesanan', $request->order_id)->update([
                            'status' => 2,
                            'payment_type' => $request->payment_type
                        ]);
                        break;
                    case 'pending':
                        Transaksi::where('id_pesanan', $request->order_id)->update([
                            'status' => 3,
                            'payment_type' => $request->payment_type
                        ]);
                        break;
                    case 'deny':
                        Transaksi::where('id_pesanan', $request->order_id)->update([
                            'status' => 4,
                            'payment_type' => $request->payment_type
                        ]);
                        break;
                    case 'cancel':
                        Transaksi::where('id_pesanan', $request->order_id)->update([
                            'status' => 5,
                            'payment_type' => $request->payment_type
                        ]);
                        break;
                    case 'expired':
                        Transaksi::where('id_pesanan', $request->order_id)->update([
                            'status' => 6,
                            'payment_type' => $request->payment_type
                        ]);
                        break;
                }
            } else {
                throw new \Exception('Signature key tidak valid.');
            }
        } catch (\Exception $e) {
            return redirect('/status-transaksi/'.$request->order_id);
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
