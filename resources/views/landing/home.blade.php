@extends('landing.app')

@section('content')
<!-- HERO -->
<section class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-green-50 via-[#E7EFE7] to-green-100 p-10 shadow-sm">
    <div class="grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h1 class="text-4xl md:text-5xl font-semibold text-gray-700 leading-tight">Pulihkan Keseimbangan Tubuh<br><span class="text-green-700 font-bold">Dengan Akupunktur & Bekam</span></h1>
            <p class="mt-5 text-gray-600 text-lg leading-relaxed">Acufara adalah klinik berfokus pada pendekatan holistik untuk nyeri, pemulihan, dan kesehatan metabolik. Berbasis evidence-based medicine, menggabungkan akupunktur medik dan terapi bekam.</p>
            <div class="mt-6 flex flex-wrap gap-4">
                <a href="https://wa.me/6289517229190" target="_blank" class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-md shadow transition">
                    <span class="font-medium">Reservasi WhatsApp</span>
                </a>
                <a href="{{ route('landing.acupuncture') }}" class="inline-flex items-center gap-2 bg-white text-green-700 border border-green-200 hover:border-green-300 px-6 py-3 rounded-md shadow-sm transition">
                    Pelajari Akupunktur
                </a>
            </div>
            <p class="mt-4 text-sm text-gray-500">Reservasi H-1 atau 2 jam sebelum terapi. Free konsultasi.</p>
        </div>
        <div class="relative">
            <!-- Gambar contoh (silakan ganti dengan asset lokal) -->
            <img src="{{ asset('images/landing/landing-taylor_heery.webp') }}" alt="Ilustrasi Akupunktur" class="rounded-xl shadow-md object-cover w-full h-72 md:h-80">
            <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-green-200/50 rounded-full blur-2xl"></div>
        </div>
    </div>
</section>

<!-- STRIP NILAI / USP -->
<section class="mt-12 grid md:grid-cols-3 gap-6">
    <div class="rounded-xl bg-white p-6 shadow-sm border border-green-100">
        <h3 class="font-semibold text-gray-700 mb-2">Pendekatan Holistik</h3>
        <p class="text-sm text-gray-600 leading-relaxed">Menggabungkan akupunktur medik, bekam, dan edukasi gaya hidup untuk hasil optimal.</p>
    </div>
    <div class="rounded-xl bg-white p-6 shadow-sm border border-green-100">
        <h3 class="font-semibold text-gray-700 mb-2">Evidence-Based</h3>
        <p class="text-sm text-gray-600 leading-relaxed">Berbasis prinsip biomedik dan praktik klinis yang teruji.</p>
    </div>
    <div class="rounded-xl bg-white p-6 shadow-sm border border-green-100">
        <h3 class="font-semibold text-gray-700 mb-2">Fokus Kenyamanan</h3>
        <p class="text-sm text-gray-600 leading-relaxed">Lingkungan terapi yang tenang dengan prosedur aman dan higienis.</p>
    </div>
</section>

<!-- TENTANG & LAYANAN -->
<section class="mt-14 grid lg:grid-cols-3 gap-8">
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white rounded-xl p-8 shadow-sm border border-green-100">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Tentang Kami</h2>
            <p class="text-gray-600 leading-relaxed">Berlokasi di Krendowahono RT 03 RW 03, Gondangrejo, Karanganyar 57188, Acufara membantu berbagai keluhan: nyeri otot dan sendi, gangguan metabolik (asam urat, kolesterol), masalah pencernaan, hormonal, hingga estetika (jerawat, slimming). Kami mendukung pemulihan dan pencegahan melalui terapi terintegrasi.</p>
        </div>
        <div class="bg-white rounded-xl p-8 shadow-sm border border-green-100">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Layanan Utama</h2>
            <div class="grid sm:grid-cols-2 gap-6">
                <div class="group rounded-lg border border-green-100 p-5 bg-green-50 hover:bg-green-100 transition">
                    <h3 class="font-semibold text-green-800 mb-2">Akupunktur Medik</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Menyeimbangkan sistem tubuh, bantu nyeri kepala, vertigo, masalah saraf kejepit, metabolisme, dan pemulihan pasca stroke.</p>
                    <a href="{{ route('landing.acupuncture') }}" class="mt-3 inline-block text-xs font-medium text-green-700 hover:underline">Detail →</a>
                </div>
                <div class="group rounded-lg border border-green-100 p-5 bg-green-50 hover:bg-green-100 transition">
                    <h3 class="font-semibold text-green-800 mb-2">Bekam / Cupping</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Detoks darah statis, membantu kelelahan, peredaran darah, hipertensi ringan, nyeri otot, demam, dan relaksasi.</p>
                    <a href="{{ route('landing.cupping') }}" class="mt-3 inline-block text-xs font-medium text-green-700 hover:underline">Detail →</a>
                </div>
            </div>
        </div>
    </div>
    <div class="space-y-6">
        <div class="bg-gradient-to-br from-white to-green-50 border border-green-100 rounded-xl p-8 shadow-sm">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Kenapa Memilih Acufara?</h2>
            <ul class="space-y-3 text-sm text-gray-600">
                <li class="flex items-start gap-2"><span class="text-green-600">✓</span> Terapi kombinasi akupunktur & bekam.</li>
                <li class="flex items-start gap-2"><span class="text-green-600">✓</span> Pendekatan bertahap sesuai evaluasi klinis.</li>
                <li class="flex items-start gap-2"><span class="text-green-600">✓</span> Edukasi pola hidup mendukung hasil.</li>
                <li class="flex items-start gap-2"><span class="text-green-600">✓</span> Lingkungan nyaman dan higienis.</li>
            </ul>
            <a href="https://wa.me/6289517229190" target="_blank" class="mt-6 inline-block w-full text-center bg-green-600 hover:bg-green-700 text-white py-3 rounded-md text-sm font-medium shadow">Konsultasi Gratis</a>
        </div>
        <div class="bg-white border border-green-100 rounded-xl p-6 shadow-sm">
            <h2 class="text-lg font-semibold text-gray-700 mb-3">Jam Reservasi</h2>
            <p class="text-sm text-gray-600 leading-relaxed">Reservasi dilakukan H-1 atau minimal 2 jam sebelum waktu terapi agar penjadwalan tertata.</p>
        </div>
    </div>
</section>
@endsection