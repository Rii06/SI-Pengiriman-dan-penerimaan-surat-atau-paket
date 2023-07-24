<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('datpengs', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_surat');
            $table->string('tanggal_kirim');
            $table->string('no_surat_kirim');
            $table->string('resi_surat');
            $table->string('nama_pegawai');
            $table->string('kd_pegawai');
            $table->string('divisi');
            $table->string('kepada');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('isi_surat');
            $table->string('ekspedisi');
            $table->string('biaya_kirim');
            $table->string('berat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datpengs');
    }
};
