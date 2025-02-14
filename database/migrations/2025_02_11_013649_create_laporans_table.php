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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengaduan_id');
            $table->unsignedBigInteger('petugas_id');
            $table->string('bukti_laporan');
            $table->longText('deskripsi');
            $table->string('tanggal_selesai');

            $table->foreign('pengaduan_id')->references('id')->on('pengaduans')->onDelete('cascade');
            $table->foreign('petugas_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
