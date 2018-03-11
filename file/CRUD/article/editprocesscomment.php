<?php
	include "connect.php";

  $id = $_POST['idcmt'];
  $comment = $_POST['comment'];


	$sql_ganti = "UPDATE comment SET comment = '$comment' WHERE id_comment = '$id'";
	if (mysqli_query($conn, $sql_ganti)){
?>
		<script language="javascript">alert("Edit Successful");</script>
		<script>document.location.href='../article/readarticle.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Edit Failed");</script>
		<script>document.location.href='editcomment.php';</script>
		<?php
	}
	mysqli_close($conn);
?>