<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoutesSeeder::class,
            CreateProduct::class,
            CategorySeed::class, // Giữ nguyên nếu file là CategorySeed.php
            UserSeeder::class,
        ]);
    }
}
