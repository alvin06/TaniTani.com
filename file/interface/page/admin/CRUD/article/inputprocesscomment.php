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
{

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
	$url = "../../../detailforum.php?id_article=".$data['id_article']."";
	if (mysqli_query($conn, $sql_buat)){
?>
		<script language="javascript">alert("Comment Successful");</script>
		<?php
		header("Location: " . $url);
	}
	else{
	?>
		<script language="javascript">alert("Comment failed");</script>
		<?php
		header("Location: " . $url);
	}
	header('viewdata.php?id_article='.$data['id_article'].'"');
	mysqli_close($conn);
}
?>