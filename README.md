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
   git clone https://github.com/ramadhafidz/falstore_e_commerce.git
   ```
   atau jika menggunakan github cli:
   ```bash
   gh repo clone ramadhafidz/falstore_e_commerce
   ```

2. Masuk ke direktori proyek:
   ```bash
   cd e_commerce
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

6. Konfigurasikan file `.env` sesuai dengan database dan pengaturan lainnya:
    ```.env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=falstore
    DB_USERNAME=root
    DB_PASSWORD={password-mysql}
    ```
    Kosongkan jika tidak menggunakan password

7. Jalankan migrasi database:
   ```bash
   php artisan migrate
   ```

8. Ambil data yang sudah di setup dengan menjalankan perintah berikut:
   ```bash
   php artisan db:seed
   ```

9.  Jalankan server aplikasi:
    ```bash
    php artisan serve
    ```

## Struktur Proyek
- **app/**: Berisi file backend aplikasi Laravel.
- **resources/**: Berisi file frontend (blade templates, CSS, JS).
- **routes/**: Berisi definisi rute aplikasi.
- **database/**: Berisi migrasi dan seeder database.

## Kontributor
- Hafidz Ramadhan Ghiffari ([ramadhafidz](https://github.com/ramadhafidz))
- Rifaldi Abyansyah ([Sifalrei](https://github.com/Sifalrei))
- Ismet Maulana Azhari ([IsmetMaulanaAzhari](https://github.com/IsmetMaulanaAzhari))
- Royhan Muhammad Al Biruni ([RoyhanAB](https://github.com/RoyhanAB))
- Gathan Rafii Manaf ([ss](https://github.com/))

## Lisensi
Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## Kontak
Jika Anda memiliki pertanyaan atau masukan, silakan hubungi saya di email@example.com.
