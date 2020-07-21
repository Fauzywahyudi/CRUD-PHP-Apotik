<div class="">
  <div class="">
    <center>
      <h2>ENTRY DATA OBAT</h2>
    </center>
  </div>
  <div class="">
    <center>
      <form class="" action="simpanobat.php" method="post">
        <table>
          <tr style="height:50px">
            <td>KODE OBAT</td>
            <td style="width:20px"></td>
            <td><input type="text" name="kode"> </td>
          </tr>
          <tr style="height:50px">
            <td>NAMA OBAT</td>
            <td style="width:20px"></td>
            <td><input type="text" name="nama"> </td>
          </tr>
          <tr style="height:50px">
            <td>JENIS OBAT</td>
            <td style="width:20px"></td>
            <td><select  name="jenis">
              <option value="OBAT RINGAN">OBAT RINGAN</option>
              <option value="OBAT SEDANG">OBAT SEDANG</option>
              <option value="OBAT KERAS">OBAT KERAS</option>
            </select> </td>
          </tr>
          <tr style="height:50px">
            <td>HARGA OBAT</td>
            <td style="width:20px"></td>
            <td><input type="text" name="harga"> </td>
          </tr>
          <tr style="height:50px">
            <td>STOCK OBAT</td>
            <td style="width:20px"></td>
            <td><input type="text" name="stok"> </td>
          </tr>
          <tr style="height:50px">
            <td colspan="3"><input type="submit" name="submit" value="SIMPAN DATA OBAT" style="width:100%"> </td>
          </tr>
        </table>
      </form>
    </center>
  </div>
</div>
