<?php
namespace BookAwesome\Shortcode;

use BookAwesome\Shortcode\ShortcodeBooking;
use BookAwesome\Shortcode\ShortcodeHotSale;
use BookAwesome\Shortcode\ShortcodeTopTravel;
use BookAwesome\Shortcode\ShortcodeMagazine;
use BookAwesome\Shortcode\ShortcodeConfidenceSubscribe;
use BookAwesome\Shortcode\ShortcodeAbout;
use BookAwesome\Shortcode\ShortcodeOurTeam;
use BookAwesome\Shortcode\ShortcodeQuote;
use BookAwesome\Shortcode\ShortcodeSocials;
use BookAwesome\Shortcode\ShortcodeContact;
use BookAwesome\Shortcode\ShortcodeCommingSoon;

/**
 * @author lookawesome team
 * @version 1.0
 * @package Shortcode
 * 
 * Init shortcode for theme bookawesome
*/
class ShortcodeInit 
{
	function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'loadScripts' ) , 333333);
		add_action( 'plugins_loaded', array($this, 'includeTemplate') );
	}

	public function includeTemplate() {
		new ShortcodeBooking($this);
		new ShortcodeHotSale($this);
		new ShortcodeTopTravel($this);
		new ShortcodeMagazine($this);
		new ShortcodeConfidenceSubscribe($this);
		new ShortcodeAbout($this);
		new ShortcodeOurTeam($this);
		new ShortcodeOurTeam($this);
		new ShortcodeQuote($this);
		new ShortcodeSocials($this);
		new ShortcodeContact($this);
		new ShortcodeCommingSoon($this);
	}

	/**
	 * Get template path.
	 *
	 * @param  string $filename Filename with extension.
	 * @return string           Template path.
	 */
	public function locateTemplate( $filename ) {
		$theme_dir = apply_filters( 'bookawesome_shortcode_template_theme_dir', 'shortcodes/' );
		$plugin_path = BOOKAWESOME_PLUGIN_DIR . 'templates/shortcodes/';

		$path = '';

		if ( locate_template( $theme_dir . $filename ) ) {
			$path = locate_template( $theme_dir . $filename );
		} elseif ( file_exists( $plugin_path . $filename ) ) {
			$path = $plugin_path . $filename;
		}

		return apply_filters( 'bookawesome_shortcode_locate_template', $path, $filename );
	}

	/**
	 * Load include file JS.
	 *
	 * @return void.
	 */
	public function loadScripts() {
        global $bookAwesomeTheme;
        wp_enqueue_script( 'bookawesome-jquery-form', get_template_directory_uri() . '/assets/js/library/jquery.form.min.js', array('jquery'), $bookAwesomeTheme->version, true );
        wp_enqueue_script( 'bookawesome-validate-min', get_template_directory_uri() . '/assets/js/library/jquery.validate.min.js', array('jquery'), $bookAwesomeTheme->version, true );
        wp_enqueue_script( 'bookawesome-countdown', get_template_directory_uri() . '/assets/js/library/jquery.countdown.min.js', array('jquery'), $bookAwesomeTheme->version, true );
        wp_enqueue_script( 'bookawesome-shortcode-commingsoon', BOOKAWESOME_BASE_URL_PLUGIN . '/assets/frontend/js/shortcode/shortcode-commingsoon.js', array('jquery'), $bookAwesomeTheme->version, true );
    }
}
