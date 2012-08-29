<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//to-do borrar este controlador

class Test extends CI_Controller {

	public function index()
	{
		$this->config->set_item('tidy_enabled', FALSE);
		$tests = get_class_methods('Test');
		foreach($tests as $t) if( ! in_array($t,array('index','__construct','get_instance')))
			echo '<li>',anchor('test/'.$t,$t);
	}

	public function gettext($locale = 'es_ES')
	{

		if( ! file_exists(APPPATH.'language/'.$locale))
			show_error('Translation dir not found. You must first run the Gettext scripts in the language folder to translate your application');

		setlocale(LC_ALL, $locale);
		bindtextdomain('messages', APPPATH.'language/');
		textdomain('messages');

		$output = 'If the translation is not working check if the laguage is available in your system server (locale -a) and/or restart your web server <hr/>';
		foreach(glob(APPPATH.'language/english/*.php') as $filename)
		{
			include $filename;

			$output .= '<h3>'.basename($filename).'</h3><dl>';
			foreach($lang as $key => $value)
				$output .= '<dt><i>'.$key.'</i><dd>'.$value."\n";
			unset($lang);
			$output .= '</dl>';
		}

		$data = array(
			'title'	=> 'GNU Gettext test',
			'views'	=> array(-1 => $output)
		);
		$this->load->view('template',$data);
	}

	public function ajax()
	{
		$test_view  = <<<BLOCK
<div id="result"></div><script type="text/javascript">

$.get('ajax/test', function(data){
	$('#result').html(data);
	alert('AJAX load was successfully performed');
})
.error(function(){
	alert('AJAX error')
});

</script>
BLOCK;

		$data = array(
			'title'	=> 'Ajax test',
			'views'	=> array(-1 => $test_view)
		);
		$this->load->view('template',$data);
	}

	public function htmltidy()
	{
		$this->load->config('htmltidy');
		$this->config->set_item('tidy_enabled', TRUE);
		echo '<br/><br/><br/><br/><br/>This page has deliberately a wrong HTML markup, you should see HTMLTidy warnings in the top right corner.';
	}

	public function firephp()
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

		$this->config->set_item('tidy_enabled', FALSE);
		$this->load->library('firephp');
		$this->firephp->log('Plain Message');
		$this->firephp->info('Info Message');
		$this->firephp->warn('Warn Message');
		$this->firephp->error('Error Message');

		echo 'If Firephp installation and Firebug settings are correct (<a href="http://www.firephp.org/Wiki/Reference/FAQ">FAQ</a>),
			you should see some sample messages in your Firebug console. Press F12 to toggle console.';
	}

	public function html()
	{
		$data = array(
			'title'	=> 'HTML test page with almost all HTML elemens',
			'views'	=> array('test/html_test_page')
		);
		$this->load->view('template',$data);
	}

	public function foundation()
	{
		$this->config->set_item('tidy_enabled', FALSE);
		$data = array(
			'title'	=> 'Foundation CSS test page',
			'foundation' => TRUE,
			'views'	=> array('test/foundation_test_page')
		);
		$this->load->view('template',$data);
	}

	public function foundation_icons()
	{
		$data = array(
			'title'	=> 'Foundation icons test page',
			'foundation' => TRUE,
			'css'	=> array('foundation-icons'),
			'views'	=> array('test/foundation_icons_test_page')
		);
		$this->load->view('template',$data);
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */