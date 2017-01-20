<?php /* header.php */
	define("Base_URL", "http://protein.macmannis.com/");
	define("CDN_prefix", "http://protein.macmannis.com/cdn/");
	$Base_URL = constant("Base_URL");
	$CDN_prefix = constant("CDN_prefix");
	$preload_extra = "";

	if($preload != NULL) {
		foreach($preload as $pre) {
			if($preload_extra == "") {
				$preload_extra .= "'" . $CDN_prefix . $pre . "'";
			} else {
				$preload_extra .= ",'" . $CDN_prefix . $pre . "'";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<title><?php echo $page_title; ?> Supergenix</title>
<?php
	if($_SERVER['PHP_SELF'] == "/index.php") {
		echo '	<link rel="stylesheet" href="' . $CDN_prefix . 'styles/nivo-slider-min.css" type="text/css" media="screen" />
';
	}
?>
	<link rel="stylesheet" href="<?php echo $CDN_prefix; ?>styles/styles.css" type="text/css" media="all" />
	<!--[if IE]>
	<link rel="stylesheet" href="<?php echo $CDN_prefix; ?>styles/ie-min.css" type="text/css" media="screen" />
	<![endif]-->
	<link rel="icon" type="image/x-icon" href="<?php echo $CDN_prefix; ?>images/favicon.jpg" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $CDN_prefix; ?>images/favicon.jpg" />
</head>
<body onload="preload(<?php echo $preload_extra; ?>);">
	<header class="header-row">
		<div class="header-container">
			<nav class="header-nav">
				<span class="header-logo"><a href="/"><img src="<?php echo $CDN_prefix; ?>images/logo.png" alt="Metragenix Logo" title="Metragenix :: Protein Bars With A Specialized Ratio of Protein to Net Carbs!" width="442" height="65" /></a></span>
				<ul>
					<li class="header-li products"><a href="products.php" title="Check Out Our Products Page!">Products</a></li>
					<li class="header-li ratios"><a href="about.php" title="Learn More About Protein to Net Carb Ratios!">About Ratios</a></li>
					<li class="header-li contact"><a href="contact.php" title="Find or Contact Us!">Contact</a></li>
					<li class="header-li store"><a href="http://order.2to1proteinbars.com/" title="Buy Power Bars Now!">Store</a></li>
				</ul>
			</nav>
			<h1 class="header-motto">Protein Bars With A Specialized Ratio of Protein to Net Carbs</h1>
			<nav class="header-ratio-nav">
				<ul>
					<li class="ratio-link" id="ratio1">
						<div class="popup" id="one-one">
							<div class="popup-box" id="almond-1-1-popup" onclick="window.open('individual.php?p=1', '_self');" title="Click Here To Find Out More About Our 1:1 Almond Coconut Bar!">
								<img src="<?php echo $CDN_prefix; ?>images/almond-1-1-popup.png" alt="1:1 Almond Coconut Bar" width="215" height="125" />
								<h2 class="popup-title" style="color: #B0582D;">1:1 Almond Coconut</h2>
								<span class="popup-protein">20 Grams Protein</span>
								<span class="popup-net-carbs">20 Grams Net Carbs</span>
							</div>
							<div class="popup-box" id="cherry-1-1-popup" onclick="window.open('individual.php?p=2', '_self');" title="Click Here To Find Out More About Our 1:1 Black Cherry Bar!">
								<img src="<?php echo $CDN_prefix; ?>images/cherry-1-1-popup.png" alt="1:1 Black Cherry Bar" width="215" height="125" />
								<h2 class="popup-title" style="color: #8B0111;">1:1 Black Cherry</h2>
								<span class="popup-protein">20 Grams Protein</span>
								<span class="popup-net-carbs">20 Grams Net Carbs</span>
							</div>
							<div class="popup-box" id="cranberry-1-1-popup" onclick="window.open('individual.php?p=3', '_self');" title="Click Here To Find Out More About Our 1:1 Cranberry Yogurt Bar!">
								<img src="<?php echo $CDN_prefix; ?>images/cranberry-1-1-popup.png" alt="1:1 Cranberry Yogurt Bar" width="215" height="125" />
								<h2 class="popup-title" style="color: #8B0037;">1:1 Cranberry Yogurt</h2>
								<span class="popup-protein">20 Grams Protein</span>
								<span class="popup-net-carbs">20 Grams Net Carbs</span>
							</div>
						</div>
					</li>
					<li class="ratio-link" id="ratio2">
						<div class="popup" id="two-one">
							<div class="popup-box" id="oatmeal-2-1-popup" onclick="window.open('individual.php?p=4', '_self');" title="Click Here To Find Out More About Our 2:1 Oatmeal Bar!">
								<img src="<?php echo $CDN_prefix; ?>images/oatmeal-2-1-popup.png" alt="2:1 Oatmeal Bar" width="215" height="125" /><h2 class="popup-title" style="color: #001387;">2:1 Oatmeal</h2>
								<span class="popup-protein">30 Grams Protein</span>
								<span class="popup-net-carbs">15 Grams Net Carbs</span>
							</div>
							<div class="popup-box" id="almond-2-1-popup" onclick="window.open('individual.php?p=5', '_self');" title="Click Here To Find Out More About Our 2:1 Almond Caramel Crunch Bar!">
								<img src="<?php echo $CDN_prefix; ?>images/almond-2-1-popup.png" alt="2:1 Almond Caramel Crunch Bar" width="215" height="125" />
								<h2 class="popup-title" style="color: #9A0000;">2:1 Almond Caramel Crunch</h2>
								<span class="popup-protein">30 Grams Protein</span>
								<span class="popup-net-carbs">15 Grams Net Carbs</span>
							</div>
						</div>
					</li>
					<li class="ratio-link" id="ratio3">
						<div class="popup" id="three-one">
							<div class="popup-box" id="granola-3-1-popup" onclick="window.open('individual.php?p=6', '_self');" title="Click Here To Find Out More About Our 3:1 Granola Oatmeal Crunch Bar!">
								<img src="<?php echo $CDN_prefix; ?>images/granola-3-1-popup.png" alt="3:1 Granola Oatmeal Crunch Bar" width="215" height="125" />
								<h2 class="popup-title" style="color: #017f9E;">3:1 Granola Oatmeal</h2>
								<span class="popup-protein">30 Grams Protein</span>
								<span class="popup-net-carbs">11 Grams Net Carbs</span>
							</div>
						</div>
					</li>
					<li class="ratio-link" id="ratio5">
						<div class="popup" id="five-one">
							<div class="popup-box" id="chocolate-5-1-popup" onclick="window.open('individual.php?p=7', '_self');" title="Click Here To Find Out More About Our 5:1 Chocolate Crunch Bar!">
								<img src="<?php echo $CDN_prefix; ?>images/chocolate-5-1-popup.png" alt="5:1 Chocolate Crunch Bar" width="215" height="125" />
								<h2 class="popup-title" style="color: #734201;">5:1 Chocolate Crunch</h2>
								<span class="popup-protein">15 Grams Protein</span>
								<span class="popup-net-carbs">3 Grams Net Carbs</span>
							</div>
							<div class="popup-box" id="pretzel-5-1-popup" onclick="window.open('individual.php?p=11', '_self');" title="Click Here To Find Out More About Our 5:1 Chocolate Covered Pretzel Bar!">
								<img src="<?php echo $CDN_prefix; ?>images/pretzel-5-1-popup.png" alt="5:1 Chocolate Covered Pretzel Bar" width="215" height="125" />
								<h2 class="popup-title" style="color: #9C4507;">5:1 Chocolate Covered Pretzel</h2>
								<span class="popup-protein">30 Grams Protein</span>
								<span class="popup-net-carbs">6 Grams Net Carbs</span>
							</div>
						</div>
					</li>
					<li class="ratio-link" id="ratio6">
						<div class="popup" id="six-one">
							<div class="popup-box" id="cookies-6-1-popup" onclick="window.open('individual.php?p=8', '_self');" title="Click Here To Find Out More About Our 6:1 Cookies &amp; Cream Bar!">
								<img src="<?php echo $CDN_prefix; ?>images/cookies-6-1-popup.png" alt="6:1 Cookies &amp; Cream Bar" width="215" height="125" />
								<h2 class="popup-title" style="color: #482D24;">6:1 Cookies &amp; Cream</h2>
								<span class="popup-protein">30 Grams Protein</span>
								<span class="popup-net-carbs">5 Grams Net Carbs</span>
							</div>
							<div class="popup-box" id="brownie-6-1-popup" onclick="window.open('individual.php?p=9', '_self');" title="Click Here To Find Out More About Our 6:1 Peanut Butter Brownie Bar!">
								<img src="<?php echo $CDN_prefix; ?>images/brownie-6-1-popup.png" alt="6:1 Peanut Butter Brownie Bar" width="215" height="125" />
								<h2 class="popup-title" style="color: #D76723;">6:1 Peanut Butter Brownie</h2>
								<span class="popup-protein">30 Grams Protein</span>
								<span class="popup-net-carbs">5 Grams Net Carbs</span>
							</div>
						</div>
					</li>
					<li class="ratio-link" id="ratio7">
						<div class="popup" id="seven-one">
							<div class="popup-box" id="crunch-7-1-popup" onclick="window.open('individual.php?p=10', '_self');" title="Click Here To Find Out More About Our 7:1 White Crispy Crunch Bar!">
								<img src="<?php echo $CDN_prefix; ?>images/crunch-7-1-popup.png" alt="7:1 White Crispy Crunch Bar" width="215" height="125" />
								<h2 class="popup-title" style="color: #482E24;">7:1 White Crispy Crunch</h2>
								<span class="popup-protein">30 Grams Protein</span>
								<span class="popup-net-carbs">4 Grams Net Carbs</span>
							</div>
						</div>
					</li>
				</ul>
			</nav>
		</div>
	</header>
<?php
	if($_SERVER['PHP_SELF'] == "/index.php" || $_SERVER['PHP_SELF'] == "/individual.php") {
		echo '	<script type="text/javascript" src="' . $CDN_prefix . 'js/jquery-1.7.1-min.js"></script>
';
	}
?>
	<section class="page-container">
