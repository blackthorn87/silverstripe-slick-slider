<?php

if (!class_exists('SliderConfig'))
{

	class SliderConfig extends DataExtension
	{

		private static $db = array (

			'SlickSliderUseCss'		=> 'Boolean'

		);

		public function updateCMSFields(FieldList $fields)
		{

			$fields->addFieldToTab (
				'Root.Main',
				ToggleCompositeField::create(
					'slider_settings',
					'Slider Settings',
					array (
						CheckBoxField::create('SlickSliderUseCss')
							->setTitle('Use Module Styles')
							->setDescription('This will turn off using the included styles which tidy up the look of the slider. It does not turn off the standard slick slider styles.')
					)
				)
			);

		}

	}

}

?>