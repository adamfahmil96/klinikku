<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pasien - Klinikku</title>
    <style>/* Anda bisa menambahkan sedikit style di sini nanti */</style>
</head>
<body>
    <h1>Daftar Pasien</h1>
    <a href="/patients/create">Tambah Pasien Baru</a>
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($patients as $patient)
                <tr>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->date_of_birth }}</td>
                    <td>{{ $patient->gender }}</td>
                    <td>
                        <a href="#">Lihat</a> |
                        <a href="/patients/{{ $patient->id }}/edit">Edit</a>
                        <form action="/patients/{{ $patient->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data pasien ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada data pasien.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
