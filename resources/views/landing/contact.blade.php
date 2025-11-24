@extends('landing.app')

@section('content')
<!-- HERO SECTION -->
<section class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-green-50 via-[#E7EFE7] to-green-100 p-10 shadow-sm mb-12">
    <div class="grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h1 class="text-4xl md:text-5xl font-semibold text-gray-700 leading-tight">Hubungi Kami<br><span class="text-green-700 font-bold">Konsultasi & Reservasi</span></h1>
            <p class="mt-5 text-gray-600 text-lg leading-relaxed">Kami siap membantu Anda mencapai kesehatan optimal. Silakan hubungi kami untuk menjadwalkan sesi terapi Anda.</p>

            <div class="mt-8">
                <a href="https://wa.me/6289517229190" target="_blank" class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-md shadow transition">
                    <i class="fab fa-whatsapp text-xl"></i>
                    <span class="font-medium">Chat WhatsApp</span>
                </a>
            </div>
        </div>
        <div class="relative">
            <img src="{{ asset('images/landing/landing-windows-call.webp') }}" alt="Hubungi Acufara" class="rounded-xl shadow-md object-cover w-full h-72 md:h-80">
            <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-green-200/50 rounded-full blur-2xl"></div>
        </div>
    </div>
</section>

<!-- CONTACT & MAP SECTION -->
<section class="mb-12">
    <div class="grid md:grid-cols-2 gap-8">
        <!-- Contact Info -->
        <div class="bg-white p-8 rounded-xl shadow-sm border border-green-100 h-full">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h2>

            <div class="space-y-6">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600 flex-shrink-0">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800">Alamat</h3>
                        <p class="text-gray-600 mt-1">Krendowahono RT 03 RW 03,<br>Gondangrejo, Karanganyar 57188</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600 flex-shrink-0">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800">WhatsApp / Telepon</h3>
                        <p class="text-gray-600 mt-1">
                            <a href="https://wa.me/6289517229190" class="hover:text-green-600 transition">0895 1722 9190</a>
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-600 flex-shrink-0">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-800">Instagram</h3>
                        <p class="text-gray-600 mt-1">
                            <a href="https://www.instagram.com/acufara.akupuntur" target="_blank" class="hover:text-green-600 transition">@acufara.akupuntur</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-10 p-5 bg-green-50 rounded-lg border border-green-200">
                <h3 class="font-semibold text-green-800 mb-2"><i class="fas fa-info-circle mr-2"></i>Catatan Penting</h3>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li class="flex items-start gap-2">
                        <span class="text-green-600 mt-0.5">•</span>
                        <span>Dimohon untuk melakukan reservasi <strong>H-1</strong> atau minimal <strong>2 jam</strong> sebelum terapi.</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-green-600 mt-0.5">•</span>
                        <span><strong>Free Konsultasi</strong> untuk setiap sesi terapi.</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Map -->
        <div class="bg-white p-2 rounded-xl shadow-sm border border-green-100 h-full min-h-[400px]">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.968868799288!2d110.8255764601296!3d-7.468689620825649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1113c1eaa491%3A0xc78120683852fa25!2sAkupunktur%2C%20Bekam%2C%20Baby%20Spa%20By%20Acufara!5e0!3m2!1sid!2sid!4v1763965120840!5m2!1sid!2sid"
                width="100%"
                height="100%"
                style="border:0; border-radius: 0.75rem;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.968868799288!2d110.8255764601296!3d-7.468689620825649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1113c1eaa491%3A0xc78120683852fa25!2sAkupunktur%2C%20Bekam%2C%20Baby%20Spa%20By%20Acufara!5e0!3m2!1sid!2sid!4v1763965120840!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        </div>
    </div>
</section>
@endsection