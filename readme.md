# ☕ Sistem Kasir Kedai Amor

<p align="center">
  <img src="assets/logo.png" alt="Logo Kedai Amore" width="300"/>
</p>
  <p align="center">< Logo Kedai Amor ></p>

## Deskripsi Singkat :

### Membuat sistem kasir untuk sebuah kedai disebuah desa dengan tujuan mempermudah transaksi dan management

## ⚙️ Cara Menjalankan Sistem :

### A. Setup Project

### 1. Clone repository dari terminal dan pastikan sudah ada dilokasi menyimpan project

```bash
git clone https://github.com/haryodarma/Sistem_Kasir_Kedai_Amor.git
```

### 2. Buka project di vs code

### 3. Buka terminal di vs code

### 4. Pindah ke folder frontend

### 5. Install package di folder frontend

##### \*Sesuiakan dengan node package manager yang anda gunakan

```bash
pnpm install
```

### 6. Pindah ke folder backend

### 7. Install package di folder backend

```bash
composer install
```

### 8. Buat file .env

```bash
touch .env
```

### 9. Copy semua isi file di .env.example ke .env

```bash
cp .env.example .env
```

### 10. Sesuaikan variable Database dengan database yang anda gunakan

```makefile
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 11. Jalankan kode ini untuk generate key jwt

```bash
php artisan key:generate
```

### 12. Jalankan kode ini untuk menghubungkan folder /storage/public ke folder /public

```bash
php artisan storage:link
```

### 13. Jalankan kode ini di folder backend untuk menjalankan backend

```bash
php artisan serve
```

### 14. Jalankan kode ini di folder frontend untuk menjalankan frontend

##### \*Sesuiakan dengan node package manager yang anda gunakan

```bash
npm run build
npm run build
```

## B. Sistem Customer

### 1. Tekan button mulai untuk masuk ke bagian customer

### 2. Tambahkan beberapa product ke bagian order

### 3. Lakukan checkout

## C. Sistem Admin (CMS)

### 1. Tekan button login

### 2. Masukan username dan password yang sudah terdaftar

### 3. Pada bagian sidebar ada beberapa menu seperti bagian transaksi, bagian product, dan bagian lainnya

### 4. Pada setiap sub bagian didalamnya telah disediakan table yang berisi data dan button add, update dan delete

## D. Catatan

### 1. Pada bagian transaksi user hanya dapat melakukan update status transaksi untuk keamanan bahwa transaksi yang telah terjadi tidak dapat dihapus dan diubah

## Informasi Akun Uji Coba :

```json
{
  "username": "owner",
  "password": "password"
}
```

## Dokumentasi API :

### Berikut adalah dokementasi API dari Sistem Aplikasi Kedai Amor yang dapat diakses melalui link berikut # ☕ Sistem Kasir Kedai Amor

## Deskripsi Singkat :

### Membuat sistem kasir untuk sebuah kedai disebuah desa dengan tujuan mempermudah transaksi dan management

## ⚙️ Cara Menjalankan Sistem :

### A. Setup Project

### 1. Clone repository dari terminal dan pastikan sudah ada dilokasi menyimpan project

```bash
git clone https://github.com/haryodarma/Sistem_Kasir_Kedai_Amor.git
```

### 2. Buka project di vs code

### 3. Buka terminal di vs code

### 4. Pindah ke folder frontend

### 5. Install package di folder frontend

Jika menggunakan pnpm :

```bash
pnpm install
```

Jika menggunakan npm :

```bash
pnpm install
```

### 6. Pindah ke folder backend

### 7. Install package di folder backend

```bash
composer install
```

### 8. Buat file .env

```bash
touch .env
```

### 9. Copy semua isi file di .env.example ke .env

```bash
cp .env.example .env
```

### 10. Sesuaikan variable Database dengan database yang anda gunakan

```makefile
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 11. Jalankan kode ini untuk generate key jwt

```bash
php artisan key:generate
```

### 12. Jalankan kode ini untuk menghubungkan folder /storage/public ke folder /public

```bash
php artisan storage:link
```

### 13. Jalankan kode ini di folder backend untuk menjalankan backend

```bash
php artisan serve
```

### 14. Jalankan kode ini di folder frontend untuk menjalankan frontend

```bash
pnpm run build
pnpm run build
```

## B. Sistem Customer

### 1. Tekan button mulai untuk masuk ke bagian customer

### 2. Tambahkan beberapa product ke bagian order

### 3. Lakukan checkout

## C. Sistem Admin (CMS)

### 1. Tekan button login

### 2. Masukan username dan password yang sudah terdaftar

### 3. Pada bagian sidebar ada beberapa menu seperti bagian transaksi, bagian product, dan bagian lainnya

### 4. Pada setiap sub bagian didalamnya telah disediakan table yang berisi data dan button add, update dan delete

## D. Catatan

### 1. Pada bagian transaksi user hanya dapat melakukan update status transaksi untuk keamanan bahwa transaksi yang telah terjadi tidak dapat dihapus dan diubah

## Informasi Akun Uji Coba :

```json
{
  "username": "owner",
  "password": "password"
}
```

## Dokumentasi API :

### Berikut adalah dokementasi API dari Sistem Aplikasi Kedai Amor yang dapat diakses melalui link berikut https://documenter.getpostman.com/view/33379055/2sBXVcmYWs
