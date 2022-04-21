<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class protypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('protypes')->insert([
            [
                'Type_Name' => 'Điện Thoại'
            ],
            [
                'Type_Name' => 'Laptop'
            ],
            [
                'Type_Name' => 'Tivi'
            ],
            [
                'Type_Name' => 'Tai Nghe'
            ],
            [
                'Type_Name' => 'Loa'
            ],
        ]);
    }
}
