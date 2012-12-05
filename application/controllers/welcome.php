<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//Prevent using testing methods in not development environment
		if(ENVIRONMENT != 'development' AND $this->router->method != 'index')
			show_404();
	}


	// List of all tests methods
	public function index()
	{
		$this->load->library('assets');
		$this->assets->add_css('style');

		$data = array(
			'title'	=> 'Welcome to CodeIgniter!',
			'views'	=> array('welcome_message')
		);

		$this->load->view('template', $data);
	}


	// Tests included basic auth system
	public function login()
	{
		$this->load->library('session');

		if( ! $user = $this->session->user_is_logged())
			redirect('auth/login');
		else
			$output = 'Current user: '.$user->name.' '.anchor('auth/logout', _('log out'));

		$data = array(
			'title'	=> 'Login test page',
			'views'	=> array(-1 => $output)
		);
		$this->load->view('template', $data);
	}


	// Tests GNU Gettext translation
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
		$this->load->view('template', $data);
	}


	// Tests jQuery Ajax
	public function ajax()
	{
		$data = array(
			'title'	=> 'Ajax test page',
			'views'	=> array('test/ajax')
		);
		$this->load->library('assets', array('jquery', 'app'));
		$this->load->view('template', $data);
	}


	// Test HTML Tidy validation http://tidy.sourceforge.net
	public function htmltidy()
	{
		$this->load->config('htmltidy');
		$this->config->set_item('tidy_enabled', TRUE);

		$data = array(
			'title'	=> 'GNU Gettext test page',
			'views'	=> array(-1 => '<div style="padding-top:25%">This page deliberately has a wrong HTML markup, you should see HTMLTidy warnings in the top right corner.</div></li>')
		);
		$this->load->view('template', $data);

	}


	// Tests FirePHP (a FireBug extension) http://www.firephp.org
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


	// Shows a sample of almost all HTML elements
	public function html()
	{
		$this->load->library('assets', array('foundation'));
		//$this->assets->add_css(array('style1', 'style2')); //Add here your CSS files whose styles you want to try (and remove the sample 'foundation')

		$data = array(
			'title'	=> 'HTML test page with almost all HTML elements',
			'views'	=> array('test/html_test_page'),
		);
		$this->load->view('template', $data);
	}


	// Tests Zurb Foundation Framework http://foundation.zurb.com
	public function foundation()
	{
		$this->config->set_item('tidy_enabled', FALSE);

		$this->load->library('assets', array('foundation'));
		$data = array(
			'title'	=> 'Foundation CSS test page',
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
				'test/foundation/clearing',
				'test/foundation/magellan',
			)
		);
		$this->load->view('template', $data);
	}


	// Test Zurb Foundation text based icons http://www.zurb.com/playground/foundation-icons
	public function foundation_icons()
	{

		$this->load->library('assets', array('foundation-icons'));
		$data = array(
			'title'	=> 'Foundation icons test page',
			'views'	=> array('test/foundation_icons_test_page')
		);
		$this->load->view('template', $data);
	}


	//Test Oauth authentication https://github.com/philsturgeon/codeigniter-oauth2
	public function oauth2($provider = NULL)
	{
		$this->config->load('oauth2', TRUE);
		$providers = $this->config->item('providers', 'oauth2');

		if(is_null($provider)) //Show providers list
		{
			$output = '<h3>CI Oauth 2 login test</h3> <p>Remember to set first your API keys in <i>application/config/oauth2.php</i></p> <p>Please, select an Oauth 2 provider:</p><ul>';

			foreach($providers as $provider => $not_used)
				$output .= '<li>'.anchor("test/oauth2/$provider",'Login with '.ucfirst($provider));
			$output .= '</ul>';

			$data = array(
				'title'	=> 'Oauth2 test page',
				'views'	=> array(-1 => $output)
			);

			$this->load->view('template', $data);
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


	// Tests DataMapper ORM http://datamapper.wanwizard.eu/ and https://github.com/WanWizard/sparks-datamapper
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


		//ORM stuff
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
		$this->load->view('template', $data);
	}

	// Tests extended pagination library
	public function pagination()
	{
		//Set pagination
		$config = array(
			'per_page'		=> 10,
			'table_header'	=> array('Number', 'Letter'),
			'accepted_url_options' => array(
				'orderby'	=> range(1, 10),	//Accepted values for 'orderby' (1 is the default)
				'type'	=> array('foo', 'bar'),	//Accepted values for 'type' ('foo' is the default)
				'dummy'	=> NULL),				//'dummy' accepts any value
		);
		$this->load->library('pagination', $config);

		/* Usually you will use a model to retrieve your data according to your URL options ...
		$this->load->model('my_model');
		$this->pagination->total_rows = $this->my_model->count_all_items($this->pagination->url_options);
		$items = $this->my_model->get_items($this->pagination->url_options + array('limit' => $this->pagination->per_page, 'offset' => $this->pagination->offset));

		... but for the sake of simplicity lets fake the model with simple array functions */
		$this->pagination->total_rows = count($all_items = range('A', 'Z'));
		$items = array_slice($all_items, $this->pagination->offset, $this->pagination->per_page, TRUE);

		//Load view
		$data = array(
			'title'			=> _('Pagination library test page'),
			'views'			=> array('test/pagination'),
			'items'			=> $items,
		);
		$this->load->view('template', $data);
	}

	//Test Marckdown library
	public function markdown()
	{

		$this->load->library('cimarkdown');
		$markdown = $this->load->view('test/markdown', NULL, TRUE);

		//Load view
		$data = array(
			'title'			=> _('Markdown library test page'),
			'views'			=> array(-1 => $this->cimarkdown->markit($markdown)),
		);

		$this->load->view('template', $data);
	}

	//Test Rickshaw JS charts library
	public function rickshaw()
	{
		$this->config->set_item('tidy_enabled', FALSE);
		$this->load->library('assets', array('jquery', 'jquery-ui', 'rickshaw', 'app'));

		//Load view
		$data = array(
			'title'			=> _('Rickshaw toolkit test page'),
			'views'			=> array('test/rickshaw'),
		);
		$this->load->view('template', $data);
	}

	//Test jQuery and jQuery UI
	public function jquery()
	{
		$this->load->library('assets', array('jquery', 'jquery-ui', 'app'));
		$data = array(
			'title'			=> _('jQuery'),
			'views'			=> array('test/jquery'),
		);
		$this->load->view('template', $data);
	}

	//SOAP client usin native PHP SOAP extension
	public function soapclient()
	{
		//Make sure your PHP installation is compiled with SOAP support (Gentoo: USE="soap")
		$wsdl = 'http://www.webservicex.net/globalweather.asmx?WSDL';

		try {
			$client = new SoapClient($wsdl, array('exceptions' => TRUE, 'trace' => TRUE/*Required for >__getLast*() functions */));

			echo '<h3>List of SOAP functions</h3>';
			echo '<pre>';print_r($client->__getFunctions());echo '</pre>';

			echo '<h3>List of SOAP types</h3>';
			echo '<pre>';print_r($client->__getTypes());echo '</pre>';

			echo '<h3>SOAP request PHP object</h3>';
			echo '<pre>';print_r($client->GetWeather(array('CountryName' => 'Spain', 'CityName' => 'Valencia')));

			echo '<h3>Last SOAP request</h3>';
			echo '<pre>';print_r($client->__getLastRequestHeaders());echo '</pre>';
			echo '<pre>';print_r($client->__getLastRequest());echo '</pre>';

			echo '<h3>Last SOAP response</h3>';
			echo '<pre>';print_r($client->__getLastResponseHeaders());echo '</pre>';
			echo '<pre>';print_r($xml = $client->__getLastResponse());echo '</pre>';
// 			echo '<pre>';print_r(simplexml_load_string($xml));echo '</pre>';
		}
		catch (Exception $e){
			echo '<div style="color:red;border:1px solid red">';
			echo nl2br($e->getMessage());
			echo '</div>';
		}
	}

	public function assets()
	{
		//Load library
		$this->load->library('assets');

		//Add some assets (groups of JS+CSS). They should be previously defined in application/config/assets.php
		$this->assets->add('foundation');
		$this->assets->add('jquery-ui');

		//You can also add more than one asset at a time ...
		//$this->assets->add(array('foundation', 'jquery-ui'));
		//... or even load the library and add some assets all in one single call
		//$this->load->library('assets', array('foundation', 'jquery-ui'));

		//Add some spare CSS
		$this->assets->add_css('local_css_file.css');
		//Again you can add more than one file at a time
		$this->assets->add_css(array('http://remote/file.css','local_css_file_with_no_extension'));
		//For local files (those not starting with 'http') you don't need to include the extension

		//For adding spare JavaScript is exactly the same as for CSS
		$this->assets->add_js('local_js_file.js');
		$this->assets->add_js(array('http://remote/file.js','local_js_file_with_no_extension'));

		//The library supports method chaining
		$this->assets->add('jquery-ui')->add_js('another_local_js_file.js')->add_css('another_local_css_file.css');

		//No worry about duplicates, the library takes care of it for you
		$this->assets->add('jquery-ui')->add_js('another_local_js_file.js')->add_css('another_local_css_file.css'); //Note the

		$this->config->set_item('tidy_enabled', FALSE);
		//Build the HTML
		echo 'CSS<pre>',htmlentities($this->assets->build_css()),'</pre>';
		echo 'JS<pre>', htmlentities($this->assets->build_js()),'</pre>';
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */