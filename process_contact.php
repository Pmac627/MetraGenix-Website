<?php /* process_contact.php */
	$_POST['name'] = (string)strip_tags($_POST['name']);
	$_POST['email'] = (string)strip_tags($_POST['email']);
	$_POST['phone'] = (string)strip_tags($_POST['phone']);
	$_POST['city'] = (string)strip_tags($_POST['city']);
	$_POST['state'] = (string)strip_tags($_POST['state']);
	$_POST['message'] = (string)strip_tags($_POST['message']);

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
	function send_email($name, $email, $phone, $city, $state, $message) {
		$mail_to = "Metragenix <customerservice@2to1proteinbars.com>"; // Create mail_to variable
		$mail_subject = "New Contact Message!"; // Create mail_subject variable
		$mail_message = wordwrap("New Contact Message:<br><br><strong>NAME:</strong> " . $name . "<br><strong>EMAIL:</strong> " . $email . "<br><strong>PHONE:</strong> " . $phone . "<br><strong>CITY:</strong> " . $city . "<br><strong>STATE:</strong> " . $state . "<br><strong>MESSAGE:</strong><br>" . $message, 70); // Create mail_message variable
		$mail_headers = 'From: no_reply@2to1proteinbars.com' . "\r\n" .
			'Reply-To: no_reply@2to1proteinbars.com' . "\r\n" .
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type: text/html; charset=UTF-8' . "\r\n" .
			'X-Mailer: PHP/' . phpversion(); // Create mail_headers variable
		mail($mail_to, $mail_subject, $mail_message, $mail_headers); // Mail object
	}

	if(validate_input($_POST['name'], 'string', 40) == TRUE && validate_input($_POST['email'], 'string', 60) == TRUE && validate_input($_POST['phone'], 'string', 14) == TRUE && validate_input($_POST['city'], 'string', 30) == TRUE && validate_input($_POST['state'], 'string', 2) == TRUE && validate_input($_POST['message'], 'string', 2000) == TRUE && validate_email($_POST['email']) == TRUE) {
		send_email($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['city'], $_POST['state'], $_POST['message']);
		echo "<meta http-equiv='refresh' content='0; url=success_contact.php' />";
		exit;
	} else {
		echo "<meta http-equiv='refresh' content='0; url=failed_contact.php' />";
		exit;
	}
?>