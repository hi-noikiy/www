<?
	// SESSION
	session_start();
	
	// MAGIC_QUOTES_GPC
	if (get_magic_quotes_gpc() != true) {
		foreach ($_REQUEST as &$value) {
		    if (is_array($value))
		    	$value = array_map("addslashes", $value);
		    else if (is_string($value))
		    	$value = addslashes($value);
		}
	}
	
	// REGISTER_GLOBALS
	if (ini_get("register_globals") != true) {
		extract($_REQUEST, EXTR_SKIP);
		
		$PHP_SELF = $_SERVER["PHP_SELF"];
	}
	
	// RAW HTTP HEADER SEND
	header("Cache-Control: no-store, no-cache, must-revalidate");	// HTTP/1.1
?>