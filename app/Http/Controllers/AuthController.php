<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('index')->with('info','Bạn đã đăng nhập rồi');
        }
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($credentials)) {
            return redirect()->route('product.list')->with('info','Bạn đã đăng nhập rồi');
        } else {
            return redirect()->back()->with('error','Sai thông tin');
        }
    }
}
