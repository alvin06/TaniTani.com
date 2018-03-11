<?php
						include "connect.php";
						$id = $_SESSION['id'];
						if($id==NULL)
						{?>
							<script language="javascript">alert("Login Fisrt");</script>
							<script>document.location.href='../../login/login.html';</script><?php
						}
						else
						{
						$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
						$result = mysqli_fetch_array($query);
						$author = $result['username'];
						}
						?>
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script>
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],

                colIndexes: [2],

                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],

                ignoreCol: [2],

                chartType: 'GeoChart',

                chartAspectRatio: 1.5,

                chartZoom: 1.75,

                chartOffset: [-12,0],

                chartOptions: {

                    width: null,

                    backgroundColor: '#fff',

                    datalessRegionColor: '#F5F5F5',

                    region: 'world',

                    resolution: 'countries',

                    legend: 'none',

                    colorAxis: {

                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {

                        trigger: 'focus',

                        isHtml: true
                    }
                }


            });
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<div class="page-container">
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h2>Tani-Tani</h2>
									<!--<img id="logo" src="" alt="Logo"/>-->
								  </a>
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">
										<input type="submit" value="">
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left">
								<!--notifications of menu start -->
								<ul class="nofitications-dropdown">

								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">
								<ul>


									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span>
												<div class="user-name">
													<p><?php echo $result['username'];?></p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>
											</div>
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
											<li> <a href="../../daftar/inputuser(admin).php"><i class="fa fa-user"></i> Register an Admin</a> </li>
											<li> <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
				     <div class="clearfix"> </div>
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop();
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });

		});
		</script>
		<!-- /script-for sticky-nav -->
		<?php

			$query = "SELECT * FROM user";
			$sql = mysqli_query($conn, $query);


    $count = 0;
    while($data = mysqli_fetch_array($sql)){
		$count++;
		}
		?>
<!--inner block start here-->
<div class="inner-block">
	<!DOCTYPE html>
	<?php
	    $query = "SELECT * FROM user ";
	?>
	<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <title>List User</title>

	    <link rel="stylesheet" href="css/bootstrap.min.css">

	    <script src="js/jquery.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	</head>
	<body>
	    <center>
	        <h1>List User</h1><br><br>
	    </center>
	    <div style="width: 80%; margin: auto;">
	    <a href="inputuser.php">Input User</a><br><br>
	    <table class="table centered">
	    <tr>
	        <th>No</th>
	        <th>Username</th>
	        <th>Fullname</th>
	        <th>Email</th>
	        <th>Phone</th>
	        <th>Password</th>
	        <th>Sex</th>
	        <th>Profile Picture</th>
	    </tr>
	<?php

	    $sql = mysqli_query($conn, $query);


	    $count = 1;
	    while($data = mysqli_fetch_array($sql)){
	        echo "<tr>";
	        echo "<td>".$count++."</td>";
	        echo "<td>".$data['username']."</td>";
	        echo "<td>".$data['fullname']."</td>";
	        echo "<td>".$data['email']."</td>";
	        echo "<td>".$data['phone']."</td>";
	        echo "<td>".$data['password']."</td>";
	        echo "<td>".$data['sex']."</td>";
	        if(empty($data['user_picture']))
	        {
	        	echo "<td><img src='images/'default.jpg'' width='100' height='100'></td>";
	        }
	        else
	        {
	        echo "<td><img src='images/".$data['user_picture']."' width='100' height='100'></td>";
	    }
	        echo "<td><a href='edituser.php?id_user=".$data['id_user']."'>Edit</a></td>";
	        echo "<td><a href='deleteuser.php?id_user=".$data['id_user']."'>Delete</a></td>";
	        echo "</tr>";

	    }

	?>
	    </table>
	    </div>
	</body>
	</html>

<!--market updates end here-->
<!--mainpage chit-chating-->


<!--main page chit chating end here-->
<!--main page chart start here-->

<!--main page chart layer2-->

<!--climate start here-->
<div class="climate">
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!--climate end here-->
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">


        <!--Tab kanan-->
        <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="../postlogin.php"><i class="fa fa-tachometer"></i><span>Tanitani.com</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i><span>Jual Beli</span></a>
            </li>
            <li id="menu-academico" ><a href="../../../CRUD/article/readarticle.php"><i class="fa fa-file-text"></i><span>Forum</span></a>
              <ul id="menu-academico-sub" >

              </ul>
            </li>

		      </ul>
		    </div>
        <!--<end> Tab kanan-->

   </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;

$(".sidebar-icon").click(function() {
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>
