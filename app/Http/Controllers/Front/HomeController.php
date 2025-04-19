<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home() : View
    {
        return view('front.layout.home');
    }

    public function blogs(Request $request) : View
    {
        if (empty($request->name)) {
            return view('front.blog.detail');
        }
        return view('front.blog.index');
    }

    public function services(Request $request) : View
    {
        if ($request->type) {

        }
        return view('UserSite.services');
    }
}
