<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** NOTE:
	Make sure application/config.php sets
	$config['allow_get_array'] = TRUE;
*/

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->config->load('oauth2', TRUE);
		$this->load->helper('url');
	}

	public function index()
	{
		$output = 'Please, select an Oauth 2 provider:<ul>';
		foreach($this->config->item('providers', 'oauth2') as $provider => $not_used)
			$output .= '<li>'.anchor("auth/session/$provider",'Login with '.ucfirst($provider));
		$output .= '</ul>';

		$data = array(
			'title'	=> 'Oauth2 provider selection',
			'views'	=> array(-1 => $output)
		);
		$this->load->view('template',$data);
	}

   public function session($provider)
    {
		$providers = $this->config->item('providers', 'oauth2');

		if( ! in_array($provider,array_keys($providers)))
			show_error('Unknown provider');

		$this->load->library('OAuth2/OAuth2');
		$this->load->library('session');

		$provider = $this->oauth2->provider($provider, $providers[$provider]);

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
				show_error('That didnt work: '.$e);
			}

		}
	}
}
