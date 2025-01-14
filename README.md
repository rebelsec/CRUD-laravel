# CRUD Laravel 11 dengan Laragon dan MySQL

implementasi aplikasi CRUD (Create, Read, Update, Delete) menggunakan Laravel 11, yang dijalankan di Laragon dengan MySQL sebagai database.

## Prasyarat

Sebelum memulai, pastikan Anda sudah menginstal dan mengonfigurasi perangkat berikut:

1. **Laragon**:
   - Laragon digunakan sebagai server pengembangan lokal.
   - Pastikan Laragon sudah terinstal dan servernya berjalan.

2. **MySQL**:
   - MySQL harus diinstal dan dikonfigurasi melalui Laragon.
   - Gunakan MySQL yang sudah terinstal di Laragon atau konfigurasi sesuai dengan preferensi Anda.

3. **PHP**:
   - Laravel membutuhkan PHP versi 8.x atau lebih tinggi. Laragon sudah mengonfigurasi PHP untuk bekerja dengan Laravel.

4. **Git** (opsional):
   - Jika Anda menggunakan Git untuk mengelola versi proyek.

## Langkah-langkah Instalasi

Ikuti langkah-langkah berikut untuk menyiapkan proyek CRUD Laravel di Laragon.

### 1. Persiapkan Proyek Laravel
Buka terminal atau command prompt pada Laragon dan arahkan ke folder `www` di dalam Laragon (misalnya `C:/laragon/www/`).

Kemudian buat proyek Laravel baru:

```bash
composer create-project --prefer-dist laravel/laravel laravel-11
