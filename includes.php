<?php
	ini_set('default_charset', 'utf-8');
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	ini_set('error_log', 'dev/logs/errors.log'); // Logging file path
	error_reporting(E_ALL | E_STRICT | E_NOTICE);
	
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
	
	ob_start();

	date_default_timezone_set('Europe/Belgrade');

	// URL
	$url = $_SERVER['DOCUMENT_ROOT'];

	// Configuration Files
	include_once($url.'/core/inc/config.php');         			// MySQL Config File

	// Classes
	include_once($url.'/core/class/secure.class.php');    		// Secure Managment Class
	include_once($url.'/core/class/site.class.php');    		// Site Managment Class

	// Initializing Classes
	$Secure 	= new Secure();
	$Site 		= new Site();


	//For test;
	function pre_r($Array) {
		echo '<pre>';
		print_r($Array);
		echo '</pre>';
	}


	// # Secure POST - GET # //
	$POST 	= filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	$GET 	= filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

?>