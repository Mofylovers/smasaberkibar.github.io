<?php
// Cek apakah data dikirim melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    // Lakukan sesuatu dengan data, misalnya simpan ke database
    // ... (kode untuk menyimpan ke database)

    // Tampilkan pesan konfirmasi atau error
    echo "Data siswa berhasil disimpan."; // Ganti dengan pesan yang sesuai
} else {
    // Jika data tidak dikirim melalui POST, tampilkan pesan error atau halaman lain
    echo "Data tidak valid.";
}
?>

