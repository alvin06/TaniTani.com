<?php
  include "connect.php";
  error_reporting(E_PARSE);
  $id = $_SESSION['id'];
  $query = mysqli_query($conn, "SELECT * FROM items WHERE id_user = '$id'");
  $result = mysqli_fetch_array($query);
  $iduser = $result['id_user'];
  $queryuser = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
  $resultuser = mysqli_fetch_array($queryuser);
  $idadmin=$resultuser['id_status'];?>
<html>
<head>
  <title>Items</title>
</head>
<body>
  <h1>Items</h1>
  <a href="inputitems.php">Input Items</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>NO</th>
    <th>Items</th>
  </tr>
  <?php
  // Load file koneksi.php
  
  $query1 = "SELECT * FROM items ORDER BY id_items DESC "; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($conn, $query1); // Eksekusi/Jalankan query dari variabel $query
  $count = 1;
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$count++."</td>";
    echo "<td><a href='viewitems.php?id_items=".$data['id_items']."'>".$data['items_name']."</td>";
  }
  ?>
 </html>


