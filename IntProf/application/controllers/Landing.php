<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thread extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
		if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!= 1){
			redirect('home');
		}	
	}

	public function courseLanding($course_id=0, $course_name=""){
		$result = $this->common->getAllFromCourse($course_id);
		$data['course_name'] = urldecode($course_name);
		//$data['instructor'] = $result;
		
		$data['view'] = "course_landing_view";

		$this->load->view('template', $data);
	

	}

	
	
}