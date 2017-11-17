<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>CRM-HARAPAN KURNIA</title>
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
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo base_url(); ?>assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo base_url(); ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo.png" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
            <img src="assets/img/logo.png" alt="" />
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">       
		<!-- BEGIN REGISTRATION FORM -->
        <?php echo form_open("registration/addDB"); ?>
		<form class="form-vertical register-form">
			<h3 class="">Sign Up</h3>
			<p>Enter your account details below:</p>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Name</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Name" name="name"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Email</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-envelope"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email"/>
					</div>
				</div>
			</div>
                        <div class="control-group">
				
				<label class="control-label visible-ie8 visible-ie9">Phone Number</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-phone"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Phone Number" name="phone_number"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">Address</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-home"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Address" name="address"/>
					</div>
				</div>
			</div>
            <div class="control-group">
				
				<label class="control-label visible-ie8 visible-ie9">City</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-minus"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="City" name="city"/>
					</div>
				</div>
			</div>
                        <div class="control-group">
				
				<label class="control-label visible-ie8 visible-ie9">Province</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-minus"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Province" name="province"/>
					</div>
				</div>
			</div>
            <div class="control-group">
				
				<label class="control-label visible-ie8 visible-ie9">Postal Code</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-minus"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Postal Code" name="postal_code"/>
					</div>
				</div>
			</div>
            <div class="control-group">
				
				<label class="control-label visible-ie8 visible-ie9">County</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-minus"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Country" name="country"/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<label class="checkbox">
					<input type="checkbox" name="tnc"/> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
					</label>  
					<div id="register_tnc_error"></div>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<div class="g-recaptcha" data-sitekey="6LejvSATAAAAAPOgDMqlGaGM8mFKl4PO_Oey-hXh"></div>
				</div>
			</div>
			<div class="form-actions">
				<a href="<?php echo base_url();?>auth"><button id="register-back-btn" type="button" class="btn">
				<i class="m-icon-swapleft"></i>  Back</button></a>
				<button type="submit" id="register-submit-btn" class="btn blue pull-right">
				Sign Up <i class="m-icon-swapright m-icon-white"></i>
				</button>            
			</div>
		</form>
                 <?php echo form_close();?>
		<!-- END REGISTRATION FORM -->
	</div>
	<?php if($this->session->flashdata('alert')){
     	?>
     	<script type="text/javascript">
     		alert("Registration failed!");
     	</script>
     	<?php
     }
     ?>
     <?php if($this->session->flashdata('taken')){
     	?>
     	<script type="text/javascript">
     		alert("Sorry that email is taken!");
     	</script>
     	<?php
     }
     ?>

	<?php $this->load->view('footer.php')?>