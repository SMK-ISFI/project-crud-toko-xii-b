<!DOCTYPE html>
<html lang="en">

<head>
  <title>Toko Ismail</title>
</head>

<body>
  <h1>Daftar Barang Toko Ismail</h1>
  <!-- 
    - Tag untuk berpindah halaman menggunakan tag <a> (anchor)
    - href diisi tujuan halaman
    - Diantara tag pembuka dan penutup <a> tuliskan keterangan
      yang akan tampil
   -->
  <a href="barang-tambah.php">Tambah Data Barang</a>
  <!-- table untuk menampilkan data barang -->
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Masukkan file model Barang
      require "models/Barang_model.php";
      /**
       * Buat object dari class Model Barang,
       * object tersebut digunakan untuk mengakses
       * function tampil_barang()
       */
      $barang = new Barang();
      // akses function tampil_barang()
      $tampil = $barang->tampil_barang();
      /** 
       * Variable no digunakan untuk menampilkan
       * nomor urut pada table
       */
      $no = 1;
      /**
       * Tampilkan datanya menggunakan
       * perulangan foreach
       */
      foreach ($tampil as $t) {
        echo "
          <tr>
            <td>$no</td>
            <td>$t->barang_nama</td>
            <td>$t->barang_harga</td>
            <td>$t->barang_stok</td>
            <td>
              <a href='barang-edit.php?id=$t->barang_id'>Edit</a>
            </td>
          </tr>
          ";
        /**
         * nilai pada variabel $no akan
         * ditambah 1 setiap satu perulangan
         * $no++ operator increment
         */
        $no++;
      }
      ?>
    </tbody>
  </table>

</body>

</html>