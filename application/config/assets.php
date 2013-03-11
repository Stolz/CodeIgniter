<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Template:

$config['ASSET_NAME'] = array(
	'css'		=> File or array of CSS files to load.
	'js'		=> Same as 'css' but for JavaScript files.
	'cdn'		=> URL (or array of URLs) to load JS from a externaml content delivery network (CDN).
	'fallback'	=> JavaScript condition to test if CDN file was loaded successfully. If condition fails then all the 'js' files provided before will be loded
);

All keys are optional but 'fallback' requires 'cdn' and 'js' to work.

For 'css' and 'js', if the filename starts with 'http' then is assumed to be a remote link and it's loaded as is. Otherwise it is consider to be a local link and the proper prefix is automatically added (and also the extension if it was not provided).

*/


$config['jquery'] = array(
	'cdn'		=> '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
	'fallback'	=> 'typeof jQuery == "undefined"',
	'js'		=> 'jquery.min',
);

$config['jquery-ui'] = array(
	'css'		=> 'smoothness/jquery-ui-1.10.1.custom.min',
	'cdn'		=> array('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js', '//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/i18n/jquery.ui.datepicker-es.js'),
	'fallback'	=> '!window.jQuery.ui',
	'js'		=> array('jquery-ui.min', 'jquery.ui.datepicker-es'),
);

$config['app'] = array(
	'js'		=> 'app',
);

$config['foundation'] = array(
	'css'		=> array('normalize', 'foundation.min'),
	'js'		=> array('custom.modernizr', 'foundation.min', 'app'),
);

$config['foundation3'] = array(
	'css'		=> 'foundation3.min',
	'js'		=> array('foundation3.min', 'app3'),
);

$config['foundation-icons'] = array(
	'css'		=> 'foundation-icons',
);

$config['rickshaw'] = array(
	'css'		=> 'rickshaw.min',
	'js'		=> 'rickshaw.min',
);

$config['spin'] = array(
	'js'		=> 'spin.min',
);

/* End of file assets.php */
/* Location: ./application/config/assets.php */






