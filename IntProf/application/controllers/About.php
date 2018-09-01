<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
	}

	public function index()
	{
		

		$this->load->view('template',$data);
		$data['view'] = "about_view"; 
		
		//log_message('debug', 'home', false);
	}



}
?>