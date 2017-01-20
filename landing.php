<?php /* landing.php */
	$preload = array();
	$page_title = "Landing ::";

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
		<article class="products-preface">
			<p class="products-text">The MetraGeniX line of protein bars offers an award winning range of great tasting, low carb protein bars with varying ratios of high quality protein to net impact carbohydrates. These ratios offer you complete control over the amount of protein and carboydrates in your diet.</p>
		</article>
		<section class="products-box">
			<div class="products-bar">
				<span class="products-ratio">1:1</span>
				<div class="products-protein">
					<span class="products-numbers"></span>
					<span class="products-orange-status-bar bar20"></span>
					<span class="products-protein-value">PROTEIN: 20 grams</span>
				</div>
				<div class="products-net-carbs">
					<span class="products-numbers"></span>
					<span class="products-blue-status-bar bar18"></span>
					<span class="products-net-carbs-value">NET CARBS: 18 grams</span>
				</div>
			</div>
			<div class="products-images">
				<div class="products-bar-image" id="almond-1-1" onclick="window.open('individual.php?p=1', '_self');" title="Click Here To Find Out More About Our 1:1 Almond Coconut Bar!">
					<span class="products-bar-image-name">Almond Coconut</span>
				</div>
				<div class="products-bar-image" id="cherry-1-1" onclick="window.open('individual.php?p=2', '_self');" title="Click Here To Find Out More About Our 1:1 Black Cherry Bar!">
					<span class="products-bar-image-name">Black Cherry</span>
				</div>
				<div class="products-bar-image" id="cranberry-1-1" onclick="window.open('individual.php?p=3', '_self');" title="Click Here To Find Out More About Our 1:1 Cranberry Yogurt Bar!">
					<span class="products-bar-image-name">Cranberry Yogurt</span>
				</div>
			</div>
		</section>
		<br>
		<section class="products-box">
			<div class="products-bar">
				<span class="products-ratio">2:1</span>
				<div class="products-protein">
					<span class="products-numbers"></span>
					<span class="products-orange-status-bar bar30"></span>
					<span class="products-protein-value">PROTEIN: 30 grams</span>
				</div>
				<div class="products-net-carbs">
					<span class="products-numbers"></span>
					<span class="products-blue-status-bar bar15"></span>
					<span class="products-net-carbs-value">NET CARBS: 15 grams</span>
				</div>
			</div>
			<div class="products-images">
				<div class="products-bar-image" id="oatmeal-2-1" onclick="window.open('individual.php?p=4', '_self');" title="Click Here To Find Out More About Our 2:1 Oatmeal Bar!">
					<span class="products-bar-image-name">Oatmeal</span>
				</div>
				<div class="products-bar-image" id="almond-2-1" onclick="window.open('individual.php?p=5', '_self');" title="Click Here To Find Out More About Our 2:1 Almond Caramel Crunch Bar!">
					<span class="products-bar-image-name">Almond Caramel Crunch</span>
				</div>
			</div>
		</section>
		<br>
		<section class="products-box">
			<div class="products-bar">
				<span class="products-ratio">3:1</span>
				<div class="products-protein">
					<span class="products-numbers"></span>
					<span class="products-orange-status-bar bar30"></span>
					<span class="products-protein-value">PROTEIN: 30 grams</span>
				</div>
				<div class="products-net-carbs">
					<span class="products-numbers"></span>
					<span class="products-blue-status-bar bar11"></span>
					<span class="products-net-carbs-value">NET CARBS: 11 grams</span>
				</div>
			</div>
			<div class="products-images">
				<div class="products-bar-image" id="granola-3-1" onclick="window.open('individual.php?p=6', '_self');" title="Click Here To Find Out More About Our 3:1 Granola Oatmeal Bar!">
					<span class="products-bar-image-name">Granola Oatmeal</span>
				</div>
			</div>
		</section>
		<br>
		<section class="products-box">
			<div class="products-bar">
				<span class="products-ratio">5:1</span>
				<div class="products-protein">
					<span class="products-numbers"></span>
					<span class="products-orange-status-bar bar30"></span>
					<span class="products-protein-value">PROTEIN: 30 grams</span>
				</div>
				<div class="products-net-carbs">
					<span class="products-numbers"></span>
					<span class="products-blue-status-bar bar6"></span>
					<span class="products-net-carbs-value">NET CARBS: 6 grams</span>
				</div>
			</div>
			<div class="products-images">
				<div class="products-bar-image" id="chocolate-5-1" onclick="window.open('individual.php?p=7', '_self');" title="Click Here To Find Out More About Our 5:1 Chocolate Crunch Bar!">
					<span class="products-bar-image-name">Chocolate Crunch</span>
				</div>
				<div class="products-bar-image" id="pretzel-5-1" onclick="window.open('individual.php?p=11', '_self');" title="Click Here To Find Out More About Our 5:1 Chocolate Covered Pretzel Bar!">
					<span class="products-bar-image-name">Chocolate Covered Pretzel</span>
				</div>
			</div>
		</section>
		<br>
		<section class="products-box">
			<div class="products-bar">
				<span class="products-ratio">6:1</span>
				<div class="products-protein">
					<span class="products-numbers"></span>
					<span class="products-orange-status-bar bar30"></span>
					<span class="products-protein-value">PROTEIN: 30 grams</span>
				</div>
				<div class="products-net-carbs">
					<span class="products-numbers"></span>
					<span class="products-blue-status-bar bar5"></span>
					<span class="products-net-carbs-value">NET CARBS: 5 grams</span>
				</div>
			</div>
			<div class="products-images">
				<div class="products-bar-image" id="cookies-6-1" onclick="window.open('individual.php?p=8', '_self');" title="Click Here To Find Out More About Our 6:1 Cookies &amp; Cream Bar!">
					<span class="products-bar-image-name">Cookies &amp; Cream</span>
				</div>
				<div class="products-bar-image" id="brownie-6-1" onclick="window.open('individual.php?p=9', '_self');" title="Click Here To Find Out More About Our 6:1 Peanut Butter Brownie Bar!">
					<span class="products-bar-image-name">Peanut Butter Brownie</span>
				</div>
			</div>
		</section>
		<br>
		<section class="products-box">
			<div class="products-bar">
				<span class="products-ratio">7:1</span>
				<div class="products-protein">
					<span class="products-numbers"></span>
					<span class="products-orange-status-bar bar30"></span>
					<span class="products-protein-value">PROTEIN: 30 grams</span>
				</div>
				<div class="products-net-carbs">
					<span class="products-numbers"></span>
					<span class="products-blue-status-bar bar4"></span>
					<span class="products-net-carbs-value">NET CARBS: 4 grams</span>
				</div>
			</div>
			<div class="products-images">
				<div class="products-bar-image" id="crunch-7-1" onclick="window.open('individual.php?p=10', '_self');" title="Click Here To Find Out More About Our 7:1 White Crispy Crunch Bar!">
					<span class="products-bar-image-name">White Crispy Crunch</span>
				</div>
			</div>
		</section>

<?php
	include('footer.php');
?>