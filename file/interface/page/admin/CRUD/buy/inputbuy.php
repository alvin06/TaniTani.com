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
<!DOCTYPE html>
<html >
</head>
<body>

  <div id="bg"></div>

  <form name="create" action="inputprocessbuy.php" method="POST">
    Name : <input type="text" name="name" required><br><br>
    Email : <input type="email" name="email" required><br><br>
    Phone :<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="phone" required><br><br>
    Address : <input type="text" name="address" required><br><br>
    Quantity : <input type="number" name="quantity" required><br><br>
    <button type="submit">submit</button>
  </form>  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</body>
</html>
	<?php
}?>
