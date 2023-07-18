<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view('admin.kelolajasa', compact('kategori'));
    }

    public function show($id){
        $jasa = Kategori::find($id)->jasa;
        $id_kategori = $id;
        $kategori = Kategori::find($id);
        return view('admin.detailjasa', compact('jasa', 'id_kategori', 'kategori'));
    }

    public function store(Request $request){
        
        $jasa = $request->validate([
            'id_kategori' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required'
        ]);
        $id = $jasa['id_kategori'];
        Jasa::create($jasa);

        return redirect('/admin/kelolajasa/'.$id)->with('success', 'Jasa berhasil disimpan');
    }

    public function update(Request $request){
        $jasa = $request->validate([
            'id_kategori' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required'
        ]);
        $id = $request['id'];
        Jasa::where('id', $id)->update($jasa);

        return redirect('/admin/kelolajasa/'.$jasa['id_kategori'])->with('success', 'Jasa berhasil diperbaharui');
    }

    public function destroy($id){
        $jasa = Jasa::find($id);
        $kategori = $jasa['id_kategori'];
        Jasa::where('id', $id)->delete();

        return redirect('/admin/kelolajasa/'.$kategori)->with('success', 'Jasa berhasil dihapus');
    }
}
