<?php class pluginname{	public function __construct(){		//Activation / Deactivation hooks		register_activation_hook(__FILE__, array(__CLASS__, 'check_plugin_activated'));		register_uninstall_hook(__FILE__, array(__CLASS__, 'uninstall'));				//more action here	}	/**	   * Things to do when the plugin is activated	*/	public static function check_plugin_activated() {		//your code here	}	/**	   * Things to do when the plugin is deactivated	*/	 public static function uninstall() {		//your code here	 }}?>