# FALSTORE E-COMMERCE

![Falstore Logo](falstore-logo.png)

## Deskripsi
Laravel E-Commerce adalah sebuah aplikasi web e-commerce berbasis framework Laravel yang menyediakan fitur lengkap untuk mengelola toko online. Aplikasi ini dirancang untuk memberikan pengalaman belanja online yang mudah dan nyaman bagi pengguna.

## Fitur Utama
- **Manajemen Produk:** Tambah, edit, hapus, dan lihat produk.
- **Kategori Produk:** Organisasi produk berdasarkan kategori.
- **Keranjang Belanja:** Fitur untuk menambahkan produk ke keranjang belanja.
- **Proses Pembayaran:** Integrasi dengan berbagai metode pembayaran.
- **Manajemen Pengguna:** Registrasi, login, dan profil pengguna.
- **Dashboard Admin:** Panel admin untuk mengelola data toko, produk, dan pesanan.
- **Pencarian dan Filter:** Fitur untuk mencari produk berdasarkan nama atau kategori.

## Persyaratan Sistem
- PHP >= 8.1
- Composer
- Laravel >= 10
- MySQL atau database kompatibel lainnya
- Node.js (untuk menjalankan frontend jika menggunakan Laravel Mix)

## Instalasi
1. Clone repository ini:
   ```bash
   git clone https://github.com/username/laravel-ecommerce.git
   ```

2. Masuk ke direktori proyek:
   ```bash
   cd laravel-ecommerce
   ```

3. Install dependensi menggunakan Composer:
   ```bash
   composer install
   ```

4. Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```

5. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Konfigurasikan file `.env` sesuai dengan database dan pengaturan lainnya.

7. Jalankan migrasi database:
   ```bash
   php artisan migrate
   ```

8. Jika ada data awal yang perlu di-seed, jalankan perintah berikut:
   ```bash
   php artisan db:seed
   ```

9. Install dependensi frontend dan build aset (jika menggunakan Laravel Mix):
   ```bash
   npm install
   npm run dev
   ```

10. Jalankan server aplikasi:
    ```bash
    php artisan serve
    ```

11. Akses aplikasi di [http://localhost:8000](http://localhost:8000).

## Struktur Proyek
- **app/**: Berisi file backend aplikasi Laravel.
- **resources/**: Berisi file frontend (blade templates, CSS, JS).
- **routes/**: Berisi definisi rute aplikasi.
- **database/**: Berisi migrasi dan seeder database.

## Kontributor
- Nama Anda ([Profil GitHub Anda](https://github.com/username))
- Kontributor lain jika ada

## Lisensi
Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## Kontak
Jika Anda memiliki pertanyaan atau masukan, silakan hubungi saya di email@example.com.
