<?php
/**
 * Plugin Name: theplugin null 
 * Plugin URI: 
 * Description: theplugin
 * Author: Plugin Description
 * Version: 1.7.7
 * License: GPLv2 or later
 */
 
	defined('ABSPATH') or die("No script kiddies please!");
	include 'autoload.php'; //if the directory need load
	include 'libs/libs.function.php'; //this a external function
	include 'libs/libs.global.php'; //global variable to be declaire like array or string	include 'libs/libs.settings.php'; //global declaire for all setting options
	//includes
 	include 'pluginname.php';	 	include 'pluginname_backend.php';	
 	include 'pluginname_frontend.php';

	$pluginname = new pluginname();
	
?>