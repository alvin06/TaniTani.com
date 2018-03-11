<?php

include "connect.php";
$id = $_SESSION['id'];
error_reporting(E_PARSE);
$itemsname = $_POST['items_name'];
$category = $_POST['category'];
$description = $_POST['description'];
$phone = $_POST['phone'];
$price = $_POST['price'];
$location = $_POST['location'];
$pict = $_FILES['pict']['name'];
$tmp = $_FILES['pict']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$newpict = date('dmYHis').$pict;
// Set path folder tempat menyimpan fotonya
$path = "images/".$newpict;
// Proses upload
$info = getimagesize($tmp);
if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) {?>
  <script language="javascript">alert("Not an Image");</script>
  <script>document.location.href='inputitems.php';</script>
  <?php
}
else{ 
if(move_uploaded_file($tmp, $path)){
  $sql_buat = "INSERT INTO items(id_items,id_user, items_name, items_picture, category, description,phone, price,location) VALUE('','$id','$itemsname','$newpict','$category','$description','$phone','$price','$location')";
  if (mysqli_query($conn, $sql_buat)){
?>
      <script language="javascript">alert("Input Successful");</script>
      <script>document.location.href='../../../produk.php';</script>
    
    <?php
  }
  else{
?>
    <script language="javascript">alert("Input Failed");</script>
    <script>document.location.href='../../../produk.php';</script>
    <?php
  }
  }
  else{
  echo "Sorry picture cant upload.";
  echo "<br><a href='inputitems.php'>Back to Form</a>";
} 

 } 

  mysqli_close($conn);
  
?>