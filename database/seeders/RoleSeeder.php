<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert admin role
        DB::table("roles")->insert([
            'id' => 0,
            'nombre' => "admin"
        ]);
        // Insert admision role
        DB::table("roles")->insert([
            'id' => 1,
            'nombre' => "admision"
        ]);
        // Insert profesor role
        DB::table("roles")->insert([
            'id' => 2,
            'nombre' => "profesor"
        ]);
        // Insert estudiante role
        DB::table("roles")->insert([
            'id' => 3,
            'nombre' => "estudiante"
        ]);
    }
}
