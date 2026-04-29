<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/collection', function () {
    return view('collection');
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
