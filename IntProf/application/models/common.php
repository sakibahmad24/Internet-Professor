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
		//$data['username'] = ;
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

	public function get_user($data){
		$this->db->from('users');
		$this->db->where($data);
		$query = $this->db->get();
		return $query->result_array();

	}


	function getTeacherCourses(){
		$result = $this->db->where('teacher_id', $_SESSION['id'])->get('course')->result();
		if (!empty($result)) {
			# code...
			return $result;
		}
		else {
			return FALSE;
		}
	}

	function getStudentsEnrolledCourses(){
		$id = $_SESSION['id'];
		$sql = "select c.* from course c join enrolled e on c.id=e.course_id where e.student_id = $id";

		$result = $this->db->query($sql)->result();

		if (!empty($result)) {
			# code...
			return $result;
		}
		else{
			return FALSE;
		}
	}

	function save_course($data) {

		if ($_SESSION['user_type'] == 1) {
			if ($this -> db -> insert('course', $data)) {
				return TRUE;
			}
		} else if ($_SESSION['user_type'] == 2) {

			if ($this -> db -> insert('enrolled', $data)) {
				return TRUE;
			}
		}

	}


		
	}
?>