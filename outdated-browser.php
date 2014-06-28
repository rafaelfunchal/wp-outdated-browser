<?php
/**
 * Plugin Name: WP Outdated Browser
 * Description: This plugin show a message if your browser is outdated.
 * Version: 1.0
 * Author: Deblyn Prado
 * Text Domain: outdated-browser
 * Domain Path: /languages
 * Author URI: http://deblynprado.com
 * License: A "Slug" license name e.g. GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function outdated_browser(){
	/**
	 * Plugin version.
	 *
	 * @var string
	 */
	const VERSION = '1.0.0';

	/**
	* Define files path
	*/
	$outdated_browser_url =  plugin_dir_url( __FILE__ );
	$outdated_css = $outdated_browser_url . 'css/outdatedBrowser.min.css';
	$outdated_js = $outdated_browser_url . 'js/outdatedBrowser.min.js';
	$outdated_main = $outdated_browser_url . 'js/main.js';
	
	
	/**
	* Setting the HTML content.
	*/
	echo ( '<div id="outdated"><h6>' );
	echo __( 'Your browser is out-of-date!', 'outdated-browser' );
	echo ('</h6><p>');
	echo __( 'Update your browser to view this website correctly.', 'outdated-browser');
	echo ( '<a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">' );
	echo __( 'Update my browser now', 'outdated-browser');
	echo ( '</a></p><p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p></div> ');

	/**
	* Calling styles and scripts with WP native functions
	*/
	wp_enqueue_style('outdated-browser-style', $outdated_css);
	wp_enqueue_script( 'outdated-browser-js', $outdated_js);
	wp_enqueue_script( 'outdated-browser-main', $outdated_main);	
}

add_action('wp_footer', 'outdated_browser');