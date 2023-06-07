<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function checkout(Request $request){
        $server_key = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$server_key);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                Transaksi::create([
                    'id_pesanan' => $request->order_id,
                    'status' => 1
                ]);
            }
        }
    }
}
