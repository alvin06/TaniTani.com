<!DOCTYPE html>
<h1>Change items User</h1>
  
  <?php
  // Load file koneksi.php
  include "connect.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id_user = $_GET['id_user'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM user WHERE id_user='".$id_user."'";
  $sql = mysqli_query($conn, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="editprocessuser.php?id_user=<?php echo $id_user; ?>" enctype="multipart/form-data" >

  <table cellpadding="8">
    <td>Fullname</td>
    <td><input type="text" name="fullname" required value="<?php echo $data['fullname']; ?>"></td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="phone" required value="<?php echo $data['phone']; ?>"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" required value="<?php echo $data['password']; ?>"></td>
  </tr>
  <tr>
    <td>Sex</td>
    <?php
    if($data['sex'] == "Male"){
      echo "<input type='radio' name='sex' value='Male' checked='checked'> Male";
      echo "<input type='radio' name='sex' value='Female'> Female";
    }else{
      echo "<input type='radio' name='sex' value='Male'> Male";
      echo "<input type='radio' name='sex' value='Female' checked='checked'> Female";
    }?>
  </tr>
  <tr>
    <td>Profile Picture</td>
    <td>
      <input type="checkbox" name="change_picture" value="true"> Ceklis jika ingin mengubah foto<br>
      <input type="file" name="pict">
    </td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  
  </form>
</html>