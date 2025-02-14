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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('masyarakat_id');
            $table->string('judul_masalah');
            $table->longText('deskripsi')->nullable();
            $table->enum('prioritas', ['Rendah', 'Sedang', 'Tinggi'])->default('Rendah');
            $table->unsignedBigInteger('kategori_id');
            $table->string('bukti');
            $table->string('lokasi');
            $table->enum('status', ['Baru', 'Proses', 'Selesai']);

            $table->foreign('masyarakat_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori_pengaduans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
