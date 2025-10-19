@extends('layouts.app')

@section('title', 'Detail Pasien: ' . $patient->name)

@section('header', 'Detail Pasien')

@section('content')
    {{-- Tombol Kembali --}}
    <div class="mb-4">
        <a href="{{ route('patients.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
            &larr; Kembali ke Daftar Pasien
        </a>
    </div>

    {{-- Cek session "success" sebagai pesan titipan --}}
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- Kartu Detail Pasien --}}
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <h2 class="text-2xl font-semibold mb-4">{{ $patient->name }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <strong class="text-gray-700">Tanggal Lahir:</strong>
                <p>{{ $patient->date_of_birth }}</p>
            </div>
            <div>
                <strong class="text-gray-700">Jenis Kelamin:</strong>
                <p>{{ $patient->gender }}</p>
            </div>
            <div>
                <strong class="text-gray-700">Nomor Telepon:</strong>
                <p>{{ $patient->phone_number ?? '-' }}</p>
            </div>
            <div>
                <strong class="text-gray-700">Alamat:</strong>
                <p>{{ $patient->address ?? '-' }}</p>
            </div>
        </div>
    </div>

    {{-- Riwayat Kunjungan --}}
    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Riwayat Kunjungan</h2>
            <a href="{{ route('patients.visits.create', $patient) }}"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg">
                + Tambah Kunjungan
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">Tanggal</th>
                        <th class="py-2 px-4 border-b">Keluhan</th>
                        <th class="py-2 px-4 border-b">Pemeriksaan</th>
                        <th class="py-2 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($patient->visits as $visit)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">{{ $visit->visit_date }}</td>
                            <td class="py-2 px-4 border-b">{{ $visit->keluhan }}</td>
                            <td class="py-2 px-4 border-b">{{ $visit->pemeriksaan }}</td>
                            <td class="py-2 px-4 border-b">
                                <a href="{{ route('visits.edit', $visit) }}"
                                    class="text-yellow-500 hover:text-yellow-700 mr-2">Edit</a>
                                <form action="{{ route('visits.destroy', $visit) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700"
                                        onclick="return confirm('Yakin ingin menghapus kunjungan ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-4 px-4 text-center text-gray-500">Belum ada riwayat kunjungan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection