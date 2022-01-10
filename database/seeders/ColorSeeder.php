<?php

namespace Database\Seeders;

use App\Imports\ColorsImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new ColorsImport, base_path('database/seeders/data/COLORES.xlsx'));
    }
}
