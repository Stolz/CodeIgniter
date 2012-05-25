<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_gettext extends CI_Controller {

	/**
	 * Controller to test gettext installation
	 */
	public function index($lang)
	{
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");

		echo 'You must first run the Gettext scripts in the language folder',"<br/>\n";
		echo "<hr/>\n";

		//If your code is ASCII (English) comment out the next block and run the script gettext_ascii.sh
		echo "Original: Hello, how are you?<br/>\n";
		$this->_set_lang('es_ES');
		echo 'Spanish: ',_('Hello, how are you?'),"<br/>\n";
		$this->_set_lang('en_US');
		echo 'English: ',_('Hello, how are you?'),"<br/>\n";

		//ONLY ONE BLOK SHOULD BE COMMENTED OUT

		//If your code is UTF-8 (Spanish, French, etc) comment out the next block and run the script gettext_utf8.sh
// 		echo "Original: Hola, ¿cómo estás?<br/>\n";
// 		$this->_set_lang('es_ES');
// 		echo 'Spanish: ',_('Hola, ¿cómo estás?'),"<br/>\n";
// 		$this->_set_lang('en_US');
// 		echo 'English: ',_('Hola, ¿cómo estás?'),"<br/>\n";

		echo "<hr/>\n";
		echo 'If the translation is not working check if the laguage is available in your system (locale -a) and/or restart your web server';
	}

	private function _set_lang($lang)
	{
		setlocale(LC_ALL, $lang);
		bindtextdomain('messages', APPPATH.'language/');
		textdomain('messages');
	}
}

/* End of file test_gettext.php */
/* Location: ./application/controllers/test_gettext.php */