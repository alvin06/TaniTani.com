<?php
	include "connect.php";

	$username = $_POST['username'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$encryptPassword = md5($password);
	$sex = $_POST['sex'];
	$pict = $_FILES['pict']['name'];
    $tmp = $_FILES['pict']['tmp_name'];
    $newpict = date('dmYHis').$pict;
	// Set path folder tempat menyimpan fotonya	
	$path = "images/".$newpict;
	if(move_uploaded_file($tmp, $path)){
	$sql_buat = "INSERT INTO user(id_user, username, fullname, email, password, sex,user_picture,id_status) VALUE('','$username','$fullname','$email','$encryptPassword','$sex','$newpict','1')";
	if(isset($_POST['username'])&&($_POST['email']))
			{
				$name=$_POST['username'];
				$email=$_POST['email'];
				$checkdata=" SELECT * FROM user WHERE email='$email' and username='$name' ";
				$query=mysqli_query($conn,$checkdata);
				if(mysqli_num_rows($query)>0)
					{?>
						<script language="javascript">alert("Username and Email Already Exist");</script>
						<script>document.location.href='../../interface/daftar/daftar.php';</script><?php
					}
			}
		if(isset($_POST['username']))
		{
			$name=$_POST['username'];
			$checkdata=" SELECT username FROM user WHERE username='$name' ";
			$query=mysqli_query($conn,$checkdata);
			if(mysqli_num_rows($query)>0)
				{?>
					<script language="javascript">alert("Username Already Exist");</script>
					<script>document.location.href='../../interface/daftar/daftar.php';</script><?php
				}
			/*else
				{
					echo "OK";
				}
			exit();
		}*/
		}

		if(isset($_POST['email']))
			{
				$email=$_POST['email'];
				$checkdata=" SELECT email FROM user WHERE email='$email' ";
				$query=mysqli_query($conn,$checkdata);
				if(mysqli_num_rows($query)>0)
					{?>
						<script language="javascript">alert("Email Already Exist");</script>
						<script>document.location.href='../../interface/daftar/daftar.php';</script><?php
					}
				/*else
					{
						echo "OK";
					}
					exit();
			
*/
			}
	if (mysqli_query($conn, $sql_buat)){
?>
		<script language="javascript">alert("Sign up Successful");</script>
		<script>document.location.href='../../interface/homepage/indeks.html';</script>
		<?php
	}
	else{
	?>
		<script language="javascript">alert("Sign up failed");</script>
		<script>document.location.href='../../interface/daftar/daftar.html';</script>
		<?php
	}
	mysqli_close($conn);
	}
	else{
  echo "Sorry picture cant upload.";
  echo "<br><a href='inputitems.php'>Back to Form</a>";
	} 
?>