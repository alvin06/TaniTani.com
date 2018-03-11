<!DOCTYPE html>
<?php
    include "connect.php";
    error_reporting(E_PARSE);
    $id = $_SESSION['id'];
    $query = "SELECT * FROM user WHERE id_user='".$id."'";
    $sqlprofile = mysqli_query($conn, $query);
    $hasil=mysqli_fetch_array($sqlprofile);
    $username=$hasil['username'];
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <center>
        <h1>Selamat Datang <?php echo $username; ?></h1><br><br>
    </center>
    <div style="width: 80%; margin: auto;">
    <table class="table centered">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Sex</th>
        <th>Profile Picture</th>
    </tr>
<?php

    $sql = mysqli_query($conn, $query);

	{
    $count = 1;
    while($data = mysqli_fetch_array($sql)){
        echo "<tr>";
        echo "<td>".$count++."</td>";
        echo "<td>".$data['username']."</td>";
        echo "<td>".$data['fullname']."</td>";
        echo "<td>".$data['email']."</td>";
        echo "<td>".$data['phone']."</td>";
        echo "<td>".$data['sex']."</td>";
        echo "<td><img src='images/".$data['user_picture']."' width='100' height='100'></td>";
        echo "<td><a href='edituser.php?id_user=".$data['id_user']."'>Edit</a></td>";
        echo "<td><a href='deleteuser.php?id_user=".$data['id_user']."'>Delete</a></td>";
        echo "</tr>";

        
    }
}
?>
    </table>
    </div>
</body>
</html>
