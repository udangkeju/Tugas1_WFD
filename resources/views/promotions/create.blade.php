@extends('layouts.app')

@section('title', 'Tambah Promo Baru')

@section('content')
<div class="bg-gray-800 rounded-lg p-6 max-w-3xl mx-auto">
    <h1 class="text-2xl font-bold mb-6 border-b border-gray-700 pb-4">Tambah Promo Baru</h1>
    
    <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-6">
            <label for="title" class="block text-gray-300 font-medium mb-2">Judul Promo</label>
            <input type="text" name="title" id="title" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Contoh: Promo Spesial Akhir Tahun" required>
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="description" class="block text-gray-300 font-medium mb-2">Deskripsi Promo</label>
            <textarea name="description" id="description" rows="6" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500" placeholder="Deskripsi lengkap tentang promo..." required></textarea>
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="category" class="block text-gray-300 font-medium mb-2">Kategori</label>
            <select name="category" id="category" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500">
                <option value="bioskop">Bioskop</option>
                <option value="streaming">Streaming</option>
                <option value="voucher">Voucher</option>
                <option value="giveaway">Giveaway</option>
            </select>
        </div>
        
        <div class="mb-6">
            <label for="image" class="block text-gray-300 font-medium mb-2">Gambar Promo</label>
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-600 border-dashed rounded-lg cursor-pointer bg-gray-700 hover:bg-gray-600 transition">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-3"></i>
                        <p class="mb-2 text-sm text-gray-400">Klik untuk upload gambar</p>
                        <p class="text-xs text-gray-500">PNG, JPG, JPEG (Max. 2MB)</p>
                    </div>
                    <input id="dropzone-file" type="file" name="image" class="hidden" required />
                </label>
            </div>
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="flex justify-end space-x-4">
            <a href="{{ route('promotions.index') }}" class="bg-gray-600 hover:bg-gray-500 px-6 py-2 rounded-lg font-medium transition">
                Batal
            </a>
            <button type="submit" class="bg-red-600 hover:bg-red-500 px-6 py-2 rounded-lg font-medium transition">
                <i class="fas fa-save mr-2"></i> Simpan Promo
            </button>
        </div>
    </form>
</div>
@endsection