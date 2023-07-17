<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view('admin.kelolajasa', compact('kategori'));
    }

    public function show($id){
        $jasa = Kategori::find($id)->jasa;
        return view('admin.detailjasa', compact('jasa'));
    }
}
