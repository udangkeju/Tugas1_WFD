@extends('layouts.app')

@section('title', 'Hasil Pencarian')

@section('content')
<div class="mb-12">
    <h2 class="text-2xl font-bold border-l-4 border-red-600 pl-3 mb-6">HASIL PENCARIAN: "{{ $query }}"</h2>
    
    @if($promotions->count() > 0)
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
        @foreach($promotions as $promotion)
        <div class="group relative">
            <a href="{{ route('promotions.show', $promotion->id) }}">
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition-opacity rounded-lg z-10"></div>
                <img src="{{ asset('images/' . $promotion->image) }}" alt="{{ $promotion->title }}" class="w-full h-64 object-cover rounded-lg group-hover:opacity-75 transition-opacity">
                <div class="mt-2">
                    <h3 class="font-semibold truncate">{{ $promotion->title }}</h3>
                    <div class="flex items-center text-sm text-gray-400">
                        <span><i class="fas fa-calendar-alt mr-1"></i> {{ $promotion->created_at->format('d M Y') }}</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    @else
    <div class="bg-gray-800 rounded-lg p-8 text-center">
        <i class="fas fa-search text-4xl text-gray-400 mb-4"></i>
        <h3 class="text-xl font-semibold mb-2">Tidak ada hasil ditemukan</h3>
        <p class="text-gray-400">Coba dengan kata kunci yang berbeda</p>
    </div>
    @endif
</div>
@endsection