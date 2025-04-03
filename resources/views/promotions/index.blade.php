@extends('layouts.app')

@section('title', 'Promo Film Terbaru')

@section('content')
    @if(session('success'))
        <div class="bg-green-600 text-white p-4 rounded-lg mb-6">
            {{ session('success') }}
        </div>
    @endif

    <!-- Promo Terbaru -->
    <section class="mb-12">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold border-l-4 border-red-600 pl-3">PROMO TERBARU</h2>
            <a href="{{ route('promotions.create') }}" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded text-sm font-medium transition">
                <i class="fas fa-plus mr-1"></i> Tambah Promo
            </a>
        </div>
        
        @if($promotions->count() > 0)
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
                @foreach($promotions as $promotion)
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-0 group-hover:opacity-100 transition-opacity rounded-lg z-10"></div>
                        <img src="{{ asset('storage/' . $promotion->image) }}" alt="{{ $promotion->title }}" class="w-full h-64 object-cover rounded-lg group-hover:opacity-75 transition-opacity">
                        <div class="absolute bottom-0 left-0 p-3 z-20 w-full opacity-0 group-hover:opacity-100 transition-opacity">
                            <div class="flex space-x-2 justify-center">
                                <a href="{{ route('promotions.show', $promotion->id) }}" class="bg-white text-black px-3 py-1 rounded-full text-xs font-medium hover:bg-gray-200">
                                    <i class="fas fa-eye mr-1"></i> Detail
                                </a>
                                <a href="{{ route('promotions.edit', $promotion->id) }}" class="bg-yellow-500 text-black px-3 py-1 rounded-full text-xs font-medium hover:bg-yellow-400">
                                    <i class="fas fa-edit mr-1"></i> Edit
                                </a>
                                <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-medium hover:bg-red-600" onclick="return confirm('Apakah Anda yakin ingin menghapus promo ini?')">
                                        <i class="fas fa-trash mr-1"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="mt-2">
                            <h3 class="font-semibold truncate">{{ $promotion->title }}</h3>
                            <div class="flex justify-between items-center text-sm text-gray-400">
                                <span class="bg-gray-700 px-2 py-1 rounded-full text-xs">{{ $promotion->category }}</span>
                                <span><i class="fas fa-calendar-alt mr-1"></i> {{ $promotion->created_at->format('d M Y') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="bg-gray-800 rounded-lg p-8 text-center">
                <i class="fas fa-film text-4xl text-gray-400 mb-4"></i>
                <h3 class="text-xl font-semibold mb-2">Belum ada promo tersedia</h3>
                <p class="text-gray-400">Silahkan tambahkan promo baru</p>
                <a href="{{ route('promotions.create') }}" class="inline-block mt-4 bg-red-600 hover:bg-red-500 px-6 py-2 rounded-lg font-medium transition">
                    <i class="fas fa-plus mr-2"></i> Tambah Promo
                </a>
            </div>
        @endif
    </section>
@endsection