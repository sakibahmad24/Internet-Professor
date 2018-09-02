<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo base_url("asset/backend/plugins/images/favicon.png")?> >
    <title>Internet Professor</title>
    <!-- Bootstrap Core CSS -->
    <link href=<?php echo base_url("asset/backend/bootstrap/dist/css/bootstrap.min.css")?> rel="stylesheet">
    <!-- Menu CSS -->
    <link href=<?php echo base_url("asset/backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css")?> rel="stylesheet">
    <!-- animation CSS -->
    <link href=<?php echo base_url("asset/backend/css/animate.css")?> rel="stylesheet">
    <!-- Custom CSS -->
    <link href=<?php echo base_url("asset/backend/css/style.css")?> rel="stylesheet">
    <!-- color CSS -->
    <link href=<?php echo base_url("asset/backend/css/colors/default.css")?> id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
		<?php $this->load->view("backend_topbar");?>
		<?php $this->load->view("backend_sidebar");?>
	
        <!-- Page Content -->
		<div id="page-wrapper">
			
			<?php $this->load->view($view);?>
			
		<footer class="footer text-center"> 2018 &copy; Internet Professor </footer>
        
        </div>
		<!-- /#page-wrapper -->
		
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src=<?php echo base_url("asset/backend/plugins/bower_components/jquery/dist/jquery.min.js")?>></script>
    <!-- Bootstrap Core JavaScript -->
    <script src=<?php echo base_url("asset/backend/bootstrap/dist/js/bootstrap.min.js")?>></script>
    <!-- Menu Plugin JavaScript -->
    <script src=<?php echo base_url("asset/backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js")?>></script>
    <!--slimscroll JavaScript -->
    <script src=<?php echo base_url("asset/backend/js/jquery.slimscroll.js")?>></script>
    <!--Wave Effects -->
    <script src=<?php echo base_url("asset/backend/js/waves.js")?> ></script>
    <!-- Custom Theme JavaScript -->
    <script src=<?php echo base_url("asset/backend/js/custom.min.js")?> ></script>
</body>

</html>
