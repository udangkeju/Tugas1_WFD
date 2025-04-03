@extends('layouts.app')

@section('title', $promotion->title)

@section('content')
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Main Content -->
        <div class="md:w-2/3">
            <div class="bg-gray-800 rounded-lg overflow-hidden">
                <img src="{{ asset('images/' . $promotion->image) }}" alt="{{ $promotion->title }}" class="w-full h-96 object-cover">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h1 class="text-2xl md:text-3xl font-bold">{{ $promotion->title }}</h1>
                        <span class="bg-red-600 text-white px-3 py-1 rounded-full text-sm">{{ $promotion->created_at->diffForHumans() }}</span>
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
            
            <div class="bg-gray-800 rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Promo Lainnya</h3>
                <div class="space-y-4">
                    @foreach($relatedPromotions as $related)
                        <a href="{{ route('promotions.show', $related->id) }}" class="flex items-center space-x-3 group">
                            <img src="{{ asset('images/' . $related->image) }}" alt="{{ $related->title }}" class="w-16 h-16 object-cover rounded">
                            <div>
                                <h4 class="font-medium group-hover:text-red-500 transition">{{ $related->title }}</h4>
                                <span class="text-sm text-gray-400">{{ $related->created_at->format('d M Y') }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection