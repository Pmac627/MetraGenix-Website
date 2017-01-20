<?php /* index.php */
	$preload = array();
	$page_title = "";

	include('header.php');
?>


		<script type="text/javascript" src="<?php echo $CDN_prefix; ?>js/jquery-nivo-slider-packed.js"></script>
		<script type="text/javascript">
			$(window).load(function(){
				$('#slider').nivoSlider();
			});
		</script>
		<div class="slideshow-content" id="slideshow">
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<img src="<?php echo $CDN_prefix; ?>images/ratio.jpg" data-thumb="<?php echo $CDN_prefix; ?>images/ratio.jpg" alt="" width="1000" height="400" />
					<img src="<?php echo $CDN_prefix; ?>images/1to1.jpg" data-thumb="<?php echo $CDN_prefix; ?>images/1to1.jpg" alt="" width="1000" height="400" />
				</div>
			</div>
		</div>

<?php
	include('footer.php');
?>