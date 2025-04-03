<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PromoFilm - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-gray-100">
    <!-- Navbar -->
    <nav class="bg-black py-4 border-b border-gray-800 sticky top-0 z-50">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between">
            <div class="flex items-center space-x-4 mb-4 md:mb-0">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-red-600">PROMOFILM</a>
                <div class="hidden md:flex space-x-6">
                    <a href="{{ route('promotions.index') }}" class="hover:text-red-500">Beranda</a>
                    <a href="{{ route('promotions.latest') }}" class="hover:text-red-500">Promo Terbaru</a>
                    <a href="{{ route('promotions.categories') }}" class="hover:text-red-500">Kategori</a>
                    <a href="{{ route('contact') }}" class="hover:text-red-500">Kontak</a>
                </div>
            </div>
            
            <div class="w-full md:w-auto flex items-center space-x-4">
                <form action="{{ route('promotions.search') }}" method="GET" class="relative w-full md:w-64">
                    <input type="text" name="query" placeholder="Cari promo..." class="bg-gray-800 rounded-full py-2 px-4 w-full text-sm focus:outline-none focus:ring-2 focus:ring-red-500">
                    <button type="submit" class="absolute right-3 top-2 text-gray-400">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <a href="{{ route('promotions.create') }}" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded text-sm font-medium transition">
                    <i class="fas fa-plus mr-1"></i> Tambah Promo
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-black border-t border-gray-800 py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold text-red-600 mb-4">PROMOFILM</h3>
                    <p class="text-gray-400 text-sm">Situs promo film terbesar di Indonesia. Temukan promo bioskop dan streaming terbaik di sini.</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Menu</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('promotions.index') }}" class="text-gray-400 hover:text-red-500 text-sm">Beranda</a></li>
                        <li><a href="{{ route('promotions.latest') }}" class="text-gray-400 hover:text-red-500 text-sm">Promo Terbaru</a></li>
                        <li><a href="{{ route('promotions.categories') }}" class="text-gray-400 hover:text-red-500 text-sm">Kategori</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-red-500 text-sm">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Kategori</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('promotions.category', 'bioskop') }}" class="text-gray-400 hover:text-red-500 text-sm">Bioskop</a></li>
                        <li><a href="{{ route('promotions.category', 'streaming') }}" class="text-gray-400 hover:text-red-500 text-sm">Streaming</a></li>
                        <li><a href="{{ route('promotions.category', 'voucher') }}" class="text-gray-400 hover:text-red-500 text-sm">Voucher</a></li>
                        <li><a href="{{ route('promotions.category', 'giveaway') }}" class="text-gray-400 hover:text-red-500 text-sm">Giveaway</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Kontak</h4>
                    <div class="flex space-x-4 text-gray-400">
                        <a href="https://facebook.com/promofilm" target="_blank" class="hover:text-red-500"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/promofilm" target="_blank" class="hover:text-red-500"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com/promofilm" target="_blank" class="hover:text-red-500"><i class="fab fa-instagram"></i></a>
                        <a href="mailto:info@promofilm.com" class="hover:text-red-500"><i class="fas fa-envelope"></i></a>
                    </div>
                    <div class="mt-4 text-gray-400 text-sm">
                        <p><i class="fas fa-phone-alt mr-2"></i> +62 123 4567 890</p>
                        <p class="mt-2"><i class="fas fa-map-marker-alt mr-2"></i> Jakarta, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                &copy; {{ date('Y') }} PROMOFILM. All Rights Reserved.
            </div>
        </div>
    </footer>
</body>
</html>