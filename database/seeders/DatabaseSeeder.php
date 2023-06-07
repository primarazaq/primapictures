<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jasa;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'primapictures.admin',
            'password' => bcrypt('1234')
        ]);
        Kategori::create([
            'nama' => 'Wedding',
            'deskripsi' => 'sentuhan artistik dan keindahan visual yang mengabadikan momen pernikahan anda'
        ]);
        Kategori::create([
            'nama' => 'Event',
            'deskripsi' => 'mengabadikan momen berharga dari setiap acara atau kegiatanmu'
        ]);
        Kategori::create([
            'nama' => 'Personal',
            'deskripsi' => 'menangkap esensi diri anda dengan keindahan dan kreativitas yang menawan untuk kebutuhan pribadimu'
        ]);
        Kategori::create([
            'nama' => 'Photo Product',
            'deskripsi' => 'membantu produk anda menjadi sorotan utama dengan visual yang menarik dan profesional'
        ]);
        Kategori::create([
            'nama' => 'Design',
            'deskripsi' => 'menghadirkan konsep dengan estetika visual yang kuat dan memperkuat pesan desainmu melalui gambar yang menarik'
        ]);
        Kategori::create([
            'nama' => 'Editing',
            'deskripsi' => 'menciptakan karya yang mengagumkan  dari foto atau videomu sesuai kebutuhan anda dengan keahlian editing profesional'
        ]);
        Jasa::create([
            'id_kategori' => '1',
            'nama' => 'Paket Prewed + Wedding + Cetak + Frame 16RP',
            'deskripsi' => 'Paket jasa ini akan menyediakan jasa dimulai dari prewedding anda, hingga pada hari akad pernikahan anda. Serta hasil fotonya nanti akan kami cetak juga',
            'harga' => 5000000
        ]);
        Jasa::create([
            'id_kategori' => '1',
            'nama' => 'Paket Prewed Only',
            'deskripsi' => 'Paket jasa ini akan menyediakan jasa hanya untuk prewedding anda saja. anda dapat menghemat biaya hanya dengan preweddingnya saja',
            'harga' => 2500000
        ]);
        Status::create([
            'id' => '1',
            'status' => 'success'
        ]);
        Status::create([
            'id' => '2',
            'status' => 'settlement'
        ]);
        Status::create([
            'id' => '3',
            'status' => 'pending'
        ]);
        Status::create([
            'id' => '4',
            'status' => 'deny'
        ]);
        Status::create([
            'id' => '5',
            'status' => 'cancel'
        ]);
        Status::create([
            'id' => '6',
            'status' => 'expired'
        ]);
    }
}
