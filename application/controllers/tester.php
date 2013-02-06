<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** Controller to do quick PHP tests with CoideIgniter */

class Tester extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		if(ENVIRONMENT != 'development')
			show_404('', FALSE);

		$this->config->set_item('tidy_enabled', FALSE);
		$this->output->enable_profiler(TRUE);
	}

	function index()
	{
		echo '<pre>';

		echo '</pre>';
	}
}
