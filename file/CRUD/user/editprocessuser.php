<?php
// Load file koneksi.php
include "connect.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
  $id_user = $_GET['id_user'];
  $fullname = $_POST['fullname'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $encryptPassword = md5($password);
  $sex = $_POST['sex'];
  $queryuser = "SELECT * FROM user WHERE id_user='".$id_user."'";
	$sql = mysqli_query($conn, $queryuser);
	$data = mysqli_fetch_array($sql);
$url = "../../interface/page/editprofile.php?id_user=".$data['id_user']."";
// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['change_picture'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $picture = $_FILES['pict']['name'];
  $tmp = $_FILES['pict']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $newpict = date('dmYHis').$picture;
  
  // Set path folder tempat menyimpan fotonya
  $path = "images/".$newpict;
  $info = getimagesize($tmp);
  if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) {?>
	<?php 
	 header("Location: " . $url );?>
	<?php
  }
 else{
 // Proses upload
 	if($foto_size < 1000000 && (strlen(trim($password))>=8)){
  		if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    	$query = "SELECT * FROM user WHERE id_user='".$id_user."'";
   		$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
    	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    // if(is_file("images/".$data['user_picture'])){// Jika foto ada
    //   unlink("images/".$data['pict']); // Hapus file foto sebelumnya yang ada di folder images
    // }
    // Proses ubah data ke Database
   		 $query1 = "UPDATE user SET fullname = '$fullname',phone = '$phone',password = '$encryptPassword', sex = '$sex',user_picture='$newpict' WHERE id_user = '$id_user'";
		if(isset($_POST['username'])&&($_POST['email']))
			{
				$name=$_POST['username'];
				$email=$_POST['email'];
				$checkdata=" SELECT * FROM user WHERE email='$email' and username='$name' ";
				$query=mysqli_query($conn,$checkdata);
				if(mysqli_num_rows($query)>0)
					{?>
						<script language="javascript">alert("Username and Email Already Exist");</script>
						<script>document.location.href='edituser.php';</script><?php
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
					<script>document.location.href='edituser.php';</script><?php
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
						<script>document.location.href='edituser.php';</script><?php
					}
				/*else
					{
						echo "OK";
					}
					exit();
			
*/
			}

    	$sql = mysqli_query($conn, $query1); // Eksekusi/ Jalankan query dari variabel $query
    	if($sql){
    ?>
   			 <script language="javascript">alert("Edit Successful");</script>
    		<?php
    		header("Location: " . $url);
  				}
  		else{
?>
    		<script language="javascript">alert("Edit Failed");</script>
    		<?php 
    		header("Location: " . $url);// Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
       // Redirect ke halaman index.php
    		}
  }
  else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Cant upload picture.";
    echo "<br><a href='edituser.php'>Back to Form</a>";
  	}
  }
 else{?>
	<script language="javascript">alert("Upload failed");</script>
	<?php
	header("Location: " . $url);
  }
 }
 }
else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $query = "UPDATE user SET fullname = '$fullname',
    	phone = '$phone',password = '$encryptPassword', sex = '$sex' WHERE id_user = '$id_user'";
    $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
	if(isset($_POST['username'])&&($_POST['email']))
			{
				$name=$_POST['username'];
				$email=$_POST['email'];
				$checkdata=" SELECT * FROM user WHERE email='$email' and username='$name' ";
				$query=mysqli_query($conn,$checkdata);
				if(mysqli_num_rows($query)>0)
					{?>
						<script language="javascript">alert("Username and Email Already Exist");</script>
						<script>document.location.href='edituser.php';</script><?php
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
					<script>document.location.href='edituser.php';</script><?php
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
						<script>document.location.href='edituser.php';</script><?php
					}
				/*else
					{
						echo "OK";
					}
					exit();
			
*/
			}
    if($sql){
    ?>
    <script language="javascript">alert("Edit Successful");</script>
    <?php
    header("Location: " . $url );
  }
  else{
?>
    <script language="javascript">alert("Edit Failed");</script>
    <?php
    header("Location: " . $url);
}
}

  mysqli_close($conn);

