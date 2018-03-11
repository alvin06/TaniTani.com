<?php
  include "connect.php";
  error_reporting(E_PARSE);
  $id = $_SESSION['id'];
  $queryadmin=mysqli_query($conn,"SELECT * FROM user WHERE id_user='$id'");
  $cek = mysqli_fetch_array($queryadmin);
  $ida = $_GET['id_article'];
  $query = mysqli_query($conn, "SELECT * FROM article WHERE id_user = '$id'");
  $result = mysqli_fetch_array($query);
  $idarticle = $result['id_user'];
  $queryusername=mysqli_query($conn, "SELECT * FROM article as c INNER JOIN user as d ON c.id_user = d.id_user Where id_article = '$ida'");
  $result1 = mysqli_fetch_array($queryusername);
  $username = $result1['username'];
  $idadmin=$cek['id_status'];



  ?>
<html>
<head>
  <title>Article</title>
</head>
<body>
  <h1><a href='readarticle.php'>Article</a></h1>
  Author : <?php echo $username;?>
  <table border="1" width="100%">
  <tr>
    <th>NO</th>
    <th>Title</th>
  <th>Category</th>
    <th>Description</th>
    <th>Article Picture</th>
    <th>Content</th>
    
  </tr> 
  <?php
  // Load file koneksi.php
   $queryartikel = "SELECT * FROM article WHERE id_article='".$ida."'";
   $querykomen = mysqli_query($conn, "SELECT * FROM comment WHERE id_article = '$ida'");
   $resultkomen = mysqli_fetch_array($querykomen);
   $komen = $resultkomen['comment'];
   $sql = mysqli_query($conn, $queryartikel); // Eksekusi/Jalankan query dari variabel $query
   $count = 1;
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$count++."</td>";
    echo "<td>".$data['title']."</td>";
  echo "<td>".$data['category']."</td>";
  echo "<td>".$data['description']."</td>";
    echo "<td><img src='images/".$data['article_picture']."' width='100' height='100'></td>";
    echo "<td>".$data['content']."</td>";
  if($id==$data['id_user']||$idadmin=='1'){
    echo "<td><a href='editarticle.php?id_article=".$data['id_article']."'>Edit</a></td>";
    echo "<td><a href='deletearticle.php?id_article=".$data['id_article']."'>Delete</a></td>";
    echo "</tr>";
    }
  else{
    echo "</tr>";
  }
    
    echo "</tr>";
  }
  echo "<td>Comment :</td>";
  $count=1;
  $querykomen = mysqli_query($conn, "SELECT * FROM comment as a INNER JOIN user as b ON a.id_user = b.id_user Where id_article = '$ida' ORDER BY id_comment");

  while($komen = mysqli_fetch_array($querykomen)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$count++."</td>";
    echo "<td><a href='../user/viewuser.php?id_user=".$komen['id_user']."'>".$komen['username']."</a></td>";
    echo "<td>".$komen['comment']."</td>";
    if($id==$komen['id_user']||$idadmin=='1'){
    echo "<td><a href='../comment/deletecomment.php?id=".$komen['id_comment']."'>Delete</a></td>";
    echo "</tr>";
    }
  else{
    echo "</tr>";
  }
    }
  ?>

    <?php
    $id_article = $_GET['id_article'];
    $query = "SELECT id_article FROM article WHERE id_article='".$id_article."'";
    $sql = mysqli_query($conn, $query);  // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql?>
  <div id="bg"></div>

  <form name="create" action="inputprocesscomment.php?id_article=<?php echo $id_article; ?>" method="POST">
  <table cellpadding="3" cellspacing="0">
      <tr>
        <td>Comment</td>
        <td>:</td>
        <td><input type="text" name="comment" required></td>
      </tr>
    </table>
    <button type="submit">submit</button>
  </form>  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</body>


 </html>