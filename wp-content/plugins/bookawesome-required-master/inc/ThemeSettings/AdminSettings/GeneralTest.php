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

class GeneralTest extends SettingFactory
{

	public function section(){
		return array(
	        'id'          => 'generaltest',
	        'title'       => 'General Test'
	    );
	}

	public function settings(){
		return [
				[
					'id'          => 'my_checkbox2',
			        'label'       => 'Checkbox Test',
			        'desc'        => '',
			        'std'         => '',
			        'type'        => 'checkbox',
			        'section'     => 'generaltest',
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