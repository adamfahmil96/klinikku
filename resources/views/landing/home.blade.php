@extends('landing.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang di Acufara</h1>
    <p class="text-lg text-gray-600">Klinik Akupunktur dan Bekam di Krendowahono</p>
</div>

<div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
        <p class="text-gray-600">Acufara adalah klinik yang menyediakan layanan akupunktur dan bekam untuk membantu Anda mencapai kesehatan dan keseimbangan tubuh. Kami berlokasi di Krendowahono RT 03 RW 03, Gondangrejo, Karanganyar 57188.</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Layanan Kami</h2>
        <ul class="list-disc list-inside text-gray-600">
            <li>Akupunktur</li>
            <li>Bekam (Cupping)</li>
        </ul>
    </div>
</div>
@endsection
