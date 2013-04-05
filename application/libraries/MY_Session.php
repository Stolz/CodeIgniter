<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** For controllers that require authentication you need this simple code:
	function __construct()
	{
		parent::__construct();

		//If user is not logged in, redirect to login page
		if( ! $user = $this->session->user_is_logged())
			redirect('login');

		//OK, user is logged and its information is now accessible using the $user variable.
	}
*/

class MY_Session extends CI_Session {

	function __construct()
	{
		parent::__construct();

		//Override the $config['sess_expire_on_close'] set in config.php
		$this->sess_expire_on_close = $this->userdata('expire_on_close');
	}

	function login($user_data)
	{
		if( ! isset($user_data['id_user']) OR ! isset($user_data['hash']) OR ! isset($user_data['expire_on_close']))
			show_error('Not enought login parameters');

		$this->sess_expire_on_close = $user_data['expire_on_close'];
		$this->set_userdata($user_data);
	}

	function logout()
	{
		$this->sess_destroy();
	}

	/**
	* Checks if user is logged in
	* @return (bool) FALSE if user is not logged in
	* @return (object) $user information if user is rightfully logged in
	*/
	function user_is_logged($redirect_if_success = TRUE)
	{
		//Wether or not after a success login we should redirect to the page that originated the login process
		if($redirect_if_success)
			$this->set_userdata('after_login_url', $this->CI->uri->uri_string()); //Use $this->CI->uri->segment(1) instead if you don't want to carry extra parameters

		$id_user = $this->userdata('id_user');
		$hash = $this->userdata('hash');

		if( ! $id_user OR ! $hash)
			return FALSE; //There is no user information in current session

		$user = (object) array('id' => 1, 'name' => 'Stolz', 'seed' => 12345, 'password' => sha1('secret'));
		/* to-do replace with your own method/models to retrieve an user. Something like this should do the trick:
		$user = $this->db->where(array('id' => $id_user, 'active' => 1))->get('users', 1)->row(); */

		if( ! $user)
			return FALSE; //User does not exist or is not active

		if($hash != $this->do_hash($user))
			return FALSE; //Probably user is spoofing

		return $user;
	}


	/**
	* Generates a hash to avoid session/cookie spoofing.
	* If the user's password or seed are updated the hash will not be valid anymore and the login will be automatically revoked so if
	* the user legitimately updates its password remember you must regenerate a new session hash
	*/
 	function do_hash($user)
	{
		$hash = $user->id.$user->seed.$user->password;

		if($this->sess_match_ip)
			$hash .= $this->CI->input->ip_address();

		if($this->sess_match_useragent)
			$hash .= trim(substr($this->CI->input->user_agent(), 0, 120));

		/* to-do Feel free to add more entropy or randomness to $hash variable.
		For instance you may add also $this->CI->input->server('SERVER_NAME') or similar
		to make sure any change of them invalidates the current login. */

		return sha1(md5($hash));
	}

	/** Fix Codeigniter BUG
	 * Do not update an existing session on Ajax calls
	 * More info: http://ellislab.com/forums/viewthread/224000/
	 */
	function sess_update()
	{
		if ( ! $this->CI->input->is_ajax_request())
			parent::sess_update();
	}
}

/* End of file MY_Session.php */
/* Location: ./libraries/MY_Session.php */
