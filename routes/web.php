<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;

// ─── Public routes ───────────────────────────────────────────────
Route::get('/', function () {
    $products = Product::all()->toArray();
    $latestProducts = Product::orderByDesc('created_at')->take(7)->get()->toArray();
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

    $products = $query->get();

    $makeSection = function (string $key, string $label, string $title, callable $filter) use ($products) {
        $items = $products->filter($filter)->values();

        return [
            'key' => $key,
            'label' => $label,
            'title' => $title,
            'products' => $items,
        ];
    };

    $sections = collect([
        $makeSection('one-of-one', 'limited edition', 'Rare Pairs.', fn ($product) => !empty($product->limited_edition)),
        $makeSection('fresh-drop', 'fresh drop', 'Fresh Drop.', fn ($product) => empty($product->limited_edition) && $product->created_at && $product->created_at->gt(now()->subDays(21))),
        $makeSection('oxfords', 'shoe type', 'Oxford Rotation.', fn ($product) => in_array('Oxford', (array) $product->category, true)),
        $makeSection('brogues', 'shoe type', 'Brogue Collection.', fn ($product) => in_array('Brogue', (array) $product->category, true)),
        $makeSection('derbys', 'shoe type', 'Derby Range.', fn ($product) => in_array('Derby', (array) $product->category, true)),
        $makeSection('loafers', 'shoe type', 'Loafer Lineup.', fn ($product) => in_array('Loafer', (array) $product->category, true) || in_array('Penny Loafer', (array) $product->category, true) || in_array('Tassel Loafer', (array) $product->category, true) || in_array('Fringed Loafer', (array) $product->category, true)),
        $makeSection('monk-straps', 'shoe type', 'Monk Strap Styles.', fn ($product) => in_array('Monk Strap', (array) $product->category, true)),
        $makeSection('boots', 'shoe type', 'Boot Collection.', fn ($product) => in_array('Chelsea Boot', (array) $product->category, true) || in_array('Chukka Boot', (array) $product->category, true) || in_array('Country Boot', (array) $product->category, true)),
        $makeSection('sneakers', 'shoe type', 'Sneakers & Trainers.', fn ($product) => in_array('Sneaker', (array) $product->category, true) || in_array('Trainer', (array) $product->category, true)),
        $makeSection('bags', 'bags', 'Bags.', fn ($product) => in_array('Bags', (array) $product->category, true)),
        $makeSection('wallets', 'wallets', 'Wallets.', fn ($product) => in_array('Wallets', (array) $product->category, true)),
        $makeSection('belts', 'belts', 'Belts.', fn ($product) => in_array('Belts', (array) $product->category, true)),
        $makeSection('accessories', 'accessories', 'Accessories.', fn ($product) => in_array('Accessories', (array) $product->category, true)),
    ])->filter(fn ($section) => $section['products']->isNotEmpty())->values();

    return view('collection', [
        'products' => $products->toArray(),
        'sections' => $sections,
    ]);
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

Route::post('/checkout/order', [CheckoutController::class, 'store'])->name('checkout.order');
Route::get('/checkout/success/{order:order_number}', [CheckoutController::class, 'success'])->name('checkout.success');

// ─── Admin auth ──────────────────────────────────────────────────
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// ─── Admin protected routes ──────────────────────────────────────
Route::middleware(\App\Http\Middleware\AdminAuth::class)->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/products', [ProductController::class, 'index'])->name('admin.products');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::patch('/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});
