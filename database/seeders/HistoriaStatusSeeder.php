<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HistoriaStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('historia_statuses')->insert([
            'id' => 0,
            'status' => 'Abierta'
        ]);
        DB::table('historia_statuses')->insert([
            'id' => 1,
            'status' => 'En espera'
        ]);
        DB::table('historia_statuses')->insert([
            'id' => 2,
            'status' => 'Cerrada'
        ]);
    }
}
