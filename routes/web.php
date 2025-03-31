<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => '/'], function () {
    Route::controller(HomeController::class)->group(function () {
        // danh sách
        Route::get('/','home')->name('home');

        Route::get('/contact','contact')->name('contact');
        Route::post('/contactPost','contactPost')->name('contactPost');

        Route::get('/blogs/{id}','blogsItem')->name('blogsItem');
        Route::get('/blogs','blogs')->name('blogs');
        Route::get('/tracks','tracks')->name('tracks');
    });
});
