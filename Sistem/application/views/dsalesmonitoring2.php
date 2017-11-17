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
switch ($month) {
    case '1':
        $month = "January";
        break;

    case '2':
        $month = "February";
        break;

    case '3':
        $month = "March";
        break;

    case '4':
        $month = "April";
        break;

    case '5':
        $month = "May";
        break;

    case '6':
        $month = "Juny";
        break;

    case '7':
        $month = "July";
        break;

    case '8':
        $month = "August";
        break;

    case '9':
        $month = "September";
        break;

    case '10':
        $month = "October";
        break;

    case '11':
        $month = "November";
        break;

    case '12':
        $month = "December";
        break;
    
    default:
        $month = "Januari";
        break;
}
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
                <div class="portlet box blue flip-scroll">
                    <div class="portlet-title">
                        <div class="caption"><i class="icon-edit"></i>Monitoring</div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div> 
                    
                    <div class="portlet-body ">
                        <div class="alert alert-success">
                            <b>Group By</b> : <?= $group_by; ?><br>
                            <b>Month</b> : <?= $month; ?><br>
                            <b>Year</b> : <?= $year; ?><br>
                            <b>Selling Price</b> : <?= $weight; ?>
                        </div>
                        <table class="table table-striped table-hover table-bordered flip-content" id="sample_editable_1">

                    <?php
                    switch ($group_by) {
                        case 'Date':
                            ?>
                            <thead class="flip-content">
                                <tr>
                                    <th>MONTH</th>
                                    <th>YEAR</th>
                                    <th>YARN</th>
                                    <th>KNITTING</th>
                                    <th>TOTAL (KG)</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                              foreach ($sales_dss->result() as $row) {   
                               echo"
                               <tr class=''>
                                <td>
                                    $month
                                </td>
                                <td>
                                    $row->YEAR
                                </td>
                                <td>
                                    $row->YARN
                                </td>
                                <td>
                                    $row->KNITTING
                                </td>
                                <td>
                                    ".number_format($row->totalrows,2)."
                                </td>
                               </tr>
                              ";}
                              ?>
                            </tbody>
                            <?php
                            break;

                        case 'Customer':
                            ?>
                            <thead  class="flip-content">
                                <tr>
                                    <th>CUSTOMER</th>
                                    <th>TOTAL (KG)</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                              foreach ($sales_dss->result() as $row) {   
                               echo"
                               <tr class=''>
                                <td>
                                    <a href='".base_url()."SalesMonitoring/GroupBy/CustomerDetail/".$row->MONTH."/".$year."/".$weight."/$row->CUSTOMER_FK'>".$this->model_salesmonitoring->getname($row->CUSTOMER_FK)." - $row->CUSTOMER_FK</a>
                                </td>
                                <td>
                                    ".number_format($row->totalrows,2)."
                                </td>
                               </tr>
                              ";}
                              ?>
                            </tbody>
                            <?php
                            break;

                        case 'CustomerDetail':
                            ?>
                            <thead class="flip-content">
                                <tr>
                                    <th>CUSTOMER</th>
                                    <th>SALES</th>
                                    <th>YARN</th>
                                    <th>KNITTING</th>
                                    
                                    <th>TOTAL (KG)</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                              foreach ($sales_dss->result() as $row) {   
                               echo"
                               <tr class=''>
                                <td>
                                    <a href='".base_url()."customer/detail/$row->CUSTOMER_FK'>".$this->model_salesmonitoring->getname($row->CUSTOMER_FK)." - $row->CUSTOMER_FK</a>
                                </td>
                                <td>
                                    <a href='".base_url()."sales/detail/$row->SALES_FK'>$row->SALES_FK</a>
                                </td>
                                <td>
                                    $row->YARN
                                </td>
                                <td>
                                    $row->KNITTING
                                </td>
                                <td>
                                    ".number_format($row->totalrows,2)."
                                </td>
                               </tr>
                              ";}
                              ?>
                            </tbody>
                            <?php
                            break;

                        case 'Sales':
                            ?>
                            <thead class="flip-content">
                                <tr>
                                    <th>SALES</th>
                                    <th>TOTAL (KG)</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                              foreach ($sales_dss->result() as $row) {   
                               echo"
                               <tr class=''>
                                <td>
                                    <a href='".base_url()."SalesHistori/GroupBy/SalesDetail/".$month."/".$year."/".$row->SALES_FK."'>$row->SALES_FK</a>
                                </td>
                                <td>
                                    ".number_format($row->totalrows,2)."
                                </td>
                               </tr>
                              ";}
                              ?>
                            </tbody>
                            <?php
                            break;
                        case 'Sales-All':
                            ?>
                            <thead class="flip-content">
                                <tr>
                                    <th>SALES</th>
                                    <th>NAMA</th>
                                    <th>KG</th>
                                    <th>TARGET</th>
                                    <th>%</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                              foreach ($sales_dss->result() as $row) {   
                               echo"
                               <tr class=''>
                                <td>$row->SALES</td>
                                <td>$row->NAMA</td>
                                <td>$row->KG</td>
                                <td>$row->TARGET</td>
                                <td>$row->persen</td>
                               </tr>
                              ";}
                              ?>
                            </tbody>
                            <?php
                            break;

                        case 'SalesDetail':
                            ?>
                            <thead class="flip-content">
                                <tr>
                                    <th>SALES</th>
                                    <th>YARN</th>
                                    <th>KNITTING</th>
                                    <th>TOTAL (KG)</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                              foreach ($sales_dss->result() as $row) {   
                               echo"
                               <tr class=''>
                                <td>
                                    <a href='".base_url()."sales/detail/$row->SALES_FK'>$row->SALES_FK</a>
                                </td>
                                <td>
                                    $row->YARN
                                </td>
                                <td>
                                    $row->KNITTING
                                </td>
                                <td>
                                    ".number_format($row->totalrows,2)."
                                </td>
                               </tr>
                              ";}
                              ?>
                            </tbody>
                            <?php
                            break;

                        case 'Product':
                            ?>
                            <thead class="flip-content">
                                <tr>
                                    <th>YARN</th>
                                    <th>KNITTING</th>
                                    <th>TOTAL (KG)</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                              foreach ($sales_dss->result() as $row) {   
                               echo"
                               <tr class=''>
                                <td>
                                    $row->YARN
                                </td>
                                <td>
                                    $row->KNITTING
                                </td>
                                <td>
                                    ".number_format($row->totalrows,2)."
                                </td>
                               </tr>
                              ";}
                              ?>
                            </tbody>
                            <?php
                            break;
                        
                        default:
                            ?>
                            <thead class="flip-content">
                                <tr>
                                    <th>MONTH</th>
                                    <th>YEAR</th>
                                    <th>CUSTOMER</th>
                                    <th>SALES</th>
                                    <th>YARN</th>
                                    <th>KNITTING</th>
                                    <th>TOTAL (KG)</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                              foreach ($sales_dss->result() as $row) {   
                               echo"
                               <tr class=''>
                                <td>
                                    $month
                                </td>
                                <td>
                                    $row->YEAR
                                </td>
                                <td>
                                    <a href='".base_url()."customer/detail/$row->CUSTOMER_FK'>".$this->model_salesmonitoring->getname($row->CUSTOMER_FK)." - $row->CUSTOMER_FK</a>
                                </td>
                                <td>
                                    <a href='".base_url()."sales/detail/$row->SALES_FK'>$row->SALES_FK</a>
                                </td>
                                <td>
                                    $row->YARN
                                </td>
                                <td>
                                    $row->KNITTING
                                </td>
                                <td>
                                    ".number_format($row->totalrows,2)."
                                </td>
                               </tr>
                              ";}
                              ?>
                            </tbody>
                            <?php
                            break;
                    }
                    ?>
                            
                        </table>
                    </div>

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
    </script>
</body>
<!-- END BODY -->
</html>