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
			'title'	=> 'GNU Gettext test page',
			'views'	=> array(-1 => $output)
		);
		$this->load->view('template',$data);
	}

	public function ajax()
	{
		$test_view  = <<<BLOCK
<div id="result"></div><script type="text/javascript">
whenready = ( typeof whenready != 'undefined' && whenready instanceof Array ) ? whenready : [];
whenready.push(function() {
	$.get('ajax/test', function(data){
		$('#result').html(data);
		alert('AJAX load was successfully performed');
	})
	.error(function(){
		alert('AJAX error')
	});
});
</script>

BLOCK;

		$data = array(
			'title'	=> 'Ajax test page',
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
			'title'	=> 'HTML test page with almost all HTML elements',
			'views'	=> array('test/html_test_page')
		);
		$this->load->view('template',$data);
	}

	public function foundation()
	{
		$this->config->set_item('tidy_enabled', FALSE);
		$this->load->helper('url');
		$data = array(
			'title'	=> 'Foundation CSS test page',
			'foundation' => TRUE,
			'current_url'=> current_url(),
			'views'	=> array(
				'test/foundation/top_bar',
				'test/foundation/grid',
				'test/foundation/typography',
				'test/foundation/buttons',
				'test/foundation/elements',
				'test/foundation/nav',
				'test/foundation/tabs',
				'test/foundation/forms',
				'test/foundation/reveal',
				'test/foundation/orbit',
			)
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

	public function oauth2($provider = NULL)
	{
		$this->config->load('oauth2', TRUE);
		$providers = $this->config->item('providers', 'oauth2');

		if(is_null($provider)) //Show providers list
		{
			$this->load->helper('url');

			$output = '<h3>CI Oauth 2 login test</h3> <p>Remember to set first your API keys in <i>application/config/oauth2.php</i></p> <p>Please, select an Oauth 2 provider:</p><ul>';

			foreach($providers as $provider => $not_used)
				$output .= '<li>'.anchor("test/oauth2/$provider",'Login with '.ucfirst($provider));
			$output .= '</ul>';

			$data = array(
				'title'	=> 'Oauth2 test page',
				'views'	=> array(-1 => $output)
			);

			$this->load->view('template',$data);
			return;
		}

		if( ! in_array($provider,array_keys($providers)))
			show_error('Unknown provider');

		$this->load->library('OAuth2/OAuth2');
		$this->load->library('session');

		$provider = $this->oauth2->provider($provider, $providers[$provider]);

		/** NOTE: Make sure $config['allow_get_array'] is set to TRUE in application/config.php */

		if ( ! $this->input->get('code'))
		{
			// By sending no options it'll come back here
			$provider->authorize();
		}
		else
		{
			// Howzit?
			try
			{
				$token = $provider->access($_GET['code']);
				$user = $provider->get_user_info($token);

				// Here you should use this information to A) look for a user B) help a new user sign up with existing data.
				// If you store it all in a cookie and redirect to a registration page this is crazy-simple.
				echo "<pre>Tokens: ";
				print_r($token);

				echo "\n\nUser Info: ";
				print_r($user);
			}

			catch (OAuth2_Exception $e)
			{
				show_error('That didn\'t work: '.$e);
			}
		}
	}

	public function datammaper($provider = NULL)
	{
		if( ! defined('DATAMAPPERPATH'))
			show_error('You must load third_party/datamapper/bootstrap.php in your index.php');

		//Create required DB structure
		$this->db->query('DROP TABLE IF EXISTS datamapperexamples');
		$this->db->query('
		CREATE TABLE IF NOT EXISTS datamapperexamples (
			id mediumint(1) unsigned NOT NULL auto_increment PRIMARY KEY,
			foo varchar(64) NOT NULL UNIQUE,
			created datetime,
			updated datetime
		) ENGINE=InnoDB;');


		//ORM
		$output = "<p><b>Observe Profiler output to better understanding what is going on on a DB level</b></p>\n";
		$output .= "<p><i>Lets try to save incorrect data (validation rules will run)...</i></p>\n";
		$data = new Datamapperexample();
		$data->foo = 'foo';
		$output .=  ($data->save()) ? "<p>Successfully created ID {$data->id}</p>\n" : $data->error->string;

		$output .= "<p><i>... and now lets try again but with valid data</i></p>\n";
		$data = new Datamapperexample();
		$data->foo = 'foobar';
		$output .=  ($data->save()) ? "<p>Successfully created ID {$data->id}</p>\n" : $data->error->string;

		$output .= "<p><i>Finally lets try an update...</i></p>\n";
		$data->foo = 'boggie';
		$output .=  ($data->save()) ? "<p>Successfully updated ID {$data->id}</p>\n" : $data->error->string;



		//Clean DB structure
		$this->db->query('DROP TABLE IF EXISTS datamapperexamples');

		//Show output
		$data = array(
			'title'	=> 'Datamapper ORM test page',
			'views'	=> array(-1 => $output)
		);
		$this->load->view('template',$data);
	}
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */