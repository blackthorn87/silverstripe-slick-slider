<?php

if (!class_exists('Slide'))
{

	class Slide extends DataObject
	{
		
		private static $singular_name	= 'Slide';

		private static $plural_name		= 'Slides';
		
		private static $default_sort	= 'Sort, Name, ID';
		
		private static $db = array (

			'Name' 						=> 'HTMLText',
			'Content' 					=> 'HTMLText',
			'Sort' 						=> 'Int',
			'OtherLink'					=> 'Varchar(255)',
			'openInNew'					=> 'Boolean',
			'isActive'					=> 'Boolean'
		
		);
		
		private static $has_one = array (
		
			'sImage' 					=> 'Image',
			'ParentPage' 				=> 'Page',
			'PageLink' 					=> 'SiteTree'
		
		);
		
		private static $defaults = array (
		
			'openInNew'					=> false,
			'isActive'					=> false,
			'Sort' 						=> 50

		);
		
		private static $summary_fields = array (
		
			'Title'						=> 'Main Heading',
			//'Content'					=> 'Main Content',
			'PageLink.MenuTitle'		=> 'Link to Page',
			'OtherLink'					=> 'Alt Link',
			'sImage.FileName'			=> 'Image File Name',
			'OpenInNewWindow'			=> 'Open in New Window',
			'ActiveState'				=> 'Active',
			'Sort'						=> 'Sort Order'
		
		);
		
		private static $field_labels = array (

			'Sort'						=> 'Sort Order'
		
		);

		private static $casting = array (
			'ActiveState'				=> 'Text',
			'OpenInNewWindow'			=> 'Text'
		);

		public function ActiveState() {
			return $this->isActive ? 'Yes' : 'No';
		}

		public function OpenInNewWindow() {
			return $this->openInNew ? 'Yes' : 'No';
		}
		
		// set the Title field to the Name
		public function getTitle() {
		
			return $this->Name;
		
		}
		
		public function getCMSFields() 
		{
		
			$fields = parent::getCMSFields();
			
			$fields->removeByName('sImage');

			$fields->addFieldsToTab (
				'Root.Main',
				array (
					TextField::create('Name')->setTitle('Main Heading'),
					TextField::create('Content')->setTitle('Main Content'),
					TextField::create('OtherLink')->setTitle('Alternative Link')
						->setDescription('If this field is filled out, the \'Page Link\' won\'t be used.'),
					CheckBoxField::create('openInNew')->setTitle('Open in New Tab'),
					CheckBoxField::create('isActive')->setTitle('Enable Slide'),
					TextField::create('Sort')->setTitle('Sort Order')
				)
			);

			if (!$this->ID)
			{
				$fields->removeByName('sImage');
				$fields->removeByName('PageLink');
				$fields->removeByName('PageLinkID');
				$fields->removeByName('ParentPage');

				$fields->addFieldsToTab (
					'Root.Main',
					array (
						LiteralField::create('lit1')->setContent('<em>You\'ll be able to add an image after creating the slide.</em>')
					)
				);
			}

			if ($this->ID > 0)
			{

				$fields->addFieldsToTab (
					'Root.Main',
					array (
						UploadField::create('sImage')->setTitle('Image')
							->setFolderName('Uploads/Banners/')
							->setDescription('The image needs to <strong>930 x 250px</strong> in size.')
							->setAllowedFileCategories('image'),
						TreeDropdownField::create('PageLinkID')->setTitle('Page Link')
							->setSourceObject('SiteTree')
							->setShowSearch(false)
							->setDescription('To deselect a page, click it again from the dropdown list.')
					)
				);

			}
			
			return $fields;
		}

		public function targetDestination()
		{
			return $this->openInNew ? " target=\"_blank\"" : "";
		}

		public function Link()
		{
			if ($this->OtherLink) {
				return $this->OtherLink;
			} else {
				return $this->PageLink()->Link();
			}
		}
		
		
	} // end class Slide

}
?>