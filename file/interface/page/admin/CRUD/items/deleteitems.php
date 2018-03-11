<?php
    include "connect.php";
    $id = $_GET['id_items'];

    $sql_hapus = "DELETE FROM items WHERE id_items = '$id'";

    if (mysqli_query($conn, $sql_hapus)){
?>
  		<script language="javascript">alert("Delete Successful");</script>
  		<script>document.location.href='readitems.php';</script>

<?php
  	}
  	else{
?>
  		<script language="javascript">alert("Delete Failed");</script>
  		<script>document.location.href='readitems.php';</script>
<?php
  	}
  	mysqli_close($conn);
?>
