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
                       Analyzing
                </h3>
                <ul class="breadcrumb">
                        <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo base_url(); ?>Home">Home</a> 
                                <i class="icon-angle-right"></i>
                        </li>
                        <li>
                                <a href="#">Analyzing</a>
                                <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">Monthly Sales Histori</a></li>
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
                        <div class="caption"><i class="icon-edit"></i>Analyzing </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>
                    <div id="myModal" class="modal container hide fade" tabindex="-1">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h3>Full Width</h3>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn">Close</button>
                            <button type="button" class="btn green">Save changes</button>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="clearfix">
                         <div class="alert alert-success">
                             Click monitoring GROUP BY
                         </div>
                            <div class="row-fluid">
                                <div class="span12">
                                </div>
                                <div class="span12">
                                    <div class="span3">
                                        <div class="control-group">
                                            <label class="control-label">Month</label>
                                            <div class="controls">
                                                <select name='month' class='form-control' id='month'>
                                                    <option value='1' <?php if(date("m")==1){echo "selected";} ?>>January</option>
                                                    <option value='2' <?php if(date("m")==2){echo "selected";} ?>>February</option>
                                                    <option value='3' <?php if(date("m")==3){echo "selected";} ?>>March</option>
                                                    <option value='4' <?php if(date("m")==4){echo "selected";} ?>>April</option>
                                                    <option value='5' <?php if(date("m")==5){echo "selected";} ?>>Mei</option>
                                                    <option value='6' <?php if(date("m")==6){echo "selected";} ?>>Juny</option>
                                                    <option value='7' <?php if(date("m")==7){echo "selected";} ?>>July</option>
                                                    <option value='8' <?php if(date("m")==8){echo "selected";} ?>>August</option>
                                                    <option value='9' <?php if(date("m")==9){echo "selected";} ?>>September</option>
                                                    <option value='10' <?php if(date("m")==10){echo "selected";} ?>>October</option>
                                                    <option value='11' <?php if(date("m")==11){echo "selected";} ?>>November</option>
                                                    <option value='12' <?php if(date("m")==12){echo "selected";} ?>>December</option>
                                                 </select>
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <div class="span3">
                                        <div class="control-group">
                                            <label class="control-label">Year</label>
                                            <div class="controls">
                                                <select name='year' class='form-control' id='year'>
                                                    <option value='2015' <?php if(date("Y")==2015){echo "selected";} ?>>2015</option>
                                                    <option value='2016' <?php if(date("Y")==2016){echo "selected";} ?>>2016</option>
                                                 </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="span12">
                                    <div class="span3">
                                        <div class="control-group">
                                            <label class="control-label">Order By</label>
                                            <div class="controls">
                                                 <select name='orderby' class='form-control' id='orderby' onchange="GroupBy()">
                                                    <option value='Customer'>CUSTOMER</option>
                                                    <option value='GroupCustomer'>GROUP CUSTOMER</option>
                                                    <option value='Sales'>SALES</option>
                                                    <option value='Product'>PRODUCT</option>
                                                 </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="span3">
                                        <div class="control-group">
                                            <label class="control-label">Group By</label>
                                            <div class="controls">
                                                 <select name='groupby' class='form-control' id='groupby'>
                                                    <option value='All' id="OptionAll">All</option>
                                                    <option value='Product' id="OptionProduct">Product</option>
                                                    <option value='Customer' id="OptionCustomer">Customer</option>
                                                    <option value='GroupCustomer' id="OptionGroupCustomer">Group Customer</option>
                                                    <option value='Sales' id="OptionSales">Sales</option>
                                                 </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="span12">
                                    <div class="span3">
                                        <div class="control-group">
                                            <label class="control-label">Show Weight</label>
                                            <div class="controls">
                                                 <select name='weight' class='form-control' id='weight'>
                                                    <option value='BOTH'>ALL</option>
                                                    <option value='BRUTTO'>Brutto</option>
                                                    <option value='NETTO'>Netto</option>
                                                    
                                                 </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="span12">
                                    <div class="control-group">
                                        <button class='btn blue' onclick="searchData()">Search</button>
                                    </div>
                                </div>


                                 
                            </div>
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
                    url : "<?php echo base_url(); ?>/ComplaintApproval/approve",
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
                    url : "<?php echo base_url(); ?>/ComplaintApproval/reject",
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
        function searchData() {
            var month = $("#month").val();
            var year = $("#year").val();
            var orderby = $("#orderby").val();
            var groupby = $("#groupby").val();
            var weight = $("#weight").val();
            window.location = '<?= base_url(); ?>SalesHistori/GroupBy/'+orderby+'/'+groupby+'/'+month+'/'+year+'/'+weight;
        }

        $("#OptionAll").show();
        $("#OptionProduct").show();
        $("#OptionCustomer").hide();
        $("#OptionGroupCustomer").hide();
        $("#OptionSales").hide();

        function GroupBy(){
            var orderby = $("#orderby").val();
            if(orderby==''){
                $("#OptionAll").show();
                $("#OptionProduct").show();
                $("#OptionCustomer").show();
                $("#OptionGroupCustomer").show();
                $("#OptionSales").show();

                $("#OptionAll").attr('selected','selected');
            }

            if(orderby=='Customer'){
                $("#OptionAll").show();
                $("#OptionProduct").show();
                $("#OptionCustomer").hide();
                $("#OptionGroupCustomer").hide();
                $("#OptionSales").hide();

                $("#OptionAll").attr('selected','selected');
            }

            if(orderby=='GroupCustomer'){
                $("#OptionAll").show();
                $("#OptionProduct").show();
                $("#OptionCustomer").show();
                $("#OptionGroupCustomer").hide();
                $("#OptionSales").show();

                $("#OptionAll").attr('selected','selected');
            }

            if(orderby=='Sales'){
                $("#OptionAll").show();
                $("#OptionProduct").show();
                $("#OptionCustomer").show();
                $("#OptionGroupCustomer").show();
                $("#OptionSales").hide();

                $("#OptionAll").attr('selected','selected');
            }

            if(orderby=='Product'){
                $("#OptionAll").show();
                $("#OptionProduct").hide();
                $("#OptionCustomer").show();
                $("#OptionGroupCustomer").show();
                $("#OptionSales").show();

                $("#OptionAll").attr('selected','selected');
            }

        }
    </script>
</body>
<!-- END BODY -->
</html>