<?php
	function sanitize_text ($string) {
		$string = trim($string);
		$string = strip_tags($string);
		$string = str_replace("'","\'",$string);
		$string = str_replace('"','\"',$string);

		return $string;
	}

	function sanitize_email ($email) {
		$email = trim($email);
		$email = strip_tags($email);
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	
		return $email;
	}

	function sanitize_password ($password) {
		$password = str_replace("'","\'",$password);
		$password = str_replace('"','\"',$password);
		$password = htmlspecialchars($password);

		return $password;
	}
?>