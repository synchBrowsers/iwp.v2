<?php
/**
@package WPGrabber bu Wturm
Plugin Name: WPGrabber (wturm edition) 
Description: WordPess Grabber plugin
Version: 2.1.28 (stable work) 
Author: GrabTeam (wturm edition) 
Author URI: https://kwork.ru/script-programming/74574/grabber-dlya-wordpress-nastroyka-parsinga-s-lyubykh-saytov?ref=6517
*/
  if (defined('WPGRABBER_VERSION')) {
    die('На сайте активирован плагин WPGrabber версии '.WPGRABBER_VERSION.'. Пожалуйста, деактивируйте его перед активацией данного плагина.');
  }
  define('WPGRABBER_VERSION', '2.1.28');

  define('WPGRABBER_PLUGIN_DIR', plugin_dir_path( __FILE__ ));
  define('WPGRABBER_PLUGIN_URL', plugin_dir_url( __FILE__ ));
  define('WPGRABBER_PLUGIN_FILE', __FILE__);

  require WPGRABBER_PLUGIN_DIR.'init.php';
?>