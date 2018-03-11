<!DOCTYPE html>
<html >
</head>
<body>
	<h1>users</h1>
  <form method="post" action="inputprocessuser.php" enctype="multipart/form-data">
  <table cellpadding="8">
  <tr>
    <td>Username</td>
    <td><input type="text" name="username" required ></td>
  </tr>
  <tr>
    <td>Full Name</td>
    <td><input type="text" name="fullname" required></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>
    <input type="email" name="email" required>
    </td>
  </tr>
  <tr>
    <td>Phone</td>
    <td><input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="phone" required></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" required></td>
  </tr>
  <tr>
    <td>Sex</td>
    <td>
    <input type="radio" name="sex" value="Male"> Male
    <input type="radio" name="sex" value="female"> Female
    </td>
  </tr>
  <tr>
    <td>User Picture</td>
      <td><input type="file" name="pict" required></textarea></td>
  </tr>

  </table>
  
  <hr>
  <input type="submit" value="Submit">
 
  </form>
</body>
</html>
