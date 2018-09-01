<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
	}

	public function Load()
	{
		
		$data['view'] = "about_view"; 
		$this->load->view('template',$data);
	}