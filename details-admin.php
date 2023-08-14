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
        <div class="">
            <a href="./halaman-admin.html">
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
                            <a href="./halaman-admin.html"><img src="img/logo.png" alt=""></a>
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
                                <li class="active"><a href="./halaman-admin.php">Home</a></li>
                                <li><a href="#">Properties</a>
                                    <ul class="dropdown">
                                        
                                       
                                        <li><a href="./details-admin.php">Property Detail</a></li>
                                        
                                        
                                        
                                    </ul>

                                </li><li><a href="./about.php">Pemesanan</a>
                                
                               
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

    <!-- Property Details Section Begin -->
    <section class="property-details-section">
        <div class="property-pic-slider owl-carousel">
            <div class="ps-item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12 p-0">
                                    <div class="ps-item-inner large-item set-bg" data-setbg="img/property/slider/ps-1.jpg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-sm-6 p-0">
                                    <div class="ps-item-inner set-bg" data-setbg="img/property/slider/ps-2.jpg"></div>
                                </div>
                                <div class="col-sm-6 p-0">
                                    <div class="ps-item-inner set-bg" data-setbg="img/property/slider/ps-2.jpg"></div>
                                </div>
                                <div class="col-sm-6 p-0">
                                    <div class="ps-item-inner set-bg" data-setbg="img/property/slider/ps-4.jpg"></div>
                                </div>
                                <div class="col-sm-6 p-0">
                                    <div class="ps-item-inner set-bg" data-setbg="img/property/slider/ps-5.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12 p-0">
                                    <div class="ps-item-inner large-item set-bg" data-setbg="img/property/slider/ps-1.jpg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-sm-6 p-0">
                                    <div class="ps-item-inner set-bg" data-setbg="img/property/slider/ps-2.jpg"></div>
                                </div>
                                <div class="col-sm-6 p-0">
                                    <div class="ps-item-inner set-bg" data-setbg="img/property/slider/ps-2.jpg"></div>
                                </div>
                                <div class="col-sm-6 p-0">
                                    <div class="ps-item-inner set-bg" data-setbg="img/property/slider/ps-4.jpg"></div>
                                </div>
                                <div class="col-sm-6 p-0">
                                    <div class="ps-item-inner set-bg" data-setbg="img/property/slider/ps-5.jpg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="pd-text">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="pd-title">
                                    <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                                    <div class="label">Dijual</div>
                                    
                                    <h3>Tamini Residence</h3>
                                   
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pd-social">
                                    <a href="#"><i class="fa fa-mail-forward"></i></a>
                                    <a href="#"><i class="fa fa-send"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-mail-forward"></i></a>
                                    <a href="#"><i class="fa fa-cloud-download"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="pd-board">
                            <div class="tab-board">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Overview</a>
                                    </li>
                                    <
                                    </li>
                                </ul><!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                        <div class="tab-details">
                                            <ul class="left-table">
                                                <li>
                                                    <span class="type-name">Tipe</span>
                                                    <span class="type-value">Rumah</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Property ID</span>
                                                    <span class="type-value">#1</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">harga</span>
                                                    <span class="type-value">Rp.1.944.600.000</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">dibangun</span>
                                                    <span class="type-value">2019</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Contract type</span>
                                                    <span class="type-value">dijual</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Agent</span>
                                                    <span class="type-value">Lizar</span>
                                                </li>
                                            </ul>
                                            <ul class="right-table">
                                                <li>
                                                    <span class="type-name">luas rumah</span>
                                                    <span class="type-value">105m2</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">Rooms</span>
                                                    <span class="type-value">8</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">kamar</span>
                                                    <span class="type-value">3</span>
                                                </li>
                                                <li>
                                                    <span class="type-name">toilet</span>
                                                    <span class="type-value">2</span>
                                                </li>
                                                <li>
                                                    
                                                </li>
                                                <li>
                                                    <span class="type-name">Parkiran</span>
                                                    <span class="type-value">1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                        <div class="pd-widget">
                            <h4>Floor plans</h4>
                            <img src="img/property/details/floor-plan.jpg" alt="">
                        </div>
                        <div class="pd-widget">
                            
                           
                           
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="pd-widget">
                           
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Details Section End -->

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
                                    <li>082312134598 </li>
                                    
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
       
    </section>
    <!-- Contact Section End -->

        <!-- Footer Section Begin -->
   
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