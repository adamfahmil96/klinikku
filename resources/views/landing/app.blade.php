<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acufara - Akupunktur & Bekam</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-[#E7EFE7]">
    <header class="bg-white/90 backdrop-blur shadow-sm border-b border-gray-200">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('landing.home') }}" class="text-2xl font-semibold tracking-wide text-gray-700 flex items-center gap-2">
                <span class="inline-block w-8 h-8 rounded-full bg-green-500 text-white flex items-center justify-center font-bold text-sm shadow">A</span>
                Acufara
            </a>
            <nav class="hidden md:flex space-x-6 items-center text-sm font-medium">
                <a href="{{ route('landing.home') }}" class="text-gray-600 hover:text-gray-800">Home</a>
                <div class="relative">
                    <button class="text-gray-600 hover:text-gray-800 focus:outline-none">
                        Layanan <i class="fas fa-chevron-down fa-xs"></i>
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-20 hidden">
                        <a href="{{ route('landing.acupuncture') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Akupunktur</a>
                        <a href="{{ route('landing.cupping') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bekam</a>
                    </div>
                </div>
                <a href="{{ route('landing.contact') }}" class="text-gray-600 hover:text-gray-800">Kontak</a>
            </nav>
            <a href="{{ route('login') }}" class="bg-green-600 hover:bg-green-700 text-white px-5 py-2.5 rounded-md shadow-sm transition">Masuk</a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-10">
        @yield('content')
    </main>

    <footer class="bg-white/90 backdrop-blur border-t border-gray-200 mt-16">
        <div class="container mx-auto px-4 py-10 grid md:grid-cols-3 gap-8 text-sm text-gray-600">
            <div>
                <h3 class="text-gray-700 font-semibold mb-2">Acufara</h3>
                <p class="leading-relaxed">Klinik Akupunktur & Bekam untuk pemulihan, keseimbangan, dan kesehatan menyeluruh.</p>
            </div>
            <div>
                <h3 class="text-gray-700 font-semibold mb-2">Kontak</h3>
                <ul class="space-y-1">
                    <li>WhatsApp: <a href="https://wa.me/6289517229190" class="text-green-700 hover:underline">0895 1722 9190</a></li>
                    <li>Instagram: <a href="https://www.instagram.com/acufara.akupuntur" class="text-green-700 hover:underline" target="_blank">@acufara.akupuntur</a></li>
                    <li>Email: <span class="text-gray-500">(tambahkan jika ada)</span></li>
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
        document.addEventListener('DOMContentLoaded', function () {
            const button = document.querySelector('.relative button');
            const dropdown = document.querySelector('.relative div');

            if (button) {
                button.addEventListener('click', function () {
                    dropdown.classList.toggle('hidden');
                });

                document.addEventListener('click', function (event) {
                    if (!button.contains(event.target)) {
                        dropdown.classList.add('hidden');
                    }
                });
            }
        });
    </script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
</body>
</html>
