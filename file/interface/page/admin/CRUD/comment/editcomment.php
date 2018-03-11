<!DOCTYPE html>
<?php
  include "connect.php";
  $id = $_GET['id'];
  $query = mysqli_query($conn, "SELECT * FROM comment WHERE id_comment = '$id'");
  $result = mysqli_fetch_array($query);
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Input</title>
</head>
<body>
  <form name="create" action="editprocesscomment.php" method="POST">
    <input type="hidden" name="idcmt" value="<?php echo $result['id_comment'];?>">
    Comment : <input type="text" name="comment" value="<?php echo $result['comment'];?>" required><br><br>
   
    <button type="submit">submit</button>
  </form>
</body>
</html>
