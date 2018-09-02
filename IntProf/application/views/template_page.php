<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themenesia.com/themeforest/linea-new/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Aug 2018 09:17:14 GMT -->
<head>
    <meta charset="utf-8">
    <title>Internet Professor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Linea is Creative Website Template">
    <meta name="keywords" content="business, clean, creative, corporate, light, minimal, modern, portfolio, website, template">
    <meta name="author" content="">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href=<?php echo base_url("asset/css/bootstrap.css")?> type="text/css">
    <link rel="stylesheet" href=<?php echo base_url("asset/css/animate.css") ?> type="text/css">
    <link rel="stylesheet" href=<?php echo base_url("asset/css/owl.carousel.css") ?> type="text/css">
    <link rel="stylesheet" href=<?php echo base_url("asset/css/magnific-popup.css") ?> type="text/css">
    <link rel="stylesheet" href=<?php echo base_url("asset/css/style.css") ?> type="text/css">
    <link rel="stylesheet" href=<?php echo base_url("asset/demo/demo.css") ?> type="text/css">

    <!-- background -->
    <link rel="stylesheet" href=<?php echo base_url("asset/css/bg.css") ?> type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" id="colors" href=<?php echo base_url("asset/css/colors/orange.css")?> type="text/css">

</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        <header>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img class="logo" src=<?php echo base_url("asset/images/logo-light.png")?> alt="">
                                <img class="logo-2" src=<?php echo base_url("asset/images/logo-dark.png")?> alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href=<?php echo site_url("index.php")?>>Home<span></span></a>
                                </li>
                                <li><a href=<?php echo site_url("page/about")?>>About<span></span></a>   
                                </li>
                                <li><a href=<?php echo site_url("Home/registration")?>>Register<span></span></a> </li>
                                <li><a href=<?php echo site_url("Home/Login")?>>Log In<span></span></a>
                                </li>
                                <li><a href=<?php echo site_url("page/contact")?>>Contact<span></span></a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->


<?php $this->load->view($view);?>

<?php $this->load->view("footer");?>