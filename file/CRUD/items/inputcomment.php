<?php
include "connect.php";
error_reporting(E_PARSE);
$id = $_SESSION['id'];
$ida = $_GET['id_article'];
if($id==NULL)
	{?>
	<script language="javascript">alert("Login First");</script>
	<script>document.location.href='../../interface/login/login.php';</script><?php
	}
else
	{?>	
<!DOCTYPE html>
<html >
</head>
<body>
  	<?php
  	$id_article = $_GET['id_article'];
  	$query = "SELECT id_article FROM article WHERE id_article='".$id_article."'";
  	$sql = mysqli_query($conn, $query);  // Eksekusi/Jalankan query dari variabel $query
  	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql?>
  <div id="bg"></div>

  <form name="create" action="viewdata.php?id_article=<?php echo $id_article; ?>" method="POST">
    Comment : <input type="text" name="comment" required><br><br>
    <button type="submit">submit</button>
  </form>  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</body>
</html><?php
}?>