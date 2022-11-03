<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tambah Barang Baru</title>
</head>

<body>
  <h1>Tambah Barang Baru</h1>
  <!-- 
    ACTION = barang-tambah-proses.php
    METHOD = POST
   -->
  <form action="barang-tambah-proses.php" method="POST">
    <div>
      <label for="">Nama Barang</label>
      <input type="text" name="barang-nama" />
    </div>
    <div>
      <label for="">Harga Barang</label>
      <input type="number" name="barang-harga" />
    </div>
    <div>
      <label for="">Stok Barang</label>
      <input type="number" name="barang-stok" />
    </div>
    <input type="submit" name="barang-simpan" value="Simpan" />
  </form>
</body>

</html>