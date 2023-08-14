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
    <title>Member</title>

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
        <div class="">
            <a href="./member.php">
                <img src="img/logo.png" alt="">
            </a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="om-widget">
            <ul>
                <li><i class="icon_mail_alt"></i> Aler.support@gmail.com</li>
                <li><i class="fa fa-mobile-phone"></i> 125-711-811 <span>125-668-886</span></li>
            </ul>
            <a href="#" class="hw-btn">Submit property</a>
        </div>
        <div class="om-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
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
                            <a href="./member.php"><img src="img/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="ht-widget">
                            <ul>
                                <li><i class="icon_mail_alt"></i> bahagiajayamandiri@yahoo.co.id</li>
                                <li><i class="fa fa-mobile-phone"></i> 082312134598 </span></li>
                            </ul>
                            
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
                                <li class="active"><a href="./member.php">Home</a></li>
                                <li><a href="#">Properties</a>
                                    <ul class="dropdown">
                                        
                                       
                                        <li><a href="./details-member.php">Property Detail</a></li>
                                        
                                        <li><a href="./booking-member.php">Booking</a></li>
                                        
                                    </ul>

                                </li><li><a href="./member-pesan.php">Pemesanan</a>
                                <li><a href="./logout.php">logout</a></li>
                                
                               
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

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="hs-slider owl-carousel">
                <div class="hs-item set-bg" data-setbg="img/hero/hero-1.jpg">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hc-inner-text">
                                <div class="hc-text">
                                    <h4>Tamini Residence</h4>
                                    <p><span class="icon_pin_alt"></span> Jl. Smp 160, RT.3/RW.5, Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13820</p>
                                    <div class="label">dijual</div>
                                    
                                </div>
                                <div class="hc-widget">
                                    <ul>
                    
                                        <li><i class="fa fa-bathtub"></i> 01</li>
                                        <li><i class="fa fa-bed"></i> 03</li>
                                        <li><i class="fa fa-automobile"></i> 01</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hc-inner-text">
                                <div class="hc-text">
                                    <h4>Tamini Residence</h4>
                                    <p><span class="icon_pin_alt"></span> Jl. Smp 160, RT.3/RW.5, Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13820</p>
                                    <div class="label">dijual</div>
                                    
                                </div>
                                <div class="hc-widget">
                                    <ul>
                    
                                        <li><i class="fa fa-bathtub"></i> 01</li>
                                        <li><i class="fa fa-bed"></i> 03</li>
                                        <li><i class="fa fa-automobile"></i> 01</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hc-inner-text">
                                <div class="hc-text">
                                    <h4>Tamini Residence</h4>
                                    <p><span class="icon_pin_alt"></span> Jl. Smp 160, RT.3/RW.5, Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13820</p>
                                    <div class="label">dijual</div>
                                    
                                </div>
                                <div class="hc-widget">
                                    <ul>
                    
                                        <li><i class="fa fa-bathtub"></i> 01</li>
                                        <li><i class="fa fa-bed"></i> 03</li>
                                        <li><i class="fa fa-automobile"></i> 01</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Search Section Begin -->
    
    <!-- Search Section End -->

    <!-- Property Section Begin -->
    <section class="property-section latest-property-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h4>Tamini Residence</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="property-controls">
                        <ul>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row property-filter">
                <div class="col-lg-4 col-md-6 mix all house">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="img/property/property-1.jpg">
                            <div class="label">Dijual</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">Rp.1.944.600.000<span></span></div>
                            <h5><a href="#">Blok A6</a></h5>
                            
                            <ul>
                                <li><i class="fa fa-object-group"></i> 105 m2</li>
                                <li><i class="fa fa-bathtub"></i> 01</li>
                                <li><i class="fa fa-bed"></i> 03</li>
                                <li><i class="fa fa-automobile"></i> 01</li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="img/property/posted-by/pb-1.jpg" alt="">
                                        <h6>Lizar</h6>
                                    </div>
                                    <div class="pa-text">
                                        082312134598
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix all restaurent hotel">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="img/property/property-2.jpg">
                            <div class="label">Dijual</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">Rp.1.773.854.250<span></span></div>
                            <h5><a href="#">Blok A7</a></h5>
                            
                            <ul>
                                <li><i class="fa fa-object-group"></i> 105 m2</li>
                                <li><i class="fa fa-bathtub"></i> 01</li>
                                <li><i class="fa fa-bed"></i> 03</li>
                                <li><i class="fa fa-automobile"></i> 01</li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="img/property/posted-by/pb-1.jpg" alt="">
                                        <h6>Lizar</h6>
                                    </div>
                                    <div class="pa-text">
                                        082312134598
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix all apart office">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="img/property/property-2.jpg">
                            <div class="label">Dijual</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">Rp.1.773.854.250<span></span></div>
                            <h5><a href="#">Blok A8</a></h5>
                            
                            <ul>
                                <li><i class="fa fa-object-group"></i> 105 m2</li>
                                <li><i class="fa fa-bathtub"></i> 01</li>
                                <li><i class="fa fa-bed"></i> 03</li>
                                <li><i class="fa fa-automobile"></i> 01</li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="img/property/posted-by/pb-1.jpg" alt="">
                                        <h6>Lizar</h6>
                                    </div>
                                    <div class="pa-text">
                                        082312134598
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix all hotel restaruent">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="img/property/property-4.jpg">
                            <div class="label">Dijual</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">Rp.1.552.766.250<span></span></div>
                            <h5><a href="#">Blok A9</a></h5>
                            
                            <ul>
                                <li><i class="fa fa-object-group"></i> 105 m2</li>
                                <li><i class="fa fa-bathtub"></i> 01</li>
                                <li><i class="fa fa-bed"></i> 03</li>
                                <li><i class="fa fa-automobile"></i> 01</li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="img/property/posted-by/pb-1.jpg" alt="">
                                        <h6>Lizar</h6>
                                    </div>
                                    <div class="pa-text">
                                        082312134598
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix all office hotel">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="img/property/property-5.jpg">
                            <div class="label">Dijual</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">Rp.1.552.766.250<span></span></div>
                            <h5><a href="#">Blok A10</a></h5>
                            
                            <ul>
                                <li><i class="fa fa-object-group"></i> 105 m2</li>
                                <li><i class="fa fa-bathtub"></i> 01</li>
                                <li><i class="fa fa-bed"></i> 03</li>
                                <li><i class="fa fa-automobile"></i> 01</li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="img/property/posted-by/pb-1.jpg" alt="">
                                        <h6>Lizar</h6>
                                    </div>
                                    <div class="pa-text">
                                        082312134598
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mix house apart office">
                    <div class="property-item">
                        <div class="pi-pic set-bg" data-setbg="img/property/property-6.jpg">
                            <div class="label">Dijual</div>
                        </div>
                        <div class="pi-text">
                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                            <div class="pt-price">Rp.1.552.766.250<span></span></div>
                            <h5><a href="#">Blok A11</a></h5>
                            
                            <ul>
                                <li><i class="fa fa-object-group"></i> 105 m2</li>
                                <li><i class="fa fa-bathtub"></i> 01</li>
                                <li><i class="fa fa-bed"></i> 03</li>
                                <li><i class="fa fa-automobile"></i> 01</li>
                            </ul>
                            <div class="pi-agent">
                                <div class="pa-item">
                                    <div class="pa-info">
                                        <img src="img/property/posted-by/pb-1.jpg" alt="">
                                        <h6>Lizar</h6>
                                    </div>
                                    <div class="pa-text">
                                        082312134598
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Section End -->

    <!-- Chooseus Section Begin -->
    <section class="chooseus-section spad set-bg" data-setbg="img/chooseus/chooseus-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="chooseus-text">
                        <div class="section-title">
                            <h4>Cara Booking</h4>
                        </div>
                        <p>Dibawah ini cara booking melalui website</p>
                    </div>
                    <div class="chooseus-features">
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-1.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>1. Pilih menu booking</h5>
                                <p>login lalu pilih properties booking pencet tombol booking</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-2.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>3. cek apakah sudah diterima oleh admin</h5>
                                <p>cek di pemesanan dibagian status jika diterima atau ditolak oleh admin booking rumahnya</p>
                            </div>
                        </div>
                        <div class="cf-item">
                            <div class="cf-pic">
                                <img src="img/chooseus/chooseus-icon-3.png" alt="">
                            </div>
                            <div class="cf-text">
                                <h5>2. Isi form booking</h5>
                                <p>isi form booking sesuai dengan kolom yang tersedia</p>
                            </div>
                        </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- Feature Property Section Begin -->
    
    <!-- Feature Property Section End -->

    <!-- Team Section Begin -->
    <section class="team-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="section-title">
                        <h4>Marketing</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="team-btn">
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="ts-item">
                        <div class="ts-text">
                            <img src="img/team/team-1.jpg" alt="">
                            <h5>Lizar</h5>
                            <span>082312134598</span>
                            <p>Marketing Office</p>
                            <div class="ts-social">
                                
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    

    <!-- Contact Section Begin -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info">
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Address</h5>
                                <p>Jl. Smp 160, RT.3/RW.5, Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13820</p>
                            </div>
                        </div>
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Phone</h5>
                                <ul>
                                    <li>082312134598</li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="ci-item">
                            <div class="ci-icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="ci-text">
                                <h5>Support</h5>
                                <p>bahagiajayamandiri@yahoo.co.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="fs-about">
                        <div class="fs-logo">
                            <a href="#">
                                
                            </a>
                        </div>
                        <p>Perumahan Tamini Residence</p>
                        <div class="fs-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
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
                        <h5>Links</h5>
                        <ul>
                    
                            
                            
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
              
            </div>
        </div>
    </footer>
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