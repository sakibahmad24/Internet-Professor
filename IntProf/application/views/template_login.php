<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <title>Internet Professor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Internet Professor">
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



    <meta name="google-signin-scope" content="abualmahadi001@gmail.com">
    <meta name="google-signin-client_id" content="853833852171-7hqquvl2l2iridej075fd179ng8hag81.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>

<body id="homepage">

    <div id="wrapper">
        <!-- header begin -->
        <header class="header-light s2">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img class="logo" src="images/logo-light.png" alt="">
                                <img class="logo-2" src="images/logo-dark.png" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href=<?php echo base_url("index.php")?> >Home<span></span></a>
                                </li>
                                <li><a href=<?php echo base_url("page/about")?>>About<span></span></a>   
                                </li>
                                <li><a href=<?php echo base_url("Home/registration")?>>Register<span></span></a> </li>
                                <li><a href="#">Log In<span></span></a>
                                </li>
                                <li><a href=<?php echo base_url("page/contact")?>>Contact<span></span></a>
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




        <div id="switcher">
            <span class="custom-close"></span>
            <span class="custom-show"></span>

            <span class="sw-title">Header Style</span>
            <select name="switcher" id="de-header-style">
            <option value="opt-2" selected>Transparent</option>
            <option value="opt-1">Solid</option>
        </select>

            <div class="clearfix"></div>

            <span class="sw-title">Header Color</span>
            <select name="switcher" id="de-header-color">
            <option value="opt-1" selected>Dark</option>
            <option value="opt-2">Light</option>
        </select>

            <div class="clearfix"></div>

            <span class="sw-title">Color :</span>
            <ul id="de-color">
                <li class="bg1"></li>
                <li class="bg2"></li>
                <li class="bg3"></li>
                <li class="bg4"></li>
                <li class="bg5"></li>
                <li class="bg6"></li>
                <li class="bg7"></li>
                <li class="bg8"></li>
                <li class="bg9"></li>
                <li class="bg10"></li>
            </ul>
        </div>

            <!-- Javascript Files
    ================================================== -->
    <script src=<?php echo base_url("asset/js/jquery.min.js")?>></script>
    <script src=<?php echo base_url("asset/js/bootstrap.min.js")?>></script>
    <script src=<?php echo base_url("asset/js/jquery.isotope.min.js")?>></script>
    <script src=<?php echo base_url("asset/js/easing.js")?>></script>
    <script src=<?php echo base_url("asset/js/owl.carousel.js")?>></script>
    <script src=<?php echo base_url("asset/js/jquery.countTo.js")?>></script>
    <script src=<?php echo base_url("asset/js/validation.js")?>></script>
    <script src=<?php echo base_url("asset/js/wow.min.js")?>></script>
    <script src=<?php echo base_url("asset/js/jquery.magnific-popup.min.js")?>></script>
    <script src=<?php echo base_url("asset/js/enquire.min.js")?>></script>
    <script src=<?php echo base_url("asset/js/jquery.stellar.min.js")?>></script>
    <script src=<?php echo base_url("asset/js/jquery.plugin.js")?>></script>
    <script src=<?php echo base_url("asset/js/typed.js")?>></script>
    <script src=<?php echo base_url("asset/js/typed-custom.js")?>></script>
    <script src=<?php echo base_url("asset/js/particles.js")?>></script>
    <script src=<?php echo base_url("asset/js/app.js")?>></script>
    <script src=<?php echo base_url("asset/js/designesia.js")?>></script>
    <script src=<?php echo base_url("asset/demo/demo.js")?>></script>

    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>
</body>

</html>