<?php
// Masukkan file koneksi
require "Connection.php";

class Barang extends Connection
{
  // Atribut yang ada di tb_barang
  public $barang_nama;
  public $barang_harga;
  public $barang_stok;

  // Method Constructor
  public function __construct()
  {
    // Menjalankan koneksi di dalam class model Barang
    $this->connect = $this->runKoneksi();
  }

  // Function untuk mengambil semua data yang ada di tb_barang
  public function tampil_barang()
  {
    // Query untuk mendapatkan semua data barang
    $query = "SELECT * FROM tb_barang";
    // query hubungkan ke koneksi menggunakan prepare()
    $data = $this->connect->prepare($query);
    // query eksekusi menggunakan execute()
    $data->execute();
    /** 
     * kembalikan data hasil eksekusi dan
     * ditampilkan sebagai object
     * menggunakan fetchAll()
     */
    return $data->fetchAll(PDO::FETCH_OBJ);
  }

  // Function untuk menambahkan data barang baru
  public function tambah_barang()
  {
    // Query untuk menambahkan data barang
    $query = "INSERT INTO tb_barang(barang_nama, barang_harga, barang_stok) VALUES (?, ?, ?)";
    // Query hubungkan ke koneksi menggunakan prepare()
    $data = $this->connect->prepare($query);
    // Data baru kita tempelkan ke query menggunakan bindParam()
    /**
     * bindParam menerima 2 parameter
     * param 1 urutan tanda tanya yang diquery
     * param 2 data yang ada di dalam atribut class Barang
     */
    $data->bindParam(1, $this->barang_nama);
    $data->bindParam(2, $this->barang_harga);
    $data->bindParam(3, $this->barang_stok);
    // query eksekusi menggunakan execute()
    return $data->execute();
  }

  // Function untuk mendapatkan data barang berdasarkan id
  /**
   * $id yang ada di parameter akan diisi dengan id yang dikirim
   * dari url atau melalui method GET
   */
  public function tampil_barang_id($id)
  {
    // Query untuk mendapatkan data barang berdasarkan id
    $query = "SELECT * FROM tb_barang WHERE barang_id=?";
    $data = $this->connect->prepare($query);
    $data->bindParam(1, $id);
    $data->execute();
    return $data->fetch(PDO::FETCH_OBJ);
  }
}
