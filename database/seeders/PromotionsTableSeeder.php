<?php

// database/seeders/PromotionsTableSeeder.php
use App\Models\Promotion;
use Illuminate\Database\Seeder;

class PromotionsTableSeeder extends Seeder
{
    public function run()
    {
        Promotion::create([
            'title' => 'Promo Spesial Akhir Tahun',
            'description' => 'Diskon hingga 50% untuk semua produk pilihan',
            'image' => 'promo1.jpg'
        ]);
        
        // Tambahkan lebih banyak data dummy
    }
}