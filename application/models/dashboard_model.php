<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_post()
	{
		$data['title'] = 'My Dashboard';
		$data['invigilators'] = $this->db->get('lecturers');
		$data['depts'] = $this->db->get('departments');
		$data['courses'] = $this->db->get('courses');
		$data['examdates'] = $this->db->get('examdates');
		$this->db->where('loginId', $this->uri->segment(3));
		$data['selectinvigilator'] = $this->db->get('lecturers');
		$this->db->select('*');		
		$this->db->from('timetable');
		$this->db->join('examdates', 'timetable.courseExamDateId = examdates.examDateId');
		$this->db->where('courseExamDateId', $this->uri->segment(3));
		$this->db->order_by("courseId", "asc");
		$data['timetable'] = $this->db->get();
		return $data;
	}

	public function get_addinginvigilator()
	{
		$thenewlogin = array(
			'username' => $this->input->post('lecturerName'),
			'password' => md5($this->input->post('lecturerName'))
			);
		$data['login'] = $this->db->insert('login', $thenewlogin);

		$this->db->select('*');		
		$this->db->from('login');
		$this->db->order_by('loginId', 'DESC');
		$this->db->limit(1);
		$getLoginId = $this->db->get();

		foreach($getLoginId->result() as $frow)
		{
			$theId = $frow->loginId;
		}

		$lecturerCourses = $this->input->post('lecturerCourses');
		$lecturerCourses = str_replace('[', '', $lecturerCourses);
		$lecturerCourses = str_replace(']', '', $lecturerCourses);
		$lecturerCourses = str_replace('"', '', $lecturerCourses);

		$lecturerDates = $this->input->post('lecturerDates');
		$lecturerDates = str_replace('[', '', $lecturerDates);
		$lecturerDates = str_replace(']', '', $lecturerDates);
		$lecturerDates = str_replace('"', '', $lecturerDates);

 		$thenewinvigilator = array(
 			'loginId' => $theId,
 			'lecturerDept' => $this->input->post('lecturerDept'),
			'lecturerTitle' => $this->input->post('lecturerTitle'),
			'lecturerCode' => $this->input->post('lecturerCode'),
			'lecturerName' => $this->input->post('lecturerName'),
			'lecturerEmail' => $this->input->post('lecturerEmail'),
			'lecturerPhone' => $this->input->post('lecturerPhone'),
			'lecturerCourses' => $lecturerCourses,
			'lecturerDates' => $lecturerDates
			);

		$data['newinvigilator'] = $this->db->insert('lecturers', $thenewinvigilator);
		return $data;
	}

	public function get_generated_invigilator()
	{
		$this->db->where('examDateId', $this->uri->segment(3));
		$examdates = $this->db->get('examdates');

		foreach($examdates->result() as $trow)
		{
			$examDate = $trow->examDate;

			$theexam = date_format(date_create($examDate), 'l F jS Y');

			$this->db->like('lecturerDates', $theexam);
			$lecturerDates = $this->db->get('lecturers');

			foreach($lecturerDates->result() as $lrow)
			{
				$courseExamDateId = $this->uri->segment(3);
				$lecturerId = '"'.$lrow->lecturerId.'"';
				$thelecturerId = $lrow->lecturerId;
				$comathelecturerId = ','.$thelecturerId;
				// $lecturerCourses = '("'.$lrow->lecturerCourses.'")';
				// $lecturerCourses = str_replace(',', '","', $lecturerCourses);
				$lecturerCourses = $lrow->lecturerCourses;
				$lecturerCourse = explode(',',$lecturerCourses);
				$course = '';
				for($theCourse = 0; $theCourse < count($theCourse); $theCourse++)
				{
					$course = $course."courseName NOT LIKE '%".$lecturerCourse[$theCourse]."%' AND ";
				}

				$gettingtimecode = "SELECT courseId FROM timetable WHERE $course invigilatorId NOT LIKE '%$thelecturerId%' AND courseExamDateId='$courseExamDateId' AND invigilatorCount < 3 ORDER BY invigilatorCount ASC LIMIT 1";
				$gettimecode = $this->db->query($gettingtimecode);

				foreach($gettimecode->result() as $gtrow)
				{
					$thetimecode = $gtrow->courseId;
					$theupdatefirst = $this->db->query("UPDATE timetable SET invigilatorId = REPLACE(invigilatorId,'$comathelecturerId',''), invigilatorCount = invigilatorCount-1 WHERE courseExamDateId='$courseExamDateId' AND invigilatorId LIKE '%$thelecturerId%'");
					$theupdate = "UPDATE timetable SET invigilatorId = CONCAT(invigilatorId,',',$lecturerId), invigilatorCount = invigilatorCount+1 WHERE courseId='$thetimecode'";

					$data['update'] = $this->db->query($theupdate);
				}						
			}
		}

		return $data;
	}

	public function get_editinginvigilator()
	{
		$lecturerCourses = $this->input->post('lecturerCourses');
		$lecturerCourses = str_replace('[', '', $lecturerCourses);
		$lecturerCourses = str_replace(']', '', $lecturerCourses);
		$lecturerCourses = str_replace('"', '', $lecturerCourses);
		
		$lecturerDates = $this->input->post('lecturerDates');
		$lecturerDates = str_replace('[', '', $lecturerDates);
		$lecturerDates = str_replace(']', '', $lecturerDates);
		$lecturerDates = str_replace('"', '', $lecturerDates);

		$theupdate = array(
			'lecturerDept' => $this->input->post('lecturerDept'),
			'lecturerTitle' => $this->input->post('lecturerTitle'),
			'lecturerName' => $this->input->post('lecturerName'),
			'lecturerCode' => $this->input->post('lecturerCode'),
			'lecturerEmail' => $this->input->post('lecturerEmail'),
			'lecturerPhone' => $this->input->post('lecturerPhone'),
			'lecturerCourses' => $lecturerCourses,
			'lecturerDates' => $lecturerDates
			);

		$this->db->where('lecturerId', $this->uri->segment(3)); 
		$data['update'] = $this->db->update('lecturers', $theupdate);
		return $data;
	}

	public function get_deleteinvigilator()
	{
		$this->db->where('loginId', $this->uri->segment(3)); 
		$data['lecturer'] = $this->db->delete('lecturers');
		$this->db->where('loginId', $this->uri->segment(3)); 
		$data['login'] = $this->db->delete('login');
		return $data;
	}

	public function get_changedpassword()
	{
		$chng_the_invigilatorpass = array(
			'password' => md5($this->input->post('newpassword'))
			);

		$this->db->where('username', $this->session->userdata('username'));
		$update = $this->db->update('login', $chng_the_invigilatorpass);
		return $update;
	}
} 

/* End of file dashboard_model.php */
/* Location: ./application/models/dashboard_model.php */