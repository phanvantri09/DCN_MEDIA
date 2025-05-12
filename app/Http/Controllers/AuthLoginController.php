<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AuthLoginController extends Controller
{

    public function logout(Request $request): View|RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function login() : View|RedirectResponse
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->is_admin === 999) {
                return redirect()->route('product.list')->with('info', 'Bạn đã đăng nhập rồi');
            }
            return redirect()->route('index')->with('info', 'Bạn đã đăng nhập rồi');
        }
        return view('login');
    }
    public function loginPost(Request $request): View|RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->is_admin === 999) {
                return redirect()->route('admin.dashboard')->with('success', 'Đăng nhập thành công!');
            } else {
                return redirect()->route('index')->with('success', 'Đăng nhập thành công!');
            }
        }

        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không đúng.',
        ]);
    }
}
