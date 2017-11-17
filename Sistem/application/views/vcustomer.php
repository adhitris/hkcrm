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

                        Customer List<small> manage customer here</small>

                </h3>

                <ul class="breadcrumb">

                        <li>

                                <i class="icon-home"></i>

                                <a href="<?php echo base_url(); ?>Home">Home</a> 

                                <i class="icon-angle-right"></i>

                        </li>

                        <li>

                                <a href="#">Data User</a>

                                <i class="icon-angle-right"></i>

                        </li>

                        <li><a href="#">Customer</a></li>

                </ul>

                    <!-- END PAGE TITLE & BREADCRUMB-->

            </div>

        </div>

            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->

        <div class="row-fluid">

            <div class="span12">

                    <!-- BEGIN EXAMPLE TABLE PORTLET-->

                <div class="portlet box blue">

                    <div class="portlet-title">

                        <div class="caption"><i class="icon-edit"></i> Customer List</div>

                        <div class="tools">

                            <a href="javascript:;" class="collapse"></a>

                            <a href="javascript:;" data-toggle="modal" class="config"></a>

                            <a href="javascript:;" class="remove"></a>

                        </div>

                    </div>





                    <div id="portlet-add" class="modal hide">

                        <div class="modal-header">

                            <button data-dismiss="modal" class="close" type="button"></button>

                            <h3>Add New Customer</h3>

                        </div>

                        <div class="modal-body">

                            

                            <div class="content">       

                            <!-- BEGIN ADD NEW FORM -->

                            <?php echo form_open("Customer/addDB"); ?>

                            <form class="form-vertical register-form">

                                <div class="control-group">

                                    <div class="controls">

                                        <div class="input-icon left">

                                            <i class="icon-asterisk"></i>

                                            <input class="m-wrap placeholder-no-fix" type="text" placeholder="CUSTOMER ID" name="customer_id"/>

                                        </div>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <div class="controls">

                                        <div class="input-icon left">

                                            <i class="icon-asterisk"></i>

                                            <input class="m-wrap placeholder-no-fix" type="text" placeholder="USER ID" name="user_id"/>

                                        </div>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <div class="controls">

                                        <div class="input-icon left">

                                            <i class="icon-asterisk"></i>

                                            <input class="m-wrap placeholder-no-fix" type="text" placeholder="SALES ID" name="sales_id"/>

                                        </div>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <div class="controls">

                                        <div class="input-icon left">

                                            <i class="icon-user"></i>

                                            <input class="m-wrap placeholder-no-fix" type="text" placeholder="NAME" name="name"/>

                                        </div>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <div class="controls">

                                        <div class="input-icon left">

                                            <i class="icon-envelope"></i>

                                            <input class="m-wrap placeholder-no-fix" type="text" placeholder="EMAIL" name="email"/>

                                        </div>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <div class="controls">

                                        <div class="input-icon left">

                                            <i class="icon-phone"></i>

                                            <input class="m-wrap placeholder-no-fix" type="text" placeholder="PHONE NUMBER" name="phone_number"/>

                                        </div>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <div class="controls">

                                        <div class="input-icon left">

                                            <i class="icon-home"></i>

                                            <input class="m-wrap placeholder-no-fix" type="text" placeholder="ADDRESS" name="address"/>

                                        </div>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <div class="controls">

                                        <div class="input-icon left">

                                            <i class="icon-minus"></i>

                                            <input class="m-wrap placeholder-no-fix" type="text" placeholder="CITY" name="city"/>

                                        </div>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <div class="controls">

                                        <div class="input-icon left">

                                            <i class="icon-minus"></i>

                                            <input class="m-wrap placeholder-no-fix" type="text" placeholder="PROVINCE" name="province"/>

                                        </div>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <div class="controls">

                                        <div class="input-icon left">

                                            <i class="icon-minus"></i>

                                            <input class="m-wrap placeholder-no-fix" type="text" placeholder="POSTAL CODE" name="postal_code"/>

                                        </div>

                                    </div>

                                </div>

                                <div class="control-group">

                                    <div class="controls">

                                        <div class="input-icon left">

                                            <i class="icon-minus"></i>

                                            <input class="m-wrap placeholder-no-fix" type="text" placeholder="COUNTRY" name="country"/>

                                        </div>

                                    </div>

                                </div>

                                <div class="form-actions">

                                    <button type="submit" id="register-submit-btn" class="btn green pull-right">

                                    ADD NEW

                                    </button>            

                                </div>

                            </form>

                                     <?php echo form_close();?>

                            <!-- END ADD NEW FORM -->

                            </div>



                        </div>

                    </div>





                    <div class="portlet-body flip-scroll">

                        <div class="clearfix">

                            <div class="btn-group">

                                <a href="#portlet-add" data-toggle="modal">

                                <button class="btn green">

                                Add New <i class="icon-plus"></i>

                                </button>

                                </a>

                            </div>

                        </div>

                        

                        <table class="table table-striped table-hover table-bordered flip-content" id="sample_editable_1">

                            <thead class="flip-content">

                                <tr>



                                    <th>CUSTOMER ID</th>

                                    <th>USER ID</th>

                                    <th>SALES FK</th>

                                    <th>NAME</th>

                                    <th>EMAIL</th>

                                    <th>PHONE NUMBER</th>

                                    <th>ADDRESS</th>

                                    <th>CITY</th>

                                    <th>PROVINCE</th>

                                    <th>POSTAL CODE</th>

                                    <th>COUNTRY</th>

                                    <th>ACTION</th>

                                </tr>

                            </thead>



                            <tbody>

                            <?php

                              foreach ($listcustomer->result() as $row) {  

                               echo"

                               <tr class=''>

                                <td>$row->CUSTOMER_ID</td>

                                <td class='fixed-size'>$row->USER_FK</td>

                                <td>$row->SALES_FK</td>

                                <td>$row->NAME</td>

                                <td class='fixed-size'>$row->EMAIL</td>

                                <td>$row->PHONE_NUMBER</td>

                                <td>$row->ADDRESS</td>

                                <td>$row->CITY</td>

                                <td>$row->PROVINCE</td>

                                <td>$row->POSTAL_CODE</td>

                                <td>$row->COUNTRY</td>

                                <td><a href='Customer/updatecustomer/$row->CUSTOMER_ID'>Edit</a></td>

                               </tr>

                              ";}

                              ?>

                            </tbody>

                        </table>

                    </div>

                </div>

        </div>

            <!-- END PAGE CONTENT -->

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

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/data-tables/jquery.dataTables.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/data-tables/DT_bootstrap.js"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<!-- BEGIN PAGE LEVEL SCRIPTS -->

	<script src="<?php echo base_url(); ?>assets/scripts/app.js"></script>

	<script src="<?php echo base_url(); ?>assets/scripts/table-editable.js"></script>    

	<script>

		jQuery(document).ready(function() {       

		   App.init();

		   TableEditable.init();

		});

	</script>

</body>

<!-- END BODY -->

</html>