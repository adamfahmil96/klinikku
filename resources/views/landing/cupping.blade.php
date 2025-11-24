@extends('landing.app')

@section('content')
<!-- HERO SECTION -->
<section class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-green-50 via-[#E7EFE7] to-green-100 p-10 shadow-sm mb-12">
    <div class="grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h1 class="text-4xl md:text-5xl font-semibold text-gray-700 leading-tight">Terapi Bekam (Cupping)<br><span class="text-green-700 font-bold">Solusi Detoksifikasi Alami</span></h1>
            <p class="mt-5 text-gray-600 text-lg leading-relaxed">Metode pengobatan dengan cara mengeluarkan darah statis (kental) yang mengandung toksin dari dalam tubuh manusia.</p>

            <div class="mt-8">
                <a href="https://wa.me/6289517229190" target="_blank" class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-md shadow transition">
                    <span class="font-medium">Konsultasi Sekarang</span>
                </a>
            </div>
        </div>
        <div class="relative">
            <img src="{{ asset('images/landing/landing-katherine-hanlon-Pdea8oxLHkU-unsplash.webp') }}" alt="Ilustrasi Bekam" class="rounded-xl shadow-md object-cover w-full h-72 md:h-80">
            <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-green-200/50 rounded-full blur-2xl"></div>
        </div>
    </div>
</section>

<!-- MANFAAT SECTION -->
<section class="mb-12">
    <div class="text-center mb-10">
        <h2 class="text-3xl font-bold text-gray-800">Manfaat Terapi Bekam</h2>
        <p class="text-gray-600 mt-2">Berbagai khasiat untuk kesehatan fisik dan mental Anda</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-green-100 hover:shadow-md transition duration-300 group">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4 text-green-600 group-hover:bg-green-600 group-hover:text-white transition">
                <i class="fas fa-wind text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-2">Detoksifikasi</h3>
            <p class="text-gray-600 text-sm">Membuang racun, angin, dan kolesterol jahat dari dalam tubuh.</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-green-100 hover:shadow-md transition duration-300 group">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4 text-green-600 group-hover:bg-green-600 group-hover:text-white transition">
                <i class="fas fa-battery-full text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-2">Pulihkan Energi</h3>
            <p class="text-gray-600 text-sm">Mengatasi kelelahan kronis dan mengembalikan vitalitas tubuh.</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-green-100 hover:shadow-md transition duration-300 group">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4 text-green-600 group-hover:bg-green-600 group-hover:text-white transition">
                <i class="fas fa-heart-pulse text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-2">Sirkulasi Darah</h3>
            <p class="text-gray-600 text-sm">Melancarkan peredaran darah & membantu menurunkan hipertensi.</p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-green-100 hover:shadow-md transition duration-300 group">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4 text-green-600 group-hover:bg-green-600 group-hover:text-white transition">
                <i class="fas fa-child-reaching text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-2">Relaksasi Otot</h3>
            <p class="text-gray-600 text-sm">Meredakan nyeri otot, pegal linu, dan ketegangan fisik.</p>
        </div>

        <!-- Card 5 -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-green-100 hover:shadow-md transition duration-300 group">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4 text-green-600 group-hover:bg-green-600 group-hover:text-white transition">
                <i class="fas fa-temperature-arrow-down text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-2">Turunkan Demam</h3>
            <p class="text-gray-600 text-sm">Membantu menurunkan suhu tubuh saat demam secara alami.</p>
        </div>

        <!-- Card 6 -->
        <div class="bg-white p-6 rounded-xl shadow-sm border border-green-100 hover:shadow-md transition duration-300 group">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4 text-green-600 group-hover:bg-green-600 group-hover:text-white transition">
                <i class="fas fa-face-smile-beam text-xl"></i>
            </div>
            <h3 class="font-bold text-lg text-gray-800 mb-2">Kesehatan Mental</h3>
            <p class="text-gray-600 text-sm">Mengurangi kecemasan (anxiety) dan memberikan efek menenangkan.</p>
        </div>
    </div>
</section>

<!-- INFO SECTION -->
<section class="bg-white rounded-xl p-8 shadow-sm border border-green-100 mb-12">
    <div class="flex flex-col md:flex-row gap-8 items-center">
        <div class="md:w-1/3 flex justify-center">
            <div class="w-32 h-32 bg-green-50 rounded-full flex items-center justify-center text-green-600">
                <i class="fas fa-brain text-5xl"></i>
            </div>
        </div>
        <div class="md:w-2/3">
            <h3 class="text-2xl font-bold text-gray-800 mb-4">Efek Relaksasi & Endorfin</h3>
            <p class="text-gray-600 leading-relaxed mb-4">
                Pada proses Cupping terjadi kerusakan mast Cell yang berakibat terstimulusnya beberapa zat yang salah satunya adalah <span class="font-semibold text-green-700">endorfin</span>. Endorfin akan muncul ketika tubuh mengalami stress atau nyeri terkontrol.
            </p>
            <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded-r-md">
                <p class="text-green-800 font-medium">
                    "Kerja endorfin mirip dengan Morphin sebagai antinyeri, menenangkan, dan memberikan rasa rileks yang mendalam pada tubuh."
                </p>
            </div>
        </div>
    </div>
</section>
@endsection