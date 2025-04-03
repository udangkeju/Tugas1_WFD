<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;

Route::resource('promotions', PromotionController::class);
Route::get('/', [PromotionController::class, 'index'])->name('home');
Route::get('/promo-terbaru', [PromotionController::class, 'latest'])->name('promotions.latest');
Route::get('/search', [PromotionController::class, 'search'])->name('promotions.search');
Route::get('/kontak', function () {
    return view('contact');
})->name('contact');
// Halaman kategori statis
Route::get('/kategori', function () {
    return view('kategori');
})->name('kategori');