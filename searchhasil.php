<?php 
include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- start: Meta -->
  <meta charset="utf-8">
  <title>Tani Tani</title> 
  <meta name="description" content="Distro, cikarang, terlengkap, information, technology, jababeka, baru, murah"/>
  <meta name="keywords" content="Kaos, Murah, Cikarang, Baru, terlengkap, harga, terjangkau" />
  <meta name="author" content="Hakko Bio Richard"/>
  <!-- end: Meta -->
  
  <!-- start: Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- end: Mobile Specific -->
  
  <!-- start: Facebook Open Graph -->
  <meta property="og:title" content=""/>
  <meta property="og:description" content=""/>
  <meta property="og:type" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:image" content=""/>
  <!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
  <!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        <style>
    form {
    width:150px;
    margin: 14px auto;
    }
    input[type=text] {
    width: 150px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 2px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 15px 20px 15px 20px;
input[type=text]:focus {
    width: 100%;
}
    </style>

</head>
<body>
    
  <!--start: Header -->
  <header>
    
    <!--start: Container -->
    <div class="container">
      
      <!--start: Row -->
      <div class="row">
          
        <!--start: Logo -->
        <div class="logo span3">
            
          <a class="brand" href="index.php"><img src="img/logotani.png" alt="Logo"></a>
            
        </div>
        <!--end: Logo -->
          
        <!--start: Navigation -->
        <div class="span9">
          
          <div class="navbar navbar-inverse">
              <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
                      <ul class="nav">
                          <li><a href="forum.php">Forum</a></li>
                  <li><a href="produk.php">Jual Beli</a></li>
                  <li><form method="post" action="searchhasil.php">
                  
                                        <input name="search" type="text" placeholder="Cari-Cari Yuk...">
                                       

                                    </form>
                                    </li>
                                    <li>
                  <?php  
                  if (isset($_SESSION["id"])){
                  echo '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                            <li><a href="file/interface/page/profile.php">Profile</a></li>
                                <li><a href="file/interface/page/logout.php">Logout</a></li>
                            </ul>
                          </li>'; 
                        }
                        else echo '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                            <li><a href="file/interface/login/login.php">Log In</a></li>
                                            <li><a href="file/interface/daftar/daftar.php">Sign Up</a></li>
                            </ul>
                          </li>'; 
                  
                          ?>
                          </li>
                        
                      </ul>
                    </div>
                </div>
              </div>
        </div>  
        <!--end: Navigation -->
          
      </div>
      <!--end: Row -->
      
    </div>
    <!--end: Container-->     
      
  </header>
  <!--end: Header-->
  
  <!-- start: Page Title -->
  <div id="page-title">

    <div id="page-title-inner">

      <!-- start: Container -->
      <div class="container">

        <h2><i class="ico-stats ico-white"></i>Jual Beli</h2>

      </div>
      <!-- end: Container  -->

    </div>  

  </div>

  <a href="file/CRUD/items/inputitems.php"><button class="btn btn-lg btn-success" type="submit">Jual Produk</button></a>
  <!-- end: Page Title -->
  <div>
        <hr size="8px" width="100%" color="#32CD32">
        <h2><b><center>Hasil pencarian Hasil Tani</center></b></h2>
        <hr size="8px" width="100%" color="#32CD32">
  </div>
  <!--start: Wrapper-->
  <div id="wrapper">
        
    <!--start: Container -->
      <div class="container"> 
        <!--<div class="title"><h3>Keranjang Anda</h3></div>
            <div class="hero-unit">
            </div> -->            
          <!-- start: Row -->
            
          <div class="row">
  <?php
  $term = mysqli_real_escape_string($conn,$_REQUEST['search']);
  $halaman = 3;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($conn,"SELECT * FROM items WHERE category='Hasil Tani'and items_name LIKE '%".$term."%'  ORDER BY id_items ");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halaman);
    $sql = mysqli_query($conn, "SELECT * FROM items WHERE category='Hasil Tani' and items_name LIKE '%".$term."%'  ORDER BY id_items DESC LIMIT $mulai, $halaman");
  if(mysqli_num_rows($sql) == 0){
    echo "Tidak ada thread!";
  }else{
    while($data = mysqli_fetch_assoc($sql)){
                    ?>
            <div class="span4">
                <div class="icons-box">
                        <div class="title"><h3><?php echo $data['items_name']; ?></h3></div>
                        <?php echo "<img src='file/CRUD/items/images/".$data['items_picture']."' width='100' height='100'>";?>
          <!--  <p>
            
            </p> -->
            <div class="clear"><a href="detail.php?id_items=<?php echo $data['id_items'];?>" class="btn btn-lg btn-success">Beli</a></div>

                    </div>

            </div>
                <?php   
              }
              }
              
              ?>
