<?php
	include "connect.php";

	$username = $_POST['username'];
	$fullname = $_POST['fullname'];
	$phone =$_POST['phone'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$encryptPassword = md5($password);
	$sex = $_POST['sex'];
	$pict = $_FILES['pict']['name'];

    $tmp = $_FILES['pict']['tmp_name'];
    $newpict = date('dmYHis').$pict;
	// Set path folder tempat menyimpan fotonya	
	$path = "../../CRUD/user/images/".$newpict;
	$foto_size = $_FILES["pict"]["size"];
	$info = getimagesize($tmp);
if(empty($tmp)){

	$sql_buat = "INSERT INTO user(id_user, username, fullname, email,phone, password, sex) VALUE('','$username','$fullname','$email','$phone','$encryptPassword','$sex')";
	
			if(isset($_POST['username'])&&($_POST['email']))
				{
					$name=$_POST['username'];
					$email=$_POST['email'];
					$checkdata=" SELECT * FROM user WHERE email='$email' and username='$name' ";
					$query=mysqli_query($conn,$checkdata);
					if(mysqli_num_rows($query)>0)
						{?>
							<script language="javascript">alert("Username and Email Already Exist");</script>
							<script>document.location.href='daftar.php';</script><?php
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
						<script>document.location.href='daftar.php';</script><?php
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
							<script>document.location.href='daftar.php';</script><?php
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
				<script>document.location.href='../login/login.php';</script>
			<?php
			}
			else{
	?>
				<script language="javascript">alert("Sign up failed");</script>
				<script>document.location.href='daftar.php';</script>
			<?php
			}
			mysqli_close($conn);
}
else{
			if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) {?>
	<script language="javascript">alert("Not an Image");</script>
	<script>document.location.href='daftar.php';</script>
	<?php
}
else{ 
	
if($foto_size < 1000000 && (strlen(trim($password))>=8)){
	if(move_uploaded_file($tmp, $path)){
		$sql_buat = "INSERT INTO user(id_user, username, fullname, email,phone, password, sex,user_picture) VALUE('','$username','$fullname','$email','$phone','$encryptPassword','$sex','$newpict')";
	
			if(isset($_POST['username'])&&($_POST['email']))
				{
					$name=$_POST['username'];
					$email=$_POST['email'];
					$checkdata=" SELECT * FROM user WHERE email='$email' and username='$name' ";
					$query=mysqli_query($conn,$checkdata);
					if(mysqli_num_rows($query)>0)
						{?>
							<script language="javascript">alert("Username and Email Already Exist");</script>
							<script>document.location.href='daftar.php';</script><?php
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
						<script>document.location.href='daftar.php';</script><?php
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
							<script>document.location.href='daftar.php';</script><?php
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
				<script>document.location.href='../login/login.php';</script>
			<?php
			}
			else{
	?>
				<script language="javascript">alert("Sign up failed");</script>
				<script>document.location.href='daftar.php';</script>
			<?php
			}
			mysqli_close($conn);
			}
	else{
			echo "Sorry picture cant upload.";
			echo "<br><a href='inputitems.php'>Back to Form</a>";
		}
	}
else{?>
	<script language="javascript">alert("Sign up failed");</script>
	<script>document.location.href='daftar.php';</script><?php
  }
 }

			mysqli_close($conn);

}
?>

