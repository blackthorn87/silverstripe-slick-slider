<?php

if (!class_exists('SliderController'))
{

	class SliderController extends Extension
	{


		public function onAfterInit()
		{

			$configUseCss = SiteConfig::current_site_config()->SlickSliderUseCss;
			$configUseJs = SiteConfig::current_site_config()->SlickSliderUseJs;
			$configUseJquery = SiteConfig::current_site_config()->SlickSliderUseJquery;

			$current_theme = "themes/" . SSViewer::current_theme();
			
			Requirements::themedCSS('reset');

			//Load  CSS requirements
			Requirements::css("//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css");
			if ($configUseCss == true) {
				// checks the theme directory for the css file first and uses it if it exists
				if (Director::fileExists($current_theme . "/css/slider.css")) {
					Requirements::css($current_theme . "/css/slider.css");
				} else {
					Requirements::css("slider/css/slider.css");
				}
			}

			//Load  Javascript requirements
			if ($this->SlideList()->Count() > 1) {
				if ($configUseJquery == true) {
					Requirements::javascript("//code.jquery.com/jquery-1.11.0.min.js");
				}
				Requirements::javascript("//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js");
				if ($configUseJs == true) {
					if (Director::fileExists($current_theme . "/js/slick-config.js")) {
						Requirements::javascript($current_theme . "/js/slick-config.js");
					} else {
						Requirements::javascript("slider/js/slick-config.js");
					}
				}
			}
			// Call the blue imp jquery
			/*
			Requirements::customScript("

				document.getElementById('links').onclick = function (event) {
					event = event || window.event;
					var target = event.target || event.srcElement,
					link = target.src ? target.parentNode : target,
					options = {index: link, event: event},
					links = this.getElementsByTagName('a');
					blueimp.Gallery(links, options);
				};
			");
			*/
		}

		public function SlideList()
		{

			return Slide::get()->filter(array(
				'isActive' 		=> 1
			))->sort(array(
				'Sort'			=> 'ASC'
			));

		}

		private function themeFile($folderPath, $filename, $fileExtention)
		{
			return "themes/" . SSViewer::current_theme() . "/" . $folderPath . "/" . $filename . "." . $fileExtention;
		}

	}

}

?>