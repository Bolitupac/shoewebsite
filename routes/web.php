<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

// ─── Public routes ───────────────────────────────────────────────
Route::get('/', function () {
    $products = Product::all()->toArray();
    $latestProducts = Product::orderByDesc('created_at')->take(4)->get()->toArray();
    return view('welcome', compact('products', 'latestProducts'));
})->name('home');

Route::get('/collection', function () {
    $query = Product::query();

    if (request()->has('tags')) {
        $tags = explode(',', request('tags'));
        $query->where(function ($q) use ($tags) {
            foreach ($tags as $tag) {
                // Check in category array
                $q->orWhereJsonContains('category', $tag)
                  // Check in colour
                  ->orWhere('colour', 'ilike', '%' . $tag . '%')
                  // Check in section
                  ->orWhere('section', 'ilike', '%' . $tag . '%');
            }
        });
    }

    $products = $query->get()->toArray();
    return view('collection', compact('products'));
})->name('collection');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/academy', function () {
    return view('academy');
})->name('academy');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/checkout/success', function () {
    return view('checkout-success');
})->name('checkout.success');

// ─── Admin auth ──────────────────────────────────────────────────
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// ─── Admin protected routes ──────────────────────────────────────
Route::middleware(\App\Http\Middleware\AdminAuth::class)->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/products', [ProductController::class, 'index'])->name('admin.products');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::patch('/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});
