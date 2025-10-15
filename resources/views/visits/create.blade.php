<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Kunjungan untuk {{ $patient->name }}</title>
</head>
<body>
    <h1>Tambah Kunjungan Baru</h1>
    <h3>Pasien: {{ $patient->name }}</h3>

    <form action="/patients/{{ $patient->id }}/visits" method="POST">
        @csrf
        <div>
            <label for="visit_date">Tanggal Kunjungan:</label><br>
            <input type="date" id="visit_date" name="visit_date" required>
        </div>
        <br>
        <div>
            <label for="keluhan">Keluhan:</label><br>
            <textarea id="keluhan" name="keluhan" rows="4" required></textarea>
        </div>
        <br>
        <div>
            <label for="pemeriksaan">Pemeriksaan/Tindakan:</label><br>
            <textarea id="pemeriksaan" name="pemeriksaan" rows="4" required></textarea>
        </div>
        <br>
        <button type="submit">Simpan Kunjungan</button>
    </form>
    <br>
    <a href="/patients/{{ $patient->id }}"><< Batal</a>
</body>
</html>
