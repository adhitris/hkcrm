<?php  
$data['USERNAME'] = $this->session->userdata('USERNAME');
$data['ROLE'] = $this->session->userdata('ROLE');
$this->load->view('header.php',$data);
?>
<div class="page-container row-fluid">
		<?php
                $data['u']=$this->uri->segment(1);
                $this->load->view('menu',$data);
                ?>
        <!-- BEGIN PAGE -->
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
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                        Product Knwoledge<small> Manage all product here</small>
                </h3>
                <ul class="breadcrumb">
                    <li>
                            <i class="icon-home"></i>
                            <a href="<?php echo base_url(); ?>Home">Home</a> 
                            <i class="icon-angle-right"></i>
                    </li>
                    <li>
                            <a href="#">Company profile</a>
                            <i class="icon-angle-right"></i>
                    </li>
                    <li><a href="#">Product Knowledge</a></li>
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box light-grey">
                    <div class="portlet-title">
                        <div class="caption"><i class="icon-globe"></i>All Product</div>
                        <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="clearfix">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn green">
                                Add New <i class="icon-plus"></i>
                                </button>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                        <li><a href="#">Print</a></li>
                                        <li><a href="#">Save as PDF</a></li>
                                        <li><a href="#">Export to Excel</a></li>
                                </ul>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                                    <tr>
                                            <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
                                            <th>Username</th>
                                            <th class="hidden-480">Email</th>
                                            <th class="hidden-480">Points</th>
                                            <th class="hidden-480">Joined</th>
                                            <th ></th>
                                    </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>shuxer</td>
                                    <td class="hidden-480"><a href="mailto:shuxer@gmail.com">shuxer@gmail.com</a></td>
                                    <td class="hidden-480">120</td>
                                    <td class="center hidden-480">12 Jan 2012</td>
                                    <td ><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>looper</td>
                                    <td class="hidden-480"><a href="mailto:looper90@gmail.com">looper90@gmail.com</a></td>
                                    <td class="hidden-480">120</td>
                                    <td class="center hidden-480">12.12.2011</td>
                                    <td ><span class="label label-warning">Suspended</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>userwow</td>
                                    <td class="hidden-480"><a href="mailto:userwow@yahoo.com">userwow@yahoo.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">12.12.2012</td>
                                    <td ><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>user1wow</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">userwow@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">12.12.2012</td>
                                    <td ><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>restest</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">test@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">12.12.2012</td>
                                    <td ><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>foopl</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">19.11.2010</td>
                                    <td ><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>weep</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">19.11.2010</td>
                                    <td ><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>coop</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">19.11.2010</td>
                                    <td ><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>pppol</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">19.11.2010</td>
                                    <td ><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>test</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">19.11.2010</td>
                                    <td ><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>userwow</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">userwow@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">12.12.2012</td>
                                    <td ><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>test</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">test@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">12.12.2012</td>
                                    <td ><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>goop</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">12.11.2010</td>
                                    <td ><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>weep</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">15.11.2011</td>
                                    <td ><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>toopl</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">16.11.2010</td>
                                    <td ><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>userwow</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">userwow@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">9.12.2012</td>
                                    <td ><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>tes21t</td>
                                    <td class="hidden-480"><a href="mailto:userwow@gmail.com">test@gmail.com</a></td>
                                    <td class="hidden-480">20</td>
                                    <td class="center hidden-480">14.12.2012</td>
                                    <td ><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                        <td>fop</td>
                                        <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                        <td class="hidden-480">20</td>
                                        <td class="center hidden-480">13.11.2010</td>
                                        <td ><span class="label label-warning">Suspended</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                        <td>kop</td>
                                        <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                        <td class="hidden-480">20</td>
                                        <td class="center hidden-480">17.11.2010</td>
                                        <td><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                        <td>vopl</td>
                                        <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                        <td class="hidden-480">20</td>
                                        <td class="center hidden-480">19.11.2010</td>
                                        <td><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                        <td>userwow</td>
                                        <td class="hidden-480"><a href="mailto:userwow@gmail.com">userwow@gmail.com</a></td>
                                        <td class="hidden-480">20</td>
                                        <td class="center hidden-480">12.12.2012</td>
                                        <td><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                        <td>wap</td>
                                        <td class="hidden-480"><a href="mailto:userwow@gmail.com">test@gmail.com</a></td>
                                        <td class="hidden-480">20</td>
                                        <td class="center hidden-480">12.12.2012</td>
                                        <td><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                        <td>test</td>
                                        <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                        <td class="hidden-480">20</td>
                                        <td class="center hidden-480">19.12.2010</td>
                                        <td><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                        <td>toop</td>
                                        <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                        <td class="hidden-480">20</td>
                                        <td class="center hidden-480">17.12.2010</td>
                                        <td><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                        <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                        <td>weep</td>
                                        <td class="hidden-480"><a href="mailto:userwow@gmail.com">good@gmail.com</a></td>
                                        <td class="hidden-480">20</td>
                                        <td class="center hidden-480">15.11.2011</td>
                                        <td><span class="label label-success">Approved</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
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
	<script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
	<script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js"></script>
	<script src="assets/scripts/table-managed.js"></script>     
	<script>
		jQuery(document).ready(function() {       
		   App.init();
		   TableManaged.init();
		});
	</script>
</body>
<!-- END BODY -->
</html>