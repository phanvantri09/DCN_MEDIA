<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function home() : View
    {
        return view('UserSite.home');
    }

    public function shop() : View
    {
        return view('UserSite.shop');
    }

    //     Route::get('/blogs','blogs')->name('blogs');
    //     Route::get('/services','services')->name('services');

    public function blogs(Request $request) : View
    {
        if (empty($request->name)) {
            return view('UserSite.detailBlogs');
        }
        return view('UserSite.blogs');
    }

    public function services(Request $request) : View
    {
        if ($request->type) {

        }
        return view('UserSite.services');
    }
}
