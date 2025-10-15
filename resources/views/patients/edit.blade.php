<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Pasien - Klinikku</title>
</head>

<body>
    <h1>Form Edit Data Pasien</h1>

    <form action="/patients/{{ $patient->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nama Pasien:</label><br>
            <input type="text" id="name" name="name" value="{{ $patient->name }}" required>
        </div>
        <br>
        <div>
            <label for="date_of_birth">Tanggal Lahir:</label><br>
            <input type="date" id="date_of_birth" name="date_of_birth" value="{{ $patient->date_of_birth }}" required>
        </div>
        <br>
        <div>
            <label for="gender">Jenis Kelamin:</label><br>
            <select id="gender" name="gender" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki" {{ $patient->gender == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $patient->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <br>
        <div>
            <label for="address">Alamat:</label><br>
            <textarea id="address" name="address" rows="4">{{ $patient->address }}</textarea>
        </div>
        <br>
        <div>
            <label for="phone_number">Nomor Telepon:</label><br>
            <input type="text" id="phone_number" name="phone_number" value="{{ $patient->phone_number }}">
        </div>
        <br>
        <button type="submit">Update Pasien</button>
    </form>
</body>

</html>