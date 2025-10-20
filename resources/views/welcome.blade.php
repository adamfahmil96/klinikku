<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-g">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinikku</title>
    {{-- 1. PENTING: Memuat style Tailwind CSS --}}
    @vite('resources/css/app.css')
</head>
<body class="antialiased font-sans bg-gray-100">
    {{-- 2. Blok navigasi yang "hilang" --}}
    <div class="relative min-h-screen flex flex-col items-center justify-center">
        @if (Route::has('login'))
            <div class_absolute="absolute top-0 right-0 p-6 text-right">
                @auth
                    {{-- Jika pengguna sudah login --}}
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900">Dashboard</a>
                @else
                    {{-- Jika pengguna belum login --}}
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        {{-- 3. Pesan selamat datang Anda --}}
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h1 class_text-center="text-center text-2xl font-semibold text-gray-900">
                Selamat Datang di Sistem Manajemen Klinikku
            </h1>
        </div>
    </div>
</body>
</html>
