<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();
        
        // Check if user is admin (role 1)
        if ($role === 'admin' && $user->is_admin !== 1) {
            return redirect()->route('index')->with('error', 'Bạn không có quyền truy cập trang này.');
        }
        
        // Check if user is regular user (role 2)
        if ($role === 'user' && $user->is_admin !== 2) {
            return redirect()->route('admin.dashboard')->with('error', 'Bạn không có quyền truy cập trang này.');
        }

        return $next($request);
    }
} 