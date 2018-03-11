<?php
    include "connect.php";
    $id = $_GET['id'];

    $sql_hapus = "DELETE FROM buy WHERE id_buy = '$id'";

    if (mysqli_query($conn, $sql_hapus)){
?>
  		<script language="javascript">alert("Delete Successful");</script>
  		<script>document.location.href='readbuy.php';</script>

<?php
  	}
  	else{
?>
  		<script language="javascript">alert("Delete Failed");</script>
  		<script>document.location.href='readbuy.php';</script>
<?php
  	}
  	mysqli_close($conn);
?>
