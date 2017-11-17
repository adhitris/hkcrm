<?php
	$this->load->view('header');
 ?>
		<div role="main" class="main">

			<section class="page-top">
				<div class="container">
					<div class="row">
						<div class="span12">
							<ul class="breadcrumb">
								<li><a href="<?php echo base_url(); ?>Product">Home</a> <span class="divider">/</span></li>
								<li class="active">Product Knowledge</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="span12">
							<h2>Product Detail</h2>
						</div>
					</div>
				</div>
			</section>

			<div class="container">
			<?php 
				foreach ($detail->result() as $row) {?>
					<h2><?php echo$row->NM_PRODUK; ?></h2>

				<div class="row">
					<div class="span6">

						<div class="flexslider flexslider-center-mobile flexslider-simple" data-plugin-options='{"animation":"slide", "animationLoop": true, "maxVisibleItems": 1}'>
							<ul class="slides">
								<li>
									<img alt="" src="<?php echo base_url()."assets/img/hk/".$row->IMAGE;?>">
								</li>
							</ul>
						</div>
					</div>

					<div class="span6">

						<h4><strong><?php echo$row->NM_PRODUK; ?></strong></h4>
						<p>Categori : <strong><?php echo$row->CATEGORI; ?></strong></p>
						<p><?php echo$row->KET; ?></p>

					</div>
				</div>


				<?php
			}
			?>
				

			</div>

		</div>

		<?php $this->load->view('footer');?>
