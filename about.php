<?php /* about.php */
	$preload = array();
	$page_title = "About Ratios ::";

	include('header.php');
?>

		<article class="other-container">
			<section class="about-content">
				<h3 class="about-title">RATIO MATTERS IN:</h3>
				<ul class="about-highlights">
					<li id="first">Perfomance</li>
					<li>Lean Muscle</li>
					<li>Diet</li>
				</ul>
				<p class="about-text">
					The MetraGenix line of protein bars offers an award winning range of great tasting, low carb protein bars with varying ratios of high quality protein to net impact carbohydrates. These ratios offer you the ability to completely customize the protein and carbohydrate counts in your diet.
				</p>
				<h4 class="about-subtitle">Net Impact Carbohydrates</h4>
				<p class="about-text">
					Not all carbohydrates have the same effect in a person's diet. Fiber, sugar alcohol and glycerol may have less of an impact on blood glucose than normal sugar (sucrose) does.<br><br>
					To calculate net impact carbs, subtract dietary fiber, sugar alcohol and glycerol from the total carbohydrate count on the nutrition facts panel.
				</p>
			</section>
			<section class="about-ratio-example">
				<img src="<?php echo $CDN_prefix; ?>images/ratio-example.jpg" alt="Ratio Example" width="395" height="346" />
			</section>
		</article>

<?php
	include('footer.php');
?>