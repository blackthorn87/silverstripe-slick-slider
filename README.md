# silverstripe-slick-slider

This SilverStripe module creates a Slider on each page of your website. It uses Slick Slider by [Ken Wheeler](http://kenwheeler.github.io/) to animate it.

It is intended as a simple module to add functionality and stop me from having to repeat basic code for each project. The styling isn't really suitable for final production, more as an example which can be added to or expanded on.

All the Slick Slider elements are included via a CDN.

### Requirements

**jQuery** - This is included via CDN. You can (will be able to) turn this off in the settings if you already have jQuery included in your project for other uses.

**[Slick Slider](http://kenwheeler.github.io/slick/)** - Included via CDN. This is required for animating the slider.

### Installation

This module isn't on packgist at the moment, and might never be as the level of maintenance required isn't something I can commit to at the moment. I will do my best to update and refine the module when I can.

**Instructions**

- Download from the repository and extract in your SilverStripe root directory.
- Rename the extracted folder to 'slider'; it needs to be all lowercase.
- Run a dev/build?flush=1 on your site.
- This will be installed now.
- To make sure the module works you'll have to have jQuery included, if your project doesn't already include it go to the site settings and make sure use jquery is checked.
- To make sure the slider has styling, go to the site settings and make sure use styles is checked.

### Usage

All you need to do is include ```<% include Slider %>``` in your template where you want the slider to appear.

You can customise the template in the usual SilverStripe fashion (copy it from the modules template directory to your theme directory in the same folder).

#### Adding Slides

- Each page now has a Slider tab
- You can add and remove slides for the page here

#### Advanced Styling

If you want to override the styles, just include the slick-style.css file in your theme css directory (css/slick-styles.css).

Alternatively if you're using something like SASS, you can turn off the styles completely in the settings panel. if you want to include the styles in your own sass structure or css files.

#### Javascript Config

If you need to change the configuration settings for the slider copy the js/slick-config.js to your theme directory. You can change all the settings in here. Reference for the slider can be found [here](http://kenwheeler.github.io/slick/).

###Support

*Note, this module was developed for personal use, experimentation and further learning and development. Please feel free to use it if you wish, but support for the module will be either non existant for the moment, or patchy at best.*