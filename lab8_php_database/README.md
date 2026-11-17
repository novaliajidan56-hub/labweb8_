# Laporan Praktikum 8: PHP dan Database MySQL

**Nama:** [Masukkan Nama Kamu]  
**NIM:** [Masukkan NIM Kamu]  
**Mata Kuliah:** Pemrograman Web OBE

## 1. Persiapan Database

Membuat database `latihan1` dan tabel `data_barang` menggunakan MySQL via phpMyAdmin, lalu melakukan insert data awal.
![Screenshot Database]([GANTI DENGAN LINK SCREENSHOT KAMU])

## 2. Membuat File Koneksi (koneksi.php)

File ini digunakan untuk menghubungkan aplikasi PHP dengan server MySQL dan database `latihan1`.
![Screenshot Tes Koneksi]([GANTI DENGAN LINK SCREENSHOT KAMU])

## 3. Menampilkan Data / Read (index.php)

File `index.php` dibuat untuk menampilkan data dari database ke dalam bentuk tabel HTML.
![Screenshot Tampilan Data Barang]([GANTI DENGAN LINK SCREENSHOT KAMU])

## 4. Menambah Data / Create (tambah.php)

File `tambah.php` digunakan untuk membuat form input data barang baru beserta fitur upload gambar, yang kemudian akan disimpan ke dalam database.
![Screenshot Form Tambah Data]([GANTI DENGAN LINK SCREENSHOT KAMU])
![Screenshot Hasil Setelah Ditambah]([GANTI DENGAN LINK SCREENSHOT KAMU])

## 5. Mengubah Data / Update (ubah.php)

File `ubah.php` berfungsi untuk mengambil data barang berdasarkan `id_barang` lalu menampilkannya di form agar bisa diedit dan disimpan kembali.
![Screenshot Form Ubah Data]([GANTI DENGAN LINK SCREENSHOT KAMU])
![Screenshot Hasil Setelah Diubah]([GANTI DENGAN LINK SCREENSHOT KAMU])

## 6. Menghapus Data / Delete (hapus.php)

Fungsi hapus dipanggil ketika mengklik link "Hapus" pada tabel di halaman index, data akan terhapus berdasarkan parameter ID yang dikirimkan.
![Screenshot Hasil Setelah Dihapus]([GANTI DENGAN LINK SCREENSHOT KAMU])
