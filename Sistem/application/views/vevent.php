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
                                <a href="#">Company Profile</a>
                                <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">Event</a></li>
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
                        <div class="caption"><i class="icon-edit"></i>Event</div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>
                    <div class="portlet-body flip-scroll">
                        <div class="clearfix">
                            <!--
                            <div class="btn-group">
                                <a data-toggle="modal" href="#responsive">
                                <button class="btn green">
                                Add New <i class="icon-plus"></i>
                                </button>
                                </a>
                            </div>
                            -->
                            <div class="btn-group">
                                <a href="Event/addorder">
                                <button class="btn green">
                                Add New <i class="icon-plus"></i>
                                </button>
                                </a>
                            </div>
                            <div class="btn-group pull-right">
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered flip-content" id="sample_editable_1">
                            <thead class="flip-content">
                                <tr>
                                    <th>EVENT ID</th>
                                    <th>TITTLE</th>
                                    <th>NOTE</th>
                                    <th>DATE EVENT</th>
                                    <th>IMAGE</th>
                                    <th>STATUS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                              foreach ($event->result() as $row) {   
                                $date = date("d/m/Y", strtotime($row->DATE_EVENT));
                               ?>
                               <tr class=''>
                                <td><?php echo $row->EVENT_ID;?></td>
                                <td><?php echo $row->TITLE; ?></td>
                                <td><?php 
                                    $note=$row->DETAIL_NOTE;
                                    $note=character_limiter($note,'50');
                                    echo$note;
                                ?></td>
                                <td><?php echo $date; ?></td>
                                <td><a href='<?php echo base_url(); ?>sistem/assets/uploads/event/<?php echo $row->EVENT_DTL_ID;?>' target='_blank' class='btn btn-sm blue'>View</a></td>
                                <td><?php echo $row->STATUS; ?></td>
                                <td>
                                    <div class='btn-group'>
                                    <?php
                                   if($row->STATUS=='PUBLISH'){
                                        echo"
                                         <a class='btn blue' href='#' data-toggle='dropdown'>Response
                                        </a>
                                        <ul class='dropdown-menu bottom-up'>
                                            <li><a href='#' onclick='rejectData($row->EVENT_ID)'><i class='icon-trash'></i> UNPUBLISH</a></li>
                                        </ul>";
                                    }
                                    if($row->STATUS=='UNPUBLISH'){
                                        echo"
                                         <a class='btn blue' href='#' data-toggle='dropdown'>Response
                                        </a>
                                        <ul class='dropdown-menu bottom-up'>
                                            <li><a href='#' onclick='approveData($row->EVENT_ID)'><i class='icon-check'></i> PUBLISH</a></li>
                                        </ul>";
                                    }
                                    ?>
                                    </div>
                                </td>
                               </tr>
                              <?php }
                              ?>
                            </tbody>
                        </table>
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
    <script src="<?php echo base_url(); ?>assets/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/dist/sweetalert.css">
    <script>
        jQuery(document).ready(function() {       
           App.init();
           TableEditable.init();
        });

        function approveData(id){
            swal({
                title: "Are you sure?",
                text: "Data that has been approved can not be changed!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, approve it!",
                closeOnConfirm: false
            },
            function(){
                var formData = {id:id}; //Array 

                $.ajax({
                    url : "<?php echo base_url(); ?>/Publish/approve",
                    type: "POST",
                    data : formData,
                    success: function(data, textStatus, jqXHR)
                    {

                            //data - response from server
                            swal({
                                title: "Success!",
                                text:  "Data has been approved",
                                type: "success",
                                showConfirmButton: false
                            });
                        setTimeout(function(){
                            swal.close();
                            location.reload();
                        }, 3000);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                            //data - response from server
                            swal({
                                title: "failed!",
                                text:  "Data failed to approved",
                                type: "error",
                                showConfirmButton: false
                            });
                        setTimeout(function(){
                            swal.close();
                            location.reload();
                        }, 3000);
                    }
                });
            });
        }

        function rejectData(id){
            swal({
                title: "Are you sure?",
                text: "Data that has been rejected can not be changed!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, reject it!",
                closeOnConfirm: false
            },
            function(){
                var formData = {id:id}; //Array 
 
                $.ajax({
                    url : "<?php echo base_url(); ?>/Publish/reject",
                    type: "POST",
                    data : formData,
                    success: function(data, textStatus, jqXHR)
                    {
                            //data - response from server
                            swal({
                                title: "Success!",
                                text:  "Data has been rejected",
                                type: "success",
                                showConfirmButton: false
                            });
                        setTimeout(function(){
                            swal.close();
                            location.reload();
                        }, 3000);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                            //data - response from server
                            swal({
                                title: "Failed!",
                                text:  "Data failed to rejected",
                                type: "error",
                                showConfirmButton: false
                            });
                        setTimeout(function(){
                            swal.close();
                            location.reload();
                        }, 3000);
                    }
                });
            });
        }
    </script>
</body>
<!-- END BODY -->
</html>