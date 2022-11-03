<?php
require "models/Barang_model.php";
$barang = new Barang();
$tampil = $barang->tampil_barang_id($_GET["id"]);
echo $_GET["id"]  . "<br/>";
echo $tampil->barang_nama . "<br/>";
echo $tampil->barang_harga  . "<br/>";
echo $tampil->barang_stok  . "<br/>";
