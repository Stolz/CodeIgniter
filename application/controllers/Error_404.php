<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Overrride CI's default 404 to show a page with template
*/
class Error_404 extends CI_Controller {

	function index()
	{
		//Set 404 headers for SEO
		$this->output->set_status_header('404');

		$this->load->library('assets', array('jquery', 'foundation'));
// 		$this->assets->add_js('http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js');

		$data = array(
			'title'	=> '404 '. _('Page Not Found'),
			'views'	=> array('error_404')
		);
		$this->load->view('template', $data);
	}
}

/* End of file error_404.php */
/* Location: ./application/controllers/error_404.php */
