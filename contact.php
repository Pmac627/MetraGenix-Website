<?php /* contact.php */
	$preload = array();
	$page_title = "Contact Us ::";

	include('header.php');
?>

		<article class="other-container">
			<form class="contact-form" action="process_contact.php" method="post" autocomplete="off">
				<span class="contact-form-row">
					<input type="text" class="contact-form-input" name="name" id="name" maxlength="40" placeholder="NAME" />
				</span>
				<span class="contact-form-row">
					<input type="email" class="contact-form-input" name="email" id="email" maxlength="60" placeholder="EMAIL ADDRESS" />
				</span>
				<span class="contact-form-row">
					<input type="tel" class="contact-form-input" name="phone" id="phone" maxlength="12" pattern="\d{3}[\-]\d{3}[\-]\d{4}" placeholder="PHONE NUMBER (ex: 123-456-9876)" />
				</span>
				<span class="contact-form-row">
					<input type="text" class="contact-form-input" name="city" id="city" maxlength="30" placeholder="CITY" />
				</span>
				<span class="contact-form-row">
					<input type="text" class="contact-form-input" name="state" id="state" maxlength="2" pattern="[a-zA-Z]{2}" placeholder="STATE (ex: PA)" />
				</span>
				<span class="contact-form-row">
					<textarea class="contact-form-textbox" name="message" id="message" maxlength="2000" placeholder="MESSAGE"></textarea>
				</span>
				<span class="contact-form-row">
					<input type="submit" class="contact-form-button" name="button" id="button" value="Submit!" />
				</span>
			</form>
			<section class="contact-other">
				<strong>RATIO&trade;  Protein Bars</strong><br><br>
				Contact us by phone at<br>
				1-877-273-2279 (Toll Free)<br>
				from 8:30 am until 5:00 pm EST,<br>
				Monday thru Friday.<br><br>
				You can also email us at customerservice@metragenix.com.
			</section>
		</article>

<?php
	include('footer.php');
?>