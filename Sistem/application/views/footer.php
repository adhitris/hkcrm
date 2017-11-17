<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		<?php echo date('Y');?> &copy; Jimmy - Alvin - Aditya
	</div>
	<!-- END COPYRIGHT -->
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
    <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
	<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
	<script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/date.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
	<script src="<?php echo base_url(); ?>assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url(); ?>assets/scripts/app.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/scripts/login-soft.js" type="text/javascript"></script>      
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		jQuery(document).ready(function() {     
		   // App.init();
		   // Login.init();// initlayout and core plugins
		   // Index.init();
		   // Index.initJQVMAP(); // init index page's custom scripts
		   // Index.initCalendar(); // init index page's custom scripts
		   // Index.initCharts(); // init index page's custom scripts
		   // Index.initChat();
		   // Index.initMiniCharts();
		   // Index.initDashboardDaterange();
		   // Index.initIntro();
		});
	</script>
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>