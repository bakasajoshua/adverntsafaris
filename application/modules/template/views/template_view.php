<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>1st Dashboard |National ACT Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/plugins/jquery-ui-1.10.4/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/plugins/bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<link href="<?php echo base_url();?>assets/custom/css/custom.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css"></link>
	<link rel="icon" sizes="196x196" href="<?php echo base_url();?>assets/img/favicon.gif">
	<link rel="apple-touch-icon-precomposed" sizes="196x196" href="<?php echo base_url();?>assets/img/favicon.gif">
	<script src="<?php echo base_url();?>assets/plugins/jquery-1.8.2/jquery-1.8.2.min.js"></script>
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-without-sidebar page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-inverse navbar-fixed-top ">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header  bg-black">
					<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span>ACT</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<!-- <ul class="nav navbar-nav navbar-right">
					<li class="active navbar navbar-nav">
						<a href="<?php// echo base_url();?>dashboard">1st Dashboard</a>
					</li>
					<li class="navbar navbar-nav">
						<a href="<?php// echo base_url();?>dashboard/dashboard2">2nd Dashboard</a>
					</li>
					<li class="navbar navbar-nav">
						<a href="<?php// echo base_url();?>dashboard/dashboard3">3rd Dashboard</a>
					</li>
						
					
				</ul> -->
				<!-- end header navigation right -->
				
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		<?php
			$this->load->view('dashboard');
		?>
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	
	<script src="<?php echo base_url();?>assets/plugins/jquery-ui-1.10.4/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/bootstrap-3.2.0/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/highcharts/js/highcharts.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url();?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url();?>assets/js/apps.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<!-- ================== BEGIN CUSTOM JS ================== -->
	<script src="<?php echo base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>assets/custom/js/custom.js"></script>
	<script src="<?php echo base_url();?>assets/js/form-plugins.demo.min.js"></script>
	<!-- ================== END CUSTOM JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
			FormPlugins.init();
		});
	</script>
	
</body>
</html>
