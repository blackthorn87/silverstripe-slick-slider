<?php

if (!class_exists('SliderExtension'))
{

	class SliderExtension extends DataExtension
	{

		private static $has_many = array (
			'Slides'			=> 'Slide'
		);

		public function updateCMSFields (FieldList $fields)
		{
		
			$fields->addFieldsToTab (
				'Root.Slides',
				array (
					GridField::create(
						'Slides',
						'Add / Remove Slides',
						$this->owner->Slides(),
						GridFieldConfig_RecordEditor::create()
					)
				)
			);
		
		}

	}

}

?>