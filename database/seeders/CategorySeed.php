<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i <= 2; $i++) {
            DB::table('category_products')->insert([
                'title' => 'Loại-'.$i,
                'sub_title' => '',
            ]);
        }

    }
}
