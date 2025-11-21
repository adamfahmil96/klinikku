<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acufara - Akupunktur & Bekam</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('landing.home') }}" class="text-2xl font-bold text-gray-800">Acufara</a>
            <nav class="hidden md:flex space-x-6 items-center">
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
            <a href="{{ route('login') }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Masuk</a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-white mt-8">
        <div class="container mx-auto px-4 py-4 text-center text-gray-600">
            &copy; {{ date('Y') }} Acufara. All rights reserved.
        </div>
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
