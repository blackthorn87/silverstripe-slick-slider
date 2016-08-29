# silverstripe-slick-slider

Add a slider or banner to every page in the website using a simple include. This uses slick slider.

### Requirements

- jQuery - included using a cdn, but if you have if for other uses, you will need to modify the template to use your one instead
- [Slick Slider](http://kenwheeler.github.io/slick/) - Included via a cdn

### Usage

All you need to do is include ```<% include Slider %>``` in your template where you want the slider to appear. You can customise the template if you want by copying it from the module directory to the equivelent directiry in your theme.

#### Overriding Styles

If you want to override the styles, just include the appropriate css file in your theme directory (slick-styles.css).

Alternatively you could turn them off completely in the settings panel if you want to include the styles in your own sass structure or css files.