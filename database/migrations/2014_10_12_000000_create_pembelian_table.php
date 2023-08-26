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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('nama_pembeli');
            $table->string('nomor_hp_pembelian');
            $table->integer('total_bayar');
            $table->string('status_bayar');
            $table->string('status_pengiriman');
            $table->string('tanggal_pembelian');
            $table->string('alamat_pengiriman');
            $table->string('tipe_bayaran');
            $table->rememberToken();
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
        Schema::dropIfExists('pembelians');
    }
};
