<?php
	include 'connect.php';
	error_reporting(E_PARSE);
	$username = $_POST['username'];
	$password = $_POST['password'];
	$encryptPassword = md5($password);
	$result = mysqli_query($conn, "SELECT * FROM
		user WHERE BINARY username = '$username' AND BINARY password = '$encryptPassword' ");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row) {
		$_SESSION['id'] = $row['id_user'];
		$id = $_SESSION['id'];
		$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
						$result = mysqli_fetch_array($query);
						$author = $result['id_status'];
		
?>			
		<script language="javascript">alert("Selamat datang , <?php echo $result['username'];?>");</script>
		
<?php
		
		if($author==1)
		{
		?>
			<script>document.location.href='../page/admin/index.php';</script>;<?php
		}
		else
		{?>
		<script>document.location.href='../page/postlogin.php';</script>;<?php
		}
	} else {
		
?>
		<script language="javascript">alert("Login Failed");</script>
		<script>document.location.href='login.php';</script>;
<?php
		}
	echo json_encode($data);
?>