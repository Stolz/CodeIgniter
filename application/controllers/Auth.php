<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->driver('session');
	}


	function index()
	{
		$this->login();
	}


	function login()
	{
		//If user is already logged in, this page makes no sense
		if($this->session->user_is_logged(FALSE))
			return $this->_redirect_to_previous_page();

		//Check credentials
		if($this->input->post('submit'))
		{
			//Form validation
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<small class="error">', '</small>');

			$this->form_validation->set_rules('user',_('User'),'trim|required|max_length[32]');
			$this->form_validation->set_rules('password',_('Password'),'trim|required|min_length[5]');

			if($this->form_validation->run())
			{
				$user = (object) array('id' => 1, 'name' => 'Stolz', 'seed' => 12345, 'password' => sha1('secret'));
				/* to-do replace with your own method to check user credentials . Something like this should do the trick:
				$query = $this->db->where(array('username' => $this->input->post('user'), 'password' => sha1($this->input->post('password')), 'active' => 1))->get('users',1);
				$user = ($query->num_rows()) ? $query->row() : FALSE; */
				if( ! $user)
				{
					$this->load->vars(array('error' => _('Wrong credentials')));
				}
				else
				{
					//Success login!
					//This is a good moment to update the 'last_login' timestamp on DB
					$data = array(
						'id_user' => $user->id,
						'hash' => $this->session->do_hash($user),
						'expire_on_close' =>  ! $this->input->post('rememberme')
					);
					$this->session->login($data);
					return $this->_redirect_to_previous_page();
				}
			}
		}

		//Load view
		$this->load->helper('form');
		$this->load->library('assets', array('foundation'));
		$data = array(
			'title'	=> _('Login'),
			'views'	=> array('test/login')
		);
		$this->load->view('template', $data);
	}


	function logout()
	{
		$this->session->logout();
		$this->login();
	}


	private function _redirect_to_previous_page()
	{
		if($url = $this->session->userdata('after_login_url'))
		{
			$this->session->unset_userdata('after_login_url');
			redirect($url);
		}
		else
			redirect('/');
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */
