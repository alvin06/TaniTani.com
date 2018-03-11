<?php
	include "connect.php";

  $id = $_POST['idbl'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $quantity = $_POST['quantity'];

	$sql_ganti = "UPDATE buy SET name = '$name', email = '$email',phone = '$phone',
    address = '$address', quantity = '$quantity' WHERE id_items = '$id'";
	if (mysqli_query($conn, $sql_ganti)){
?>
		<script language="javascript">alert("Edit Successful");</script>
		<script>document.location.href='readbuy.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Edit Failed");</script>
		<script>document.location.href='editbuy.php';</script>
		<?php
	}
	mysqli_close($conn);
?>