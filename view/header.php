<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/autima/autima/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Nov 2023 11:02:47 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dự án 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

     <!-- CSS 
    ========================= -->
     <!--bootstrap min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="assets/css/slinky.menu.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

</head>

<body>

    <!-- Main Wrapper Start -->
    <!--header area start-->
    <header class="header_area">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="top_inner">
                    <div class="long1">
                        <div class="col-lg-6 col-md-6">
                            <div class="follow_us">
                                <label>Follow Us:</label>
                                <ul class="follow_link">
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="top_right text-end">
                                <ul>
                                    <li class="top_links"><a href="index.php?act=dangnhap"><i class="ion-android-person"></i> 
                                    <?php 
                                    if (isset($_SESSION['user'])) {
                                        extract($_SESSION['user']);
                                        echo "$user";
                                    }else{
                                        echo "tài khoản";
                                    }
                                    ?></a></li>
                                    <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt="">en-gb</a></li>
                                    <li class="currency"><a href="#">$ USD</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->
        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="long2">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <div class="middel_right">
                            <div class="middel_right_info">
                                <div class="long5">
                                    <form action="index.php?act=sanpham" method="POST">
                                        <input type="text" name="kyw" id="" placeholder="Tìm kiếm sản phẩm">
                                        <button><i class="ion-ios-search-strong"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="middel_right_info">
                                <div class="mini_cart_wrapper">
                                    <a href="index.php?act=viewcart"><span class="lnr lnr-cart"></span>Giỏ Hàng</a>                               
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
           
            
        <!--header middel end-->
        <!--header bottom satrt-->

        <!--header bottom end-->
    </header>
    <!--header area end-->

    <div class="header_bottom sticky-header">
            <div class="container">
                
                    <div class="col-12">
                        <div class="main_menu header_position">
                            <nav>
                                <ul>
                                    <li><a href="index.php">Trang Chủ</a></li>
                                    <li><a href="index.php?act=gioithieu">Giới Thiệu</a></li>
                                    <li><a href="index.php?act=lienhe">Liên Hệ</a></li>
                                    <li><a href="index.php?act=gopy">Góp Ý</a></li>
                                    <li><a href="index.php?act=hoidap">Hỏi Đáp</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

            </div>
        </div>
        </div>











