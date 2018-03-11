<?php
    include "connect.php";
    $id_user = $_GET['id_user'];

    $sql_hapus = "DELETE FROM user WHERE id_user = '$id_user'";

    if (mysqli_query($conn, $sql_hapus)){
?>
  		<script language="javascript">alert("Delete Successful");</script>
  		<script>document.location.href='readuser.php';</script>

<?php
  	}
  	else{
?>
  		<script language="javascript">alert("Delete Failed");</script>
  		<script>document.location.href='readuser.php';</script>
<?php
  	}
  	mysqli_close($conn);
?>
