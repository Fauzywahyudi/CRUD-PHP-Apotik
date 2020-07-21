<div class="">
  <div class="" style="height: 80px">
    <center>
      <div class="" style="height:50px">
        <h2>DAFTAR OBAT APOTIK BERSAMA</h2>
      </div>
    </center>
    <div class="">
      <a href="tambahtransaksi.php" style="text-decoration:none">
        <button type="button" name="button" style="background-color:yellow; height: 40px">Tambah Transaksi</button>
      </a>
    </div>
    <div class="">
      <div class="">
        <table width="100%" border="1">
          <tr>
            <th>NO</th>
            <th>ID TRANSAKSI</th>
            <th>TGL TRANSAKSI</th>
            <th>KODE OBAT</th>
            <th>NAMA OBAT</th>
            <th>HARGA OBAT</th>
            <th>JUMLAH BELI</th>
            <th>TOTAL </th>
            <th>DISKON</th>
            <th>TOTAL BAYAR</th>
          </tr>

          <?php
            include 'koneksi.php';

            $no=1;
            $sql = mysqli_query($kon,"SELECT * FROM apotik_transaksi a INNER JOIN apotik_obat b ON a.kdobat=b.kdobat");
            while ($res=mysqli_fetch_array($sql)) {
              echo "<tr>
              <td align=center>$no </td>
              <td align=center>$res[idtrans] </td>
              <td align=center>$res[tgltrans] </td>
              <td align=center>$res[kdobat] </td>
              <td align=center>$res[nmobat] </td>
              <td align=center>Rp. $res[hrgobat] </td>
              <td align=center>$res[jmlbeli] </td>
              <td align=center>Rp. $res[total] </td>
              <td align=center>Rp. $res[diskon] </td>
              <td align=center>Rp. $res[totalbayar] </td>

              </tr>
              ";
            }

            $no++;
           ?>
        </table>
      </div>
    </div>
  </div>


</div>
