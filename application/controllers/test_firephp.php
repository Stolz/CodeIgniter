<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_firephp extends CI_Controller {

	public function index()
	{
		/**
		Requisites:
			- Firefox (Browser) http://www.mozilla.org/
			- Firebug (Firefox extension) http://getfirebug.com/
			- FirePHP (Firebug extension) http://www.firephp.org/
		Optional, for sending arrays to the console:
			- PHP compiled with "Reflection" support (USE="reflection" in Gentoo)

		To install the library:
			- download the FirePHP core,
			- rename "firePHP.class.php" to "Firephp.php"
			- and move it to your "libraries" folder in CodeIgniter

		To enable the library features, make sure you enable teh next settings in Firebug:
			- Console tab.
			- New tab
		*/

		$this->load->library('firephp');
		$this->firephp->log('Plain Message');
		$this->firephp->info('Info Message');
		$this->firephp->warn('Warn Message');
		$this->firephp->error('Error Message');

		echo 'If Firephp installation and Firebug settings are correct, you should be seeing see some messages in your Firebug console';
	}
}

/* End of file test_firephp.php */
/* Location: ./application/controllers/test_firephp.php */