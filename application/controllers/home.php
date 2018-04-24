<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('home_model');
		$this->load->model('validate_model');
	}

	public function index()
	{
		$data = $this->home_model->get_post();

		$data['main_content'] = 'home/home';

		$this->load->view('includes/template', $data);
	}

	public function login()
	{
		$data = $this->home_model->get_post();
		$data['incorrectLogin'] = 'Invalid Username or Password';

		$data['main_content'] = 'home/home';

		$this->load->view('includes/template', $data);
	}

	public function verify()
	{
		$query = $this->validate_model->validate();

		if($query) // if user's credentials validated...
		{
			$this->db->select('username');		
			$this->db->from('login');
			$this->db->where('username', $this->input->post('username'));
			$theusername = $this->db->get();
			foreach($theusername->result() as $from){
				$from->username;
		
			$data = array(
					'username' => $from->username,
					'is_logged_in' => true
				);
			}

			$this->session->set_userdata($data);
			redirect('dashboard');
		}

		else
		{
			$this->login();
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$data = $this->home_model->get_post();
		$data['loggedOut'] = 'You are now Signed Out';

		$data['main_content'] = 'home/home';

		$this->load->view('includes/template', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */