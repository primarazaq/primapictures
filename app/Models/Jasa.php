<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    protected $table = "jasa";
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_jasa');
    }
}
