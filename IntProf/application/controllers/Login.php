<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
	}

	public function index()
	{
		

		$data['view'] = "login_view"; 
		$this->load->view('layout1',$data);
		//log_message('debug', 'home', false);
	}


	public function loginAttempt(){
		if (isset($_POST['submit'])) {
			# code...
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'username' => $username,
				'password' => md5($password),
			);

		$result = $this->common->get_user($data);


		if (count($result)>0) {
			# code...
			foreach ($result as $key => $value) {
				# code...
				$data['id'] = $value['id'];
				$data['first_name'] = $value['first_name'];
				$data['last_name'] = $value['last_name'];
				$data['email'] = $value['email'];
				$data['birth_date'] = $value['birth_date'];
				$data['gender'] = $value['gender'];
				$data['designation'] = $value['designation'];
				$data['user_type'] = $value['user_type'];
				$data['contact'] = $value['contact'];
				$data['username'] = $value['username'];
				$data['is_active'] = $value['is_active'];

			}

			$_SESSION = $data;
			$_SESSION['loggedIn'] = 1;

			redirect('profile');
		}

		else{
			$this->session->set_flashdata('conf', '<span class="danger">Login Failed! Wrong USERNAME/PASSWORD</span>');
			redirect (site_url());
			}
		}
	}



}
?>