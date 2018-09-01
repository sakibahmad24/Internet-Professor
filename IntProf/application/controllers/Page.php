<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
	}

	public function about()
	{
		
		$data['view'] = "about_view"; 
		$this->load->view('template_page', $data);
		
		//log_message('debug', 'home', false);
	}

	public function contact()
	{
		
		$data['view'] = "contact_view"; 
		$this->load->view('template_page', $data);
		
		//log_message('debug', 'home', false);
	}




}
?>