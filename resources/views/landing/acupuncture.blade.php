@extends('landing.app')

@section('content')
<!-- HERO SECTION -->
<section class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-green-50 via-[#E7EFE7] to-green-100 p-10 shadow-sm mb-12">
    <div class="grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h1 class="text-4xl md:text-5xl font-semibold text-gray-700 leading-tight">Akupunktur Medik<br><span class="text-green-700 font-bold">Solusi Kesehatan Holistik</span></h1>
            <p class="mt-5 text-gray-600 text-lg leading-relaxed">Metode pengobatan dengan menusukkan titik akupuntur permukaan tubuh untuk mengobati suatu penyakit dan mengembalikan keseimbangan tubuh.</p>
            <p class="mt-4 text-gray-600 leading-relaxed">Ilmu akupunktur yang telah diintegrasikan ke dalam ilmu kedokteran modern sesuai dengan prinsip biomedik, uji klinis ilmiah, dan <i>evidence based medicine</i>.</p>

            <div class="mt-8">
                <a href="https://wa.me/6289517229190" target="_blank" class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-md shadow transition">
                    <span class="font-medium">Konsultasi Sekarang</span>
                </a>
            </div>
        </div>
        <div class="relative">
            <img src="{{ asset('images/landing/landing-katherine-hanlon.webp') }}" alt="Ilustrasi Akupunktur" class="rounded-xl shadow-md object-cover w-full h-72 md:h-80">
            <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-green-200/50 rounded-full blur-2xl"></div>
        </div>
    </div>
</section>

<!-- SYMPTOMS CAROUSEL -->
<section class="relative">
    <div class="flex justify-between items-end mb-6 px-2">
        <div>
            <h2 class="text-2xl font-semibold text-gray-700">Keluhan yang Dapat Ditangani</h2>
            <p class="text-gray-500 text-sm mt-1">Geser untuk melihat daftar keluhan lainnya</p>
        </div>
        <div class="flex gap-2">
            <button id="prevBtn" class="p-2 rounded-full border border-gray-300 hover:bg-green-50 hover:text-green-600 transition shadow-sm bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="nextBtn" class="p-2 rounded-full border border-gray-300 hover:bg-green-50 hover:text-green-600 transition shadow-sm bg-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Carousel Container -->
    <div id="carousel" class="flex overflow-x-auto snap-x snap-mandatory gap-4 pb-8 hide-scrollbar scroll-smooth">
        <!-- Card 1: Estetika -->
        <div class="min-w-[85vw] md:min-w-[40vw] lg:min-w-[calc(20%-1rem)] bg-white p-6 rounded-xl shadow-sm border border-green-100 snap-center hover:shadow-md transition duration-300 flex-shrink-0">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4 text-green-600">
                <i class="fas fa-spa text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-3">Estetika</h3>
            <ul class="space-y-2 text-gray-600 text-sm">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-green-400 rounded-full"></span> Slimming</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-green-400 rounded-full"></span> Jerawat</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-green-400 rounded-full"></span> Kerutan</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-green-400 rounded-full"></span> Kantong mata</li>
            </ul>
        </div>

        <!-- Card 2: Gangguan Pernafasan -->
        <div class="min-w-[85vw] md:min-w-[40vw] lg:min-w-[calc(20%-1rem)] bg-white p-6 rounded-xl shadow-sm border border-green-100 snap-center hover:shadow-md transition duration-300 flex-shrink-0">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4 text-blue-600">
                <i class="fas fa-lungs text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-3">Gangguan Pernafasan</h3>
            <ul class="space-y-2 text-gray-600 text-sm">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-blue-400 rounded-full"></span> Sinus</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-blue-400 rounded-full"></span> Batuk / Flu</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-blue-400 rounded-full"></span> Sesak Nafas</li>
            </ul>
        </div>

        <!-- Card 3: Gangguan Nyeri -->
        <div class="min-w-[85vw] md:min-w-[40vw] lg:min-w-[calc(20%-1rem)] bg-white p-6 rounded-xl shadow-sm border border-green-100 snap-center hover:shadow-md transition duration-300 flex-shrink-0">
            <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center mb-4 text-red-600">
                <i class="fas fa-running text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-3">Gangguan Nyeri</h3>
            <ul class="space-y-2 text-gray-600 text-sm">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-red-400 rounded-full"></span> Nyeri Pinggang & Lutut</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-red-400 rounded-full"></span> Nyeri Bahu & Leher</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-red-400 rounded-full"></span> Kram Otot</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-red-400 rounded-full"></span> Migrain</li>
            </ul>
        </div>

        <!-- Card 4: Gangguan Syaraf -->
        <div class="min-w-[85vw] md:min-w-[40vw] lg:min-w-[calc(20%-1rem)] bg-white p-6 rounded-xl shadow-sm border border-green-100 snap-center hover:shadow-md transition duration-300 flex-shrink-0">
            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4 text-purple-600">
                <i class="fas fa-brain text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-3">Gangguan Syaraf</h3>
            <ul class="space-y-2 text-gray-600 text-sm">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-purple-400 rounded-full"></span> Saraf Kejepit</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-purple-400 rounded-full"></span> Bells Palsy</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-purple-400 rounded-full"></span> Stroke</li>
            </ul>
        </div>

        <!-- Card 5: Gangguan Pencernaan -->
        <div class="min-w-[85vw] md:min-w-[40vw] lg:min-w-[calc(20%-1rem)] bg-white p-6 rounded-xl shadow-sm border border-green-100 snap-center hover:shadow-md transition duration-300 flex-shrink-0">
            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center mb-4 text-yellow-600">
                <i class="fas fa-utensils text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-3">Gangguan Pencernaan</h3>
            <ul class="space-y-2 text-gray-600 text-sm">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-yellow-400 rounded-full"></span> Maag / GERD</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-yellow-400 rounded-full"></span> Diare</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-yellow-400 rounded-full"></span> Nafsu Makan</li>
            </ul>
        </div>

        <!-- Card 6: Gangguan Metabolisme -->
        <div class="min-w-[85vw] md:min-w-[40vw] lg:min-w-[calc(20%-1rem)] bg-white p-6 rounded-xl shadow-sm border border-green-100 snap-center hover:shadow-md transition duration-300 flex-shrink-0">
            <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center mb-4 text-orange-600">
                <i class="fas fa-heartbeat text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-3">Gangguan Metabolisme</h3>
            <ul class="space-y-2 text-gray-600 text-sm">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-orange-400 rounded-full"></span> Asam Urat</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-orange-400 rounded-full"></span> Gula Darah</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-orange-400 rounded-full"></span> Kolesterol</li>
            </ul>
        </div>

        <!-- Card 7: Gangguan Ginekologi -->
        <div class="min-w-[85vw] md:min-w-[40vw] lg:min-w-[calc(20%-1rem)] bg-white p-6 rounded-xl shadow-sm border border-green-100 snap-center hover:shadow-md transition duration-300 flex-shrink-0">
            <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center mb-4 text-pink-600">
                <i class="fas fa-female text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-3">Gangguan Ginekologi</h3>
            <ul class="space-y-2 text-gray-600 text-sm">
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-pink-400 rounded-full"></span> Program Hamil</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-pink-400 rounded-full"></span> Nyeri Haid</li>
                <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-pink-400 rounded-full"></span> Haid Kacau</li>
            </ul>
        </div>
    </div>
</section>

<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .hide-scrollbar {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('carousel');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        nextBtn.addEventListener('click', () => {
            carousel.scrollBy({
                left: 320,
                behavior: 'smooth'
            });
        });

        prevBtn.addEventListener('click', () => {
            carousel.scrollBy({
                left: -320,
                behavior: 'smooth'
            });
        });
    });
</script>
@endsection