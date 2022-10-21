<?php

	// Start the Session
	//session_start();
	
	// Define ROOT Path
	//define("ROOT", __DIR__ ."/");	
	
	// Include the custom Website Defines Config
	//require_once ($_SERVER['DOCUMENT_ROOT'] . '/System/Conf/Defines.cfg'); 
	
	// Include System Languages
	//require_once $_SERVER['DOCUMENT_ROOT'].('/System/Lang.php');
	
	###############################################################################
	# 
	# 							SOFTWARE INFORMATIONS
	#
    # This Settings are not important for you they just give us Informations about
	# this Website System like: Scriptname, Version & Developer Informations.
	#
	###############################################################################

	// Website Engine Name
	define('RDSB_APPNAME', 'MaterializeIt');
	// Website Engine Version
	define('RDSB_COREVERSION', 'v0.1.0-ALPHA');
	// Website System Version
	define('RDSB_SYSTEMVERSION', 'v0.1.0-ALPHA');	
	// Website System Version
	define('RDSB_SYSTEMDEVELOPER', '.:: MaterializeIt ::.');	
	// Website System Version
	define('RDSB_SYSTEMDEVSITE', 'https://layout.rd-elite.com/');
	
	// Include all System Functions
	/* foreach (glob("System/Func/*.php") as $filename)
	{
	include $filename;
	} */
	
?>