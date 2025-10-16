<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Kunjungan untuk {{ $visit->patient->name }}</title>
</head>
<body>
    <h1>Edit Kunjungan</h1>
    <h3>Pasien: {{ $visit->patient->name }}</h3>

    <form action="{{ route('visits.update', $visit) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="visit_date">Tanggal Kunjungan:</label><br>
            <input type="date" id="visit_date" name="visit_date" value="{{ $visit->visit_date }}" required>
        </div>
        <br>
        <div>
            <label for="keluhan">Keluhan:</label><br>
            <textarea id="keluhan" name="keluhan" rows="4" required>{{ $visit->keluhan }}</textarea>
        </div>
        <br>
        <div>
            <label for="pemeriksaan">Pemeriksaan/Tindakan:</label><br>
            <textarea id="pemeriksaan" name="pemeriksaan" rows="4" required>{{ $visit->pemeriksaan }}</textarea>
        </div>
        <br>
        <button type="submit">Simpan Kunjungan</button>
    </form>
    <br>
    <a href="/patients/{{ $patient->id }}"><< Batal</a>
</body>
</html>
