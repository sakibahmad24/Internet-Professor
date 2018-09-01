<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
		if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!= 1){
			redirect('home');
		}	
	}


	public function showAll($course_id=0){
		$result = $this->common->getAllEnrolled($course_id);
		$data['students'] = $result;
		$data['course_id'] = $course_id;
		$data['view'] = "attendance_view";

		//var_dump($data); die;
		$this->load->view('template',$data);
		

	}
	public function save_attendance(){
		$data = $this->input->post();
		unset($data['submit']);
		

		
		foreach ($data as $key => $value) {
			$course_id = $data['course_id'];
			if($key != "course_id"){

				$att_data[$course_id][$key] = $value;
			}
		}
		$result=$this->common->submitAttendance($att_data);

		if ($result==TRUE) {
			$this->session->set_flashdata('success', 'Attendance submitted successfully');
			redirect('Thread/course_thread/'.$course_id, 'refresh');
		}
		else{
			$this->session->set_flashdata('error', 'Something went wrong! Please try again..');
			redirect('Attendance/showAll/'.$course_id, 'refresh');
		}

	}

}