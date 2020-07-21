<?php
include 'koneksi.php';

$kd   = $_POST['kode'];
$nm   = $_POST['nama'];
$jns   = $_POST['jenis'];
$hrg   = $_POST['harga'];
$stok   = $_POST['stok'];

// echo "$kd, $nm, $jns, $hrg, $stok";

$sql = mysqli_query($kon,"UPDATE apotik_obat set nmobat='$nm', jnsobat='$jns', hrgobat='$hrg', stokobat='$stok' WHERE kdobat='$kd' ");

if ($sql) {
  echo "sukses";
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=obat.php'>";
}

 ?>
