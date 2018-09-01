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
		
		$course_id = $data['course_id'];
		unset($data['course_id']);
		unset($data['submit']);
		
		$i = 0;
		foreach ($data as $key => $value) {

			$student_id = substr($key,0,3);
			$enroll_id = substr($key,3);
			

			$grade[$course_id][$i] = array(

				'student_id' => $student_id,
				'grade' => $value,
				'enroll_id' => $enroll_id 


			);
			$i++;
		}

		$this->common->save_grade($grade);


		if ($result==TRUE) {
			$this->session->set_flashdata('success', 'Grade submitted successfully');
			redirect('Thread/course_thread/'.$course_id, 'refresh');
		}
		else{
			$this->session->set_flashdata('error', 'Something went wrong! Please try again..');
			redirect('Grade/submitGrade/'.$course_id, 'refresh');
		}
		
	}


	public function getGrades(){

		$student_id = $_SESSION['id'];
		$result = $this->common->getAllGrades($student_id);
		$data['grades'] = $result;
		$data['view'] = "std_grade_view";
		$this->load->view('template',$data);


	}




}	