<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 *
 */
class RawatJalanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // $table->bigIncrements('id_rawat_jalan');
            // $table->date('tgl_konsul');
            // $table->time('waktu_konsul1');
            // $table->time('waktu_konsul2');
            // $table->string('pasien', 255);
            // $table->integer('no_bpjs');
            // $table->enum('poli', ['p_gigi', 'p_umum']);
            // $table->enum('dokter', ['vaniautami', 'pitoyo']);
            // $table->enum('status', ['selesai', 'registrasi', '-']);
            // $table->datetime('waktu_status');
            // $table->timestamps(); // Tambahkan kolom created_at dan updated_at
            "id_rawat_jalan"=> fake()->numberBetween(1, 10),
            "tgl_konsul"=> fake()->date(),
            "waktu_konsul1"=> fake()->time(),
            "waktu_konsul2"=> fake()->time(),
            "pasien"=> fake()->name(),
            "no_bpjs"=> fake()->numberBetween(1, 10),
            "poli"=> fake()->randomElement(['p_gigi', 'p_umum']),
            "dokter"=> fake()->randomElement(['vaniautami', 'pitoyo']),
            "status"=> fake()->randomElement(['selesai', 'registrasi', '-']),
            "waktu_status"=> fake()->date()
        ];
    }
}
