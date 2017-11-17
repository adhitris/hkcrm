<footer>
	<div class="container">
		<div class="row">
			<div class="footer-ribon">
				<span>Get in Touch</span>
			</div>
			<!--<div class="span4">
				<h4>Facebook</h4>
				<iframe
					src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=340&height=220&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
					width="340" height="220" style="border: none; overflow: hidden"
					scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
			<div class="span4">
				<h4>Tweet</h4>
				<a class="twitter-timeline" data-height="270" data-dnt="true"
					data-theme="light" href="https://twitter.com/TwitterDev">Tweets by
					TwitterDev</a>
				<script async src="//platform.twitter.com/widgets.js"
					charset="utf-8"></script>
				<div id="tweet" class="twitter"></div>
			</div>-->
			<div class="span4">
				<div class="contact-details" style="color: #fff;">
					<h4>Contact Us</h4>
					<ul class="contact">
						<li><p style="color: #fff;">
								<i class="icon-map-marker"></i> <strong>Address:</strong> Jl.
								Let. Kol. G. A. Manulang No. 73<br>Padalarang, 40553, JAWA
								BARAT, Indonesia
							</p></li>
						<li><p style="color: #fff;">
								<i class="icon-phone"></i> <strong>Phone:</strong> <a href="tel:+62226808008">(+62) (22)
								6808008</a>, <a href="tel:+62226809747">(+62) (22) 6809747</a>
								
							</p></li>
						<li><p style="color: #fff;">
								<i class="icon-fax"></i> <strong>Fax:</strong> (+62) (22)
								6809748
							</p></li>
						<li><p style="color: #fff;" style="color:#fff;">
								<i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:marketing@harapankurnia.co.id">marketing@harapankurnia.co.id</a>
							</p></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<div class="span2">
					<a href="#" class="logo" style="width: 150px;"> <img
						alt="Porto Website Template"
						src="<?php echo base_url() ?>assets/img/logologin.png">
					</a>
				</div>
				<div class="span7">
					<p>2016 &copy; HK Web Master</p>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>

<!-- Libs -->
<script type="text/javascript"
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="vendor/jquery.js"><\/script>')</script>
<script src="<?php echo base_url();?>assets/vendor/jquery.easing.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery.cookie.js"></script>
<!-- <script src="master/style-switcher/style.switcher.js"></script> -->
<script src="<?php echo base_url();?>assets/vendor/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/vendor/selectnav.js"></script>
<script src="<?php echo base_url();?>assets/vendor/twitterjs/twitter.js"></script>
<script
	src="<?php echo base_url();?>assets/vendor/revolution-slider/js/jquery.themepunch.plugins.js"></script>
<script
	src="<?php echo base_url();?>assets/vendor/revolution-slider/js/jquery.themepunch.revolution.js"></script>
<script
	src="<?php echo base_url();?>assets/vendor/flexslider/jquery.flexslider.js"></script>
<script
	src="<?php echo base_url();?>assets/vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
<script
	src="<?php echo base_url();?>assets/vendor/fancybox/jquery.fancybox.js"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery.validate.js"></script>
<script
	src="<?php echo base_url();?>assets/vendor/isotope/jquery.isotope.js"></script>

<script src="<?php echo base_url();?>assets/js/plugins.js"></script>

<!-- Current Page Scripts -->
<script src="<?php echo base_url();?>assets/js/views/view.home.js"></script>

<!-- Theme Initializer -->
<script src="<?php echo base_url();?>assets/js/theme.js"></script>

<!-- Custom JS -->
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="<?php echo base_url();?>assets/vendor/jquery.mapmarker.js"></script>

<script>
      $(document).ready(function() {
		  

        var mapMarkers = {
          "markers": [
            {
              "latitude": "-6.845455",
              "longitude":"107.480050",
              "icon": " assets/img/pin.png"
            }
          ]
        };

        $("#googlemaps").mapmarker({
          zoom : 18,
          center: "-6.845455, 107.480050",
          dragging:1,
          mousewheel:1,
          markers: mapMarkers,
          featureType:"all",
          visibility: "on",
          elementType:"geometry"
        });

        var mapMarkersStore = {
                "markers": [
                  {
                    "latitude": "-6.845455",
                    "longitude":"107.480050",
                    "icon": " assets/img/pin.png"
                  },
                  {
                    "latitude": "-6.1753871",
                    "longitude":"106.8249641",
                    "icon": " assets/img/pin.png"
                  },
                  {
                    "latitude": "-8.703022",
                    "longitude":"115.175873",
                    "icon": " assets/img/pin.png"
                  },
                  {
                    "latitude": "-7.791284",
                    "longitude":"110.354229",
                    "icon": " assets/img/pin.png"
                  },
                  {
                    "latitude": "-7.9784695",
                    "longitude":"112.5617424",
                    "icon": " assets/img/pin.png"
                  }
                ]
              };

        
        $("#googlemapsStore").mapmarker({
            zoom : 7,
            center: "-7.245455, 111.480050",
            dragging:1,
            mousewheel:1,
            markers: mapMarkersStore,
            featureType:"all",
            visibility: "on",
            elementType:"geometry"
          });
      });
    </script>
<!-- Page Scripts -->
<script src="<?php echo base_url();?>assets/js/views/view.contact.js"></script>


<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
<!--
<script>
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-XXXXX-X']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
-->

</body>
</html>