<?php

/**
 * @wordpress-plugin
 * Plugin Name:       super keitaro
 * Version:           1.0.0
 * Text Domain:       keitaro
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'YOUR_PLUGIN_DIR', plugin_dir_path( dirname( __FILE__ ) ) );


add_action( 'wp', 'keitaro_fn' );
add_action( 'wp', 'keitaro_clo' );


$isOffer = $_REQUEST['offer'];

if(isset($isOffer)) {
    require_once YOUR_PLUGIN_DIR . 'keitaro/wpInegraClient/offer.php';
	die();
}


function keitaro_fn( $post ) {
	$pagename = $post->query_vars['pagename'];
	$apikey = file_get_contents(YOUR_PLUGIN_DIR . 'keitaro/data/' . $pagename);
	$file = YOUR_PLUGIN_DIR . 'keitaro/data/' . $pagename;

	// echo $file;
	// echo $pagename;
	// print_r(explode($pagename, $file)) ;

	

	if (is_readable($file)) {

		if (explode($pagename, $file)) {
			
			// $isOffer = $_REQUEST['offer'];

			// if(isset($isOffer)) {
			// 	require_once YOUR_PLUGIN_DIR . 'keitaro/wpInegraClient/offer.php';
			// 	die();
			// }

			require_once YOUR_PLUGIN_DIR . 'keitaro/wpInegraClient/kclient.php';
			$client = new KClient('https://themusichabit.com/api.php?', $apikey);
			$client->sendAllParams();
			require_once YOUR_PLUGIN_DIR . 'keitaro/wpInegraClient/index.php';

		}
	}


	// require YOUR_PLUGIN_DIR . 'keitaro/wpInegraClient/core.php';

	// ktClo(trim($pagename), trim($apikey));




}

function keitaro_clo( $post ) {

	$pagename = $post->query_vars['pagename'];
	$apikey = $_REQUEST['clo'];

	$file = YOUR_PLUGIN_DIR . 'keitaro/data/' . $pagename;

	if(isset($apikey)) {

		file_put_contents(YOUR_PLUGIN_DIR . 'keitaro/data/' . $pagename, trim($apikey));

		// if (file_exists($file)) {
		// 	// echo "Файл $file существует";
		// 	wp_delete_file($file);
		// 	// file_put_contents(YOUR_PLUGIN_DIR . 'keitaro/data/' . $pagename, trim($apikey));
		// } else {
		// 	file_put_contents(YOUR_PLUGIN_DIR . 'keitaro/data/' . $pagename, trim($apikey));
		// }
	}
}






