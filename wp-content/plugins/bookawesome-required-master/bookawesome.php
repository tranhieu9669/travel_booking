<?php
/*
Plugin Name: Book Awesome Theme
Plugin URI: https://lookawesome.net/
Description: Plugin support for theme bookawesome.
Version: 1.0
Author: lookawesome team
Author URI: https://lookawesome.net/
License: GPLv2 or later
Text Domain: bookawesome
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'No direct script access allowed' );
}

define( 'BOOKAWESOME_FILE', __FILE__ );
define( 'BOOKAWESOME_FILENAME', basename( __FILE__ ) );
define( 'BOOKAWESOME_PLUGIN_NAME', plugin_basename( dirname( __FILE__ ) ) );
define( 'BOOKAWESOME_PLUGIN_DIR', trailingslashit( __DIR__ ) );
define( 'BOOKAWESOME_BASE_URL_PLUGIN', untrailingslashit( plugins_url( '', BOOKAWESOME_FILE ) ) );
define( 'BOOKAWESOME_VERSION','1.0' );

require_once 'inc/BookAwesomePlugin.php';