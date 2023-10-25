<?php

namespace Database\Seeders;

use App\Models\RawatJalan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RawatJalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RawatJalan::factory(10)->create();
    }
}
