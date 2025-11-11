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
        Schema::table('visits', function (Blueprint $table) {
            /**
             * Hapus FK lama
             * 
             * Analogi 1: Saat kita menghapus seorang pasien, kita tidak ingin
             * secara otomatis menghapus semua kunjungan terkait (visits).
             * 
             * Analogi 2: "Petugas, tolong gunting dulu tali pengikat antara pasien dan kunjungan,
             * supaya saat pasien dihapus, kunjungan tetap aman dan tidak ikut terhapus."
             */
            $table->dropForeign(['patient_id']);

            /**
             * Tambah FK baru tanpa aksi cascade on delete
             * 
             * Analogi: "Sekarang tali pengikatnya sudah terputus, jadi
             * kalau pasien dihapus, kunjungan tetap aman."
             */
            $table->foreign('patient_id')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('visits', function (Blueprint $table) {
            // Kembalikan perubahan jika perlu
            $table->dropForeign(['patient_id']);

            // Cascade on delete seperti semula
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }
};
