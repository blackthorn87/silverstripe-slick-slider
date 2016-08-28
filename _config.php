<?php

// Object::add_extension('[Object to Extend]', '[Name of your Extension]');

// Add Slider Functionality to all Pages
Object::add_extension('Page', 'SliderExtension');

// Extend Page_Controller with the SlideList
Object::add_extension('Page_Controller', 'SliderController');

?>