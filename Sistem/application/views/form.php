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
                        Your Request<small> manage request here</small>
                </h3>
                <ul class="breadcrumb">
                        <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo base_url(); ?>Home">Home</a> 
                                <i class="icon-angle-right"></i>
                        </li>
                        <li>
                                <a href="#">Request Product</a>
                                <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">Request</a></li>
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
                        <div class="caption"><i class="icon-edit"></i>Add New Request</div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="clearfix">
                        <?php form_open_multipart('Reqmultiple/add_multiple_post'); ?>
                        <form action="#" class="horizontal-form" method="POST">
                            <div class="row-fluid">
                                <div class="span12">
                                    <a href="#" class="icon-btn span4 ting">
                                            <?php
                                             $date=rand(1111,9999);
                                            ?>
                                        <div>REQUEST NO.<br><b><?php echo$date; ?></b></div>
                                        <input type="hidden" value="<?php echo$date; ?>" name="request_id">
                                    
                                    </a>   
                                    <a href="#" class="icon-btn span4 ting">
                                        <div>DATE.<br><b><?php echo date('d-m-Y') ?></b></div>
                                    </a>  
                                     <a href="#" class="icon-btn span4 ting">
                                        <div>CUSTOMER.<br>
                                            <b>
                                            <?php
                                                foreach ($getfk->result() as $key) {
                                                    echo "$key->NAME($key->CUSTOMER_ID)";
                                                }
                                            ?>
                                            </b>
                                        </div>
                                         <input class="m-wrap placeholder-no-fix" type="hidden" name="customer_fk" value="<?php foreach ($getfk->result() as $key) {echo "$key->CUSTOMER_ID";}?>"/>
                                     </a>   
                                </div>
                            </div>
                            <hr>
                            <div class="row-fluid flip-scroll">
                               <div class="span12">
                                    <table class="table table-bordered flip-content">
                                        <tr>  
                                            <!--<td>No</td>
                                            <td>YARN</td>
                                            <td>KNITTING</td>
                                            <td>COLOUR</td>
                                            <td>MOTIF</td>
                                            <td>MOTIF COLOUR</td>
                                            <td>QTY</td>
                                            <td>UNIT</td>
                                            <td></td>-->
                                        </tr>
                                        <?php for($i=1;$i<=$banyak_data;$i++): ?>
                                        <tr>  <td><?= $i ?></td>
                                            <td>
                                                 <div class="span12">
                                                    <div class="span2">
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <input type="text" class="m-wrap span12" placeholder="YARN"  name="data[<?= $i ?>][yarn]">
                                                                <input type="hidden" class="m-wrap span12" value="<?php echo$date; ?>"  name="data[<?= $i ?>][request_order_hdr_fk]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span2">
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <input type="text" class="m-wrap span12" placeholder="KNITTING"  name="data[<?= $i ?>][knitting]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span2">
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <input type="text" class="m-wrap span12" placeholder="COLOUR"  name="data[<?= $i ?>][colour]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span2">
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <input type="text" class="m-wrap span12" placeholder="MOTIF"  name="data[<?= $i ?>][motif]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span2">
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <input type="text" class="m-wrap span12" placeholder="MOTIF COLOUR"  name="data[<?= $i ?>][motif_colour]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="span2">
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <input type="text" class="m-wrap span12" placeholder="NOTE"  name="data[<?= $i ?>][note]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="span2">
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <input type="text" class="m-wrap span12" placeholder="QTY"  name="data[<?= $i ?>][qty]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="span2">
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <input type="text" class="m-wrap span12" placeholder="UNIT"  name="data[<?= $i ?>][unit]">
                                                            </div>
                                                        </div>
                                                    </div>
                                                      <div class="span2">
                                                       <div class="control-group">
                                                                <div class="controls">
                                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                        <div class="input-append">
                                                                            <div class="uneditable-input">
                                                                                <i class="icon-file fileupload-exists"></i> 
                                                                                <span class="fileupload-preview"></span>
                                                                            </div>
                                                                            <span class="btn btn-file">
                                                                            <span class="fileupload-new">Select file</span>
                                                                            <span class="fileupload-exists">Change</span>
                                                                            <input type="file" class="default" multiple="" name="data[<?= $i ?>][userfile]" />
                                                                            </span>
                                                                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div >                                              
                                                </div>

                                            </td>
                                            <!--<input type="hidden" value="<?php echo$date; ?>" name="data[<?= $i ?>][Request_order_hdr_fk]">
                                            <td><input type="text" name="data[<?= $i ?>][yarn]" /></td>
                                            <td><input type="text" name="data[<?= $i ?>][knitting]" /></td>
                                            <td><input type="text" name="data[<?= $i ?>][colour]" /></td>
                                            <td><input type="text" name="data[<?= $i ?>][motif]" /></td>
                                            <td><input type="text" name="data[<?= $i ?>][motif_colour]" /></td>
                                            <td><input type="text" name="data[<?= $i ?>][qty]" /></td>
                                            <td><input type="text" name="data[<?= $i ?>][unit]" /></td>-->
                                        </tr>
                                        <?php endfor ?>
                                    </table>
                                    <input type="submit" value="simpan" />
                               </div>
                            </div>

                        </div>
                        </form>

                        <?php echo form_close();?>
                        </div>
                </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
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
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script>
    <script src="<?php echo base_url(); ?>assets/scripts/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/ui-modals.js"></script>     
    <script>
        jQuery(document).ready(function() {       
           App.init();
           TableEditable.init();
           UIModals.init();
        });
    </script>
</body>
<!-- END BODY -->
</html>



