<?php
	include "connect.php";

  $id = $_POST['idcmt'];
  $comment = $_POST['comment'];
  $iditems=$_GET['id_items'];
  $queryitems = "SELECT * FROM items WHERE id_items='".$iditems."'";
  $sql = mysqli_query($conn, $queryitems);
  $data = mysqli_fetch_array($sql);
  $url = "viewitems.php?id_items=".$data['id_items']."";

	$sql_ganti = "UPDATE comment SET comment = '$comment' WHERE id_comment = '$id'";
	if (mysqli_query($conn, $sql_ganti)){?>

		<script language="javascript">alert("Edit Successful");</script>
<?php
		header("Location: " . $url);
	}
	else{
?>
		<script language="javascript">alert("Edit Failed");</script>
		<?php
		header("Location: " . $url);
	}
	mysqli_close($conn);
?>