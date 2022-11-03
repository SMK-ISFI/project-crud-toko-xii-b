<?php
// Hubungkan ke file Barang_model.php yang ada di folder models
require "models/Barang_model.php";
// Buat object dari class Barang Models
$barang = new Barang();
/**
 * Ketika tombol dengan name barang-simpan ditekan
 * maka ambil semua data yang ada di dalam input
 */
if (isset($_POST["barang-simpan"])) {
  /**
   * Setiap nilai yang ada di inputan
   * dimasukkan ke dalam setiap atribut yang ada di class Barang
   * mneggunakan object $barang
   */
  $barang->barang_nama = $_POST["barang-nama"];
  $barang->barang_harga = $_POST["barang-harga"];
  $barang->barang_stok = $_POST["barang-stok"];
  // Data di atas dikirim ke dalam function tambah_barang()
  $barang->tambah_barang();
  /**
   * Setelah data berhasil disimpan ke db
   * kembali ke halaman index.php
   */
  header("Location: index.php");
}
