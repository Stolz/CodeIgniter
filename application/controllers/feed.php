<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feed extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->config->set_item('tidy_enabled', FALSE);
		$this->config->set_item('compress_output', FALSE);
		$this->load->helper('xml');
	}

	function news()
	{
		//Generate some fake items
		$items = array();
		for($i = 20; $i > 0; $i--)
		{
			$items[] = (object) array(
				'title'	=> "Title $i",
				'text'	=> "Text $i Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit Lorem ipsum dolor sit amet, volutpat.",
				'url'	=> "URL $i",
				'author'=> "author$i@".PROJECT_DOMAIN,
				'date'	=> "2012-01-01 01:$i" //MySQL datetime format
			);
		}

		//Generate the feed
		$data = array(
			'title'			=> PROJECT_NAME,
			'url'			=> site_url(),
			'description'	=> 'to-do set the feed description',
			'image'			=> ASSETS.'images/logo.png', //to-do set your own image file
			'email'			=> PROJECT_EMAIL,
			'items'			=> $items
		);
		$this->load->view('rss', $data);
	}
}

/* End of file: controllers/feed.php */