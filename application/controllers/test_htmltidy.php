<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_htmltidy extends CI_Controller {

	public function index()
	{
		$this->load->config('htmltidy');
		$this->load->view('welcome_message');
	}
}

/* End of file test_htmltidy.php */
/* Location: ./application/controllers/test_htmltidy.php */