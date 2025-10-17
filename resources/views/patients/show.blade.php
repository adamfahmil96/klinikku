<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Pasien: {{ $patient->name }}</title>
    <style>
        body { font-family: sans-serif; }
        .container { max-width: 800px; margin: auto; padding: 20px; }
        .patient-details, .visit-history { border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px;}
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div class="container">
        <a href="/patients"><< Kembali ke Daftar Pasien</a>

        {{-- Cek session "success" sebagai pesan titipan --}}
        @if (session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
                {{ session('success') }}
            </div>
        @endif

        <h1>Detail Pasien</h1>
        <div class="patient-details">
            <h3>{{ $patient->name }}</h3>
            <p><strong>Tanggal Lahir:</strong> {{ $patient->date_of_birth }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $patient->gender }}</p>
            <p><strong>Alamat:</strong> {{ $patient->address }}</p>
            <p><strong>Nomor Telepon:</strong> {{ $patient->phone_number }}</p>
        </div>

        <div class="visit-history">
            <h2>Riwayat Kunjungan</h2>
            <a href="/patients/{{ $patient->id }}/visits/create">+ Tambah Kunjungan Baru</a>
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Keluhan</th>
                        <th>Pemeriksaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($patient->visits as $visit)
                        <tr>
                            <td>{{ $visit->visit_date }}</td>
                            <td>{{ $visit->keluhan }}</td>
                            <td>{{ $visit->pemeriksaan }}</td>
                            <td>
                                <a href="{{ route('visits.edit', $visit) }}">Edit</a>
                                <form action="{{ route('visits.destroy', $visit) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus kunjungan ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Belum ada riwayat kunjungan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
