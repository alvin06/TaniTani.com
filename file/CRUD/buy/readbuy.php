<!DOCTYPE html>
<?php
    include "connect.php";
    $query = mysqli_query($conn, "SELECT * FROM buy");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Data</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <center>
        <h1>List Buyers</h1><br><br>
    </center>
    <div style="width: 80%; margin: auto;">
    <table class="table centered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Quanity</th>
    </tr>
<?php
    if(mysqli_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
				echo '<tr><td colspan="6">No data!</td></tr>';
				echo'<tr><td><a href="inputbuy.php"><button type="button" class="btn btn-danger">Create</button></td></tr>';
			}	

	else
	{
    $count = 1;
    while($result = mysqli_fetch_array($query)){
        echo
        '<tr>
            <td>'.$count++.'</td>
            <td>'.$result['name'].'</td>
            <td>'.$result['email'].'</td>
            <td>'.$result['phone'].'</td>
            <td>'.$result['address'].'</td>
            <td>'.$result['quantity'].'</td>
            <td><a href="editbuy.php?id='.$result['id_buy'].'"><button type="button" class="btn btn-primary">Edit</button></td>
            <td><a href="deletebuy.php?id='.$result['id_buy'].'"><button type="button" class="btn btn-danger">Delete</button></td>
            <td><a href="inputbuy.php?id='.$result['id_buy'].'"><button type="button" class="btn btn-danger">Insert</button></td>
           </tr>';
    }
}
?>
    </table>
    </div>
</body>
</html>
