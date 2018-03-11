<?php
	include "connect.php";
  $term = mysqli_real_escape_string($conn,$_REQUEST['search']);
  $queryitem = mysqli_query($conn, "SELECT * FROM items WHERE items_name LIKE '%".$term."%'  ORDER BY id_items DESC LIMIT 3");
  $queryartikel = mysqli_query($conn, "SELECT * FROM article WHERE title LIKE '%".$term."%'  ORDER BY id_article DESC LIMIT 3");
 ?>
  }
?>
<html>
<head>
  <title>Hasil</title>
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
  $count = 1;
  while($result = mysqli_fetch_array($queryitem)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$count++."</td>";
    echo "<td><a href='viewitems.php?id_items=".$result['id_items']."'>".$result['items_name']."</td>";
  }
  ?>
  <h1>Article</h1>
  <a href="inputarticle.php">Input article</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>NO</th>
    <th>Title</th>
  </tr>
  <?php
  // Load file koneksi.php
  	$count = 1;
  while($result1 = mysqli_fetch_array($queryartikel)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$count++."</td>";
    echo "<td><a href='viewdata.php?id_article=".$result1['id_article']."'>".$result1['title']."</td>";
  }
  ?>



 </html>
 
