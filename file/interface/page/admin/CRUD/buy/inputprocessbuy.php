<?php
	include "connect.php";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$id_items = $_GET['id_items'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$quantity = $_POST['quantity'];
	$sql_buat = "INSERT INTO buy(id_buy,id_items, name, email,phone, address, quantity) VALUE('','$id_items','$name','$email','$phone','$address','quantity')";
	if (mysqli_query($conn, $sql_buat)){
?>
		<script language="javascript">alert("Input Successful");</script>
		<script>document.location.href='readbuy.php';</script>
		<?php
	}
	else{
?>
		<script language="javascript">alert("Input Failed");</script>
		<script>document.location.href='inputbuy.php';</script>
		<?php
	}
	mysqli_close($conn);
?>