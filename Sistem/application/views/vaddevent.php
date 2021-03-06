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
                        Event
                </h3>
                <ul class="breadcrumb">
                        <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo base_url(); ?>Home">Home</a> 
                                <i class="icon-angle-right"></i>
                        </li>
                        <li>
                                <a href="#">Event</a>
                                <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">Add Event</a></li>
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
                        <div class="caption"><i class="icon-edit"></i>Add New Event</div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="clearfix">
                        <?php echo form_open_multipart("Event/multi"); ?>
                        <form action="#" class="horizontal-form">
                        <div class="modal-body">
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="control-group">
                                         <div class="controls">
                                            <input type="text" class="m-wrap span12" placeholder="TITTLE" name="title">
                                             <?php
                                             $id=rand(1111,9999);
                                            ?>
                                             <input type="hidden" class="m-wrap span12" name="id" value="<?php echo$id; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12 m-wrap" name="note" rows="5" placeholder="DETAIL EVENT"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="control-group">
                                        <label>DATE EVENT</label>
                                        <div class="controls">
                                            <input type="date" class="span12 m-wrap" name="dateev" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="control-group">
                                        <div class="controls">
                                          Max size : 2MB | Picture Resolution : 1280px x 500px
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid">

                                <script src="<?php echo base_url(); ?>assets/scripts/jquery-2.0.3.min.js" type="text/javascript"></script>
                            <script type="text/javascript">
                                    function addField() {
                                        $($('#template').html()).appendTo('#field_grid tbody');
                                    }
                             
                                    function removeField(e) {
                                        if($('input[type=file]').parents('tbody').find('tr').length <= 0) {
                                            return false;
                                        }
                                        var row = $(e).closest('tr').remove();
                                    }
                             
                                    $(function() {
                                        $('#field_grid').on('click', '.btn-remove', function(e) {
                                            removeField(e.target);
                                            return e.preventDefault();
                                        });
                             
                                        $('#add_field').click(function(e) {
                                            addField();
                                            return e.preventDefault();
                                        });
                             
                                        $('#field_grid').on('click', '.btn-up', function(e) {
                                            var current = $(this).parents('tr');
                                             
                                            if(current.prevAll().length == 1) {
                                                return e.preventDefault();
                                            }
                                            current.prev().before(current);
                                            return e.preventDefault();
                                        });
                             
                                        $('#field_grid').on('click', '.btn-down', function(e) {
                                            var current = $(this).parents('tr');
                                            current.next().after(current);
                                            return e.preventDefault();
                                        });
                                    });
                                </script>
                            <fieldset>
                            <div class="portlet-body flip-scroll">
                                <div class="span12">
                                    <div class="portlet-body form">
                                        <div id="field">
                                            <table id="field_grid" class="table-bordered table-condensed flip-content">
                                                <tr class="baris">
                                                    <td>
                                                    <div class="row-fluid">
                                                        <div class="span4">
                                                            <div class="control-group">
                                                                <div class="controls">
                                                                <input type="hidden" class="default" name="ida[]" value=""/>
                                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                        <div class="input-append">
                                                                            <div class="uneditable-input">
                                                                                <i class="icon-file fileupload-exists"></i> 
                                                                                <span class="fileupload-preview"></span>
                                                                            </div>
                                                                                <span class="btn btn-file">
                                                                                <span class="fileupload-new">Select file</span>
                                                                                <span class="fileupload-exists">Change</span>
                                                                                <input type="file" class="default" name="uploadedimages[]" />
                                                                                
                                                                                </span>
                                                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="span3">
                                                                <div class="control-group">
                                                                    <div class="controls">
                                                                        <a href="#" class="btn-remove btn red icn-only">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="action-buttons btn-group">
                                            <button id="add_field" class="btn green">Add Image</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </fieldset>
                            <script type="text/template" id="template">
                                 <tr>
                                    <td>
                                        <div class="span6">
                                            <div class="control-group">
                                                <div class="controls">
                                                <input type="hidden" class="default" name="ida[]" value=""/>
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="input-append">
                                                            <div class="uneditable-input">
                                                                <i class="icon-file fileupload-exists"></i> 
                                                                <span class="fileupload-preview"></span>
                                                            </div>
                                                                <span class="btn btn-file">
                                                                <span class="fileupload-new">Select file</span>
                                                                <span class="fileupload-exists">Change</span>
                                                                <input type="file" class="default" name="uploadedimages[]" />
                                                                
                                                                </span>
                                                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span6">
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <a href="#" class="btn-remove btn red icn-only">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                            </script>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn green">Add New</button>
                        </div>
                        </form>

                        <?php //echo form_close();?>
                        </div>
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