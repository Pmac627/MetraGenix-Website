<?php /* process.php */
	$_POST['email_footer'] = (string)strip_tags($_POST['email_footer']);
	$_POST['zipcode'] = (int)strip_tags($_POST['zipcode']);

	// Create validate_email function
	function validate_email($email) {
		return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
	}

	// Create validate_input function
	function validate_input($string, $type, $length) {
		$type = 'is_'.$type; // Adjust type variable

		if(!$type($string)) {
			return FALSE; // Kill process
		} elseif(empty($string)) {
			return FALSE; // Kill process
		} elseif(strlen($string) > $length) {
			return FALSE; // Kill process
		} else {
			return TRUE; // Continue process
		}
	}

	// Create send_email function
	function send_email($email, $zipcode) {
		$mail_to = "Metragenix <customerservice@2to1proteinbars.com>"; // Create mail_to variable
		$mail_subject = "New Subscription!"; // Create mail_subject variable
		$mail_message = wordwrap("New Subscription:<br><br><strong>EMAIL:</strong> " . $email . "<br><strong>ZIP CODE:</strong> " . $zipcode, 70); // Create mail_message variable
		$mail_headers = 'From: no_reply@2to1proteinbars.com' . "\r\n" .
			'Reply-To: no_reply@2to1proteinbars.com' . "\r\n" .
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type: text/html; charset=UTF-8' . "\r\n" .
			'X-Mailer: PHP/' . phpversion(); // Create mail_headers variable
		mail($mail_to, $mail_subject, $mail_message, $mail_headers); // Mail object
	}

	if(validate_input($_POST['email_footer'], 'string', 60) == TRUE && validate_email($_POST['email_footer']) == TRUE) {
		if($_POST['zipcode'] != NULL && validate_input($_POST['zipcode'], 'integer', 5) == TRUE) {
			send_email($_POST['email_footer'], $_POST['zipcode']);
		} else {
			$_POST['zipcode'] = "N/A";
			send_email($_POST['email_footer'], $_POST['zipcode']);
		}
		echo "<meta http-equiv='refresh' content='0; url=success.php' />";
		exit;
	} else {
		echo "<meta http-equiv='refresh' content='0; url=failed.php' />";
		exit;
	}
?>