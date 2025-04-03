@extends('layouts.app')

@section('title', $promotion->title)

@section('content')
<div class="flex flex-col md:flex-row gap-8">
    <!-- Main Content -->
    <div class="md:w-2/3">
        <div class="bg-gray-800 rounded-lg overflow-hidden">
            <!-- Perbaikan bagian gambar -->
            @if($promotion->image)
                <img src="{{ asset('storage/' . $promotion->image) }}" alt="{{ $promotion->title }}" 
                     class="w-full h-96 object-cover">
            @else
                <div class="w-full h-96 bg-gray-700 flex items-center justify-center">
                    <i class="fas fa-image text-5xl text-gray-500"></i>
                </div>
            @endif
            
            <div class="p-6">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-2xl md:text-3xl font-bold">{{ $promotion->title }}</h1>
                    <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm">
                        {{ $promotion->created_at->diffForHumans() }}
                    </span>
                </div>
                
                <!-- Konten lainnya tetap sama -->
                ...
            </div>
        </div>
    </div>
                <div class="flex items-center space-x-4 mb-6">
                    <span class="text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </span>
                    <span class="text-gray-400">4.5/5.0</span>
                </div>
                
                <div class="prose prose-invert max-w-none">
                    <p class="text-gray-300">{{ $promotion->description }}</p>
                </div>
                
                <div class="mt-8 pt-6 border-t border-gray-700">
                    <h3 class="text-xl font-semibold mb-4">Syarat & Ketentuan</h3>
                    <ul class="list-disc list-inside text-gray-300 space-y-2">
                        <li>Promo berlaku hingga 31 Desember 2023</li>
                        <li>Minimal pembelian 2 tiket</li>
                        <li>Tidak bisa digabung dengan promo lain</li>
                        <li>Hanya berlaku di bioskop terpilih</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Sidebar -->
    <div class="md:w-1/3">
        <div class="bg-gray-800 rounded-lg p-6 mb-6">
            <h3 class="text-xl font-semibold mb-4">Klaim Promo</h3>
            <button class="w-full bg-red-600 hover:bg-red-700 py-3 rounded font-medium mb-4 transition">
                <i class="fas fa-ticket-alt mr-2"></i> Dapatkan Kode Voucher
            </button>
            <button class="w-full bg-blue-600 hover:bg-blue-700 py-3 rounded font-medium transition">
                <i class="fas fa-share-alt mr-2"></i> Bagikan Promo
            </button>
        </div>
        
        <!-- Ganti bagian related promotions dengan info tambahan -->
        <div class="bg-gray-800 rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4">Info Promo</h3>
            <div class="space-y-4">
                <div class="flex items-start space-x-3">
                    <i class="fas fa-calendar-alt text-red-500 mt-1"></i>
                    <div>
                        <h4 class="font-medium">Masa Berlaku</h4>
                        <p class="text-sm text-gray-400">1 November - 31 Desember 2023</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <i class="fas fa-map-marker-alt text-red-500 mt-1"></i>
                    <div>
                        <h4 class="font-medium">Lokasi</h4>
                        <p class="text-sm text-gray-400">Bioskop seluruh Indonesia</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <i class="fas fa-info-circle text-red-500 mt-1"></i>
                    <div>
                        <h4 class="font-medium">Syarat</h4>
                        <p class="text-sm text-gray-400">Minimal pembelian 2 tiket</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection