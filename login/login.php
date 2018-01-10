<?php
	//start session
	if (session_status() === PHP_SESSION_NONE) {
    	session_start();
	}
	//import the required files if they exist
	
	//config file for paths
	if(file_exists('config.php')) {
		require_once 'config.php';
	}
	else {
		echo "There seems to be an error. Please try again";
		exit();
	}
	
	//database connection
	if(file_exists(DIR_CONNECT."connect.php")) {
		require_once DIR_CONNECT."connect.php";
	}
	else {
		echo "There seems to be an error. Please try again";
		exit();
	}
	
	//logging errors on the console
	if(file_exists(DIR_IMPORTS."user_visible_logs.php")) {
		require_once DIR_IMPORTS."user_visible_logs.php" ;
	}
	else {
		echo "There seems to be an error. Please try again";
		exit();	
	}

	//sanitizing all types of inputs
	if(file_exists(DIR_IMPORTS."sanitize_input.php")) {
		require_once DIR_IMPORTS."sanitize_input.php";	
	}
	else {
		echo "There seems to be an error. Please try again";
		exit();	
	}

	//password encryption 
	if(file_exists(DIR_IMPORTS."encrypt_password.php")) {
		require_once DIR_IMPORTS."encrypt_password.php";
	}
	else {
		echo "There seems to be an error. Please try again";
		exit();	
	}

	//start the main process
	if($_SERVER["REQUEST_METHOD"] === "POST") {
		$email = sanitize_email($_POST["email"]);
		$password = encrypt_password(sanitize_password($_POST["password"]));
		$pdo = connect_using_clms_login_select();
		if($pdo) {
			$sql = "select email,password from clms_user_info where email= ? and password = ?";
			$statement = $pdo->prepare($sql);
			$statement->execute(array($email,$password));
			if($statement->rowCount() === 1) {
				
			}
		}
		else {
			display_error("PDO Connection error");
			echo "<br>There seems to be an error. Please try again<br>";
		}
	}
?>