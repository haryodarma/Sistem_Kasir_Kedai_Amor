<h1>Judul Proyek : </h1>
<p>Sistem Kasir Kedai Amor</p>

<h1>Deskripsi Singkat : </h1>
<p>Membuat sistem kasir untuk sebuah kedai disebuah desa dengan tujuan mempermudah transaksi dan management</p>

<h1>Cara Menjalankan Sistem : </h1>
<h2>A. Setup Project</h2>
<p>1. Clone repository dari terminal dan pastikan sudah ada dilokasi menyimpan project. ex: git clone http://github.com/</p>
<p>2. Buka project di vs code</p>
<p>3. Buka terminal di vs code</p>
<p>4. Pindah ke folder frontend</p>
<p>5. Install package di folder frontend. ex: pnpm run dev (sesuiakan dengan package manager yang anda gunakan)</p>
<p>6. Pindah ke folder backend</p>
<p>7. Install package di folder backend. ex: composer install</p>
<p>8. Buat file .env</p>
<p>9. Copy semua isi file di .env.example</p>
<p>10. Paste ke dalam file .env</p>
<p>11. Sesuaikan variable Database dengan database yang anda gunakan</p>
<p>12. Jalankan "php artisan jwt:secret" untuk generate key jwt</p>
<p>13. Jalankan "php artisan storage:link" untuk menghubungkan folder /storage/public ke folder /public</p>
<p>14. Jalankan backend dengan "php artisan serve" di folder backend</p>
<p>15. Jalankan frontend dengan "pnpm run dev" di folder frontend</p>

<h2>B. Sistem Customer</h2>
<p>1. Tekan button mulai untuk masuk ke bagian customer</p>
<p>2. Tambahkan beberapa product ke bagian order</p>
<p>3. Lakukan checkout</p>

<h2>C. Sistem Admin (CMS)</h2>
<p>1. Tekan button login</p>
<p>2. Masukan username dan password yang sudah terdaftar</p>
<p>3. Pada bagian sidebar ada beberapa menu seperti bagian transaksi, bagian product, dan bagian lainnya</p>
<p>4. Pada setiap sub bagian didalamnya telah disediakan table yang berisi data dan button add, update dan delete</p>

<h2>D. Catatan</h2>
<p>1. Pada bagian transaksi user hanya dapat melakukan update status transaksi untuk keamanan bahwa transaksi yang telah terjadi tidak dapat dihapus dan diubah</p>

<h1>Informasi Akun Uji Coba :</h1>
<h2>Login sebagain admin</h2>
<p>Username : owner</p>
<p>Password : password</p>

<h1>Dokumentasi API :</h1>
<p>Berikut adalah dokementasi API dari Sistem Aplikasi Kedai Amor yang dapat diakses melalui link berikut http://localhost:3000</p>
