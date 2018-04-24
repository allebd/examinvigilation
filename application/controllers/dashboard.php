<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->is_logged_in();
		$this->load->model('dashboard_model');
	}

	public function index()
	{
		$data = $this->dashboard_model->get_post();

		$data['main_content'] = 'dashboard/index';

		$this->load->view('includes/template', $data);
	}

	public function posting()
	{
		$data = $this->dashboard_model->get_post();

		$data['main_content'] = 'dashboard/posting';

		$this->load->view('includes/template', $data);
	}

	public function generate_invigilators()
	{
		$data = $this->dashboard_model->get_generated_invigilator();
		redirect('dashboard/posting/'.$this->uri->segment(3));
	}

	//Change Password
	public function chngpassword()
	{
		$data = $this->dashboard_model->get_post();

		$data['main_content'] = 'dashboard/changepassword';

		$this->load->view('includes/template', $data);
	}

	public function changedpassword()
	{	
		$this->form_validation->set_rules('newpassword', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('newcpassword', 'Password Confirmation', 'trim|required|matches[newpassword]');

		if ($this->form_validation->run() == FALSE)
		{
			$data = $this->dashboard_model->get_post();
			$data['main_content'] = 'dashboard/changepassword';

			$this->load->view('includes/template', $data);
		}else{
			$data = $this->dashboard_model->get_changedpassword();	
		
			redirect('dashboard/passwordsuccess');
		}		
	}

	public function passwordsuccess()
	{
		$data = $this->dashboard_model->get_post();
		$data['passwordsuccess'] = 'Password Change was successful';
		$data['main_content'] = 'dashboard/changepassword';

		$this->load->view('includes/template', $data);
	}

	public function invigilators()
	{
		$data = $this->dashboard_model->get_post();

		$data['main_content'] = 'dashboard/invigilators';

		$this->load->view('includes/template', $data);
	}

	public function newinvigilator()
	{
		$data = $this->dashboard_model->get_post();

		$data['main_content'] = 'dashboard/newinvigilator';

		$this->load->view('includes/template', $data);
	}

	public function addinginvigilator()
	{
		$data = $this->dashboard_model->get_addinginvigilator();
		redirect('dashboard/invigilators');
	}

	public function editinvigilator()
	{
		$data = $this->dashboard_model->get_post();

		$data['main_content'] = 'dashboard/editinvigilator';

		$this->load->view('includes/template', $data);
	}

	public function editinginvigilator()
	{
		$data = $this->dashboard_model->get_editinginvigilator();
		redirect('dashboard/invigilators');
	}

	public function deleteinvigilator()
	{
		$data = $this->dashboard_model->get_deleteinvigilator();
		redirect('dashboard/invigilators');
	}

	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			redirect('home/login');
		}
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */