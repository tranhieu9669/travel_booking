<?php
namespace BookAwesome\Widgets;

/**
* @package Widgets
* @version 1.0
* @author bookawesome team
*
* Class init widget for theme
*/
class InitWidget 
{
	function __construct() {	
		add_action( 'admin_enqueue_scripts', array( $this, 'loadScripts' ) , 333333);
		add_action( 'admin_enqueue_scripts', array( $this, 'loadStyles' ) , 333333);

		add_action( 'widgets_init', array($this, 'includeTemplate') );
	}

	/**
	 * Handle register template.
	 * @return void
	 */
	public function includeTemplate() {
		register_widget( 'BookAwesome\Widgets\WidgetLogo' );
		register_widget( 'BookAwesome\Widgets\WidgetNavMenu' );
		register_widget( 'BookAwesome\Widgets\WidgetLanguageCopyright' );
		register_widget( 'BookAwesome\Widgets\WidgetCategories' );
		register_widget( 'BookAwesome\Widgets\WidgetRecentPost' );
		register_widget( 'BookAwesome\Widgets\WidgetTagCloud' );
		register_widget( 'BookAwesome\Widgets\WidgetArchives' );
		register_widget( 'BookAwesome\Widgets\WidgetFlickr' );
	}

	/**
	 * load file js
	 * @return void
	 */
	public function loadScripts() {
		wp_enqueue_script('bookawesome-widget-logo-js', BOOKAWESOME_BASE_URL_PLUGIN.'/assets/backend/js/widget/widget-logo.js', array(), '1.0', true);
	}

	/**
	 * load file css
	 * @return void
	 */
	public function loadStyles() {
		wp_enqueue_style('bookawesome-widget-logo',BOOKAWESOME_BASE_URL_PLUGIN. '/assets/backend/css/widget/widget-logo.css');
	}
}