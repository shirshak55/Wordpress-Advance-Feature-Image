<?php
/*
 * Plugin Name: Advanced Featured Image By Shirshak
 * Description: Allows you to use an external image as Featured Image of your post, page or product (WooCommerce).
 * Version: 1.0.2
 * Author: Shirshak Bajgain
 */

define('FIFU_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('FIFU_INCLUDES_DIR', FIFU_PLUGIN_DIR . '/includes');
define('FIFU_ADMIN_DIR', FIFU_PLUGIN_DIR . '/admin');

require_once( FIFU_INCLUDES_DIR . '/thumbnail.php' );
if (is_admin()) {
	require_once( FIFU_ADMIN_DIR . '/meta-box.php' );
}
