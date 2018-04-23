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

class GeneralTest1 extends SettingFactory
{

	public function section(){
		return array(
	        'id'          => 'generaltest1',
	        'title'       => 'General Test new'
	    );
	}

	public function settings(){
		return [
				[
					'id'          => 'my_checkbox3',
			        'label'       => 'Checkbox Test',
			        'desc'        => '',
			        'std'         => '',
			        'type'        => 'checkbox',
			        'section'     => 'generaltest1',
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