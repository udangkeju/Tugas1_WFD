@extends('layouts.app')

@section('title', 'Kategori Promo')

@section('content')
<div class="mb-12">
    <h2 class="text-2xl font-bold border-l-4 border-red-600 pl-3 mb-6">KATEGORI PROMO</h2>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        <a href="{{ route('promotions.category', 'bioskop') }}" class="bg-gray-800 hover:bg-gray-700 rounded-lg p-4 text-center transition">
            <div class="text-red-500 text-3xl mb-2"><i class="fas fa-film"></i></div>
            <h3 class="font-medium">Bioskop</h3>
            <p class="text-sm text-gray-400">{{ $bioskopCount }} Promo</p>
        </a>
        <a href="{{ route('promotions.category', 'streaming') }}" class="bg-gray-800 hover:bg-gray-700 rounded-lg p-4 text-center transition">
            <div class="text-red-500 text-3xl mb-2"><i class="fas fa-tv"></i></div>
            <h3 class="font-medium">Streaming</h3>
            <p class="text-sm text-gray-400">{{ $streamingCount }} Promo</p>
        </a>
        <a href="{{ route('promotions.category', 'voucher') }}" class="bg-gray-800 hover:bg-gray-700 rounded-lg p-4 text-center transition">
            <div class="text-red-500 text-3xl mb-2"><i class="fas fa-ticket-alt"></i></div>
            <h3 class="font-medium">Voucher</h3>
            <p class="text-sm text-gray-400">{{ $voucherCount }} Promo</p>
        </a>
        <a href="{{ route('promotions.category', 'giveaway') }}" class="bg-gray-800 hover:bg-gray-700 rounded-lg p-4 text-center transition">
            <div class="text-red-500 text-3xl mb-2"><i class="fas fa-gift"></i></div>
            <h3 class="font-medium">Giveaway</h3>
            <p class="text-sm text-gray-400">{{ $giveawayCount }} Promo</p>
        </a>
    </div>

    <!-- Promo berdasarkan kategori terpilih -->
    @if(isset($category))
    <div class="mb-6">
        <h3 class="text-xl font-semibold mb-4">Promo {{ ucfirst($category) }}</h3>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            @foreach($categoryPromotions as $promotion)
            <div class="group relative">
                <a href="{{ route('promotions.show', $promotion->id) }}">
                    <img src="{{ asset('images/' . $promotion->image) }}" alt="{{ $promotion->title }}" class="w-full h-40 object-cover rounded-lg">
                    <h4 class="mt-2 text-sm font-medium truncate">{{ $promotion->title }}</h4>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection