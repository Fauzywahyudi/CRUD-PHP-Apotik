<div class="">
  <div class="" style="height: 80px">
    <center>
      <div class="" style="height:50px">
        <h2>DAFTAR OBAT APOTIK BERSAMA</h2>
      </div>
    </center>
    <div class="">
      <a href="tambahobat.php" style="text-decoration:none">
        <button type="button" name="button" style="background-color:yellow; height: 40px">Tambah Obat</button>
      </a>
    </div>
    <div class="">
      <div class="">
        <table width="100%" border="1">
          <tr>
            <th>NO</th>
            <th>KODE OBAT</th>
            <th>NAMA OBAT</th>
            <th>JENIS OBAT</th>
            <th>HARGA OBAT</th>
            <th>STOCK OBAT</th>
            <th colspan="2">AKSI</th>
          </tr>

          <?php
            include 'koneksi.php';

            $no=1;
            $sql = mysqli_query($kon,"SELECT * FROM apotik_obat");
            while ($res=mysqli_fetch_array($sql)) {
              echo "<tr>
              <td align=center>$no </td>
              <td align=center>$res[kdobat] </td>
              <td align=center>$res[nmobat] </td>
              <td align=center>$res[jnsobat] </td>
              <td align=center>$res[hrgobat] </td>
              <td align=center>$res[stokobat] </td>
              <td align=center><a href='editobat.php?kd=$res[kdobat]' style='text-decoration:none'>EDIT</a></td>
              <td align=center><a href='hapusobat.php?kd=$res[kdobat]' style='text-decoration:none'>DELETE</a></td>

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
