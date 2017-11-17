<nav>
  <ul class="nav nav-pills nav-main" id="mainMenu">
    <li <?php if($u=='Home' or $u==''){echo "class='active'";} ?>>
      <a href="<?php echo base_url();?>Home">Home</a>
    </li>
    <li <?php if($u=='About'){echo "class='active'";} ?>>
      <a href="<?php echo base_url();?>About">About Us</a>
    </li>
    <li <?php if($u=='Product'){echo "class='active'";} ?>>
      <a href="<?php echo base_url();?>Product">Products</a>
    </li>
    <li <?php if($u=='Promo'){echo "class='active'";} ?>>
      <a href="<?php echo base_url();?>Promo">Promo</a>
    </li>
    <li <?php if($u=='Event'){echo "class='active'";} ?>>
      <a href="<?php echo base_url();?>Event">Event</a>
    </li>
    <li <?php if($u=='Contact'){echo "class='active'";} ?>>
      <a href="<?php echo base_url();?>Contact">Contact Us</a>
    </li>
    <li <?php if($u=='Store'){echo "class='active'";} ?>>
      <a href="<?php echo base_url();?>Store">Our Store</a>
    </li>
  </ul>
</nav>