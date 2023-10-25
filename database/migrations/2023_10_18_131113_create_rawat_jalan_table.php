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
            Schema::create('rawat_jalan', function (Blueprint $table) {
                $table->bigIncrements('id_rawat_jalan');
                $table->date('tgl_konsul');
                $table->time('waktu_konsul1');
                $table->time('waktu_konsul2');
                $table->string('pasien', 255);
                $table->integer('no_bpjs');
                $table->enum('poli', ['p_gigi', 'p_umum']);
                $table->enum('dokter', ['vaniautami', 'pitoyo']);
                $table->enum('status', ['selesai', 'registrasi', '-']);
                $table->datetime('waktu_status');
                $table->timestamps(); // Tambahkan kolom created_at dan updated_at
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rawat_jalan');
    }
};
