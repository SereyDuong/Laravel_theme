<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// home route to about page
Route::get('/about', function () {
    return view('layouts.about');
});

// home route to services page
Route::get('/services', function () {
    return view('layouts.services');
});

// home route to contact page
Route::get('/portfolio', function () {
    return view('layouts.portfolio');
});

// home route to pricing page
Route::get('/pricing', function () {
    return view('layouts.pricing');
});

// home route to blog page
Route::get('/blog', function () {
    return view('layouts.blog');
});

// home route to contact page
Route::get('/contact', function () {
    return view('layouts.contact');
});