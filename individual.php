<?php /* individual.php */
	(int)$_GET['p'];

	if(isset($_GET['p'])) {
		$product = $_GET['p'];
	} else {
		$product = 90210;
	}

	if($product > 0 && $product < 12) {
		switch($product) {
			case 1:
				$preload = array('images/almond-1-1-box.png', 'images/ACO_nutr_ing.png');
				$title = '1:1 Almond Coconut';
				break;
			case 2:
				$preload = array('images/cherry-1-1-box.png', 'images/BCH_nutr_ing.png');
				$title = '1:1 Black Cherry';
				break;
			case 3:
				$preload = array('images/cranberry-1-1-box.png', 'images/CBY_nutr_ing.png');
				$title = '1:1 Cranberry Yogurt';
				break;
			case 4:
				$preload = array('images/oatmeal-2-1-box.png', 'images/OAT_nutr_ing.png');
				$title = '2:1 Oatmeal';
				break;
			case 5:
				$preload = array('images/almond-2-1-box.png', 'images/ACC_nutr_ing.png');
				$title = '2:1 Almond Caramel Crunch';
				break;
			case 6:
				$preload = array('images/granola-3-1-box.png', 'images/GRA_nutr_ing.png');
				$title = '3:1 Granola Oatmeal';
				break;
			case 7:
				$preload = array('images/chocolate-5-1-box.png', 'images/CHC_nutr_ing.png');
				$title = '5:1 Chocolate Crunch';
				break;
			case 8:
				$preload = array('images/cookies-6-1-box.png', 'images/CNC_nutr_ing.png');
				$title = '6:1 Cookies &amp; Cream';
				break;
			case 9:
				$preload = array('images/brownie-6-1-box.png', 'images/PBB_nutr_ing.png');
				$title = '6:1 Peanut Butter Brownie';
				break;
			case 10:
				$preload = array('images/crunch-7-1-box.png', 'images/WCC_nutr_ing.png');
				$title = '7:1 White Crispy Crunch';
				break;
			case 11:
				$preload = array('images/pretzel-5-1-box.png', 'images/CCP_nutr_ing.png');
				$title = '5:1 Chocolate Covered Pretzel';
				break;
			default:
				$preload = array();
				$title = "";
				break;
		}
	} else {
		$preload = array();
		$title = "";
	}

	$page_title = $title . " Bar ::";

	if($product === 90210) {
		$page_title = "No Such Product ::";
		include('header.php');
		echo '
			<section class="individual-box">
				<span class="error-text">We are sorry, but that product does not seem to exist. Please go back and try a different item.</span>
			</section>';
		include('footer.php');
		exit;
	} else {
		include('header.php');
	}

	switch($product) {
		case 1:
			$background_image = 'individual-almond-1-1';
			$default_image = '<img src="' . $CDN_prefix . 'images/almond-1-1-bar.png" id="main-image" alt="Main View" width="350" height="220" />';
			$other_images = '
				<img src="' . $CDN_prefix . 'images/almond-1-1-bar-mini.png" alt="Other Options" width="100" height="68" />
				<img src="' . $CDN_prefix . 'images/almond-1-1-box-mini.png" alt="Other Options" width="100" height="68" />';
			$color_scheme = '#B0582D';
			$title = '1:1 Almond Coconut';
			$subtitle = '20g Protein : 18g Net Impact Carbs';
			$description = '
				Shredded flakes of coconut with sliced pieces of almond, covered in a dark chocolate drizzle. This 100% natural, gluten free bar has 20 grams of protein and only 210 calories.<br><br><br>
				<strong><em>Gluten Free</em></strong>';
			$nutritional_popup = '<img src="' . $CDN_prefix . 'images/ACO_nutr_ing.png" alt="" width="600" height="631" />';
			$other_products = '
				Other 1:1 Ratio Flavors: 
				<a href="individual.php?p=2">1:1 Black Cherry</a> &amp; <a href="individual.php?p=3">1:1 Cranberry Yogurt</a>';
			$protein = '20 Grams Protein';
			$total_carbs = '- 21g Total Carbohydrates';
			$fiber = '- 1g Fiber';
			$maltitol = '- 0g Maltitol';
			$glycerol = '- 2g Glycerol';
			$new_carbs = '18g Net Impact Carbs';
			$buy_now = 'http://order.2to1proteinbars.com/almondcoconut.aspx';
			break;
		case 2:
			$background_image = 'individual-cherry-1-1';
			$default_image = '<img src="' . $CDN_prefix . 'images/cherry-1-1-bar.png" id="main-image" alt="Main View" width="350" height="220" />';
			$other_images = '
				<img src="' . $CDN_prefix . 'images/cherry-1-1-bar-mini.png" alt="Other Options" width="100" height="68" />
				<img src="' . $CDN_prefix . 'images/cherry-1-1-box-mini.png" alt="Other Options" width="100" height="68" />';
			$color_scheme = '#8B0111';
			$title = '1:1 Black Cherry';
			$subtitle = '20g Protein : 19g Net Impact Carbs';
			$description = '
				Chunks of Black Cherry combine with milk chocolate for a fabulous taste sensation. This 100% natural, gluten free bar has 20 grams of protein and only 210 calories.<br><br><br>
				<strong><em>Gluten Free</em></strong>';
			$nutritional_popup = '<img src="' . $CDN_prefix . 'images/BCH_nutr_ing.png" alt="" width="600" height="633" />';
			$other_products = '
				Other 1:1 Ratio Flavors: 
				<a href="individual.php?p=1">1:1 Almond Coconut</a> &amp; <a href="individual.php?p=3">1:1 Cranberry Yogurt</a>';
			$protein = '20 Grams Protein';
			$total_carbs = '- 22g Total Carbohydrates';
			$fiber = '- 1g Fiber';
			$maltitol = '- 0g Maltitol';
			$glycerol = '- 2g Glycerol';
			$new_carbs = '19g Net Impact Carbs';
			$buy_now = 'http://order.2to1proteinbars.com/blackcherry.aspx';
			break;
		case 3:
			$background_image = 'individual-cranberry-1-1';
			$default_image = '<img src="' . $CDN_prefix . 'images/cranberry-1-1-bar.png" id="main-image" alt="Main View" width="350" height="220" />';
			$other_images = '
				<img src="' . $CDN_prefix . 'images/cranberry-1-1-bar-mini.png" alt="Other Options" width="100" height="68" />
				<img src="' . $CDN_prefix . 'images/cranberry-1-1-box-mini.png" alt="Other Options" width="100" height="68" />';
			$color_scheme = '#8B0037';
			$title = '1:1 Cranberry Yogurt';
			$subtitle = '20g Protein : 19g Net Impact Carbs';
			$description = '
				A protein crisp core studded with Cranberries and a perfectly sweet yogurt drizzle. This 100% natural, gluten free bar has 20 grams of protein and only 210 calories.<br><br><br>
				<strong><em>Gluten Free</em></strong>';
			$nutritional_popup = '<img src="' . $CDN_prefix . 'images/CBY_nutr_ing.png" alt="" width="600" height="621" />';
			$other_products = '
				Other 1:1 Ratio Flavors: 
				<a href="individual.php?p=1">1:1 Almond Coconut</a> &amp; <a href="individual.php?p=2">1:1 Black Cherry</a>';
			$protein = '20 Grams Protein';
			$total_carbs = '- 22g Total Carbohydrates';
			$fiber = '- 0g Fiber';
			$maltitol = '- 0g Maltitol';
			$glycerol = '- 3g Glycerol';
			$new_carbs = '19g Net Impact Carbs';
			$buy_now = 'http://order.2to1proteinbars.com/cranberryyogurt.aspx';
			break;
		case 4:
			$background_image = 'individual-oatmeal-2-1';
			$default_image = '<img src="' . $CDN_prefix . 'images/oatmeal-2-1-bar.png" id="main-image" alt="Main View" width="350" height="220" />';
			$other_images = '
				<img src="' . $CDN_prefix . 'images/oatmeal-2-1-bar-mini.png" alt="Other Options" width="100" height="68" />
				<img src="' . $CDN_prefix . 'images/oatmeal-2-1-box-mini.png" alt="Other Options" width="100" height="68" />';
			$color_scheme = '#001387';
			$title = '2:1 Oatmeal';
			$subtitle = '30g Protein : 13g Net Impact Carbs';
			$description = '
				The original 2:1 Protein Bar and still the favorite. The 2:1 Oatmeal Protein Bar boasts 30g of protein, 15g of net impact carbs, 5g of fiber, and a sweet cinnamon-oatmeal flavored protein core, coated in milk chocolate.<br><br>
				<em>Also available in half size (15g protein)</em>';
			$nutritional_popup = '<img src="' . $CDN_prefix . 'images/OAT_nutr_ing.png" alt="" width="600" height="495" />';
			$other_products = '
				Other 2:1 Ratio Flavors: 
				<a href="individual.php?p=5">2:1 Almond Caramel Crunch</a>';
			$protein = '30 Grams Protein';
			$total_carbs = '- 25g Total Carbohydrates';
			$fiber = '- 5g Fiber';
			$maltitol = '- 2g Maltitol';
			$glycerol = '- 5g Glycerol';
			$new_carbs = '13g Net Impact Carbs';
			$buy_now = 'http://order.2to1proteinbars.com/2to1oatmealproteinbar.aspx';
			break;
		case 5:
			$background_image = 'individual-almond-2-1';
			$default_image = '<img src="' . $CDN_prefix . 'images/almond-2-1-bar.png" id="main-image" alt="Main View" width="350" height="220" />';
			$other_images = '
				<img src="' . $CDN_prefix . 'images/almond-2-1-bar-mini.png" alt="Other Options" width="100" height="68" />
				<img src="' . $CDN_prefix . 'images/almond-2-1-box-mini.png" alt="Other Options" width="100" height="68" />';
			$color_scheme = '#9A0000';
			$title = '2:1 Almond Caramel Crunch';
			$subtitle = '30g Protein : 15g Net Impact Carbs';
			$description = '
				With the crunch of real almonds and the creamy taste of sweet caramel, the 2:1 Almond Caramel Crunch Protein Bar gives you gourmet taste and is packed with nutrients.<br><br>
				<em>Also available in half size (15g protein)</em>';
			$nutritional_popup = '<img src="' . $CDN_prefix . 'images/ACC_nutr_ing.png" alt="" width="600" height="495" />';
			$other_products = '
				Other 2:1 Ratio Flavors: 
				<a href="individual.php?p=4">2:1 Oatmeal</a>';
			$protein = '30 Grams Protein';
			$total_carbs = '- 33g Total Carbohydrates';
			$fiber = '- 3g Fiber';
			$maltitol = '- 7g Maltitol';
			$glycerol = '- 8g Glycerol';
			$new_carbs = '15g Net Impact Carbs';
			$buy_now = 'http://order.2to1proteinbars.com/2to1almondcaramelcrunch.aspx';
			break;
		case 6:
			$background_image = 'individual-granola-3-1';
			$default_image = '<img src="' . $CDN_prefix . 'images/granola-3-1-bar.png" id="main-image" alt="Main View" width="350" height="220" />';
			$other_images = '
				<img src="' . $CDN_prefix . 'images/granola-3-1-bar-mini.png" alt="Other Options" width="100" height="68" />
				<img src="' . $CDN_prefix . 'images/granola-3-1-box-mini.png" alt="Other Options" width="100" height="68" />';
			$color_scheme = '#017f9E';
			$title = '3:1 Granola Oatmeal';
			$subtitle = '30g Protein : 11g Net Impact Carbs';
			$description = '
				The 3:1 Granola Oatmeal is a refreshing change with a creamy yogurt coating over the protein core. The 3:1 Granola Oatmeal bar provides 30 grams of protein, 11 grams of net carbohydrates and 5 grams of fiber. This bar makes a wonderful breakfast on the go or afternoon snack while helping you to maintain your weight.<br><br>
				<em>Also available in half size (15g protein)</em>';
			$nutritional_popup = '<img src="' . $CDN_prefix . 'images/GRA_nutr_ing.png" alt="" width="600" height="495" />';
			$other_products = '';
			$protein = '30 Grams Protein';
			$total_carbs = '- 24g Total Carbohydrates';
			$fiber = '- 5g Fiber';
			$maltitol = '- 1g Maltitol';
			$glycerol = '- 7g Glycerol';
			$new_carbs = '11g Net Impact Carbs';
			$buy_now = 'http://order.2to1proteinbars.com/3to1granolaoatmeal.aspx';
			break;
		case 7:
			$background_image = 'individual-chocolate-5-1';
			$default_image = '<img src="' . $CDN_prefix . 'images/chocolate-5-1-bar.png" id="main-image" alt="Main View" width="350" height="220" />';
			$other_images = '
				<img src="' . $CDN_prefix . 'images/chocolate-5-1-bar-mini.png" alt="Other Options" width="100" height="68" />
				<img src="' . $CDN_prefix . 'images/chocolate-5-1-box-mini.png" alt="Other Options" width="100" height="68" />';
			$color_scheme = '#734201';
			$title = '5:1 Chocolate Crunch';
			$subtitle = '15 Protein : 3g Net Impact Carbs';
			$description = '
				There are times when only chocolate will do. Now you can satisfy your craving without sacrificing your hard work and dedication. The 5:1 Chocolate Crunch bar offers a creamy chocolate taste with 15g of protein and only 2g of sugar. A must for chocolate lovers.';
			$nutritional_popup = '<img src="' . $CDN_prefix . 'images/CHC_nutr_ing.png" alt="" width="600" height="482" />';
			$other_products = '
				Other 5:1 Ratio Flavors: 
				<a href="individual.php?p=11">5:1 Chocolate Covered Pretzel</a>';
			$protein = '15 Grams Protein';
			$total_carbs = '- 15g Total Carbohydrates';
			$fiber = '- 1g Fiber';
			$maltitol = '- 11g Maltitol';
			$glycerol = '- 11g Glycerol';
			$new_carbs = '3g Net Impact Carbs';
			$buy_now = 'http://order.2to1proteinbars.com/5to1chocolatecrunch.aspx';
			break;
		case 8:
			$background_image = 'individual-cookies-6-1';
			$default_image = '<img src="' . $CDN_prefix . 'images/cookies-6-1-bar.png" id="main-image" alt="Main View" width="350" height="220" />';
			$other_images = '
				<img src="' . $CDN_prefix . 'images/cookies-6-1-bar-mini.png" alt="Other Options" width="100" height="68" />
				<img src="' . $CDN_prefix . 'images/cookies-6-1-box-mini.png" alt="Other Options" width="100" height="68" />';
			$color_scheme = '#482D24';
			$title = '6:1 Cookies &amp; Cream';
			$subtitle = '30g Protein : 5g Net Impact Carbs';
			$description = '
				The 6:1 Cookies and Cream Protein Bar has real cookie taste and crunch - creamy and crunchy -- plus 30g of protein, only 5g of net impact carbohydrates, zero trans fats, and only one gram of sugar.<br><br>
				<em>Also available in half size (15g protein)</em>';
			$nutritional_popup = '<img src="' . $CDN_prefix . 'images/CNC_nutr_ing.png" alt="" width="600" height="496" />';
			$other_products = '
				Other 6:1 Ratio Flavors: 
				<a href="individual.php?p=9">6:1 Peanut Butter Brownie</a>';
			$protein = '30 Grams Protein';
			$total_carbs = '- 20g Total Carbohydrates';
			$fiber = '- 1g Fiber';
			$maltitol = '- 7g Maltitol';
			$glycerol = '- 7g Glycerol';
			$new_carbs = '5g Net Impact Carbs';
			$buy_now = 'http://order.2to1proteinbars.com/2to1cookiesandcream.aspx';
			break;
		case 9:
			$background_image = 'individual-brownie-6-1';
			$default_image = '<img src="' . $CDN_prefix . 'images/brownie-6-1-bar.png" id="main-image" alt="Main View" width="350" height="220" />';
			$other_images = '
				<img src="' . $CDN_prefix . 'images/brownie-6-1-bar-mini.png" alt="Other Options" width="100" height="68" />
				<img src="' . $CDN_prefix . 'images/brownie-6-1-box-mini.png" alt="Other Options" width="100" height="68" />';
			$color_scheme = '#D76723';
			$title = '6:1 Peanut Butter Brownie';
			$subtitle = '30g Protein : 5g Net Impact Carbs';
			$description = '
				Creamy peanut butter over a rich brownie protein core, coated in milk chocolate. The 6:1 Peanut Butter Brownie Protein Bar has 30g of protein isolates, 5g of net carbohydrates, and only 4 g of sugar, so you can indulge yourself with a healthy treat.<br><br>
				<em>Also available in half size (15g protein)</em>';
			$nutritional_popup = '<img src="' . $CDN_prefix . 'images/PBB_nutr_ing.png" alt="" width="600" height="495" />';
			$other_products = '
				Other 6:1 Ratio Flavors: 
				<a href="individual.php?p=8">6:1 Cookies &amp; Cream</a>';
			$protein = '30 Grams Protein';
			$total_carbs = '- 17g Total Carbohydrates';
			$fiber = '- 1g Fiber';
			$maltitol = '- 3g Maltitol';
			$glycerol = '- 8g Glycerol';
			$new_carbs = '5g Net Impact Carbs';
			$buy_now = 'http://order.2to1proteinbars.com/6to1peanutbutterbrownie.aspx';
			break;
		case 10:
			$background_image = 'individual-crunch-7-1';
			$default_image = '<img src="' . $CDN_prefix . 'images/crunch-7-1-bar.png" id="main-image" alt="Main View" width="350" height="220" />';
			$other_images = '
				<img src="' . $CDN_prefix . 'images/crunch-7-1-bar-mini.png" alt="Other Options" width="100" height="68" />
				<img src="' . $CDN_prefix . 'images/crunch-7-1-box-mini.png" alt="Other Options" width="100" height="68" />';
			$color_scheme = '#482E24';
			$title = '7:1 White Crispy Crunch';
			$subtitle = '30g Protein : 4g Net Impact Carbs';
			$description = '
				Rich vanilla flavor and crunchy topping tastes just like birthday cake. There are only 240 calories in this 7:1 White Crispy Crunch Protein Bar, with 30g of protein isolates, 4g of net carbohydrates, and zero grams of trans fat.<br><br>
				<em>Also available in half size (15g protein)</em>';
			$nutritional_popup = '<img src="' . $CDN_prefix . 'images/WCC_nutr_ing.png" alt="" width="600" height="495" />';
			$other_products = '';
			$protein = '30 Grams Protein';
			$total_carbs = '- 15g Total Carbohydrates';
			$fiber = '- 0g Fiber';
			$maltitol = '- 0g Maltitol';
			$glycerol = '- 11g Glycerol';
			$new_carbs = '4g Net Impact Carbs';
			$buy_now = 'http://order.2to1proteinbars.com/7to1whitecrispycrunch.aspx';
			break;
		case 11:
			$background_image = 'individual-pretzel-5-1';
			$default_image = '<img src="' . $CDN_prefix . 'images/pretzel-5-1-bar.png" id="main-image" alt="Main View" width="350" height="220" />';
			$other_images = '
				<img src="' . $CDN_prefix . 'images/pretzel-5-1-bar-mini.png" alt="Other Options" width="100" height="68" />
				<img src="' . $CDN_prefix . 'images/pretzel-5-1-box-mini.png" alt="Other Options" width="100" height="68" />';
			$color_scheme = '#9C4507';
			$title = '5:1 Chocolate Covered Pretzel';
			$subtitle = '30g Protein : 6g Net Impact Carbs';
			$description = '
				Two great tastes - chocolate and pretzels - have been combined into one delicious bar. Sweet and salty join together in a 5:1 ratio of protein to net impact carbohydrates. The 5:1 Chocolate Covered Pretzel has 30 grams of quality protein, 6g net carbs and only 2g of sugar.<br><br>';
			$nutritional_popup = '<img src="' . $CDN_prefix . 'images/CCP_nutr_ing.png" alt="" width="600" height="631" />';
			$other_products = '
				Other 5:1 Ratio Flavors: 
				<a href="individual.php?p=7">5:1 Chocolate Crunch</a>';
			$protein = '30 Grams Protein';
			$total_carbs = '- 20g Total Carbohydrates';
			$fiber = '- 0g Fiber';
			$maltitol = '- 4g Maltitol';
			$glycerol = '- 10g Glycerol';
			$new_carbs = '6g Net Impact Carbs';
			$buy_now = 'http://order.2to1proteinbars.com/5to1chocolatecoveredpretzelproteinbar.aspx';
			break;
		default:
			echo '
				<section class="individual-box">
					<span class="error-text">We are sorry, but that product does not seem to exist. Please go back and try a different item.</span>
				</section>';
			include('footer.php');
			exit;
			break;
	}
