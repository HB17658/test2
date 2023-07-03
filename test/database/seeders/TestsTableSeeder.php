<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tests')->insert([
            'user_name' => 'あほ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tests')->insert([
            'user_name' => 'ばか',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('tests')->insert([
            'user_name' => 'ぼけ',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
