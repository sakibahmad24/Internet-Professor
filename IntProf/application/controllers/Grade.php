<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grade extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
		if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!= 1){
			redirect('home');
		}	
	}

	public function getStudents($course_id=0){
		
		$result = $this->common->getAllStdEnrolled($course_id);
		//var_dump($result);
		$data['students'] = $result;
		$data['course_id'] = $course_id;
		$data['view'] = "grade_view";

		//var_dump($data); die;
		$this->load->view('template',$data);

	}

	public function submitGrade(){

		$data = $this->input->post();
		unset($data['submit']);
		//var_dump($data);


		foreach ($data as $key => $value) {
			# code...

			$enroll_id = $data['enroll_id'];

			
		}

		
		
	}




}