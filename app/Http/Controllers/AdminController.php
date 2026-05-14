<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private const ADMIN_PASSWORD = 'nelson2024';

    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate(['password' => 'required']);

        if ($request->password === self::ADMIN_PASSWORD) {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['password' => 'Incorrect password.']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        $totalProducts = Product::count();
        $sections = Product::selectRaw('section, count(*) as count')
            ->groupBy('section')
            ->pluck('count', 'section');
        $hiddenCount = Product::where('hidden', true)->count();
        $recentProducts = Product::latest()->take(5)->get();

        return view('admin.dashboard', compact('totalProducts', 'sections', 'hiddenCount', 'recentProducts'));
    }
}
