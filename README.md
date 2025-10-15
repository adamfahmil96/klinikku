
# Klinikku - Sistem Manajemen Praktik Sederhana

Proyek ini adalah sebuah sistem informasi sederhana yang dirancang untuk membantu tenaga kesehatan, seperti akupunktur, dalam mengelola data pasien dan riwayat kunjungan mereka. Tujuan utama dari proyek ini adalah sebagai sarana belajar mandiri untuk mendalami framework **Laravel 12** dari dasar hingga implementasi fitur-fitur inti.

Dibangun menggunakan **Laravel 12** dengan lingkungan pengembangan **Laravel Sail (Docker)**.

## Perjalanan Belajar (Self-Learning Journey)

Proyek ini merupakan hasil dari sesi belajar mandiri yang terstruktur, dengan bimbingan dari mentor AI, Gemini. Seluruh proses, mulai dari penyiapan lingkungan, pemecahan masalah teknis, hingga penulisan kode dan implementasi fitur, didiskusikan dan direncanakan melalui serangkaian dialog interaktif.

Anda dapat melihat rekam jejak proses pembelajaran dan diskusi teknis pada bagian Dokumentasi.

## Progress yang Telah Dicapai (Step-by-Step)

Berikut adalah ringkasan langkah-langkah yang telah diselesaikan dalam pembangunan proyek ini:

### Fase 0: Persiapan Lingkungan

1. **Diskusi Awal**: Menentukan ide proyek "Klinik-Q" sebagai studi kasus.
2. **Setup Lingkungan**: Menggunakan WSL Ubuntu di Windows.
3. **Instalasi Docker & Laravel Sail**: Memilih Laravel Sail sebagai lingkungan pengembangan modern berbasis Docker.
4. **Troubleshooting**:

- Mengatasi konflik port `3306` (MySQL) dan `6379` (Redis) dengan memodifikasi file `.env`.
- Mengatasi masalah koneksi jaringan di dalam Docker build dengan memperbaiki konfigurasi DNS di WSL.

### Fase 1: Inisiasi Proyek & Halaman Pertama

1. **Instalasi Proyek**: Membuat proyek Laravel baru menggunakan `composer create-project`.
2. **Menjalankan Sail**: Berhasil menjalankan `./vendor/bin/sail up` dan menampilkan halaman default Laravel.
3. **Migrasi Pertama**: Menjalankan `./vendor/bin/sail artisan migrate` untuk membuat tabel-tabel bawaan Laravel dan memastikan koneksi database berhasil.
4. **Modifikasi Halaman Utama**: Mengubah file `routes/web.php` dan `resources/views/welcome.blade.php` untuk menampilkan pesan selamat datang custom.

### Fase 2: Fondasi Modul Pasien (CRUD)

1. **Model & Migrasi**: Membuat Model `Patient` beserta file migrasinya menggunakan perintah `sail artisan make:model Patient -m`.
2. **Definisi Skema**: Mendefinisikan struktur tabel `patients` (nama, tanggal_lahir, dll.) di dalam file migrasi.
3. **Controller & Routing**: Membuat `PatientController` menggunakan flag `--resource` dan mendaftarkannya di `routes/web.php` dengan `Route::resource`.
4. **Implementasi Fitur READ (Daftar Pasien)**:

- Mengisi logika method `index()` di `PatientController` untuk mengambil semua data pasien.
- Membuat view `patients/index.blade.php` untuk menampilkan data dalam bentuk tabel.

5. **Implementasi Fitur CREATE (Tambah Pasien)**:

- Mengisi logika method `create()` dan `store()`.
- Membuat view `patients/create.blade.php` yang berisi form tambah data.
- Mengimplementasikan validasi input di method `store()`.
- Mengatur properti `$fillable` di Model `Patient` untuk Mass Assignment.

6. **Implementasi Fitur UPDATE (Edit Pasien)**:

- Mengisi logika method `edit()` dan `update()`.
- Memanfaatkan Route Model Binding untuk efisiensi kode.
- Membuat view `patients/edit.blade.php` dengan form yang sudah terisi data.

7. **Implementasi Fitur DELETE (Hapus Pasien)**:

- Mengisi logika method `destroy()`.
- Membuat form hapus di `index.blade.php` dengan metode `DELETE` dan konfirmasi JavaScript.

### Fase 3: Relasi Database (Riwayat Kunjungan)

1. **Model & Migrasi**: Membuat Model `Visit` dan migrasinya.
2. **Definisi Skema & Foreign Key**: Mendefinisikan struktur tabel `visits` dan membuat `foreign key` (`patient_id`) yang terhubung ke tabel `patients` dengan `onDelete('cascade')`.
3. **Definisi Relasi Eloquent**: Menambahkan method relasi `hasMany` (di `Patient.php`) dan `belongsTo` (di `Visit.php`) untuk mendefinisikan hubungan "Satu ke Banyak" antara pasien dan kunjungannya.

## Cara Menjalankan Proyek

1. Clone repositori ini:

```bash
git clone https://github.com/adamfahmil96/klinikku.git
```

2. Masuk ke direktori proyek:

```bash
cd klinikku
```

3. Salin file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

4. Jalankan container Laravel Sail (proses ini akan mengunduh image Docker jika belum ada):

```bash
./vendor/bin/sail up -d
```

5. Generate kunci aplikasi:

```bash
./vendor/bin/sail artisan key:generate
```

6. Jalankan migrasi database untuk membuat semua tabel:

```bash
./vendor/bin/sail artisan migrate
```

7. Aplikasi sekarang dapat diakses di `http://localhost` (disertai port yang ditentukan di `.env`).

## Rencana Selanjutnya (Next Steps)

- [ ] Mengimplementasikan halaman "Detail Pasien" (`show.blade.php`).

- [ ] Menampilkan daftar riwayat kunjungan di halaman detail pasien.

- [ ] Membuat fungsionalitas CRUD untuk data Kunjungan (`Visit`).

- [ ] Memperbaiki tampilan UI/UX agar lebih rapi.

- [ ] Implementasi sistem otentikasi (Login & Register).

## Dokumentasi

[Tautan ke Percapakan Belajar dengan Gemini](https://g.co/gemini/share/5854fc0e5874)


## Developer

- [@adamfahmil](https://github.com/adamfahmil96)

