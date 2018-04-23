<?php 

namespace BookAwesome\ThemeSettings\AdminSettings;

use BookAwesome\ThemeSettings\SettingFactory;

/**
 * @author lookawesome team
 * @version 1.0
 * @package AdminSettings
 * 
 * Setting General theme setting for theme bookawesome
*/

class General extends SettingFactory
{

	public function section(){
		return array(
	        'id'          => 'general',
	        'title'       => 'General'
	    );
	}

	public function settings(){
		return [
				[
					'id'          => 'my_checkbox',
			        'label'       => 'Checkbox',
			        'desc'        => '',
			        'std'         => '',
			        'type'        => 'checkbox',
			        'section'     => 'general',
			        'class'       => '',
			        'choices'     => [
				        [
				            'value' => 'yes',
				            'label' => 'Yes' 
				        ]
			        ]
				]
			];
	}
}