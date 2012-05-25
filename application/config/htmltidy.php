<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** HTML Tidy config file (See http://tidy.sourceforge.net */

/*
|--------------------------------------------------------------------------
| Enable HTML Tidy
|--------------------------------------------------------------------------
|
| Tidy the layout and correct errors in HTML and XML documents
|
*/
$config['tidy_enabled'] = (ENVIRONMENT == 'development') ? TRUE : FALSE;

/*
|--------------------------------------------------------------------------
| Output detected erros
|--------------------------------------------------------------------------
|
| Do not enable in production environments
|
*/
$config['tidy_show_error'] = TRUE;
$config['tidy_open_tag'] = '<div id="tidy_errors" style="position: absolute;left: 0;top: 0;z-index: 10;padding:1em;margin:1em;border:1px solid #DC0024;background-color:#FFE5E5;color:#DC0024"><div style="float:right;cursor:pointer"><a onclick="document.getElementById(\'tidy_errors\').style.visibility = \'hidden\'">[x]</a></div>';
$config['tidy_close_tag'] = '</div>';

/*
|--------------------------------------------------------------------------
| Tidy Options
|--------------------------------------------------------------------------
|
| See http://tidy.sourceforge.net/docs/quickref.html for reference
|
*/
$config['tidy_options'] = array(
	'output-xhtml'=> true,
	'char-encoding'=> 'utf8',
	'indent'=> true,
	'wrap'=> 0,
	'wrap-sections'=> false
);

/* End of file tidy.php */
/* Location: ./application/config/tidy.php */