<?php

if (!class_exists('SliderConfig'))
{

	class SliderConfig extends DataExtension
	{

		private static $db = array (

			'SlickSliderUseCss'		=> 'Boolean',
			'SlickSliderUseJs'		=> 'Boolean',
			'SlickSliderUseJquery'	=> 'Boolean'

		);

		private static $defaults = array (

			'SlickSliderUseCss'		=> true,
			'SlickSliderUseJs'		=> true,
			'SlickSliderUseJquery'	=> true

		);

		public function updateCMSFields(FieldList $fields)
		{

			$fields->addFieldToTab (
				'Root.Main',
				ToggleCompositeField::create(
					'slider_settings',
					'Slider Settings',
					array (
						LiteralField::create('','<div class="field"><p>If you aren\'t customsing any these elements or including them in more advanced methods, you\'ll need to make sure each one is active. For more information on these settings view the <a href="https://github.com/blackthorn87/silverstripe-slick-slider" target="_blank">README</a>.</p></div>'),
						CheckBoxField::create('SlickSliderUseCss')
							->setTitle('Use Styles')
							->setDescription('Turn styles on or off.'),
						CheckBoxField::create('SlickSliderUseJs')
							->setTitle('Use JS Configuration')
							->setDescription('Turn JS configuration on or off.'),
						CheckBoxField::create('SlickSliderUseJquery')
							->setTitle('Use jQuery')
							->setDescription('Use jquery from the CDN.'),
					)
				)
			);

		}

	}

}

?>