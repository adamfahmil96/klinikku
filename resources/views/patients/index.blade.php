@extends('layouts.app')

@section('title', 'Daftar Pasien')

@section('header', 'Manajemen Pasien')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        {{-- Cek session "success" sebagai pesan titipan --}}
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Daftar Pasien</h2>
            <a href="{{ route('patients.create') }}"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg">
                + Tambah Pasien
            </a>
        </div>

        <div class="mb-4">
            <form action="{{ route('patients.index') }}" method="GET">
                <label for="search" class="sr-only">Cari Pasien</label>
                <input type="text" name="search" id="search" placeholder="Cari berdasarkan nama..."
                    class="w-full md:w-1/2 px-3 py-2 border border-gray-300 rounded-lg shadow-sm"
                    value="{{ request('search') }}">
                <button type="submit" class="ml-2 bg-indigo-600 text-white py-2 px-4 rounded-lg">Cari</button>
            </form>
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
                                <a href="{{ route('patients.show', $patient) }}"
                                    class="text-blue-500 hover:text-blue-700 mr-2">Lihat</a>
                                <a href="{{ route('patients.edit', $patient) }}"
                                    class="text-yellow-500 hover:text-yellow-700 mr-2">Edit</a>
                                <form action="{{ route('patients.destroy', $patient) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus pasien ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-4 px-4 text-center text-gray-500">
                                @if (request('search'))
                                    Pasien dengan nama "{{ request('search') }}" tidak ditemukan.
                                @else
                                    Belum ada data pasien.
                                @endif
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