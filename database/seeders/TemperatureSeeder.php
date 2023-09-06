<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TemperatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temperatures')->insert([
                'temperature' => '5℃以下',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
         ]);
          DB::table('temperatures')->insert([
                'temperature' => '5℃～10℃',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                
         ]);
    }
}
