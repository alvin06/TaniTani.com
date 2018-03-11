<?php
  include "connect.php";
  error_reporting(E_PARSE);
  $id = $_SESSION['id'];
  $queryadmin=mysqli_query($conn,"SELECT * FROM user WHERE id_user='$id'");
  $cek = mysqli_fetch_array($queryadmin);
  $ida = $_GET['id_items'];
  $query = mysqli_query($conn, "SELECT * FROM items WHERE id_user = '$id'");
  $result = mysqli_fetch_array($query);
  $iditems = $result['id_items'];
  $queryusername=mysqli_query($conn, "SELECT * FROM items as c INNER JOIN user as d ON c.id_user = d.id_user Where id_items = '$ida'");
  $result1 = mysqli_fetch_array($queryusername);
  $username = $result1['username'];
  $idadmin=$cek['id_status'];



  ?>
<html>
<head>
  <title>Items</title>
</head>
<body>
  <h1><a href='readitems.php'>Items</a></h1>
  Author : <?php echo $username;?>
  <table border="1" width="100%">
  <tr>
    <th>Items Picture</th>
    <th>Items Name</th>
    <th>Category</th>
    <th>Description</th>
    <th>Phone</th>
    <th>Price</th>
    <th>Location</th>
    
  </tr> 
  <?php
  // Load file koneksi.php
   $queryitems = "SELECT * FROM items WHERE id_items='".$ida."'";
   $querykomen = mysqli_query($conn, "SELECT * FROM comment WHERE id_items = '$ida'");
   $resultkomen = mysqli_fetch_array($querykomen);
   $komen = $resultkomen['comment'];
   $sql = mysqli_query($conn, $queryitems); // Eksekusi/Jalankan query dari variabel $query
   $count = 1;
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td><img src='images/".$data['items_picture']."' width='100' height='100'></td>";
    echo "<td>".$data['items_name']."</td>";
    echo "<td>".$data['category']."</td>";
    echo "<td>".$data['description']."</td>";
    echo "<td>".$data['phone']."</td>";
    echo "<td>".$data['price']."</td>";
    echo "<td>".$data['location']."</td>";
  if($id==$data['id_user']||$idadmin=='1'){
    echo "<td><a href='edititems.php?id_items=".$data['id_items']."'>Edit</a></td>";
    echo "<td><a href='deleteitems.php?id_items=".$data['id_items']."'>Delete</a></td>";
    echo "</tr>";
    }
  else{
    echo "</tr>";
  }
    echo "<td>Harap hubungi penjual apabila ingin membeli</td>";
    echo "</tr>";
  }
  echo "<td>Comment :</td>";
  $count=1;
  $querykomen = mysqli_query($conn, "SELECT * FROM comment as a INNER JOIN user as b ON a.id_user = b.id_user Where id_items = '$ida' ORDER BY id_comment");

  while($komen = mysqli_fetch_array($querykomen)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$count++."</td>";
    echo "<td><a href='../user/viewuser.php?id_user=".$komen['id_user']."'>".$komen['username']."</a></td>";
    echo "<td>".$komen['comment']."</td>";
    if($id==$komen['id_user']||$idadmin=='1'){
    echo "<td><a href='deletecomment.php?id=".$komen['id_comment']."'>Delete</a></td>";
    echo "</tr>";
    }
  else{
    echo "</tr>";
  }
    }
  ?>

    <?php
    $id_items = $_GET['id_items'];
    $query = "SELECT id_items FROM items WHERE id_items='".$id_items."'";
    $sql = mysqli_query($conn, $query);  // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql?>
  <div id="bg"></div>

  <form name="create" action="inputprocesscomment.php?id_items=<?php echo $id_items; ?>" method="POST">
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