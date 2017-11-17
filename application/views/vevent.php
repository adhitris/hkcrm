<?php $this->load->view('header'); ?>


			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="span12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a> <span class="divider">/</span></li>
									<li class="active">Event</li>
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
						<div class="blog-posts">
						    <?php for ($i = 0; $i < count($deptlist); ++$i) { ?>
							<article class="post post-medium-image">
									<div class="row">
										<div class="span4">
											<div class="post-image">
												<div class="flexslider flexslider-center-mobile flexslider-simple" data-plugin-options='{"controlNav":false, "animation":"slide", "slideshow": false, "maxVisibleItems": 1}'>
													<ul class="slides">
														 <?php
										                    $id=$deptlist[$i]->EVENT_ID;
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
										</div>
										<div class="span8">
											<div class="post-content">
												<h2><a href="Event/detail/<?php echo $deptlist[$i]->EVENT_ID; ?>"><?php echo $deptlist[$i]->TITLE; ?></a></h2>
												<p>

												<?php 
												$note=$deptlist[$i]->DETAIL_NOTE;
						                        $note=character_limiter($note,'144');
						                        echo$note; ?></a>[...]</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="span12">
											<div class="post-meta">
												<span><i class="icon-calendar"></i> <?php 
										$day = date("d M Y", strtotime($deptlist[$i]->DATE_EVENT));
										 echo $day;?> </span>
												<span><i class="icon-user"></i> By <a href="#">Admin</a> </span>
												<a href="Event/detail/<?php echo $deptlist[$i]->EVENT_ID; ?>" class="btn btn-mini btn-primary pull-right">Read more...</a>
											</div>
										</div>
									</div>
							</article>
						    <?php } ?>
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