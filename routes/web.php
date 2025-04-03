<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;

Route::resource('promotions', PromotionController::class);
Route::get('/', [PromotionController::class, 'index'])->name('home');
Route::get('/promo-terbaru', [PromotionController::class, 'latest'])->name('promotions.latest');
Route::get('/kategori', [PromotionController::class, 'categories'])->name('promotions.categories');
Route::get('/kategori/{category}', [PromotionController::class, 'category'])->name('promotions.category');
Route::get('/search', [PromotionController::class, 'search'])->name('promotions.search');
Route::get('/kontak', function () {
    return view('contact');
})->name('contact');