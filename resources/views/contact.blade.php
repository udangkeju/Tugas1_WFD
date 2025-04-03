@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<div class="bg-gray-800 rounded-lg p-6 max-w-4xl mx-auto">
    <h1 class="text-2xl font-bold mb-6 border-b border-gray-700 pb-4">Hubungi Kami</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h3 class="text-xl font-semibold mb-4">Informasi Kontak</h3>
            <div class="space-y-4">
                <div class="flex items-start space-x-3">
                    <i class="fas fa-map-marker-alt text-red-500 mt-1"></i>
                    <div>
                        <h4 class="font-medium">Alamat</h4>
                        <p class="text-gray-400 text-sm">Jl. Contoh No. 123, Jakarta, Indonesia</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <i class="fas fa-envelope text-red-500 mt-1"></i>
                    <div>
                        <h4 class="font-medium">Email</h4>
                        <p class="text-gray-400 text-sm">info@promofilm.com</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <i class="fas fa-phone-alt text-red-500 mt-1"></i>
                    <div>
                        <h4 class="font-medium">Telepon</h4>
                        <p class="text-gray-400 text-sm">+62 123 4567 890</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-8">
                <h3 class="text-xl font-semibold mb-4">Sosial Media</h3>
                <div class="flex space-x-4">
                    <a href="https://facebook.com/promofilm" class="bg-gray-700 hover:bg-blue-600 w-10 h-10 rounded-full flex items-center justify-center transition">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/promofilm" class="bg-gray-700 hover:bg-blue-400 w-10 h-10 rounded-full flex items-center justify-center transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://instagram.com/promofilm" class="bg-gray-700 hover:bg-pink-600 w-10 h-10 rounded-full flex items-center justify-center transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div>
            <h3 class="text-xl font-semibold mb-4">Kirim Pesan</h3>
            <form>
                <div class="mb-4">
                    <label for="name" class="block text-gray-300 text-sm mb-2">Nama Lengkap</label>
                    <input type="text" id="name" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-300 text-sm mb-2">Email</label>
                    <input type="email" id="email" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-300 text-sm mb-2">Pesan</label>
                    <textarea id="message" rows="4" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500"></textarea>
                </div>
                <button type="submit" class="bg-red-600 hover:bg-red-500 px-6 py-2 rounded-lg font-medium transition w-full">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection