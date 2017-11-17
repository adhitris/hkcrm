<?php
	$this->load->view('header');
 ?>
			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="span12">
								<ul class="breadcrumb">
									<li><a href="#">Event</a> <span class="divider">/</span></li>
									<li class="active">Judul</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="span12">
								<h2>Event</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="span12">
							<div class="blog-posts single-post">
								<?php
									foreach ($detail->result() as $key) { ?>									
								<article class="post post-large-image blog-single-post">
									<div class="post-image">
										<div class="flexslider flexslider-center-mobile flexslider-simple" data-plugin-options='{"animation":"slide", "animationLoop": true, "maxVisibleItems": 1}' style="max-height:500px;">
											<ul class="slides">
												<?php
							                    $id=$key->EVENT_ID;
							                     $con=mysqli_connect('localhost','harapank_crm','P4ssword','harapank_crm');
							                    $query=mysqli_query($con,"SELECT * FROM t_dtl_event WHERE EVENT_ID_FK='$id'");
							                    while($a=mysqli_fetch_array($query)){?>
							                      <li>
							                        <img class="img-rounded" src="<?php echo base_url() ?>Sistem/assets/uploads/event/<?php echo$a['IMAGE']; ?>" alt="">
							                      </li>
							                    <?php }
							                     ?>
											</ul>
										</div>
									</div>
			
									<div class="post-date">
										<span class="day"><?php 
										$day = date("d", strtotime($key->DATE_EVENT));
										$month =  date("M", strtotime($key->DATE_EVENT));
										 echo $day;?></span>
										<span class="month"><?php echo $month; ?></span>
									</div>
			
									<div class="post-content">
									


										<h2><a href="#"><?php echo $key->TITLE; ?></a></h2>

										<div class="post-meta">
											<span><i class="icon-user"></i> By <a href="#">Admin</a> </span>
											<!--<span><i class="icon-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
											<span><i class="icon-comments"></i> <a href="#">12 Comments</a></span>-->
										</div>

										<p><?php 
											echo$key->DETAIL_NOTE;
										 ?></p>
									</div>
								</article>
								<?php	}
									 ?>
							</div>
						</div>
					</div>

				</div>

			</div>

			<?php $this->load->view('footer');?>