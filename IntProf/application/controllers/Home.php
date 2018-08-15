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
		log_message('debug', 'home', false);
	}
}
?>