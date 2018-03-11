<?php
include "connect.php";
$id = $_SESSION['id'];
if($id==NULL)
	{?>
	<script language="javascript">alert("Login First");</script>
	<script>document.location.href='../../interface/login/login.php';</script><?php
	}
else
	{?>	
<html>
<head>
  
</head>
<body>
  <h1>items</h1>
  <form method="post" action="inputprocessitems.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Items Name</td>
    <td><input type="text" name="items_name" required ></td>
  </tr>
  <tr>
    <td>Category</td>
    <td>
             <input type="radio" name="category" value="Hasil Tani"> Hasil Tani
             <input type="radio" name="category" value="Alat Tani"> Alat Tani
          </td>
  </tr>
  <tr>
    <td>Description</td>
    <td>
    <input type="text" name="description" required>
    </td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="phone" required></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="price" required></td>
  </tr>
  <tr>
    <td>Location</td>
    <td><input type="text" name="location" required></textarea></td>
  </tr>
  <tr>
    <td>Items Picture</td>
      <td><input type="file" name="pict" required></textarea></td>
  </tr>

  </table>
  
  <hr>
  <input type="submit" value="Submit">
 
  </form>
</body>
</html><?php
}?>