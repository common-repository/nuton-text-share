<?php
/*
 * @link              http://www.doyeltheme.com
 * @since             1.0.0
 * @package           nuton-text-share-wordpress
 *
 * @wordpress-plugin
 * Plugin Name:       Nuton Text Share WordPress
 * Plugin URI:        https://themeforest.net/user/jewel1994
 * Description:      This plugin will enable amazing text share in your wordpress site. You can change text share color , bacground , border , border-radius , transition , transition speed & much more from Option panel.
 * Version:           1.0.0
 * Author:            jewel1994
 * Author URI:        http://www.doyeltheme.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       t_share
 * Domain Path:       /languages
 */

//Donot call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * The core plugin class.
 * admin-specific hooks, and public-facing site hooks.
 */
 if ( is_admin() ) {
    // We are in admin mode
	require_once( dirname( __FILE__ ) . '/admin/text-share-options.php' );
}

//Require options file
	require_once( dirname( __FILE__ ) . '/includes/text-share-options-set.php' );


/**
  * Load the plugin all style and script.
  *
  * @since    1.0.0
  */
if ( ! function_exists( 'nnf_text_share_files' ) ) :
	function nnf_text_share_files(){
		wp_enqueue_style('text-share',plugins_url('/assets/css/text-share.min.css',__FILE__), array(), false, 'all');
		wp_enqueue_style('text-share-icon',plugins_url('/assets/css/font-awesome.min.css',__FILE__), array(), '4.5.0', 'all');
		
		wp_enqueue_script('jquery');  
		wp_enqueue_script('textshare-min-js', plugins_url('/assets/js/jquery.textshare.min.js',__FILE__), array('jquery'), false, true);	  
		wp_enqueue_script('textshare-js', plugins_url('/assets/js/textshare.js',__FILE__), array('jquery' , 'textshare-min-js'), false, true);	  
	}
add_action('wp_enqueue_scripts' , 'nnf_text_share_files');
endif;

/*
 * Load the plugin text domain for translation.
 * @since    1.0.0
 */
if ( ! function_exists( 'nnf_text_share_textdoamin' ) ) :
	function nnf_text_share_textdoamin() {
		load_plugin_textdomain( 
			't_share',  
			false, 
			plugin_basename( dirname( __FILE__ ) ) . '/languages' 
		); 
	}	
add_action( 'plugins_loaded', 'nnf_text_share_textdoamin' );
endif;