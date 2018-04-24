<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validate_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('login');

		if($query->num_rows == 1)
		{
			$thelog = array(
			'logDate' => date('Y-m-d'),
			'logTime' => date('H:i:s')
			);

			$this->db->where('username', $this->input->post('username')); 
			$update = $this->db->update('login', $thelog);

			return true;
		}
	}

}