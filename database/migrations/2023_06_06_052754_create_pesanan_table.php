<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_jasa')->references('id')->on('jasa');
            $table->string('nama_plg');
            $table->string('email_plg');
            $table->string('hp_plg', 12);
            $table->dateTime('tgl_acara');
            $table->string('wilayah');
            $table->text('lokasi');
            $table->integer('qty');
            $table->double('total_harga');
            $table->text('snaptoken')->nullable();
            $table->string('ip_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanan');
    }
};
