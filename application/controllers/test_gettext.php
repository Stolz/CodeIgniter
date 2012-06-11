<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_gettext extends CI_Controller {

	/**
	 * Controller to test gettext installation
	 */
	public function index($locale = 'es_ES')
	{

		if( ! file_exists(APPPATH.'language/'.$locale))
			show_error('Translation dir not found. You must first run the Gettext scripts in the language folder to translate your application');

		setlocale(LC_ALL, $locale);
		bindtextdomain('messages', APPPATH.'language/');
		textdomain('messages');

		echo 'If the translation is not working check if the laguage is available in your server system (locale -a) and/or restart your web server <hr/>';
		foreach(glob(APPPATH.'language/english/*.php') as $filename)
		{
			include $filename;

			echo '<h3>',basename($filename),'</h3><dl>';
			foreach($lang as $key => $value)
				echo '<dt><i>',$key,'</i><dd>',$value,"\n";
			unset($lang);
			echo '</dl>';
		}
	}
}

/* End of file test_gettext.php */
/* Location: ./application/controllers/test_gettext.php */