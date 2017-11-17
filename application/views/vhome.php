<?php $this->load->view("header"); ?>
  

      <div role="main" class="main">
        <div id="content" class="content full">

          <div class="slider-container">
            <div class="slider" id="revolutionSlider">
              <ul>
              <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                  <img src="<?php echo base_url() ?>assets/img/slides/hk1.jpg" data-fullwidthcentering="on" alt="">
                </li>
              <?php
                foreach ($slide->result() as $key) {?>
                <li data-transition="fade" data-slotamount="10" data-masterspeed="300">
                  <img src="<?php echo base_url() ?>Sistem/assets/uploads/promo/<?php echo$key->IMAGE; ?>" data-fullwidthcentering="on" alt="">      
                </li>
                <?php }?>
              </ul>
            </div>
          </div>

          <div>
            
          </div>
          <div class="container"  style="margin-top:50px">

            <h2><strong>Our</strong> Product</h2>

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
        

          <div class="container">

            <h2><strong>Our</strong> Event</h2>
            <div class="row">
              <div class="span12">
                <div class="blog-posts">
                <?php
                  foreach ($event->result() as $row) {?>
                    <article class="post post-medium-image">
                    <div class="row">

                      <div class="span4">
                        <div class="post-image">
                          <div class="flexslider flexslider-center-mobile flexslider-simple" data-plugin-options='{"controlNav":false, "animation":"slide", "slideshow": false, "maxVisibleItems": 1}'>
                            <ul class="slides">

                            <?php
                            $id=$row->EVENT_ID;
                            $con=mysqli_connect('localhost','harapank_crm','P4ssword','harapank_crm');
                            $query=mysqli_query($con,"SELECT * FROM t_dtl_event WHERE EVENT_ID_FK='$id'");
                            while($a=mysqli_fetch_array($query)){?>
                              <li>
                                <img class="img-rounded" src="<?php echo base_url() ?>Sistem/assets/uploads/event/<?php echo$a['IMAGE']; ?>" alt="<?php echo$row->TITLE; ?>">
                              </li>

                            <?php }

                             ?>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="span8">
        
                        <div class="post-content">

                          <h2><a href="Event/detail/<?php echo$row->EVENT_ID; ?>"><?php echo$row->TITLE; ?></a></h2>
                          <p><?php 
                          $note=$row->DETAIL_NOTE;
                          $note=character_limiter($note,'144');
                          echo$note;
                          ?></a>[...]</p>

                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="span12">
                        <div class="post-meta">
                        <?php $date = date("d M Y", strtotime($row->DATE_EVENT));?>
                          <span><i class="icon-calendar"></i> <?php echo$date; ?></span>
                          <span><i class="icon-user"></i> By <a href="#">Admin</a> </span>
                          <a href="Event/detail/<?php echo$row->EVENT_ID; ?>" class="btn btn-mini btn-primary pull-right">Read more...</a>
                        </div>
                      </div>
                    </div>

                  </article>
                  <?php } ?>
                  
                </div>
              </div>
            </div>
          </div>
          <hr>
        </div>
        </div>
      </div>
<?php $this->load->view('footer'); ?>
