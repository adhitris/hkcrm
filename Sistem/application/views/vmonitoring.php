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
                        Your Order
                </h3>
                <ul class="breadcrumb">
                        <li>
                                <i class="icon-home"></i>
                                <a href="<?php echo base_url(); ?>Home">Home</a> 
                                <i class="icon-angle-right"></i>
                        </li>
                        <li>
                                <a href="#">Customer Monitoring</a>
                                <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">Monitoring Order</a></li>
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
                        <div class="caption"><i class="icon-edit"></i>Monitoring </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="#portlet-config" data-toggle="modal" class="config"></a>
                            <a href="javascript:;" class="remove"></a>
                        </div>
                    </div>

                    <div id="full-width" class="modal container hide fade" tabindex="-1">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h3 id='h3'>Full Width</h3>
                        </div>
                        <div class="modal-body">

                            <table class="table table-striped table-hover table-bordered" id="sample_editable_2">
                            <thead>
                                <tr>
                                    <th>MONITORING ID</th>
                                    <th>UPLOAD DATE</th>
                                    <th>SO NUMBER</th>
                                    <th>SO DATE</th>
                                    <th>CUSTOMER FK</th>
                                    <th>PO NUMBER</th>
                                    <th>YARN</th>
                                    <th>KNITTING</th>
                                    <th>COLOUR</th>
                                    <th>MOTIF</th>
                                    <th>MOTIF COLOUR</th>
                                    <th>QTY SO</th>
                                    <th>QTY PROSES</th>
                                    <th>QTY SENT</th>
                                    <th>UNIT</th>
                                </tr>
                            </thead>

                            <tbody>
                            </tbody>
                        </table>

                        </div>
                    </div>

                  <script src="<?php echo base_url(); ?>assets/plugins/tambahan/jquery-1.11.2.min.js"></script>
                    <script src="<?php echo base_url(); ?>assets/plugins/tambahan/bootstrap.js"></script>

                    <div class="portlet-body flip-scroll">
                        <div class="clearfix">
                         <div class="alert alert-success">
                             Click SO NUMBER for Detail
                         </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered flip-content" id="sample_editable_1">
                            <thead class="flip-content">
                                <tr>
                                    <th>SO NUMBER</th>
                                    <th>SO DATE</th>
                                    <th>PO NUMBER</th>
                                    <th>CUSTOMER</th>
                                    <th>ORDER</th>
                                    <th>PROCESS</th>
                                    <th>SENT</th>
                                    <th>RETURN</th>
                                    <th>OUTSTANDING</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php

                              foreach ($listmonitoring->result() as $row) {   
                                 $so_date = date("d/m/Y", strtotime($row->SO_DATE));
                               echo"
                               <tr class=''>
                                <td>
                                    <a href='Monitoring/detail/$row->SO_NUMBER'>$row->SO_NUMBER</a>
                                </td>
                                <td>$so_date</td>
                                <td>$row->PO_NUMBER</td>
                                <td>$row->NAME - $row->CUSTOMER_FK</td>
                                <td>".number_format($row->QTY_SO,2)."</td>
                                <td>".number_format($row->QTY_PROCESS,2)."</td>
                                <td>".number_format($row->QTY_SENT,2)."</td>
                                <td>".number_format($row->QTY_RETUR,2)."</td>
                                <td>".number_format(($row->QTY_SO-$row->QTY_SENT)+$row->QTY_RETUR,2)."</td>
                               </tr>
                              ";}
                              ?>
                            </tbody>
                        </table>
                        <div class="row-fluid">
                            <div class="span12">
                                <a href="#" class="icon-btn span2 ting">
                                    <div>TOTAL QTY SO<br>
                                        <b>
                                            <?php 
                                                foreach ($query1->result() as $key) {
                                                    echo number_format($key->A,2);}
                                            ?>
                                        </b>
                                    </div>
                                </a>   
                                <a href="#" class="icon-btn span2 ting">
                                    <div>TOTAL QTY PROCESS<br>
                                        <b>
                                            <?php 
                                                foreach ($query1->result() as $key) {
                                                    echo number_format($key->B,2);}
                                            ?>
                                        </b></div>
                                </a>  
                                <a href="#" class="icon-btn span2 ting">
                                    <div>TOTAL QTY SENT<br>
                                        <b>
                                            <?php 
                                                foreach ($query1->result() as $key) {
                                                    echo number_format($key->C,2);}
                                            ?>
                                        </b></div>
                                </a> 
                                <a href="#" class="icon-btn span2 ting">
                                    <div>TOTAL QTY RETUR<br>
                                        <b>
                                            <?php 
                                                foreach ($query1->result() as $key) {
                                                    echo number_format($key->D,2);}
                                            ?>
                                        </b></div>
                                </a>  
                                <a href="#" class="icon-btn span4 ting">
                                    <div>TOTAL OUTSTANDING<br>
                                        <b>
                                            <?php 
                                                foreach ($query1->result() as $row) {
                                                    echo number_format(($row->A-$row->C)+$row->D,2)."  ROL = ";
                                                    $a=number_format(($row->A-$row->C)+$row->D,2);
                                                    $b=number_format($row->A,2);
                                                    @$persen=($a/$b)*100;
                                                    echo number_format($persen,2)."%";
                                                    // if(number_format(($row->A-$row->C)+$row->D,2)<=0) 
                                                    // {echo number_format(0,2);}
                                                    // else{echo number_format(($row->A-$row->C)+$row->D,2);}
                                                    }
                                            ?>
                                        </b></div>
                                </a> 
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
    <script>
        jQuery(document).ready(function() {       
           App.init();
           TableEditable.init();
        });
         /*$('#sample_editable_1').dataTable( {
            "sScrollX": '100%'
          });*/
    </script>
</body>
<!-- END BODY -->
</html>