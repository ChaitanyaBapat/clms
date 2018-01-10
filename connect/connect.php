<?php
	require_once 'config.php';
	require_once DIR_IMPORTS."user_visible_logs.php";
	function connect_using_clms_login_select () {
		$dsn = "mysql:host=localhost;dbname=clms;charset=utf8mb4";
		$opt = array(
			 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    		PDO::ATTR_EMULATE_PREPARES => false,
		);
		try {
			$pdo = new PDO($dsn,CLMS_LOGIN_SELECT,CLMS_LOGIN_SELECT_PASSWORD,$opt);
			return $pdo;
		}
		catch(PDOException $e) {
			display_error("PDO Error".$e->getMessage());
			return false;
		}
	}
?>