<?php  
$data['USERNAME'] = $this->session->userdata('USERNAME');
$data['ROLE'] = $this->session->userdata('ROLE');
$this->load->view('header.php',$data);
?>

<!-- END SIDEBAR -->
<!-- BEGIN PAGE -->
<div class="page-container row-fluid">
<?php
$data['u']=$this->uri->segment(1);
$this->load->view('menu',$data);
?>
<style type="text/css">
	label{
		font-weight: bold;
		display: inline-block;
	}
</style>		<!-- BEGIN PAGE -->  
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->   
				<div class="row-fluid">
					<div class="span12">
						<h3 class="page-title">
							Detail Customer
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<span class="icon-angle-right"></span>
							</li>
							<li>
								<a href="#">Detail</a>
								<span class="icon-angle-right"></span>
							</li>
							<li><a href="#">Detail Customer</a></li>
						</ul>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box blue tabbable">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-reorder"></i>
									<span class="hidden-480">Detail Customer</span>
								</div>
							</div>
							<div class="portlet-body form">
								<div class="tabbable portlet-tabs">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#portlet_tab1" data-toggle="tab">Default</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="portlet_tab1">
											<?php echo form_open("Customer/updatedb"); ?>
											<form action="#" class="form-horizontal">
											<?php foreach ($customer->result() as $detail) {?>
											<div class="span6">
												<div class="control-group">
													<label class="control-label">CUSTOMER ID</label>
													<div class="controls">
														<?php echo $detail->CUSTOMER_ID; ?>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">USER ID</label>
													<div class="controls">
														<?php echo $detail->USER_FK; ?>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">SALES ID</label>
													<div class="controls">
														<?php echo $detail->SALES_FK; ?>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">NAME</label>
													<div class="controls">
														<?php echo $detail->NAME; ?>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">EMAIL</label>
													<div class="controls">
														<?php echo $detail->EMAIL; ?>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">PHONE NUMBER</label>
													<div class="controls">
														<?php echo $detail->PHONE_NUMBER; ?>
													</div>
												</div>
											</div>
											<div class="span6">
												<div class="control-group">
													<label class="control-label">ADDRESS</label>
													<div class="controls">
														<?php echo $detail->ADDRESS; ?>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">CITY</label>
													<div class="controls">
														<?php echo $detail->CITY; ?>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">PROVINCE</label>
													<div class="controls">
														<?php echo $detail->PROVINCE; ?>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">POSTAL CODE</label>
													<div class="controls">
														<?php echo $detail->POSTAL_CODE; ?>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">COUNTRY</label>
													<div class="controls">
														<?php echo $detail->COUNTRY; ?>
													</div>
												</div>
											</div> 
												<?php } ?>
											</form>
											<?php echo form_close(); ?>
											<!-- END FORM-->  
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->         
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->  
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
          <?php echo date('Y');?> &copy; Jimmy - Alvin - Aditya
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo base_url(); ?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<script src="<?php echo base_url(); ?>assets/scripts/app.js"></script>     
	<script>
		jQuery(document).ready(function() {   
		   // initiate layout and plugins
		   App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>