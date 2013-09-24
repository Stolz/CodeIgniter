<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
Template:
$config['ASSET_NAME'] = array(
	'css'		=> File or array of CSS files to load.
	'js'		=> Same as 'css' but for JavaScript files.
	'cdn'		=> URL (or array of URLs) to load JS from a externaml content delivery network (CDN).
	'fallback'	=> JavaScript condition to test if CDN file was loaded successfully. If condition fails then all the 'js' files provided before will be loded
);

All keys are optional but 'fallback' requires 'cdn' and 'js' to work.

For 'css' and 'js', if the filename starts with 'http' or '//' then it's assumed to be a remote link and it's loaded as is. Otherwise it is consider to be a local link and the proper prefix is automatically added (and also the extension if it was not provided).
*/

/******************************************************************************/

$config['jquery'] = array(
	'cdn'		=> '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
	'fallback'	=> 'typeof jQuery == "undefined"',
	'js'		=> 'jquery.min',
);

/******************************************************************************/

$config['jquery-ui'] = array(
	'css'		=> 'smoothness/jquery-ui-1.10.3.custom.min', /* CDN version: '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css',*/
	'cdn'		=> array(
					'//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js',
					//Uncomment to load i18n for all languages other than English '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/i18n/jquery-ui-i18n.min.js',
					//Uncomment to load i18n for only one language (i.e: Spanish)'//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/i18n/jquery.ui.datepicker-es.min.js',
					),
	'fallback'	=> '!window.jQuery.ui',
	'js'		=> array(
					'jquery-ui.min',
					//Uncomment to load i18n for all languages other than English 'jquery-ui-i18n.min.js',
					//Uncomment to load i18n for only one language (i.e: Spanish) 'jquery.ui.datepicker-es.min',
					),
);

/******************************************************************************/

$config['app'] = array(
	'js'		=> 'app',
);

/******************************************************************************/

$config['zepto'] = array(
	'cdn'		=> '//cdnjs.cloudflare.com/ajax/libs/zepto/1.0/zepto.min.js',
	'fallback'	=> 'typeof Zepto == "undefined"',
	'js'		=> 'zepto.min',
);

/******************************************************************************/

//Zurb Foundation
$config['foundation'] = array(
	'css'		=> array('normalize', 'foundation.min'),
	'js'		=> array('custom.modernizr', 'foundation.min', 'app'),
);

/******************************************************************************/

//Zurb Foundation v3 (obsolete)
$config['foundation3'] = array(
	'css'		=> 'foundation3.min',
	'js'		=> array('foundation3.min', 'app3'),
);
/******************************************************************************/

//Zurb Foundation SVG icons (all)
$config['foundation-icons'] = array(
	'css'		=> 'foundation-icons',
);
//accessibility only
$config['foundation-icons-accessibility'] = array(
	'css'		=> array('foundation_icons_accessibility/stylesheets/accessibility_foundicons', /*'foundation_icons_accessibility/stylesheets/accessibility_foundicons_ie7'*/),
);
//enclosed only
$config['foundation-icons-enclosed'] = array(
	'css'		=> array('foundation_icons_general_enclosed/stylesheets/general_enclosed_foundicons', /*'foundation_icons_general_enclosed/stylesheets/general_enclosed_foundicons_ie7'*/),
);
//general only
$config['foundation-icons-general'] = array(
	'css'		=> array('foundation_icons_general/stylesheets/general_foundicons', /*'foundation_icons_general/stylesheets/general_foundicons_ie7'*/),
);
//social only
$config['foundation-icons-social'] = array(
	'css'		=> array('foundation_icons_social/stylesheets/social_foundicons', /*'foundation_icons_social/stylesheets/social_foundicons_ie7'*/),
);

/******************************************************************************/

$config['rickshaw'] = array(
	'css'		=> 'rickshaw.min',
	'js'		=> 'rickshaw.min',
);
/******************************************************************************/

$config['spin'] = array(
	'js'		=> 'spin.min',
);

/* End of file assets.php */
/* Location: ./application/config/assets.php */






