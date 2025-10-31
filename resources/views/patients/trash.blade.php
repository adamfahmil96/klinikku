@extends('layouts.app')

@section('title', 'Daftar Pasien Terhapus')

@section('header', 'Daftar Pasien Terhapus')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        {{-- Cek session "success" sebagai pesan titipan --}}
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Daftar Pasien Terhapus</h2>
            <a href="{{ route('patients.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                &larr; Kembali ke Daftar Pasien
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 border-b">Nama</th>
                        <th class="py-2 px-4 border-b">Tanggal Lahir</th>
                        <th class="py-2 px-4 border-b">Jenis Kelamin</th>
                        <th class="py-2 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($patients as $patient)
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4 border-b">{{ $patient->name }}</td>
                            <td class="py-2 px-4 border-b">{{ $patient->date_of_birth }}</td>
                            <td class="py-2 px-4 border-b">{{ $patient->gender }}</td>
                            <td class="py-2 px-4 border-b text-center">
                                <form action="{{ route('patients.restore', $patient->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="text-green-500 hover:text-green-700"
                                        onclick="return confirm('Apakah Anda yakin ingin mengembalikan pasien ini?')">Kembalikan</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-4 px-4 text-center text-gray-500">
                                Tidak ada data pasien terhapus.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{-- Pagination --}}
        <div class="mt-4">
            {{-- Tambahkan query string untuk pagination --}}
            {{ $patients->withQueryString()->links() }}
        </div>
    </div>
@endsection