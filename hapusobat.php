<?php
include 'koneksi.php';

$kd=$_GET['kd'];

$sql = mysqli_query($kon,"DELETE FROM apotik_obat WHERE kdobat='$kd'");

if ($sql) {
  echo "sukses";
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=obat.php'>";
}

 ?>
