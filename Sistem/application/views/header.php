<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>e-CRM B2B-HARAPAN KURNIA</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
	
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo base_url(); ?>assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo base_url(); ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/data-tables/DT_bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo.png" />
</head>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5728260c133aca6470db0241/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<body class="page-header-fixed">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="<?php echo base_url(); ?>">
				<img src="<?php echo base_url(); ?>assets/img/kecil.png" alt="logo" style="max-width:130px;margin-top:-5px; "/>
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="<?php echo base_url(); ?>assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->            
				<!-- BEGIN TOP NAVIGATION MENU -->              
				<ul class="nav pull-right">

					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img alt="" src="<?php echo base_url(); ?>assets/img/avatar1_small.jpg" />
						<span class="username"><?php echo $USERNAME; ?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('home/logout'); ?>"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU --> 
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>