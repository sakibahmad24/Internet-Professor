<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('common');
		
		if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!= 1){
			redirect('home');
		}	
	}

	public function goLive(){
		$data['view'] = "live_view";

		$this->load->view('template',$data);
	}

	public function getLink(){
		$data = $this->input->post();
		$link = $data['link'];
		
		$result=$this->common->saveLink($link);

		$data['livelink'] = $link;
	
		
		$data['view'] = "live_window";
		$this->load->view('template',$data);

		
	}
}