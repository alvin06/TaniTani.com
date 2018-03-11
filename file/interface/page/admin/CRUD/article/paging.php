<?php
	include "connect.php";
	error_reporting(E_PARSE);
	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM article WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
	$idarticle = $result['id_user'];
  $queryuser = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
  $resultuser = mysqli_fetch_array($queryuser);
  $idadmin=$resultuser['id_status'];?>
<html>
<head>
  <title>Article</title>
</head>
<body>
  <h1>Article</h1>
  <a href="inputarticle.php">Input article</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Title</th>
  </tr>
  <?php
  $halaman = 3;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysqli_query($conn,"SELECT * FROM article ORDER BY id_article DESC");
  $total = mysqli_num_rows($result);
  $pages = ceil($total/$halaman);
  $query = mysqli_query($conn,"SELECT * FROM article ORDER BY id_article DESC LIMIT $mulai, $halaman");
  while($data = mysqli_fetch_assoc($query)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><a href='viewdata.php?id_article=".$data['id_article']."'>".$data['title']."</td>";
    echo "<tr>";
  }?>
  <div class="">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
 </div>
  <?php } ?>
 

 
 </html>