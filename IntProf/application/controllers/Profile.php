<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index(){
		if (!isset($_SESSION['loggedIn'])) {
			# code...
			redirect('home');
		}
			$data['id']= $_SESSION['id'];
			 $data['first_name']= $_SESSION['first_name']; 	
  			$data['last_name']= $_SESSION['last_name']; 	
  			$data['email']= $_SESSION['email']; 	
			$data['birth_date']= $_SESSION['birth_date'];		  			
			$data['gender']= $_SESSION['gender'];
			$data['designation']= $_SESSION['designation'];
			$data['user_type' ]= $_SESSION['user_type'];
  			$data['contact']= $_SESSION['contact']; 	
  			$data['username']= $_SESSION['username'];	
			$data['is_active']= $_SESSION['is_active'];

			$data['view'] = "profile_view"; 
			$this->load->view('template',$data);
	}

	public function changeInfo($id){

		$this->load->model('common');
    	if (isset($_POST['update'])) {
    		# code...
    		if ($this->Product_model->updateProduct($id)) {
    			# code...
    			$this->session->set_flashdata('success', 'Product updated succesfully!!');
    			redirect('product/edit/'.$id, 'refresh');
    		}
    		else{
    			$this->session-set_flashdata('error', 'An error occured!!');
    			redirect('product/edit/'.$id, 'refresh');
    		}
    	}

    	$data['product'] = $this->Product_model->getProduct($id);
    	$this->load->view('edit_product', $data);
    }
	
	
}
