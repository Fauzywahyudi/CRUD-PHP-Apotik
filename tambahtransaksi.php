
<script type="text/javascript">
  function hitung(){
    var jml=document.getElementById("jmlbeli").value;
    var harga=document.getElementById("harga").value;
    var kode=document.getElementById("kode").value;
    var stok = document.getElementById("stok").value;

    var diskon = 0;
    if(kode=="OBT001"){
      diskon=((10*harga)/100* jml);
    }else if (kode=="OBT002") {
      diskon=((15*harga)/100* jml);
    }else if (kode=="OBT003") {
      diskon=((20*harga)/100* jml);
    }

    var stokakhir = stok - jml;
    var total = harga * jml;
    var totalbayar = (harga * jml) - diskon;

  document.getElementById("total").value=total;
  document.getElementById("diskon").value=diskon;
  document.getElementById("totalbayar").value=totalbayar;


  }
</script>

<script type="text/javascript">
  function change(value){
    var kode=document.getElementById("kode").value;
    if(kode==""){
      var kosong = "";
      document.getElementById("nama").value=kosong;
      document.getElementById("harga").value=kosong;
      document.getElementById("stok").value=kosong;
    }else{
      var nama = document.getElementById(kode+"1").value;
      var hrg = document.getElementById(kode+"2").value;
      var stok = document.getElementById(kode+"3").value;
      document.getElementById("nama").value=nama;
      document.getElementById("harga").value=hrg;
      document.getElementById("stok").value=stok;
    }
  }
</script>

<div class="">
  <div class="">
    <center>
      <h2>TRANSAKSI APOTIK BERSAMA</h2>
    </center>
  </div>
  <div class="">
    <center>
      <form class="" action="" method="post">
        <table>
          <tr style="height:50px;">
            <td>ID TRANSAKSI</td>
            <td style="width:20px"></td>
            <td><input type="text" name="id" id="id" placeholder="Input ID Transaksi"> </td>
          </tr>
          <tr style="height:50px">
            <td>TGL TRANSAKSI</td>
            <td style="width:20px"></td>
            <td><input type="date" name="tgl" id="tgl"> </td>
          </tr>
          <tr style="height:50px">
            <td>KODE OBAT</td>
            <td style="width:20px"></td>
            <td>
              <?php
              include 'koneksi.php';
              $sql = mysqli_query($kon,"SELECT * FROM apotik_obat");
              $no=0;
              while ($res=mysqli_fetch_array($sql)) {
                ?>
                <input type='hidden' name='<?php echo "$res[kdobat]"."1"; ?>' id="<?php echo "$res[kdobat]"."1"; ?>" value='<?php echo "$res[nmobat]"; ?>'>
                <input type='hidden' name='<?php echo "$res[kdobat]"."2"; ?>' id="<?php echo "$res[kdobat]"."2"; ?>" value='<?php echo "$res[hrgobat]"; ?>'>
                <input type='hidden' name='<?php echo "$res[kdobat]"."3"; ?>' id="<?php echo "$res[kdobat]"."3"; ?>" value='<?php echo "$res[stokobat]"; ?>'>

                <?php
                $no++;
              }
               ?>
              <select class="" name="kode" id="kode" style="width:100%" onchange="change(this.value,)">
                <option value="">--PILIH KODE OBAT--</option>
                <?php
                include 'koneksi.php';
                $sql = mysqli_query($kon,"SELECT * FROM apotik_obat");
                while ($res=mysqli_fetch_array($sql)) {
                  echo "
                  <option value='$res[kdobat]'>$res[kdobat]</option>
                  ";
                }
                 ?>
              </select>

            </td>
          </tr>
          <tr style="height:50px">
            <td>NAMA OBAT</td>
            <td style="width:20px"></td>
            <td><input type="text" name="nama" id="nama" readonly> </td>
          </tr>
          <tr style="height:50px">
            <td>HARGA OBAT</td>
            <td style="width:20px"></td>
            <td><input type="text" name="harga" id="harga" readonly> </td>
          </tr>
          <tr style="height:50px">
            <td>STOCK OBAT</td>
            <td style="width:20px"></td>
            <td><input type="text" name="stok" id="stok" readonly> </td>
          </tr>
          <tr style="height:50px">
            <td>JUMLAH BELI</td>
            <td style="width:20px"></td>
            <td><input type="text" name="jmlbeli" id="jmlbeli" placeholder="Input Jumlah Beli"> </td>
          </tr>
          <tr style="height:50px">
            <td></td>
            <td></td>
            <td colspan="1"><button type="button" name="button" onclick="hitung()" style="width:100%">HITUNG</button> </td>
          </tr>

        </table>
        <table>
          <tr style="height:50px">
            <td>TOTAL</td>
            <td style="width:20px"></td>
            <td><input type="text" name="total" id="total" readonly> </td>
          </tr>
          <tr style="height:50px">
            <td>DISKON</td>
            <td style="width:20px"></td>
            <td><input type="text" name="diskon" id="diskon" readonly> </td>
          </tr>
          <tr style="height:50px">
            <td>TOTAL BAYAR</td>
            <td style="width:20px"></td>
            <td><input type="text" name="totalbayar" id="totalbayar" readonly>
              <input type="hidden" name="sisastok" id="sisastok" value="">
            </td>
          </tr>
          <tr style="height:50px">
            <td colspan="3"><input type="submit" name="submit" value="SIMPAN TRANSAKSI" style="width:100%"> </td>
          </tr>
        </table>
      </form>
    </center>
  </div>
</div>

<?php

if (isset($_POST['submit'])) {
  $id   = $_POST['id'];
  $tgl  = $_POST['tgl'];
  $kode = $_POST['kode'];
  $jmlbeli  = $_POST['jmlbeli'];
  $total    = $_POST['total'];
  $diskon   = $_POST['diskon'];
  $totbayar = $_POST['totalbayar'];

  $sql = mysqli_query($kon,"INSERT INTO apotik_transaksi VALUES('$id',NOW(),'$kode','$jmlbeli','$total','$diskon','$totbayar')");

  if ($sql) {
    echo "sukses";
    echo "<META HTTP-EQUIV='Refresh' Content='1; URL=transaksi.php'>";
  }
}
 ?>
