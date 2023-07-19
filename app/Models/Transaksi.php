<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    use HasFactory;

    protected $fillable = [
        'id_pesanan',
        'status',
    ];

    public function pesanan(){
        return $this->belongsTo(Pesanan::class);
    }
}
