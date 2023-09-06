<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('colors')->insert([
                'color' => '赤',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('colors')->insert([
                'color' => '緑',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         DB::table('colors')->insert([
                'color' => 'その他',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
         
    }
}
