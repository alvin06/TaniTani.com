<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up TaniTani</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<div class="container">
  <div class="info">
    <h1>Silahkan Daftar</h1><span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">TaniTani Corporation</a></span>
  </div>
</div>
<div class="form">
  <div ><a href="../homepage/indeks.html"><img src="topi.png" width="30%"></a></div>
  <form method="post" action="inputprocessuser(admin).php" enctype="multipart/form-data">
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
 
  </form>  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