<!---->     
          </div>
      <!-- end: Row -->
      <ul class="pagination">
        <?php for ($i=1; $i<=$pages ; $i++){ ?>
      <li><a href="?halaman=<?php echo $i; ?>&search=<?php echo $term;?>"><?php echo $i; ?></a></li>
      </ul>
  <?php } ?>
           
        <!--end: Row-->
    <!--start: Container -->
      <div class="container"> 
          
      <hr>
    
      <!-- start Clients List --> 
      <div class="clients-carousel">
    
        <ul class="slides clients">
          <li><img src="img/logos/1.png" alt=""/></li>
          <li><img src="img/logos/2.png" alt=""/></li>  
          <li><img src="img/logos/3.png" alt=""/></li>
          <li><img src="img/logos/4.png" alt=""/></li>
          <li><img src="img/logos/5.png" alt=""/></li>
          <li><img src="img/logos/6.png" alt=""/></li>
          <li><img src="img/logos/7.png" alt=""/></li>
          <li><img src="img/logos/8.png" alt=""/></li>
          <li><img src="img/logos/9.png" alt=""/></li>
          <li><img src="img/logos/10.png" alt=""/></li>   
        </ul>
    
      </div>
      <!-- end Clients List -->
    
      <hr>
    
    </div>
    <!--end: Container--> 

  </div>
  <!-- end: Wrapper  -->      

    <!-- start: Footer Menu -->
  <div id="footer-menu" class="hidden-tablet hidden-phone">

    <!-- start: Container -->
    <div class="container">
      
      <!-- start: Row -->
      <div class="row">

        <!-- start: Footer Menu Logo -->
        <div class="span2">
          <div id="footer-menu-logo">
            <a href="#"><img src="img/logo-footer-menu.png" alt="logo" /></a>
          </div>
        </div>
        <!-- end: Footer Menu Logo -->

        <!-- start: Footer Menu Links-->
        <div class="span9">
          
          <div id="footer-menu-links">

            <ul id="footer-nav">

              <li><a href="#">Kemeja</a></li>

              <li><a href="#">Kaos</a></li>

              <li><a href="#">Sweater</a></li>

              <li><a href="#">Jacket</a></li>
              
              <li><a href="#">Pants & Jeans</a></li>

            </ul>

          </div>
          
        </div>
        <!-- end: Footer Menu Links-->

        <!-- start: Footer Menu Back To Top -->
        <div class="span1">
            
          <div id="footer-menu-back-to-top">
            <a href="#"></a>
          </div>
        
        </div>
        <!-- end: Footer Menu Back To Top -->
      
      </div>
      <!-- end: Row -->
      
    </div>
    <!-- end: Container  -->  

  </div>  
  <!-- end: Footer Menu -->

  <!-- start: Footer -->
  <div id="footer">
    
    <!-- start: Container -->
    <div class="container">
      
      <!-- start: Row -->
      <div class="row">

        <!-- start: About -->
        <div class="span3">
          
          <h3>Tentang DistroIT</h3>
          <p>
            DistroIT adalah toko online yang bergerak di bidang fasion, sasaran kami semua kalangan baik muda maupun tua, mulai dari anak - anak dan orang dewasa.
          </p>
            
        </div>
        <!-- end: About -->

        <!-- start: Photo Stream -->
        <div class="span3">
          
          <h3>Alamat Kami</h3>
          Kp. Wangkal Rt.03 Rw.07 Desa Kalijaya Kecamatan Cikarang Utara Kabupaten Bekasi 17530<br />
                    Telp : 085694984803<br />
                    Email : <a href="mailto:hakko_bio_richard@yahoo.co.id">hakko_bio_richard@yahoo.co.id</a> / <a href="mailto:hakkobiorichard@gmail.com">hakkobiorichard@gmail.com</a>
        </div>
        <!-- end: Photo Stream -->

        <div class="span6">
        
          <!-- start: Follow Us -->
          
          <!-- end: Follow Us -->
        
          <!-- start: Newsletter -->
        <!--  <form id="newsletter">
            <h3>Newsletter</h3>
            <p>Please leave us your email</p>
            <label for="newsletter_input">@:</label>
            <input type="text" id="newsletter_input"/>
            <input type="submit" id="newsletter_submit" value="submit">
          </form> -->
          <!-- end: Newsletter -->
        
        </div>
        
      </div>
      <!-- end: Row --> 
      
    </div>
    <!-- end: Container  -->

  </div>
  <!-- end: Footer -->

  <!-- start: Copyright -->
  <div id="copyright">
  
    <!-- start: Container -->
    <div class="container">
    
      <p>
        Copyright &copy; <a href="http://www.niqoweb.com">DistroIT 2015</a> <a href="http://bootstrapmaster.com" alt="Bootstrap Themes">Bootstrap Themes</a> designed by BootstrapMaster
      </p>
  
    </div>
    <!-- end: Container  -->
    
  </div>  
  <!-- end: Copyright -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html> 

 
