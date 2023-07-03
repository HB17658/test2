<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Test2sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tests')->insert([
            'user_age' => 1200,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tests')->insert([
            'user_age' => 500,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tests')->insert([
            'user_age' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
