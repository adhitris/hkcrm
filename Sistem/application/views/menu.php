<div class="page-sidebar nav-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->        
        <ul class="page-sidebar-menu">
                <li>
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler hidden-phone"></div>
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                </li>
                <li>
                        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                        <form class="sidebar-search">

                        </form>
                        <!-- END RESPONSIVE QUICK SEARCH FORM -->
                </li>
                <?php
                if($ROLE == 'ADMINISTRATOR'){

                   echo
                    "<li class='";if($u=='Home'){echo"start active";}echo"'>
                        <a href='"; echo base_url();echo"Home'>
                        <i class='icon-home'></i> 
                        <span class='title'>Dashboard</span>
                        <span class='selected'></span>
                        </a>
                </li>
                <li class='";if($u=='Product' or $u=='Promo' or $u=='Event'){echo"active";}echo"'>
                        <a href='javascript:;'>
                        <i class='icon-book'></i> 
                        <span class='title'>Company Profile</span>
                        <span class='arrow '></span>
                        </a>
                        <ul class='sub-menu'>
                                <li class='";if($u=='Promo'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"Promo'>
                                        Promo & Discount</a>
                                </li>
                                <li class='";if($u=='Event'){echo"active";}echo"' >
                                        <a href='";echo base_url();echo"Event'>
                                        Sales Event</a>
                                </li>
                        </ul>
                </li>
                <li class='";if($u=='Monitoring' or $u=='Request' or $u=='Complaint'){echo"active";}echo"'>
                        <a href='javascript:;'>
                        <i class='icon-bar-chart'></i> 
                        <span class='title'>Customer Service</span>
                        <span class='arrow '></span>
                        </a>
                        <ul class='sub-menu'>
                                <li class='";if($u=='Monitoring'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"Monitoring'>
                                        Orders Monitoring </a>
                                </li>
                                <li class='";if($u=='Request'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"Request'>
                                        Order Request</a>
                                </li>
                                <li class='";if($u=='Complaint'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"Complaint'>
                                        Complaint Ticket</a>
                                </li>
                        </ul>
                </li>
                <li class='";if($u=='RequestApproval' or $u=='ComplaintApproval'){echo"active";}echo"'>
                        <a href='javascript:;'>
                        <i class='icon-shopping-cart'></i> 
                        <span class='title'>Sales Approval</span>
                        <span class='arrow '></span>
                        </a>
                        <ul class='sub-menu'>
                                <li class='";if($u=='RequestApproval'){echo"active";}echo"'>
                                        <a href='"; echo base_url().'RequestApproval'; echo "'>
                                        Request Approval</a>
                                </li>
                                <li class='";if($u=='ComplaintApproval'){echo"active";}echo"'>
                                        <a href='"; echo base_url().'ComplaintApproval'; echo "'>
                                        Complaint Approval</a>
                                </li>
                        </ul>
                </li>
                <li class='"; if($u=='SalesHistori'){echo"active";} echo"'>
                        <a href='javascript:;'>
                        <i class='icon-eye-open'></i> 
                        <span class='title'> Sales Analyzing </span>
                        <span class='arrow '></span>
                        </a>
                        <ul class='sub-menu'>
                                <li class='";if($u=='SalesHistori'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"SalesHistori'>
                                        Monthly Sales History</a>
                                </li>
                        </ul>
                </li>
                <li class='";if($u=='Customer' or $u=='User' or $u=='LRegistration' or $u=='Sales'){echo"active";}echo"'>
                        <a href='javascript:;'>
                        <i class='icon-user'></i> 
                        <span class='title'>Administrator</span>
                        <span class='arrow '></span>
                        </a>
                        <ul class='sub-menu'>
                                <li class='";if($u=='LRegistration'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"LRegistration'>
                                        List Registation</a>
                                </li>
                                <li class='";if($u=='Sales'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"Sales'>
                                        Sales</a>
                                </li>
                                <li class='";if($u=='Customer'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"Customer'>
                                        Customer</a>
                                </li>
                                <li class='";if($u=='User'){echo"active";}echo"' >
                                        <a href='";echo base_url();echo"User'>
                                        User</a>
                                </li>
                        </ul>
                </li>";
                }
                if($ROLE == 'SALES'){
                   echo
                    "
                    <li class='";if($u=='Home'){echo"start active";}echo"'>
                            <a href='"; echo base_url();echo"Home'>
                            <i class='icon-home'></i> 
                            <span class='title'>Dashboard</span>
                            <span class='selected'></span>
                            </a>
                    </li>
                    <li class='";if($u=='RequestApproval' or $u=='ComplaintApproval'){echo"active";}echo"'>
                        <a href='javascript:;'>
                        <i class='icon-shopping-cart'></i> 
                        <span class='title'>Sales Page</span>
                        <span class='arrow '></span>
                        </a>
                        <ul class='sub-menu'>
                                <li class='";if($u=='RequestApproval'){echo"active";}echo"'>
                                        <a href='"; echo base_url().'RequestApproval'; echo "'>
                                        Request Approval</a>
                                </li>
                                <li class='";if($u=='ComplaintApproval'){echo"active";}echo"'>
                                        <a href='"; echo base_url().'ComplaintApproval'; echo "'>
                                        Complaint Approval</a>
                                </li>
                        </ul>
                </li>";
                }
                if($ROLE == 'MANAGER'){
                   echo
                    "
                    <li class='";if($u=='Home'){echo"start active";}echo"'>
                            <a href='"; echo base_url();echo"Home'>
                            <i class='icon-home'></i> 
                            <span class='title'>Dashboard</span>
                            <span class='selected'></span>
                            </a>
                    </li>
                    <li class='"; if($u=='SalesHistori'){echo"active";} echo"'>
                        <a href='javascript:;'>
                        <i class='icon-eye-open'></i> 
                        <span class='title'> Sales Analyzing </span>
                        <span class='arrow '></span>
                        </a>
                        <ul class='sub-menu'>
                                <li class='";if($u=='SalesHistori'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"SalesHistori'>
                                        Monthly Sales History</a>
                                </li>
                        </ul>
                </li>
                <li class='";if($u=='RequestApproval' or $u=='ComplaintApproval'){echo"active";}echo"'>
                        <a href='javascript:;'>
                        <i class='icon-shopping-cart'></i> 
                        <span class='title'>Sales Page</span>
                        <span class='arrow '></span>
                        </a>
                        <ul class='sub-menu'>
                                <li class='";if($u=='RequestApproval'){echo"active";}echo"'>
                                        <a href='"; echo base_url().'RequestApproval'; echo "'>
                                        Request Approval</a>
                                </li>
                                <li class='";if($u=='ComplaintApproval'){echo"active";}echo"'>
                                        <a href='"; echo base_url().'ComplaintApproval'; echo "'>
                                        Complaint Approval</a>
                                </li>
                        </ul>
                </li>
                <li class='";if($u=='Customer' or $u=='User' or $u=='LRegistration' or $u=='Sales'){echo"active";}echo"'>
                        <a href='javascript:;'>
                        <i class='icon-user'></i> 
                        <span class='title'>Administrator</span>
                        <span class='arrow '></span>
                        </a>
                        <ul class='sub-menu'>
                                <li class='";if($u=='LRegistration'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"LRegistration'>
                                        List Registation</a>
                                </li>
                        </ul>
                </li>";
                }
                if($ROLE == 'CUSTOMER'){
                   echo
                    "<li class='";if($u=='Home'){echo"start active";}echo"'>
                        <a href='"; echo base_url();echo"Home'>
                        <i class='icon-home'></i> 
                        <span class='title'>Dashboard</span>
                        <span class='selected'></span>
                        </a>
                    </li>
                 <li class='";if($u=='Monitoring' or $u=='Request' or $u=='Complaint'){echo"active";}echo"'>
                        <a href='javascript:;'>
                        <i class='icon-bar-chart'></i> 
                        <span class='title'>Customer Service</span>
                        <span class='arrow '></span>
                        </a>
                        <ul class='sub-menu'>
                                <li class='";if($u=='Monitoring'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"Monitoring'>
                                        Orders Monitoring </a>
                                </li>
                                <li class='";if($u=='Request'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"Request'>
                                        Order Request</a>
                                </li>
                                <li class='";if($u=='Complaint'){echo"active";}echo"'>
                                        <a href='";echo base_url();echo"Complaint'>
                                        Complaint Ticket</a>
                                </li>
                        </ul>
                </li>";
                }
                ?>
        </ul>
        <!-- END SIDEBAR MENU -->
</div>