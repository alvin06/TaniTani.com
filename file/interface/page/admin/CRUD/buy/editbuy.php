<!DOCTYPE html>
<?php
  include "connect.php";
  $id = $_GET['id'];
  $query = mysqli_query($conn, "SELECT * FROM buy WHERE id_buy = '$id'");
  $result = mysqli_fetch_array($query);
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Input</title>
</head>
<body>
  <form name="create" action="editprocessbuy.php" method="POST">
    <input type="hidden" name="idbl" value="<?php echo $result['id_items'];?>">
    Name : <input type="text" name="name" value="<?php echo $result['name'];?>" required><br><br>
    Email : <input type="email" name="email" value="<?php echo $result['email'];?>"required><br><br>
    Phone :<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="phone" value="<?php echo $result['phone'];?>" required><br><br>
    Address : <input type="text" name="address" value="<?php echo $result['address'];?>"required><br><br>
    Quantity : <input type="number" name="quantity" value="<?php echo $result['quantity'];?>"required><br><br>
    <button type="submit">submit</button>
  </form>
</body>
</html>
