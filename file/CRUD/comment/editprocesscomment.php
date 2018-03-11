<?php
	include "connect.php";

  $id = $_POST['idcmt'];
  $comment = $_POST['comment'];
  $ida = $_GET['id_article'];
  $queryartikel = "SELECT * FROM article WHERE id_article='".$idarticle."'";
  $sql = mysqli_query($conn, $queryartikel);
  $data = mysqli_fetch_array($sql);
  $url = "../article/viewdata.php?id_article=".$data['id_article']."";

	$sql_ganti = "UPDATE comment SET comment = '$comment' WHERE id_comment = '$id'";
	if (mysqli_query($conn, $sql_ganti)){
?>
		<script language="javascript">alert("Edit Successful");</script>
<?php
		header("Location: " . $url);
	}
	else{
?>
		<script language="javascript">alert("Edit Failed");</script>
		<script>document.location.href='editcomment.php';</script>
		<?php
		header("Location: " . $url);
	}
	header('../article/viewdata.php?id_article='.$data['id_article'].'"');
	mysqli_close($conn);
?>