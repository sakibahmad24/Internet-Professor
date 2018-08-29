<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="Internet Professor">
    <meta name="keywords" content="business, clean, creative, corporate, light, minimal, modern, portfolio, website, template">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Internet Professor</title>

    




    <!-- Bootstrap Core CSS -->
    <link href=<?php echo base_url("css/bootstrap.min.css") ?> rel="stylesheet">

    <!-- Ajax and JQuery -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Custom CSS -->
    <link href=<?php echo base_url("css/modern-business.css")?> rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?php echo base_url("font-awesome/css/font-awesome.min.css")?> rel="stylesheet" type="text/css">



<!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href=<?php echo base_url("css/bootstrap.css")?> type="text/css">
    <link rel="stylesheet" href=<?php echo base_url("css/animate.css")?> type="text/css">
    <link rel="stylesheet" href=<?php echo base_url("css/owl.carousel.css")?> type="text/css">
    <link rel="stylesheet" href=<?php echo base_url("css/magnific-popup.css")?> type="text/css">
    <link rel="stylesheet" href=<?php echo base_url("css/style.css")?> type="text/css">
    <link rel="stylesheet" href=<?php echo base_url("demo/demo.css")?> type="text/css">

    <!-- background -->
    <link rel="stylesheet" href=<?php echo base_url("css/bg.css")?> type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" id="colors" href=<?php echo base_url("css/colors/orange.css")?> type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
	<script>
		
		var SITE_URL = <?php echo site_url()?>
		
		
	</script>
	
	<body>
		


		
<?php $this->load->view("nav");?>

<?php $this->load->view($view);?>

<?php $this->load->view("footer");?>
