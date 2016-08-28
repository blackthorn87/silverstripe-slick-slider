<?php

if (!class_exists('SliderController'))
{

	class SliderController extends Extension
	{

		public function SlideList()
		{

			return Slide::get()->filter(array(
				'isActive' 		=> 1
			))->sort(array(
				'Sort'			=> 'ASC'
			));

		}

	}

}

?>