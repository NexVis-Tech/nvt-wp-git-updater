<?php
/*
	Plugin Name: NVT WP Git Plugin Updater
	Description: This is for updating your Wordpress plugin.
	Version: 1.0.0
	Author: Irfan Masood
	Author URI: http://www.nexvistech.com
*/
if( ! class_exists( 'NVT_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new NVT_Updater( __FILE__ );
$updater->set_username( 'mudassarijaz' );
$updater->set_repository( 'nvt-wp-git-updater' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();
?>