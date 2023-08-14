<?php
    session_start();
    if (!isset($_SESSION['login_user'])){
        header("location:error.php");
    }$username = $_SESSION['login_user'];
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aler Template">
    <meta name="keywords" content="Aler, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Wrapper Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <span class="icon_close"></span>
        </div>
        <div class="logo">
            <a href="./halaman-admin.php">
                <img src="img/logo.png" alt="">
            </a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="om-widget">
            <ul>
                
        </div>
        
        </div>
    </div>
    <!-- Offcanvas Menu Wrapper End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="hs-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./halaman-admin.php"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="ht-widget">
                           
                            
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <span class="icon_menu"></span>
                </div>
            </div>
        </div>
        <div class="hs-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <nav class="nav-menu">
                            <ul>
                            <li class="active"><a href="./halaman-admin.php">Home</a></li>
                                <li><a href="#">Properties</a>
                                    <ul class="dropdown">
                                        
                                       
                                        <li><a href="./details-admin.php">Property Detail</a></li>
                                        
                                        
                                        
                                    </ul>

                                <li><a href="./about.php">Pemesanan</a>
                                    </ul>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="hn-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <!-- About Section Begin -->
         
<div class="container">
    <?php
include "koneksi.php";
?>
<?php
$sql    = "select *from pesan";
$query  = mysqli_query($conn,$sql);
?>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Rumah</th>
      <th scope="col">Handphone</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam</th>
      <th scope="col">status</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
      <?php
      while($data = mysqli_fetch_array($query)){

      ?>
    <tr>
    <th> <?php echo $data['id']; ?></th>
    <th> <?php echo $data['nama']; ?></th>
    <th> <?php echo $data['rumah']; ?></th>
    <th> <?php echo $data['handphone']; ?></th>
    <th> <?php echo $data['tgl']; ?></th>
    <th> <?php echo $data['jam']; ?></th>
    <th> <?php echo $data['status']; ?></th>

    <th>  
    <a class ="edit" href="edit.php?id=<?php echo $data['id']; ?> " ><img src ="img/ceklist.png" width=30px> </a> |
	<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>"><img src ="img/bin.jpg" width=30px></a></th>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>

    

    <!-- Footer Section Begin -->
    <div class="fixed-bottom">
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="fs-about">
                        <div class="fs-logo">
                            <a href="#">
                                
                            </a>
                        </div>
                      
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="fs-widget">
                        
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="fs-widget">
                     
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </footer>
    </div>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.richtext.min.js"></script>
    <script src="js/image-uploader.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>