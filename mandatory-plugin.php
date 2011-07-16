<?php
/*
Plugin Name: Mandatory Field
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: The Plugin's Version Number, e.g.: 1.0
Author: Name Of The Plugin Author
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

include_once('mandatory-plugin-option-page.php');
include_once('mandatory-plugin-admin.php');

add_filter( 'wp_insert_post_data' , 'mand_fields' , '99' );

add_action('admin_head-post.php', 'mand_plugin_notice');

add_action('admin_menu', 'mand_option_menu');

function mand_option_menu() {
	//create new top-level menu
	add_options_page('Mandatory Settings', 'Mandatory Settings', 'manage_options', 'mand-settings', 'mand_setting_option');
	//call register settings function
	add_action( 'admin_init', 'register_mand_settings' );
}


function register_mand_settings() {
	//register our settings
	register_setting( 'mand-settings-group', 'element_1' );
	register_setting( 'mand-settings-group', 'element_2' );
	register_setting( 'mand-settings-group', 'element_3' );		
	register_setting( 'mand-settings-group', 'element_4' );
	register_setting( 'mand-settings-group', 'element_5' );	
	/*
	register_setting( 'mand-settings-group', 'id_1' );
	register_setting( 'mand-settings-group', 'id_2' );
	register_setting( 'mand-settings-group', 'id_3' );		
	register_setting( 'mand-settings-group', 'id_4' );
	register_setting( 'mand-settings-group', 'id_5' );	*/
}


?>
