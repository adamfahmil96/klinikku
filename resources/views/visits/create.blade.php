@extends('layouts.app')

@section('title', 'Tambah Kunjungan')

@section('header', 'Tambah Kunjungan Baru')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">

        <h2 class="text-2xl font-semibold mb-2">Pasien: {{ $patient->name }}</h2>
        <p class="text-gray-600 mb-6">Silakan isi detail kunjungan di bawah ini.</p>

        <form action="{{ route('patients.visits.store', $patient) }}" method="POST">
            @csrf
            {{-- Baris untuk Tanggal Kunjungan --}}
            <div class="mb-4">
                <label for="visit_date" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Kunjungan</label>
                <input type="date" id="visit_date" name="visit_date"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    required>
                @error('visit_date')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- Baris untuk Keluhan --}}
            <div class="mb-4">
                <label for="keluhan" class="block text-sm font-medium text-gray-700 mb-1">Keluhan</label>
                <textarea id="keluhan" name="keluhan" rows="4"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    required></textarea>
                @error('keluhan')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- Baris untuk Pemeriksaan/Tindakan --}}
            <div class="mb-6">
                <label for="pemeriksaan" class="block text-sm font-medium text-gray-700 mb-1">Pemeriksaan / Tindakan</label>
                <textarea id="pemeriksaan" name="pemeriksaan" rows="4"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    required></textarea>
                @error('pemeriksaan')
                    <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>
            {{-- Tombol Aksi --}}
            <div class="flex items-center gap-x-4">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg">
                    Simpan Kunjungan
                </button>
                <a href="{{ route('patients.show', $patient) }}" class="text-gray-600 hover:text-gray-900 font-medium">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection