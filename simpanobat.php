<?php
include 'koneksi.php';

$kd   = $_POST['kode'];
$nm   = $_POST['nama'];
$jns   = $_POST['jenis'];
$hrg   = $_POST['harga'];
$stok   = $_POST['stok'];

// echo "$kd, $nm, $jns, $hrg, $stok";

$sql = mysqli_query($kon,"INSERT INTO apotik_obat VALUES('$kd','$nm','$jns','$hrg','$stok')");

if ($sql) {
  echo "sukses";
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=obat.php'>";
}

 ?>
