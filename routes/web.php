<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\AuthLoginController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Front\ProductController as FrontProductController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;



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
        Route::get('/','home')->name('index');

        Route::get('/shop','shop')->name('shop');

        Route::get('/blogs/{id}','blogsItem')->name('blogsItem');
        Route::get('/blogs','blogs')->name('blogs');
        Route::get('/services','services')->name('services');
    });

    Route::group(['prefix' => 'product', 'as' =>'product.', 'middleware'=>['CheckLoginUser']], function () {
        Route::controller(FrontProductController::class)->group(function () {
            Route::get('/','list')->name('list');
            Route::get('/load-more','loadProducts')->name('load');
        });
    });
    
});

Route::controller(AuthLoginController::class)->group(function () {
    Route::get('/login','login')->name('login');
    Route::post('/login','loginPost')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::group(['prefix' => 'admin', 'middleware'=>['CheckLoginUser']], function () {
    Route::group(['prefix' => 'blog', 'as' =>'blog.'], function () {
        Route::controller(BlogController::class)->group(function () {
            // danh sách
            Route::get('/','list')->name('list');

            // thêm
            Route::get('/add', 'add')->name('add');
            Route::post('/add', 'addPost')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','editPost')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'delete')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
    Route::group(['prefix' => 'product', 'as' =>'product.'], function () {
        Route::controller(AdminProductController::class)->group(function () {
            // danh sách
            Route::get('/','list')->name('list');

            // thêm
            Route::get('/add', 'add')->name('add');
            Route::post('/add', 'addPost')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','editPost')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'delete')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });

    Route::group(['prefix' => 'category', 'as' =>'category.'], function () {
        Route::controller(CategoryController::class)->group(function () {
            // danh sách
            Route::get('/','list')->name('list');

            // thêm
            Route::get('/add', 'add')->name('add');
            Route::post('/add', 'addPost')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','editPost')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'delete')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
});
