<?php

use Illuminate\Support\Facades\Route;

function getProducts() {
    $path = storage_path('app/products.json');
    if (!file_exists($path)) {
        return [];
    }
    return json_decode(file_get_contents($path), true) ?? [];
}

Route::get('/', function () {
    $products = getProducts();
    // Get the latest 4 products that are newly added or have specific badges
    $latestProducts = collect($products)->reverse()->take(4)->all();
    return view('welcome', compact('products', 'latestProducts'));
})->name('home');

Route::get('/collection', function () {
    $products = getProducts();
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

