<?php 

namespace BookAwesome\ThemeSettings;

/**
 * @author lookawesome team
 * @version 1.0
 * @package ThemeSettings
 * 
 * Init object theme setting for theme bookawesome
*/
class ThemeSettingInit 
{
	
	function __construct()
	{	
		$this->initOptionTree();
		add_action( 'admin_init', array($this, 'initSettings'), 1 );

		add_filter('ot_header_version_text', array($this, 'changeTitleForm'), 1 );

		add_filter( 'ot_show_pages', '__return_false' );
	}

	public function initOptionTree(){
		require 'option-tree/ot-loader.php';
	}

	public function initSettings(){
		$this->loadModuleSetting();

		$savedSettings = get_option( 'option_tree_settings', array() );
		$sections = [];
		$settings = [];

		foreach ($this->argsObjSetting as $objectSetting) {
			$sections[] = $objectSetting->section;

			foreach ($objectSetting->settings as $argsSetting) {
				$settings[] = $argsSetting;
			}
		}

		$customSettings = [
		    'sections' => $sections,
		    'settings' => $settings
		];

		if ( $savedSettings !== $customSettings ) {
			update_option( 'option_tree_settings', $customSettings ); 
		}
	}

	public function loadModuleSetting (){
		$this->argsObjSetting[] = new AdminSettings\General;
		$this->argsObjSetting[] = new AdminSettings\GeneralTest;
		$this->argsObjSetting[] = new AdminSettings\GeneralTest1;
	}

	public function changeTitleForm(){
		return 'Book Awesome';
	}

	public function getSetting( $key ){
		return get_option_tree( $key );
	}
}