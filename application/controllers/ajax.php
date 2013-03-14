<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if( ! $this->input->is_ajax_request())
			show_error('No direct script access allowed',403);

		$this->config->set_item('tidy_enabled', FALSE);
		$this->config->set_item('compress_output', FALSE);

		$this->output->set_content_type('application/json');
	}

	function test()
	{
		$data = array(1,2,3,4,5);
		$this->output->set_output(json_encode($data));
	}
}

/* End of file ajax.php */
/* Location: ./application/controllers/ajax.php */
