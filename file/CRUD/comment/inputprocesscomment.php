<?php
	include "connect.php";
	$iduser=$_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$iduser'");
	$result = mysqli_fetch_array($query);
	$username = $result['username'];
	$idarticle=$_GET['id_article'];
	$comment = $_POST['comment'];
	$sql_buat = "INSERT INTO comment(id_comment,id_user,id_article, comment) VALUE('','$iduser','$idarticle','$comment')";
	$queryartikel = "SELECT * FROM article WHERE id_article='".$idarticle."'";
	$sql = mysqli_query($conn, $queryartikel);
	$data = mysqli_fetch_array($sql);
	$id = $data['id_user'];
	if (mysqli_query($conn, $sql_buat)){
?>
		<script language="javascript">alert("Comment Successful");</script>
		<script>document.location.href='../article/readarticle.php'</script>
		<?php
	}
	else{
	?>
		<script language="javascript">alert("Comment failed");</script>
		<script>document.location.href='inputcomment.php';</script>
		<?php
	}
	mysqli_close($conn);
?>