<?php
  include 'koneksi.php';

  $kd = $_GET['kd'];

  $sql = mysqli_query($kon,"SELECT * FROM apotik_obat WHERE kdobat='$kd'");
  $data= $sql->fetch_assoc();

 ?>

 <div class="">
   <div class="">
     <center>
       <h2>EDIT DATA OBAT</h2>
     </center>
   </div>
   <div class="">
     <center>
       <form class="" action="edit.php" method="post">
         <table>
           <tr style="height:50px">
             <td>KODE OBAT</td>
             <td style="width:20px"></td>
             <td><input type="text" name="kode" value="<?php echo $data['kdobat'] ?>"> </td>
           </tr>
           <tr style="height:50px">
             <td>NAMA OBAT</td>
             <td style="width:20px"></td>
             <td><input type="text" name="nama" value="<?php echo $data['nmobat'] ?>"> </td>
           </tr>
           <tr style="height:50px">
             <td>JENIS OBAT</td>
             <td style="width:20px"></td>
             <td><select  name="jenis">
               <option value="<?php echo $data['jnsobat'] ?>"><?php echo $data['jnsobat'] ?></option>
               <option value="OBAT RINGAN">OBAT RINGAN</option>
               <option value="OBAT SEDANG">OBAT SEDANG</option>
               <option value="OBAT KERAS">OBAT KERAS</option>
             </select> </td>
           </tr>
           <tr style="height:50px">
             <td>HARGA OBAT</td>
             <td style="width:20px"></td>
             <td><input type="text" name="harga" value="<?php echo $data['hrgobat'] ?>"> </td>
           </tr>
           <tr style="height:50px">
             <td>STOCK OBAT</td>
             <td style="width:20px"></td>
             <td><input type="text" name="stok" value="<?php echo $data['hrgobat'] ?>"> </td>
           </tr>
           <tr style="height:50px">
             <td colspan="3"><input type="submit" name="submit" value="SIMPAN DATA OBAT" style="width:100%"> </td>
           </tr>
         </table>
       </form>
     </center>
   </div>
 </div>
