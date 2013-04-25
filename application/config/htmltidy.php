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
| Do not enable in production environments!!
|
*/
$config['tidy_show_error'] = TRUE;
$config['tidy_open_tag'] = '<div id="tidy_errors" style="position: absolute;right: 0;top: 0;z-index: 100;padding:1em;margin:1em;border:1px solid #DC0024;font-family: Sans-Serif;background-color:#FFE5E5;color:#DC0024"><a style="float:right;cursor:pointer;color:blue;margin:-15px" onclick="document.getElementById(\'tidy_errors\').style.display = \'none\'">[x]</a>';
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
	'output-xhtml' => true,
	'char-encoding' => 'utf8',
	'hide-comments' => (ENVIRONMENT == 'development') ? FALSE : TRUE,
	'wrap' => 0,
	'wrap-sections' => false,
	'indent' => 2, // 2 is equivalent to 'auto', which seems to be ignored by PHP-html-tidy extension
	'indent-spaces' => 4,

	//HTML5 workarounds
	'doctype' => 'omit', //The hook function will add <!DOCTYPE html> later
	'new-blocklevel-tags' =>  'article,aside,canvas,dialog,embed,figcaption,figure,footer,header,hgroup,nav,output,progress,section,video',
	'new-inline-tags' => 'audio,bdi,canvas,command,datagrid,datalist,details,keygen,mark,meter,rp,rt,ruby,source,summary,time,track,wbr',
);

/* End of file tidy.php */
/* Location: ./application/config/tidy.php */
