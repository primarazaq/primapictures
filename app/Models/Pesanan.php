<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pesanan extends Model
{
    protected $table = "pesanan";
    use HasFactory;

    protected $fillable = [
        'id_jasa',
        'nama_plg',
        'email_plg',
        'hp_plg',
        'tgl_acara',
        'wilayah',
        'lokasi',
        'qty',
        'total_harga',
        'snaptoken',
        'ip_address',
    ];

    public function transaksi() {
        return $this->belongsTo(Transaksi::class, 'id_pesanan');
    }
    
}
