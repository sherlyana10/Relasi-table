# Manajemen Produk dan Kategori

## Deskripsi Proyek
Proyek ini adalah aplikasi berbasis web yang dibuat menggunakan Laravel untuk mengelola kategori dan produk. Aplikasi ini memungkinkan pengguna untuk menambahkan, mengedit, melihat, dan menghapus kategori serta produk yang terkait.

## Fitur
- Manajemen kategori: Tambah, edit, hapus, dan lihat daftar kategori.
- Manajemen produk: Tambah, edit, hapus, dan lihat daftar produk.
- Relasi one-to-many antara kategori dan produk.
- Validasi input pada form kategori dan produk.
- Notifikasi sukses setelah tindakan CRUD berhasil dilakukan.

## Instalasi
1. Clone repositori ini:
   ```sh
   git clone https://github.com/username/repository.git
   ```
2. Masuk ke direktori proyek:
   ```sh
   cd nama_proyek
   ```
3. Instal dependensi menggunakan Composer:
   ```sh
   composer install
   ```
4. Copy file `.env.example` menjadi `.env`:
   ```sh
   cp .env.example .env
   ```
5. Generate application key:
   ```sh
   php artisan key:generate
   ```
6. Konfigurasi database di file `.env`:
   ```env
   DB_DATABASE=nama_database
   DB_USERNAME=user_database
   DB_PASSWORD=password_database
   ```
7. Jalankan migrasi database:
   ```sh
   php artisan migrate
   ```
8. Jalankan server lokal:
   ```sh
   php artisan serve
   ```
   Aplikasi dapat diakses melalui `http://127.0.0.1:8000`.

## Penggunaan
### Manajemen Kategori
- **Melihat daftar kategori**: `GET /kategori`
- **Menambahkan kategori**: `POST /kategori`
- **Melihat detail kategori**: `GET /kategori/{id}`
- **Mengedit kategori**: `PUT /kategori/{id}`
- **Menghapus kategori**: `DELETE /kategori/{id}`

### Manajemen Produk
- **Melihat daftar produk**: `GET /produk`
- **Menambahkan produk**: `POST /produk`
- **Mengedit produk**: `PUT /produk/{id}`
- **Menghapus produk**: `DELETE /produk/{id}`

## Struktur Kode
```
app/
├── Http/
│   ├── Controllers/
│   │   ├── KategoriController.php
│   │   ├── ProdukController.php
├── Models/
│   ├── Kategori.php
│   ├── Produk.php
resources/
├── views/
│   ├── kategori/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   ├── edit.blade.php
│   ├── produk/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   ├── edit.blade.php
```

## Lisensi
Proyek ini dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).

