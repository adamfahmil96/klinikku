<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acufara - Akupunktur & Bekam</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/logo/logo-acufara-a-new.png') }}" type="image/png">
</head>

<body class="bg-[#E7EFE7]">
    <header class="bg-white/90 backdrop-blur shadow-sm border-b border-gray-200 relative z-50">
        <div class="container mx-auto px-6 md:px-12 lg:px-20 py-4 flex justify-between items-center">
            <a href="{{ route('landing.home') }}" class="flex items-center gap-3 group" aria-label="Beranda Acufara">
                <img src="{{ asset('images/logo/logo-acufara-new.png') }}" alt="Logo Acufara" class="h-12 w-auto select-none" loading="lazy">
                <!-- Teks aksesibilitas (tersembunyi) -->
                <span class="sr-only">Acufara</span>
            </a>
            <nav class="hidden md:flex space-x-6 items-center text-sm font-medium">
                <a href="{{ route('landing.home') }}" class="text-gray-600 hover:text-gray-800">Home</a>
                <div class="relative">
                    <button id="dropdown-btn" class="text-gray-600 hover:text-gray-800 focus:outline-none font-medium">
                        Layanan <i class="fas fa-chevron-down fa-xs"></i>
                    </button>
                    <div id="dropdown-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20 hidden">
                        <a href="{{ route('landing.acupuncture') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Akupunktur</a>
                        <a href="{{ route('landing.cupping') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bekam</a>
                    </div>
                </div>
                <a href="{{ route('landing.contact') }}" class="text-gray-600 hover:text-gray-800">Kontak</a>
            </nav>
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" class="hidden md:flex md:inline-block bg-green-600 hover:bg-green-700 text-white px-5 py-2.5 rounded-md shadow-sm transition">Masuk</a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-600 hover:text-gray-900 focus:outline-none p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100 bg-white">
            <div class="container mx-auto px-6 py-4 space-y-3">
                <a href="{{ route('landing.home') }}" class="block text-gray-600 hover:text-green-600 font-medium">Home</a>

                <div class="space-y-2">
                    <div class="text-gray-600 font-medium">Layanan</div>
                    <a href="{{ route('landing.acupuncture') }}" class="block pl-4 text-sm text-gray-500 hover:text-green-600">Akupunktur</a>
                    <a href="{{ route('landing.cupping') }}" class="block pl-4 text-sm text-gray-500 hover:text-green-600">Bekam</a>
                </div>

                <a href="{{ route('landing.contact') }}" class="block text-gray-600 hover:text-green-600 font-medium">Kontak</a>
                <a href="{{ route('login') }}" class="block w-full text-center bg-green-600 hover:bg-green-700 text-white px-5 py-2.5 rounded-md shadow-sm transition mt-4">Masuk</a>
            </div>
    </header>

    <main class="container mx-auto px-6 md:px-12 lg:px-20 py-10">
        @yield('content')
    </main>

    <footer class="bg-white/90 backdrop-blur border-t border-gray-200 mt-16">
        <div class="container mx-auto px-6 md:px-12 lg:px-20 py-10 grid md:grid-cols-3 gap-8 text-sm text-gray-600">
            <div>
                <h3 class="text-gray-700 font-semibold mb-2">Acufara</h3>
                <p class="leading-relaxed">Klinik Akupunktur & Bekam untuk pemulihan, keseimbangan, dan kesehatan menyeluruh.</p>
            </div>
            <div>
                <h3 class="text-gray-700 font-semibold mb-2">Kontak</h3>
                <ul class="space-y-1">
                    <li>WhatsApp: <a href="https://wa.me/6289517229190" class="text-green-700 hover:underline">0895 1722 9190</a></li>
                    <li>Instagram: <a href="https://www.instagram.com/acufara.akupuntur" class="text-green-700 hover:underline" target="_blank">@acufara.akupuntur</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-gray-700 font-semibold mb-2">Alamat</h3>
                <p class="leading-relaxed">Krendowahono RT 03 RW 03<br>Gondangrejo, Karanganyar 57188</p>
                <p class="mt-3 text-xs text-gray-500">Reservasi H-1 atau 2 jam sebelum terapi. Free konsultasi.</p>
            </div>
        </div>
        <div class="border-t border-gray-200 text-center py-4 text-xs text-gray-500">&copy; {{ date('Y') }} Acufara. All rights reserved.</div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dropdown Logic
            const dropdownBtn = document.getElementById('dropdown-btn');
            const dropdownMenu = document.getElementById('dropdown-menu');

            if (dropdownBtn && dropdownMenu) {
                dropdownBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    dropdownMenu.classList.toggle('hidden');
                });

                document.addEventListener('click', function(event) {
                    if (!dropdownBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
                        dropdownMenu.classList.add('hidden');
                    }
                });
            }

            // Mobile Menu Toggle
            const mobileBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');

            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</body>

</html>