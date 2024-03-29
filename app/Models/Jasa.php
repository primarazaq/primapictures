<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    protected $table = "jasa";
    use HasFactory;

    protected $fillable = [
        'id_kategori',
        'nama',
        'deskripsi',
        'harga',
    ];

    public function jasa()
    {
        return $this->hasOne(jasa::class, 'id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_jasa');
    }
}