?>

		<div class="individual-background" id="<?php echo $background_image; ?>"></div>
		<section class="individual-box">
			<div class="individual-viewer">
				<span class="main-image">
					<?php echo $default_image; ?>
				</span>
				<span class="view-others">
					<?php echo $other_images; ?>
				</span>
				<script type="text/javascript">$(document).ready(function(){$(".view-others img").hover(function(event){$('#main-image').attr('src',$(this).attr('src').replace('-mini.png', '.png'));});});</script>
			</div>
			<div class="individual-info">
				<h2 class="individual-title" style="color: <?php echo $color_scheme; ?>;"><?php echo $title; ?></h2>
				<h3 class="individual-subtitle"><?php echo $subtitle; ?></h3>
				<div class="individual-description">
					<p class="individual-text">
						<?php echo $description; ?>
					</p>
					<div class="nutritional-facts-box">
						<span id="nutrition-popup"><span class="nutritional-facts-plus">+ |</span> <span class="nutritional-facts">Nutrition Facts &amp; Ingredients</span></span>
						<div class="nutritional-facts-popup"><span id="close-x">X</span><?php echo $nutritional_popup; ?></div>
					</div>
					<script type="text/javascript">$(document).ready(function(){$('#nutrition-popup').click(function(){$('.nutritional-facts-popup').toggleClass('show');}); $('#close-x').click(function(){$('.nutritional-facts-popup').toggleClass('show');});});</script>
					<span class="other-products">
						<?php echo $other_products; ?>
					</span>
				</div>
				<div class="individual-facts">
					<span class="individual-nutrition-facts-bold" id="protein"><?php echo $protein; ?></span>
					<span class="individual-nutrition-facts" id="total-carbs"><?php echo $total_carbs; ?></span>
					<span class="individual-nutrition-facts" id="fiber"><?php echo $fiber; ?></span>
					<span class="individual-nutrition-facts" id="maltitol"><?php echo $maltitol; ?></span>
					<span class="individual-nutrition-facts" id="glycerol"><?php echo $glycerol; ?></span>
					<span class="individual-nutrition-facts-medium" id="net-impact"><?php echo $new_carbs; ?></span>
					<a href="<?php echo $buy_now; ?>" target="_blank">
						<span class="individual-buy-now">BUY NOW</span>
					</a>
				</div>
			</div>
		</section>

<?php
	include('footer.php');
?>