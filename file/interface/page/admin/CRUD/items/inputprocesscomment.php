<?php
	include "connect.php";
	error_reporting(E_PARSE);
	$id = $_SESSION['id'];
	$ida = $_GET['id_items'];
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
	$iditems=$_GET['id_items'];
	$comment = $_POST['comment'];
	$sql_buat = "INSERT INTO comment(id_comment,id_user,id_items, comment) VALUE('','$iduser','$iditems','$comment')";
	$queryitems = "SELECT * FROM items WHERE id_items='".$iditems."'";
	$sql = mysqli_query($conn, $queryitems);
	$data = mysqli_fetch_array($sql);
	$id = $data['id_user'];
	$url = "../../../detail.php?id_items=".$data['id_items']."";
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