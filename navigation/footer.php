<footer class="site-footer bg-light text-center text-md-left pt-4 pb-5">
		<div class="container">
			<div class="row justify-content-between">
								<div class="col-12 col-md-6 col-lg-5 mt-4">
					<h2 class="h6 text-dark mb-3">Palette Poetry</h2>

					<ul id="menu-about-menu" class="list-unstyled site-footer-2col-menu"><li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="about-us.php">About&nbsp;Palette&nbsp;Poetry</a></li>
<li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="submit.php">Submit</a></li>
<li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a href="terms-conditions.php">Terms&nbsp;&#038;&nbsp;Conditions</a></li>
<li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a href="privacy-policy.php">Privacy&nbsp;Policy</a></li>
</ul>				</div>

				
								<div class="col-12 col-md-6 col-lg-5 mt-4">
					<h2 class="h6 text-dark mb-3">Join our mailing list</h2>
					
<form id="newsletter" action="https://my.sendinblue.com/users/subscribeembed/js_id/28wm7/id/1" method="post">
	<input type="hidden" name="js_id" value="28wm7">
	<input type="hidden" name="listid" value="2">
	<input type="hidden" name="from_url" value="yes">
	<input type="hidden" name="hdn_email_txt" value="">
	<input type="hidden" name="sib_simple" value="simple">
	<input type="hidden" name="sib_forward_url" value="https://www.palettepoetry.com/">

	<div class="newsletter">
		<input type="email" name="email" value="" placeholder="Email address">
		<button type="submit">Subscribe</button>
	</div>

	<div class="g-recaptcha" data-sitekey="6Ld6mlYUAAAAAEXzwE0WvhSNQy7fp9O5S3geEptl"></div>
</form>

<script src="www.google.com/recaptcha/api.js"></script>

<script>
	var preventNewsletterSubmission = true;

	jQuery('#newsletter').on('submit', function(ev) {
		if (! preventNewsletterSubmission) {
			return;
		}

		ev.preventDefault();

		var $this = jQuery(this);
		var data = $this.serializeArray();

		jQuery.post( 'wp-admin/admin-ajax.html', {
			action: 'check_recaptcha',
			response: data[7].value,
		}, function(body) {
			if (body.response.success) {
				preventNewsletterSubmission = false;
				$this.submit();
			}
		} );
	});
</script>

					<p class="site-legal d-inline-flex d-md-flex mt-3 text-left">
						<img src="https://25aamm630gl45f37y1dp98xj-wpengine.netdna-ssl.com/wp-content/themes/pp18/assets/img/logo-squares.svg" class="mr-3" alt="">
						Copyright © 2021 Palette Poetry. <br> All Rights Reserved.
					</p>
				</div>
			</div>
		</div>
	</footer>

	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG9KQGB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<script async>(function(s,u,m,o,j,v){j=u.createElement(m);v=u.getElementsByTagName(m)[0];j.async=1;j.src=o;j.dataset.sumoSiteId='4e707b0065d328003009dd00fc074e00a6bef80055ff340034b182003cd47b00';j.dataset.sumoPlatform='wordpress';v.parentNode.insertBefore(j,v)})(window,document,'script','http://load.sumo.com/');</script>    <script type="application/javascript">
      var ajaxurl = "wp-admin/admin-ajax.html";

      function sumo_add_woocommerce_coupon(code) {
        jQuery.post(ajaxurl, {
          action: 'sumo_add_woocommerce_coupon',
          code: code,
        });
      }

      function sumo_remove_woocommerce_coupon(code) {
        jQuery.post(ajaxurl, {
          action: 'sumo_remove_woocommerce_coupon',
          code: code,
        });
      }

      function sumo_get_woocommerce_cart_subtotal(callback) {
        jQuery.ajax({
          method: 'POST',
          url: ajaxurl,
          dataType: 'html',
          data: {
            action: 'sumo_get_woocommerce_cart_subtotal',
          },
          success: function(subtotal) {
            return callback(null, subtotal);
          },
          error: function(err) {
            return callback(err, 0);
          }
        });
      }
    </script>
    <script type='text/javascript' src='25aamm630gl45f37y1dp98xj-wpengine.netdna-ssl.com/wp-content/themes/pp18/assets/dist/pp7594.js?ver=1528140966' id='pp-js'></script>
</body>

<!-- Mirrored from www.palettepoetry.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 18:01:01 GMT -->
</html>
