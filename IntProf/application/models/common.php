<?php

	/**
	 * 
	 */
	class Common extends CI_Model
	{

	   /*public function is_username_available($username){
	        $this->db->where('username', $username);
	        $query = $this->db->get('users');

	        if ($query->num_rows()>0){
	            return true;
            }

            else{
                return false;
            }
        }*/
		public function save_registration($data) {
$data['username'] = "amisdfgfdsgn";
		$username_check = $this->db->query("select * from users where username like('".$data['username']."')");
		$num = $username_check->num_rows();
		if($num > 0){

			$data['msg'] = "Username already exists !!";
			return $data;

		}else{

			if ($this -> db -> insert('users', $data)) {
				return TRUE;
			}
		}
	}


		
	}
?>