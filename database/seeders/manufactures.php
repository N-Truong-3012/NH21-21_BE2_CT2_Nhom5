<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class manufactures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manufactures')->insert([
            [
                'Manu_Name' => 'Apple'
            ],
            [
                'Manu_Name' => 'Oppo'
            ],
            [
                'Manu_Name' => 'Samsung'
            ],
            [
                'Manu_Name' => 'Asus'
            ],
            [
                'Manu_Name' => 'Acer'
            ],
            [
                'Manu_Name' => 'HP'
            ],
            [
                'Manu_Name' => 'LG'
            ],
            [
                'Manu_Name' => 'Sony'
            ],
            [
                'Manu_Name' => 'JBL'
            ],
            [
                'Manu_Name' => 'Xiaomi'
            ],
        ]);
    }
}
