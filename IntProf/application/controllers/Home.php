<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
	}

	public function index()
	{
		
		if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']== 1){
			redirect('profile');
		}	
		$data['view'] = "home_view"; 
		$this->load->view('template',$data);
		//log_message('debug', 'home', false);
	}

	public function registration()
	{
		$data['view'] = "registration_view"; 
		$this->load->view('template',$data);
		
	}

	/*function username_availability(){
	    $data['view'] = "registration_view";
	    $this->load->view('template',$data);
    }

	function check_username_availability(){
	    if(!filter_val($_POST["username"], FILTER_VALIDATE_USERNAME)){
	        echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Invalid Username</label>';
        }

        else{
            if ($this->common->is_username_available($_POST["username"])){
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Username already registered! Try Another</label>';
            }
            else{
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span>Username Available</label>';
            }
        }

    }*/

	public function save_registration()
	{
			
		if(isset($_POST['submit'])){
		  $firstname = $this->input->post('firstname');
		  $lastname	= $this->input->post('lastname');
		  $email	= $this->input->post('email');
		  $contact	= $this->input->post('contact');
		  
		  
		  $day = $this->input->post('day');
		  $month = $this->input->post('month');
		  $year = $this->input->post('year');
		  $birthDate = $day.$month.$year;
		  
		  $gender	= $this->input->post('sex');
		  $designation	= $this->input->post('designation');
		  $userType = $this->input->post('userType');
		  $contact = $this->input->post('contact');
		  $username	= $this->input->post('username');
		  $password	= $this->input->post('password');
		  
		
		
		  $data = array(
		  			'first_name'=> $firstname , 	
		  			'last_name'=> $lastname, 	
		  			'email'=> $email, 	
					'birth_date' => $birthDate,		  			
					'gender' => $gender,
					'designation' => $designation,
					'user_type' => $userType,
		  			'contact'=> $contact, 	
		  			'username'=> $username , 	
		  			'password'=> md5($password),
					'is_active' => "yes",
					'created_on' => "CURRENT_TIMESTAMP",
					 	
			);

//	var_dump($data); die;
			$res = $this->common->save_registration($data);

			//var_dump($res[])
			if($res['msg'] == ""){
                //$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]'); //form validation
				$this->session->set_flashdata('conf', '<span class = "success">Registration successfull.</span>');
				redirect(site_url());
			}else{
				//var_dump(); die;
				$this->session->set_flashdata('conf', '<span class = "danger">Registration failed.'.$res["msg"].'</span>');
				redirect(Home/registration);
				
			}
			
			
		  
		}
	}


}
?>