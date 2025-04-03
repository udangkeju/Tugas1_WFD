<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
Route::get('/promo-terbaru', [PromotionController::class, 'latest'])->name('promotions.latest');
Route::get('/kategori', [PromotionController::class, 'categories'])->name('promotions.categories');
Route::get('/kategori/{category}', [PromotionController::class, 'category'])->name('promotions.category');
Route::get('/search', [PromotionController::class, 'search'])->name('promotions.search');
Route::get('/kontak', function () {
    return view('contact');
})->name('contact');