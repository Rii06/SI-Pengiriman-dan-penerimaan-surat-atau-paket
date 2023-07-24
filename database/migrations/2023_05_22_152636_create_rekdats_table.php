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
        Schema::create('rekdats', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_surat');
            $table->string('tanggal_terima');
            $table->string('no_surat_terima');
            $table->string('resisi_surat');
            $table->string('kode_pegawai');
            $table->string('nama_pegawai');
            $table->string('divisi');
            $table->string('nama_pengirim');
            $table->string('alamat');
            $table->string('telepon');;
            $table->string('isi_surat');
            $table->string('ekspedisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekdats');
    }
};
