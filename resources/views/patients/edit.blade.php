@extends('layouts.app')

@section('title', 'Edit Pasien')

@section('header', 'Edit Pasien')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">

        <h2 class="text-2xl font-semibold mb-6">Formulir Edit Pasien</h2>

        <form action="{{ route('patients.update', $patient->id) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- Baris untuk Nama --}}
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Pasien</label>
                <input type="text" id="name" name="name" value="{{ $patient->name }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            
            {{-- Baris untuk Tanggal Lahir --}}
            <div class="mb-4">
                <label for="date_of_birth" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir</label>
                <input type="date" id="date_of_birth" name="date_of_birth" value="{{ $patient->date_of_birth }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
            
            {{-- Baris untuk Jenis Kelamin --}}
            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                <select id="gender" name="gender" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="Laki-laki" {{ $patient->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $patient->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            
            {{-- Baris untuk Alamat --}}
            <div class="mb-4">
                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <textarea id="address" name="address" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{ $patient->address }}</textarea>
            </div>
            
            {{-- Baris untuk Nomor Telepon --}}
            <div class="mb-6">
                <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                <input type="text" id="phone_number" name="phone_number" value="{{ $patient->phone_number }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            
            {{-- Tombol Aksi --}}
            <div class="flex items-center gap-x-4">
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg">
                    Update Pasien
                </button>
                <a href="{{ route('patients.index') }}" class="text-gray-600 hover:text-gray-900 font-medium">
                    Batal
                </a>
            </div>
        </form>
    </div>
@endsection