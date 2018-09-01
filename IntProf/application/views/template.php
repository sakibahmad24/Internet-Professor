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

</head>

<body id="homepage">

    <div id="wrapper">
        <?php $this->load->view("nav");?>

<?php $this->load->view($view);?>

<?php $this->load->view("footer");?>