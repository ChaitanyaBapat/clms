<?php

	//FOLDER PATHS

	//basics
	define('DIR_BASE',dirname( dirname( __FILE__ ) ) . '/');
	define('DIR_ROOT',DIR_BASE.'quickchat/');
	// Assets are defined here
	define('DIR_ASSETS',DIR_ROOT.'assets/');
	define('DIR_CSS',DIR_ASSETS.'css/');
	// connect folder for database connections and related functions
	define('DIR_CONNECT',DIR_ROOT.'connect/');
	//login folder for login related stuff
	define('DIR_LOGIN',DIR_ROOT.'login/');
	//register folder for registering a user and related stuff
	define('DIR_REGISTER',DIR_ROOT.'register/');
	//php imports
	define('DIR_IMPORTS',DIR_ROOT.'imports/');
	



	//SET GLOBALS

	define('HOST', '127.0.0.1');
	define('DB','clms');
	define('CLMS_LOGIN_SELECT','clms_login_select');
	define('CLMS_LOGIN_SELECT_PASSWORD','kEkLoRdchaitanya123456789');
	define('CHARSET','utf8mb4');


	//DEVELOPMENT PURPOSES
	define('SUPRESS_CUSTOM_ERRORS',false);


	//DEPLOYMENT PURPOSES
	//error_reporting(0);
	//define('SUPRESS_CUSTOM_ERRORS',true);
?>