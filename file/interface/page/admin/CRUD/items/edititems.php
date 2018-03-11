<html>
<head>

</head>
<body>
  <h1>Change items Data</h1>
  
  <?php
  // Load file koneksi.php
  include "connect.php";
  
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id_items = $_GET['id_items'];
  
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  $query = "SELECT * FROM items WHERE id_items='".$id_items."'";
  $sql = mysqli_query($conn, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>
  
  <form method="post" action="editprocessitems.php?id_items=<?php echo $id_items; ?>" enctype="multipart/form-data" >

  <table cellpadding="8">
  <tr>
    <td>Items Name</td>
    <td><input type="text" name="items_name" required value="<?php echo $data['items_name']; ?>"></td>
  </tr>
  <tr>
    <td>Category</td>
    <td><input type="text" name="category" required value="<?php echo $data['category']; ?>"></td>
  </tr>
  <tr>
    <td>Description</td>
    <td>
    <input type="text" name="description" required value="<?php echo $data['description']; ?>">
    </td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="phone" required value="<?php echo $data['phone']; ?>"></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="price" required value="<?php echo $data['price']; ?>"></td>
  </tr>
  <tr>
    <td>Location</td>
    <td><input type="text" name="location" required value="<?php echo $data['location']; ?>"></textarea></td>
  </tr>
  <tr>
    <td>Items Picture</td>
    <td>
      <input type="checkbox" name="change_picture" value="true"> Ceklis jika ingin mengubah foto<br>
      <input type="file" name="pict">
    </td>
  </tr>
  </table>
  
  <hr>
  <input type="submit" value="Ubah">
  <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html