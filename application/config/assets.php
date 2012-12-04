<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Template:

$config[]['ASSET_NAME'] = array(
	'css'		=> File or array of CSS files to load.
	'js'		=> Same as 'css' but for JavaScript files.
	'cdn'		=> URL to load JS from a externaml content delivery network (CDN).
	'fallback'	=> JavaScript condition to test if CDN file was loaded successfully. If condition fails then all the 'js' files provided before will be loded
);

All keys are optional but 'fallback' is mandatory if 'cdn' was provided and 'js' is mandatory if 'fallback' was provided.

For 'css' and 'js', if the filename starts with 'http' then is assumed to be a remote link and it's loaded as is. Otherwise it is consider to be a local link and the proper prefix is automatically added (and also the extension if it was not provided).

*/

$config['jqueryui'] = array(
	'css'		=> 'smoothness/jquery-ui-1.9.2.custom.min.css',
	'js'		=> 'jquery.min.js',
	'cdn'		=> '//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js',
	'fallback'	=> '!window.jQuery.ui'
);

/* End of file assets.php */
/* Location: ./application/config/assets.php */






