<?php

class Connection
{
  //  Attribut untuk koneksinya
  private $hostname = "localhost";
  private $username = "root";
  private $password = "";
  // Isikan sesuai dengan nama database
  private $dbname   = "db_toko";

  // Function digunakan untuk menjalankan koneksi
  public function runKoneksi()
  {
    try {
      // Menjalankan koneksi
      return new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->username, $this->password);
    } catch (PDOException $e) {
      // Kalau koneksi error tampilkan pesan error
      echo "Error : " . $e->getMessage();
    }
  }
}
