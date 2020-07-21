<?php include 'koneksi.php';

$rule=1;
$sql=mysqli_query($kon,"select * from nilai_rule");
while ($rm=mysqli_fetch_array($sql)) {
  $nilai_cf=$rm['nilai_cf'];

  //echo "penyakitnya adalah $rm[0] :";
  $sqlr=mysqli_query($kon,"select * from rule where rule='$rule'");
$a=0;
  $cou=0;
  while ($rmr=mysqli_fetch_array($sqlr)) {
    //echo "<li>gejalanya adalah $rmr[id_gejala]";
    $sqln=mysqli_query($kon,"select * from fakta_baru where id_gejala='$rmr[id_gejala]'");

    while ($rmn=mysqli_fetch_array($sqln)) {
      //echo " nilainya adalah $rmn[nilai]</li>";
      $nilai[$a]=$rmn['nilai'];

    }

$a++;

  }
   // echo "nilai pertama $nilai[0]<br>";
  $min=min($nilai);
  //echo " Min adalah $min <br>";
  $cf=$min*$nilai_cf;
  //echo "cf rule adalah $nilai_cf <br>";

  echo "CF$rule = $min * $nilai_cf<br>";
  echo "CF$rule adalah $cf<br>";

  mysqli_query($kon,"update nilai_rule set cf='$cf' where id_rule='$rm[id_rule]'");

  echo "<hr>";

  $rule++;
}

$sqla=mysqli_query($kon,"select * from penyakit");
while ($rma=mysqli_fetch_array($sqla)) {

  $sqlp=mysqli_query($kon,"select * from nilai_rule where id_penyakit='$rma[id_penyakit]'");
  $jum=mysqli_num_rows($sqlp)-1;
  $c=0;
  while ($rmp=mysqli_fetch_array($sqlp)) {
    echo "<li>nilai cf dari $rma[id_penyakit] nya $rmp[cf]</li>";
    $cf_akhir[$c]=$rmp['cf'];
$c++;
  }

$z=0;

while ($z < $jum) {

  $sqlpj=mysqli_query($kon,"select * from penyakit where id_penyakit='$rma[id_penyakit]'");
  $pjum=mysqli_num_rows($sqlpj);
  $apjum=mysqli_fetch_array($sqlpj);


  if ($apjum['cf_akhir']==0) {
    $b=0;
    $d=1;
    while ($b < 1) {
      $jumlahkan=$cf_akhir[$b]+$cf_akhir[$d]*(1-$cf_akhir[$b]);
      $last=number_format($jumlahkan,3);
      echo "jumlah nya $jumlahkan<br>";
      mysqli_query($kon,"update penyakit set cf_akhir='$last' where id_penyakit='$rma[id_penyakit]'");
  $b++;
  $d++;
    }


  }else {

    //echo "ini akhir";
    $sql_ca=mysqli_query($kon,"select * from penyakit where id_penyakit='$rma[id_penyakit]'");
    $rma_ca=mysqli_fetch_array($sql_ca);
     $e=2;

     $jumlahkan1=$rma_ca['cf_akhir']+$cf_akhir[$e]*(1-$rma_ca['cf_akhir']);
     $last=number_format($jumlahkan1,3);
     mysqli_query($kon,"update penyakit set cf_akhir='$last' where id_penyakit='$rma[id_penyakit]'");

     echo "akhir $last";

     $e++;
  }
  $z++;

}
echo "<hr>";
}

?>
<h1>hasil akhir</h1>
<?php
  $sqlfin=mysqli_query($kon,"select * from penyakit");
  while ($rmfin=mysqli_fetch_array($sqlfin)) {

  }
 ?>
