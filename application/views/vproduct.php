<?php
	$this->load->view('header');
 ?>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="span12">
								<ul class="breadcrumb">
									<li><a href="index.html">Home</a> <span class="divider">/</span></li>
									<li class="active">Product</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span12">
								<h2>Product Knowledge</h2>
							</div>
						</div>
					</div>
				</section>
				<div class="container">

		            <h2><strong>Our</strong> Product</h2>
					<p><input type="text" class="quicksearch" placeholder="Search" /></p>
		            <ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter">
		              <li data-option-value="*" class="active"><a href="#">Show All</a></li>
		              <li data-option-value=".Cotton"><a href="#">Cotton</a></li>
		              <li data-option-value=".Rayon"><a href="#">Rayon</a></li>
		              <li data-option-value=".Modal"><a href="#">Modal</a></li>
		              <li data-option-value=".Tencel"><a href="#">Tencel</a></li>
		              <li data-option-value=".Polyester"><a href="#">Polyester</a></li>
		            </ul>

		            <hr />

		            <div class="row">

		               <ul class="portfolio-list sort-destination" data-sort-id="portfolio">
		                <?php
		                	foreach ($produk->result() as $row) {?>
		                	<li class="span4 isotope-item <?php echo$row->CATEGORI;?>">
			                  <div class="portfolio-item thumbnail">
			                    <a href="<?php echo base_url();?>Product/detail/<?php echo $row->ID_PRODUK;?>" class="thumb-info">
			                      <img alt="" src="<?php echo base_url(); ?>assets/img/hk/<?php echo$row->IMAGE;?>">
			                      <span class="thumb-info-title">
			                        <span class="thumb-info-inner"><?php echo$row->NM_PRODUK;?></span>
			                        <span class="thumb-info-type"><?php echo$row->CATEGORI;?></span>
			                      </span>
			                      <span class="thumb-info-action">
			                        <span title="Universal" class="thumb-info-action-icon"><i class="icon-link"></i></span>
			                      </span>
			                    </a>
			                  </div>
			                </li>
		                <?php
		                }
		                ?>
		              </ul>
		              <hr />
		            </div>

		          </div>

			</div>

			<?php $this->load->view('footer') ?>
