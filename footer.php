<?php /* footer.php */ ?>

		<article class="page-content">
			<form class="form-box" action="process.php" method="post" autocomplete="off">
				<span class="home-form-header">SUBSCRIBE FOR SPECIAL OFFERS</span>
				<span class="home-form-row">
					<input type="email" class="home-form-input-large" name="email_footer" id="email_footer" placeholder="EMAIL ADDRESS" required="required" />
				</span>
				<span class="home-form-row">
					<input type="text" class="home-form-input-small" name="zipcode" id="zipcode" placeholder="ZIP CODE" />
					<input type="submit" class="home-form-button" name="button_footer" id="button_footer" value="SUBSCRIBE" />
				</span>
				<span class="home-form-subtext" title="Your zip code will help us send offers to you that apply to your location, but isn't necessary to be part of our list.">*Why Do We Need Your Zip Code?</span>
			</form>
			<section class="award-box">
				<img src="<?php echo $CDN_prefix; ?>images/award-1.png" alt="GNC Award 2009 Winner" title="GNC Award 2009 Winner" height="133" width="136" />
				<img src="<?php echo $CDN_prefix; ?>images/award-2.png" alt="GNC Award 2011 Winner" title="GNC Award 2011 Winner" height="133" width="136" />
				<h4 class="award-subtext">Two-Time GNC Protein Bar Of The Year!</h4>
			</section>
			<nav class="nav-box">
				<ul>
					<li class="footer-li"><a href="products.php" title="Check Out Our Products Page!">Products</a></li>
					<li class="footer-li"><a href="about.php" title="Learn More About Protein to Net Carb Ratios!">About Ratios</a></li>
					<li class="footer-li"><a href="contact.php" title="Find or Contact Us!">Contact</a></li>
					<li class="footer-li"><a href="http://order.2to1proteinbars.com/" title="Buy Power Bars Now!">Store</a></li>
					<li class="footer-li"><a href="privacy.php" title="Our Privacy Policy!">Privacy Policy</a></li>
					<li class="footer-li"><a href="tos.php" title="Our Terms of Use!">Terms of Use</a></li>
				</ul>
			</nav>
		</article>
		<footer class="footer-content">
			<span class="footer-logo"></span>
			<span class="footer-copyright">Copyright <?php echo date("Y"); ?> Metragenix</span>
		</footer>
	</section>
	<script type="text/javascript">
		$(".ratio-link").click(function(e) {e.preventDefault(); if($(e.target).children().hasClass('clicked')) {$(e.target).children().removeClass("clicked");} else {$(".popup").removeClass("clicked");$(e.target).children().addClass("clicked");}});
		function preload(){var d = document;if(d.images){if(!d.p){d.p = new Array();var i, j = d.p.length, a = preload.arguments;for(i = 0; i < a.length; i++){if(a[i].indexOf("#") != 0){d.p[j] = new Image; d.p[j++].src = a[i];}}}}}
</script>
</body>
</html>