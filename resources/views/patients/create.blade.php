<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pasien Baru - Klinikku</title>
</head>
<body>
    <h1>Form Tambah Pasien Baru</h1>

    <form action="/patients" method="POST">
        @csrf
        <div>
            <label for="name">Nama Pasien:</label><br>
            <input type="text" id="name" name="name" required>
        </div>
        <br>
        <div>
            <label for="date_of_birth">Tanggal Lahir:</label><br>
            <input type="date" id="date_of_birth" name="date_of_birth" required>
        </div>
        <br>
        <div>
            <label for="gender">Jenis Kelamin:</label><br>
            <select id="gender" name="gender" required>
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <br>
        <div>
            <label for="address">Alamat:</label><br>
            <textarea id="address" name="address" rows="4"></textarea>
        </div>
        <br>
        <div>
            <label for="phone_number">Nomor Telepon:</label><br>
            <input type="text" id="phone_number" name="phone_number">
        </div>
        <br>
        <button type="submit">Simpan Pasien</button>
    </form>
</body>
</html>