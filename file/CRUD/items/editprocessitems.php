<?php
// Load file koneksi.php
include "connect.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
  $id_items = $_GET['id_items'];
  
  $items_name = $_POST['items_name'];
  $category = $_POST['category'];
  $description = $_POST['description'];
  $phone = $_POST['phone'];
  $price = $_POST['price'];
  $location = $_POST['location'];
// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['change_picture'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $picture = $_FILES['pict']['name'];
  $tmp = $_FILES['pict']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $newpict = date('dmYHis').$newpict;
  
  // Set path folder tempat menyimpan fotonya
  $path = "images/".$newpict;
  $info = getimagesize($tmp);
if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) {?>
  <script language="javascript">alert("Not an Image");</script>
    <script>document.location.href='../../../produk.php';</script>
  <?php
  }
else{
  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM items WHERE id_items='".$id_items."'";
    $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("images/".$data['pict'])){// Jika foto ada
      unlink("images/".$data['pict']); // Hapus file foto sebelumnya yang ada di folder images
    }
    // Proses ubah data ke Database
    $query = "UPDATE items SET items_name = '$items_name',items_picture = '$newpict', category = '$category',
    description = '$description',phone='$phone', price= '$price', location = '$location' WHERE id_items = '$id_items'";
    $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){
    ?>
    <script language="javascript">alert("Edit Successful");</script>
    <script>document.location.href='../../../produk.php';</script>
<?php
  }
  else{
?>
    <script language="javascript">alert("Edit Failed");</script>
    <script>document.location.href='../../../produk.php';</script>
    <?php // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
       // Redirect ke halaman index.php
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Cant upload picture.";
    echo "<br><a href='edititems.php'>Back to Form</a>";
  }}
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $query = "UPDATE items SET items_name = '$items_name', category = '$category',
    description = '$description',phone='$phone', price= '$price', location = '$location' WHERE id_items = '$id_items'";
    $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){
    ?>
    <script language="javascript">alert("Edit Successful");</script>
    <script>document.location.href='../../../produk.php';</script>
<?php
  }
  else{
?>
    <script language="javascript">alert("Edit Failed");</script>
    <script>document.location.href='../../../produk.php';</script>
    <?php
}
  mysqli_close($conn);
}?>
