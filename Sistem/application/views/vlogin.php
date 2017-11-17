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
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo.png" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
            <img src="assets/img/logologin.png" alt="" />
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
              <?php echo form_open("Auth/cek_login"); ?>
             
            <form class="form-vertical login-form">
			<h4> <a href="http://crm.harapankurnia.co.id/Home"><i class="m-icon-swapleft m-icon-white"></i> Back to Homepage</a></h4>
			<h3 class="form-title">Login to your account</h3>			
			<div class="control-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">USERNAME</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-user"></i>
						<input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="USERNAME" required/>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label visible-ie8 visible-ie9">PASSWORD</label>
				<div class="controls">
					<div class="input-icon left">
						<i class="icon-lock"></i>
						<input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="PASSWORD" required/>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn blue pull-right">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</button>   
				<div class="forget-password">
				<h4>Forgot your password ?</h4>
				<p>
					no worries, click <a href="javascript:;" class="" id="forget-password">here</a>
					to reset your password.
				</p>
			</div>
			</div>
			

			<div class="create-account">
				<p>
					Don't have an account yet ?&nbsp; 
					<a href="registration" id="register-btn" class="">Create an account</a>
				</p>
			</div>
		</form>
                      <?php echo form_close();?>

                        
		
            
		<!-- END LOGIN FORM -->        
		<!-- END REGISTRATION FORM -->
	</div>
	<?php if($this->session->flashdata('alert')){
             	?>
             	<script type="text/javascript">
             		alert("Please check your email");
             	</script>
             	<?php
             }
             ?>
	<?php $this->load->view('footer.php')?>