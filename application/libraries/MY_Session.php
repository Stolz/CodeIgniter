<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/** To check if user is logged in you need this simple code in your controller:
	function __construct()
	{
		parent::__construct();

		//If user is not logged in, redirect to login page
		if( ! $user = $this->session->user_is_logged())
			redirect('auth/login');
	}
*/


class MY_Session extends CI_Session {

	function login($user_data, $remember_me = FALSE)
	{
		if( ! isset($user_data['id_user']) OR  ! isset($user_data['hash']))
			throw new Exception(_("\$user_data array must include at least the two keys 'id_user' and 'hash' for the login system to work"));

		$this->set_userdata($user_data);

		if($remember_me)
			$this->sess_expire_on_close = ! $remember_me;
	}


	function logout()
	{
		$this->sess_destroy();
		$this->sess_expire_on_close = TRUE;
	}


	/**
	* Checks if user is logged in
	* @return (bool) FALSE if user is not logged in
	* @return (object) $user information if user is rightfully logged in
	*/
	function user_is_logged($set_after_login_url = TRUE)
	{
		//After a success login user will be redireted to current URL
		if($set_after_login_url)
			$this->set_userdata('after_login_url', $this->CI->uri->uri_string()); //Use $this->CI->uri->segment(1) instead if you don't want to carry extra parameters

		$id_user = $this->userdata('id_user');
		$hash = $this->userdata('hash');

		if( ! $id_user OR ! $hash)
			return FALSE; //There is no user information in current session

		$user = (object) array('id' => 1, 'name' => 'Stolz', 'seed' => 12345, 'password' => sha1('secret'));
		/* to-do replace with your own method/models to retrieve an user. Something like this should do the trick:
		$user = $this->db->where(array('id' => $id_user, 'active' => 1))->get('users',1)->row(); */

		if( ! $user)
			return FALSE; //User does not exist or is not active

		if($hash != $this->do_hash($user))
			return FALSE; //User is spoofing

		return $user;
	}


	/**
	* Generates a hash to avoid session/cookie spoofing
	*/
 	function do_hash($user)
	{
		/*	to-do Feel free to add more entropy or randomness to this funcion.
		For instance you may add $this->input->server('HTTP_USER_AGENT') or $this->input->server('REMOTE_ADDR') or $this->input->server('SERVER_NAME')
		to make sure any change of them invalidates the current login.

		Also remember if the user legitimately updates his/her password you must regenerate the hash */

		return sha1($user->id.$user->seed.$user->password);
	}
}

/* End of file MY_Session.php */
/* Location: ./libraries/MY_Session.php */