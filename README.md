
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

### Fase 4: Mengelola Data Relasional (CRUD Kunjungan Lengkap)

1. **Controller & Nested Resource Routes**: Membuat `VisitController` dan menggunakan `Route::resource('patients.visits', ...)->shallow()` untuk *routing* yang efisien dan bersih.
2. **Implementasi Fitur Create**: Berhasil membuat form dan logika untuk menambahkan data kunjungan baru yang terikat pada pasien tertentu.
3. **Implementasi Fitur Update & Delete**:

- Membuat fungsionalitas Update untuk mengedit data kunjungan yang sudah ada, memanfaatkan relasi (`$visit->patient`) di view.
- Membuat fungsionalitas Delete untuk menghapus data kunjungan langsung dari halaman detail pasien.
- Dengan ini, modul CRUD untuk Kunjungan telah 100% lengkap.

### Fase 5: Peningkatan UI/UX

1. **Flash Messages**: Menambahkan pesan notifikasi (umpan balik) setelah setiap aksi CRUD berhasil pada kedua modul untuk meningkatkan *user experience*.
2. **Setup Tailwind CSS v4**: Mengonfigurasi `vite.config.js` dengan plugin `@tailwindcss/vite` untuk setup modern tanpa `tailwind.config.js`.
3. **Layout Induk (Master Layout)**: Membuat file `layouts/app.blade.php` menggunakan `@yield` untuk menjadi template utama bagi semua halaman.
4. **Perombakan Total Tampilan**: Menerapkan layout dan *utility class* Tailwind ke **semua halaman** (`index`, `create`, `edit`, `show` untuk Pasien dan Kunjungan) untuk menciptakan tampilan yang konsisten dan profesional.

### Fase 6: Keamanan & Otentikasi

1. **Instalasi Laravel Breeze:** Menambahkan sistem otentikasi (Login, Register, Logout) lengkap.
2. **Perlindungan Rute:** Mengamankan semua rute data (`patients` dan `visits`) menggunakan **middleware `auth`** sehingga tidak bisa diakses sebelum login.
3. **Integrasi UI Breeze:**

- Menyelesaikan konflik layout dengan memodifikasi `app.blade.php` agar kompatibel dengan *layout* Breeze dan *layout* custom kita.
- Mengonfigurasi ulang **Tailwind CSS v3** (yang diinstal oleh Breeze) dan mengaktifkan plugin `@tailwindcss/forms` untuk memperbaiki tampilan *form*.

4. **Soft Deletes:** Mengimplementasikan fitur **Soft Deletes** pada Model Pasien. Ini membuat data tidak terhapus secara permanen (hanya ditandai) dan secara otomatis menyembunyikannya dari semua *query* aplikasi, termasuk pencarian.

### Fase 7: Integrasi Alur Pengguna & Fitur Tambahan

1. **Alur Login yang Disesuaikan:**

- Mengubah rute `dashboard` agar me-redirect ke halaman `patients.index` sebagai halaman utama setelah login.
- Memodifikasi `navigation.blade.php` untuk mengubah link "Dashboard" menjadi "Pasien".

2. **Fitur Pencarian:**

- Mengimplementasikan **fitur pencarian** di halaman daftar pasien berdasarkan nama.

3. **UX Polish:**

- Menyempurnakan pesan *empty state* pada tabel pasien untuk membedakan antara "Belum ada data" dan "Pasien tidak ditemukan" saat melakukan pencarian.

4. **Optimalisasi Paginasi:**

- Mengubah query dari .`get()` menjadi `.paginate(10)` untuk optimalisasi performa.
- Menambahkan link paginasi (`{{ $patients->links() }}`) pada view.
- Memastikan paginasi tetap berfungsi saat fitur pencarian aktif menggunakan `->withQueryString()`.
- Mengatur Paginator untuk menggunakan *style* Tailwind via `AppServiceProvider`.

5. **Validasi Form:** Menampilkan **pesan error validasi** secara spesifik di bawah setiap *field* pada semua *form*.

6. **Fitur "Trash" & "Restore":** Membuat halaman "Trash" untuk melihat pasien yang terhapus dan menambahkan fungsionalitas **Restore** untuk memulihkan data.

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

4. Jalankan `composer install`.

5. Jalankan container Laravel Sail (proses ini akan mengunduh image Docker jika belum ada):

```bash
./vendor/bin/sail up -d
```

6. Masuk ke dalam container (`docker exec -it <nama_container> bash`), lalu jalankan `npm install`.

7. Generate kunci aplikasi:

```bash
./vendor/bin/sail artisan key:generate
```

8. Jalankan migrasi database untuk membuat semua tabel:

```bash
./vendor/bin/sail artisan migrate
```

9.  Jalankan `npm run dev` di dalam container.

10. Aplikasi sekarang dapat diakses di `http://localhost` (disertai port yang ditentukan di `.env`).

## Rencana Selanjutnya (Next Steps)

- [ ] Melakukan *refactoring* dan membersihkan kode.

- [ ] Menambahkan *role* pengguna (misal: Admin vs. Staf).

## Dokumentasi

[Tautan ke Percapakan Belajar dengan Gemini](https://g.co/gemini/share/5854fc0e5874)

## Developer

- [@adamfahmil](https://github.com/adamfahmil96)
