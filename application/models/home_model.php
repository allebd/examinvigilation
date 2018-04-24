<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function get_post()
	{
		$data['title'] = 'Examination Invigilation';
		return $data;
	}

} 

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */