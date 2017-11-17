<?php $this->load->view('header'); ?>
			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="span12">
								<ul class="breadcrumb">
									<li><a href="index.html">Home</a> <span class="divider">/</span></li>
									<li class="active">Promo</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span12">
								<h2>Promo</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
					<div class="row">
						<ul class="portfolio-list sort-destination" data-sort-id="portfolio">
							<?php for ($i = 0; $i < count($deptlist); ++$i) { ?>
							<li class="span6 isotope-item">
							
							<p style="margin:0px;"><?php echo$deptlist[$i]->TITLE ?></p>
							<i class="icon-calendar"></i> <span class="label label-success">Valid Until <?php 
										$day = date("d M Y", strtotime($deptlist[$i]->DATE_FINISH));
										 echo $day;?> </span>
										<a class="thumbnail fancybox pull-left" style="margin:5px;"
										data-group="images" 
										data-thumbnail="<?php echo base_url(); ?>Sistem/assets/uploads/promo/<?php echo$deptlist[$i]->IMAGE; ?>" 
										data-thumbTooltip="" 
										data-title=""
										data-description="" 
										href="<?php echo base_url(); ?>Sistem/assets/uploads/promo/<?php echo$deptlist[$i]->IMAGE; ?>"
									>
									<img src="<?php echo base_url(); ?>Sistem/assets/uploads/promo/<?php echo$deptlist[$i]->IMAGE; ?>">
										<span class="zoom">
											<i class="icon-16 icon-white-shadowed icon-search"></i>
										</span>
									</a>
							</li>
							<?php } ?>
						</ul>
					</div>
					<div class="row">
						<div class="span3">			              
							<div class="pagination pagination-large pull-right">
								<div class="row">
									<div class="col-md-12 text-center">
										<?php echo $pagination; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $this->load->view('footer'); ?>