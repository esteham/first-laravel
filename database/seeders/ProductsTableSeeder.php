<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Black Dimond',
            'description' => 'Dimond for heath',
            'price' => 8,
            'stock' => 10,
        ]);
    }
}
