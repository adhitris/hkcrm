<?php  

$data['USERNAME'] = $this->session->userdata('USERNAME');

$data['ROLE'] = $this->session->userdata('ROLE');

$this->load->view('header.php',$data);

?>



<!-- END SIDEBAR -->

<!-- BEGIN PAGE -->

<style type="text/css">

    label{

        font-weight: bold;

    }

</style>

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

                        Sales Page

                </h3>

                <ul class="breadcrumb">

                        <li>

                                <i class="icon-home"></i>

                                <a href="<?php echo base_url(); ?>Home">Home</a> 

                                <i class="icon-angle-right"></i>

                        </li>

                        <li>

                                <a href="#">Sales Page</a>

                                <i class="icon-angle-right"></i>

                        </li>

                        <li>

                                <a href="<?= base_url(); ?>ComplaintApproval">Request Complaint</a>

                                <i class="icon-angle-right"></i>

                        </li>

                        <li><a href="#">Detail Request</a></li>

                </ul>

                    <!-- END PAGE TITLE & BREADCRUMB-->

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

                                    <span class="hidden-480">Request Complaint</span>

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

                                            <?php foreach ($complaint_id->result() as $detail) {?>



                                            <div class="control-group">

                                                    <label class="control-label">DATE</label>

                                                    <div class="controls">

                                                        <?php echo date_format(date_create($detail->DATE), 'd-m-Y H:i:s'); ?>

                                                    </div>

                                                </div>

                                                <div class="control-group">

                                                    <label class="control-label">CUSTOMER FK</label>

                                                    <div class="controls">

                                                        <a href='<?= base_url(); ?>customer/detail/<?= $detail->CUSTOMER_FK; ?>'><?= $this->model_salesmonitoring->getname($detail->CUSTOMER_FK); ?> - <?= $detail->CUSTOMER_FK; ?></a>

                                                    </div>

                                                </div>

                                                <div class="control-group">

                                                    <label class="control-label">SO NUMBER</label>

                                                    <div class="controls">

                                                        <a href='<?= base_url(); ?>Monitoring/detail/<?= $detail->SO_NUMBER; ?>'><?php echo $detail->SO_NUMBER; ?></a>

                                                    </div>

                                                </div>

                                                <div class="control-group">

                                                    <label class="control-label">NOTE</label>

                                                    <div class="controls">

                                                        <?php echo $detail->NOTE; ?>

                                                    </div>

                                                </div>

                                                <div class="control-group">

                                                    <label class="control-label">SAMPLE UPLOAD</label>

                                                    <div class="controls">

                                                        <a href='<?php echo base_url()?>assets/uploads/complaint/<?php echo $detail->SAMPLE_UPLOAD; ?>' class='btn btn-sm blue' target='_blank'>Click here</a>

                                                    </div>

                                                </div>

                                                <div class="control-group">

                                                    <label class="control-label">PIC NAME</label>

                                                    <div class="controls">

                                                        <?php echo $detail->PIC_NAME; ?>

                                                    </div>

                                                </div>

                                                <div class="control-group">

                                                    <label class="control-label">PIC PHONE NUMBER</label>

                                                    <div class="controls">

                                                        <?php echo $detail->PIC_PHONE_NUMBER; ?>

                                                    </div>

                                                </div>

                                                <div class="control-group">

                                                    <label class="control-label">STATUS</label>

                                                    <div class="controls">

                                                        <?php echo $detail->STATUS; ?>

                                                    </div>

                                                </div>

                                                <div class="control-group">

                                                    <label class="control-label">FOLLOW UP BY</label>

                                                    <div class="controls">

                                                        <?php echo $detail->FOLLOW_UP_BY; ?>

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

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>  

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>

    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/select2/select2.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/data-tables/jquery.dataTables.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/data-tables/DT_bootstrap.js"></script>



    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <script src="<?php echo base_url(); ?>assets/scripts/app.js"></script>

    <script src="<?php echo base_url(); ?>assets/scripts/table-editable.js"></script>   



    <script src="<?php echo base_url(); ?>assets/scripts/form-components.js"></script>    

    <script>

        jQuery(document).ready(function() {       

           App.init();

           TableEditable.init();

        });

    </script>

</body>

<!-- END BODY -->

</html>