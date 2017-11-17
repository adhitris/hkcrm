<!DOCTYPE html>
<!--[if IE 8]>      <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>      <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  
<html> <!--<![endif]-->
  <head>

    <!-- Basic -->
    <meta charset="utf-8">
    <title>Harapan Kurnia</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="Crivos.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/flexslider/flexslider.css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/fancybox/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/isotope/jquery.isotope.css" media="screen" /> 

    
    

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-elements.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-blog.css" media="screen" />

    <!-- Current Page Styles -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/revolution-slider/css/settings.css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/revolution-slider/css/captions.css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/circle-flip-slideshow/css/component.css" media="screen" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">

    <!-- Skin -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/skins/blue.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-responsive.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/theme-responsive.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/1.png">
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>assets/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>assets/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>assets/img/apple-touch-icon-144x144.png">

    <!-- Head Libs -->
    <script src="<?php echo base_url() ?>assets/vendor/modernizr.js"></script>



    <!--[if IE]>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->

    <!--[if lte IE 8]>
      <script src="vendor/respond.js"></script>
    <![endif]-->

    <!-- Facebook OpenGraph Tags - Go to http://developers.facebook.com/ for more information.
    <meta property="og:title" content="Porto Website Template."/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.crivos.com/themes/porto"/>
    <meta property="og:image" content="http://www.crivos.com/themes/porto/"/>
    <meta property="og:site_name" content="Porto"/>
    <meta property="fb:app_id" content=""/>
    <meta property="og:description" content="Porto - Responsive HTML5 Template"/>
    -->

  </head>
  <body>

    <div class="body">
      <header>
		<div style="position: fixed;right:-3px;top:18px;z-index: 9999">
			<a class="btn btn-warning"  href="<?php echo base_url() ?>Sistem" style="color:#ffffff"><i class="icon-key"></i>LOGIN</a>
		</div>
        <div class="container">
          <h1 class="logo">
            <a href="Home">
              <img alt="Porto" src="<?php echo base_url() ?>assets/img/logo2.png">
            </a>
          </h1>
          <div class="search">
            <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
              <div class="control-group">
                <input type="hidden" class="input-medium search-query" name="q" id="q" placeholder="Search...">
                <button class="search" type="hidden"></button>
              </div>
            </form>
          </div>
          <nav>
            <ul class="nav nav-pills nav-top">
              <li class="phone">
                <span><i class="icon-phone"></i><a href="tel:+62226808008">(+62) (22) 6808008</a>, <a href="tel:+62226809747">(+62) (22) 6809747</a></span>
              </li>
			  <li>
				<span><i class="icon-envelope"></i><a href="mailto:marketing@harapankurnia.co.id">marketing@harapankurnia.co.id</a></span>
			  </li>
            </ul>
          </nav>
          <?php
            $data['u']=$this->uri->segment(1);
            $this->load->view('menu',$data);
            ?>
        </div>
      </header>