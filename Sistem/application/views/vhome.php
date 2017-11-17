<?php 
$this->load->view('header.php');
?>
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<?php
        	$data['u']=$this->uri->segment(1);
        	$this->load->view('menu',$data);
        ?>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<h3 class="page-title">
							Dashboard <small>statistics and more</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Dashboard</a></li>
							<li class="pull-right no-text-shadow">

							</li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<div id="dashboard">
					<!-- BEGIN DASHBOARD STATS -->
					<div class="row-fluid">
						<?php if($ROLE == 'ADMINISTRATOR' || $ROLE == 'MANAGER'){?>
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat green">
								<div class="visual">
									<i class="icon-user"></i>
								</div>
								<div class="details">
									<div class="number"><?php
											echo $this->db->count_all('m_registration');
										?></div>
									<div class="desc">New Registration</div>
								</div>
								<a class="more" href="LRegistration">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div>
						<?php }?>
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat red">
								<div class="visual">
									<i class="icon-warning-sign"></i>
								</div>
								<div class="details">
									<div class="number"><?php
											if($ROLE == 'CUSTOMER'){
												$query = $this->db->where('CUSTOMER_FK', $this->session->userdata('CUSTOMER_ID'))->get('t_complaint');
												echo $query->num_rows();
											}else if($ROLE == 'SALES'){
												$query = $this->db->join('m_customer as c', 'cmp.CUSTOMER_FK=c.CUSTOMER_ID')->join('m_sales as s', 'c.SALES_FK=s.SALES_ID')->where('s.SALES_ID', $this->session->userdata('SALES_ID'))->get('t_complaint cmp');
												echo $query->num_rows();
											}else{
												$query = $this->db->get('t_complaint');
												echo $query->num_rows();
											}
											/* echo $this->db->count_all('t_complaint');
											$this->db->where('USER_FK',$this->session->userdata('USERNAME')); */
										?></div>
									<div class="desc">Total Complaint</div>
								</div>
								<a class="more" href="ComplaintApproval">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div>
						<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
							<div class="dashboard-stat blue">
								<div class="visual">
									<i class="icon-shopping-cart"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											if($ROLE == 'CUSTOMER'){
												$query = $this->db->where('CUSTOMER_FK', $this->session->userdata('CUSTOMER_ID'))->get('t_request_order_hdr');
												echo $query->num_rows();
											}else if($ROLE == 'SALES'){
												$query = $this->db->join('m_customer as c', 'ro.CUSTOMER_FK=c.CUSTOMER_ID')->join('m_sales as s', 'c.SALES_FK=s.SALES_ID')->where('s.SALES_ID', $this->session->userdata('SALES_ID'))->get('t_request_order_hdr ro');
												echo $query->num_rows();
											}else{
												$query = $this->db->get('t_request_order_hdr');
												echo $query->num_rows();
											}
										?>
									</div>
									<div class="desc">                           
										Request Order
									</div>
								</div>
								<a class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div>
						<?php if($ROLE == 'ADMINISTRATOR' || $ROLE == 'MANAGER' || $ROLE == 'SALES'){?>
						<div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
							<div class="dashboard-stat purple">
								<div class="visual">
									<i class="icon-group"></i>
								</div>
								<div class="details">
									<div class="number">
										<?php
											if($ROLE == 'SALES'){
												$this->db->where('SALES_FK', $this->session->userdata('SALES_ID'));
												$query = $this->db->get('m_customer');
												echo $query->num_rows();
											}else{
												echo $this->db->count_all('m_customer');
											}
										?>

									</div>
									<div class="desc">Customer</div>
								</div>
								<a class="more" href="#">
								View more <i class="m-icon-swapright m-icon-white"></i>
								</a>                 
							</div>
						</div>
						<?php }?>
					</div>
					<!-- END DASHBOARD STATS -->
					<div class="clearfix"></div>
					<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN PORTLET-->
							<h3>VISI PERUSAHAAN</h3>
							<p>
								
Menjadi perusahaan pencelupan kain nomor 1 di asia tenggara yang terkemuka dalam hal kualitas dengan proses yang ramah lingkungan.
							</p>

							<!-- END PORTLET-->
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN PORTLET-->
							<h3>MISI PERUSAHAAN</h3>
							<p>
								
Menjamin kepuasan pelanggan terhadap kualitas dan waktu penyerahan yang telah disepakati dengan pelanggan, serta menindaklanjuti setiap permintaan pelanggan dalam tempo 1x24 jam, yang ditunjang dengan sumber daya manusia yang handal dan teknologi yang ramah lingkungan, serta komitmen untuk peningkatan mutu secara berkelanjutan							</p>

							<!-- END PORTLET-->
						</div>
					</div>
				</div>
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
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js" type="text/javascript"></script>
	<script src="assets/scripts/index.js" type="text/javascript"></script>        
	<!-- END PAGE LEVEL SCRIPTS -->  
	<script>
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins
		   Index.init();
		   Index.initChat();
		   Index.initMiniCharts();

		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>