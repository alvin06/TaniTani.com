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
// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['change_picture'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $picture = $_FILES['pict']['name'];
  $tmp = $_FILES['pict']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $newpict = date('dmYHis').$newpict;
  
  // Set path folder tempat menyimpan fotonya
  $path = "images/".$newpict;
  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM user WHERE id_user='".$id_user."'";
    $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("images/".$data['pict'])){// Jika foto ada
      unlink("images/".$data['pict']); // Hapus file foto sebelumnya yang ada di folder images
    }
    // Proses ubah data ke Database
    $query = "UPDATE user SET fullname = '$fullname',
    phone = '$phone',password = '$encryptPassword', sex = '$sex',user_picture='$newpict' WHERE id_user = '$id_user'";
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
    $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){
    ?>
    <script language="javascript">alert("Edit Successful");</script>
    <script>document.location.href='readuser.php';</script>
<?php
  }
  else{
?>
    <script language="javascript">alert("Edit Failed");</script>
    <script>document.location.href='edituser.php';</script>
    <?php // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
       // Redirect ke halaman index.php
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Cant upload picture.";
    echo "<br><a href='edituser.php'>Back to Form</a>";
  }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
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
    <script>document.location.href='readuser.php';</script>
<?php
  }
  else{
?>
    <script language="javascript">alert("Edit Failed");</script>
    <script>document.location.href='edituser.php';</script>
    <?php
}
  mysqli_close($conn);
}
