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

                        List Registration<small> manage registration here</small>

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

                        <li><a href="#">List Registration</a></li>

                </ul>

                    <!-- END PAGE TITLE & BREADCRUMB-->

            </div>

        </div>

            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->

        <div class="row-fluid">
            <div class="span12">

                    <div class="portlet box blue">

                    <div class="portlet-title">

                        <div class="caption"><i class="icon-edit"></i>New Registration</div>

                        <div class="tools">

                            <a href="javascript:;" class="collapse"></a>

                            <a href="#portlet-config" data-toggle="modal" class="config"></a>

                            <a href="javascript:;" class="reload"></a>

                            <a href="javascript:;" class="remove"></a>

                        </div>

                    </div>

                    <div class="portlet-body flip-scroll">

                        <table class="table table-striped table-hover table-bordered nowrap flip-content"  id="sample_editable_1">

                            <thead class="flip-content">

                                <tr>

                                    <th>NAME</th>

                                    <th>EMAIL</th>

                                    <th>PHONE</th>

                                    <th>ADDRESS</th>

                                    <th>CITY</th>

                                    <th>PROVINCE</th>

                                    <th>POSTAL CODE</th>

                                    <th>COUNTRY</th>

                                    <th>DATETIME</th>

                                    <th>STATUS</th>

                                    <th>ACTION</th>

                                </tr>

                            </thead>



                            <tbody>

                            <?php

                              foreach ($listregis->result() as $row) {    

                               echo"

                               <tr class=''>

                                <td>$row->NAME</td>

                                <td class='fixed-size'>$row->EMAIL</td>

                                <td>$row->PHONE_NUMBER</td>

                                <td>$row->ADDRESS</td>

                                <td>$row->CITY</td>

                                <td>$row->PROVINCE</td>

                                <td>$row->POSTAL_CODE</td>

                                <td>$row->COUNTRY</td>

                                <td>$row->DATEREGIS</td>

                                <td>$row->STATUS</td>

                                <td><div class='btn-group'>";

                                    if($row->STATUS=='Pending' || $row->STATUS==''){

                                        echo"

                                        <a class='btn blue' href='#' data-toggle='dropdown'>Action

                                        </a>

                                        <ul class='dropdown-menu bottom-up'>

                                            <li><a href='#' onclick='approveData($row->ID_REGIS)'><i class='icon-check'></i> Customer</a></li>

                                            <li><a href='#' onclick='rejectData($row->ID_REGIS)'><i class='icon-trash'></i> Reject</a></li>

                                            <li><a href='#' onclick='memberData($row->ID_REGIS)'><i class='icon-user'></i> Member</a></li>

                                        </ul>";

                                    }



                                    if($row->STATUS=='Approved'){

                                        echo"

                                        <a class='btn blue' href='#' data-toggle='dropdown'>Action

                                        </a>

                                        <ul class='dropdown-menu bottom-up'>

                                            <li><a href='#' onclick='rejectData($row->ID_REGIS)'><i class='icon-trash'></i> Reject</a></li>

                                            <li><a href='#' onclick='memberData($row->ID_REGIS)'><i class='icon-user'></i> Member</a></li>

                                        </ul>";

                                    }



                                    if($row->STATUS=='Rejected'){

                                        echo"

                                       <a class='btn blue' href='#' data-toggle='dropdown'>Action

                                        </a>

                                        <ul class='dropdown-menu bottom-up'>

                                            <li><a href='#' onclick='approveData($row->ID_REGIS)'><i class='icon-check'></i> Customer</a></li>

                                            <li><a href='#' onclick='memberData($row->ID_REGIS)'><i class='icon-user'></i> Member</a></li>

                                        </ul>";

                                    }



                                    if($row->STATUS=='Member'){

                                        echo"

                                       <a class='btn blue' href='#' data-toggle='dropdown'>Action

                                        </a>

                                        <ul class='dropdown-menu bottom-up'>

                                            <li><a href='#' onclick='approveData($row->ID_REGIS)'><i class='icon-check'></i> Customer</a></li>

                                            <li><a href='#' onclick='rejectData($row->ID_REGIS)'><i class='icon-trash'></i> Reject</a></li>

                                        </ul>";

                                    }

                                    echo "

                                    </div></td>

                               </tr>

                              ";}

                              ?>

                            </tbody>

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

    <script src="<?php echo base_url();?>assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

    <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

    <script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!--[if lt IE 9]>

    <script src="assets/plugins/excanvas.min.js"></script>

    <script src="assets/plugins/respond.min.js"></script>  

    <![endif]-->   

    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?><?php echo base_url();?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  

    <script src="<?php echo base_url();?>assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>

    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/select2/select2.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/data-tables/jquery.dataTables.js"></script>

    <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/data-tables/DT_bootstrap.js"></script>

    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <script src="<?php echo base_url();?>assets/scripts/app.js"></script>

    <script src="<?php echo base_url();?>assets/scripts/table-editable.js"></script> 



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

                text: "Please insert customer id!",

                type: "input",

                showCancelButton: true,

                confirmButtonColor: "#DD6B55",

                confirmButtonText: "Yes, approve it!",

                closeOnConfirm: false

            }, function(inputValue) {

                if (inputValue === false) return false;

                if (inputValue === "") {

                    swal.showInputError("You need to write customer id!");

                    return false

                }

                swal({

                    title: "Are you sure?",

                    text: "Please insert sales fk!",

                    type: "input",

                    showCancelButton: true,

                    confirmButtonColor: "#DD6B55",

                    confirmButtonText: "Yes, approve it!",

                    closeOnConfirm: false

                }, function(inputValues) {
                    if (inputValues === false) return false;

                    if (inputValues === "") {

                        swal.showInputError("You need to write sales fk!");

                        return false

                    }

                    var formData = {id:id,customer_id:inputValue,sales_fk:inputValues}; //Array 

                    $.ajax({

                        url : "<?php echo base_url(); ?>/LRegistration/approve",

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

                    url : "<?php echo base_url(); ?>/LRegistration/reject",

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



        function memberData(id){

            swal({

                title: "Are you sure?",

                text: "Users will be set as a member!",

                type: "warning",

                showCancelButton: true,

                confirmButtonColor: "#DD6B55",

                confirmButtonText: "Yes, set member!",

                closeOnConfirm: false

            },

            function(){

                var formData = {id:id}; //Array 

 

                $.ajax({

                    url : "<?php echo base_url(); ?>/LRegistration/member",

                    type: "POST",

                    data : formData,

                    success: function(data, textStatus, jqXHR)

                    {

                            //data - response from server

                            swal({

                                title: "Success!",

                                text:  "User has been set as member",

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

                                text:  "User failed to set as member",

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