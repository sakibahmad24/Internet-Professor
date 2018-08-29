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
		

		$data['view'] = "about_view"; 
		$this->load->view('template',$data);
		//log_message('debug', 'home', false);
	}



}
?>