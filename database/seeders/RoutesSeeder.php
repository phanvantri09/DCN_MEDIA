<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Router;
use Illuminate\Support\Facades\Route;

class RoutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes = Route::getRoutes();
        foreach ($routes as $route) {
            if (in_array('GET', $route->methods())) {
                Router::create([
                    'url' => $route->uri(),
                ]);
            }
        }
    }
}
