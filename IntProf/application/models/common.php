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

	function getThreadById($thread_id) {

		$result = $this -> db -> select('thread.*, users.first_name,users.last_name,') -> join('users', 'users.id = thread.user_id') -> where('thread.id', $thread_id) -> get('thread') -> row();
		//var_dump($result);
		
		return $result;
	}

	function getCommentsByThreadId($thread_id) {

		/*$sql = "select u.first_name, u.last_name, t.*, c.*
		 from comments c
		 join users u on (c.comment_user_id = u.id)
		 join thread t on (c.thread_id = t.id)
		 where t.id = $thread_id";*/

		$sql = "select c.*,u.first_name, u.last_name
				from comments c 
				join users u on (c.comment_user_id = u.id)
				where thread_id = $thread_id order by c.id desc";

		$result = $this -> db -> query($sql) -> result();
		//var_export($result); die;
		return $result;

	}

	function save_comment($data) {

		if ($this -> db -> insert('comments', $data)) {

			return TRUE;
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

	function save_question($data) {

		if ($this -> db -> insert('thread', $data)) {

			return TRUE;
		}
	}


function getCourseByActivationCode($data) {
		$this -> db -> from('course');
		$this -> db -> where('activation_code', $data);
		$query = $this -> db -> get() -> row();
		return $query;
	}


	function getAllThreadFromCourse($course_id) {

		$result = $this -> db -> select('thread.*, users.first_name,users.last_name,') -> join('users', 'users.id = thread.user_id') -> where('course_id', $course_id) -> order_by('created_on', 'desc') -> get('thread') -> result();
		//var_dump($result);
		return $result;
	}

	function update_flag($data, $thread_id) {
		if ($this -> db -> where('id', $thread_id) -> update('thread', $data)) {
			return TRUE;
		}
	}
	
	
	
	function updateLikeFlag($data, $comment_id, $current_flag){
		if($this->db->insert('likes', $data)){
				
				
			$this->db->where('id', $comment_id);
			if($current_flag == 1){
				$this->db->set('comment_votes', 'comment_votes-1', FALSE);      
			}else{
				$this->db->set('comment_votes', 'comment_votes+1', FALSE) ;     
			}
				if($this->db->update('comments')){
					return TRUE;
				}else{
					return FALSE;
				}
		}
		return FALSE;
		
	}


	function getAllEnrolled($course_id){
		$sql = "select distinct(e.student_id), u.first_name, u.last_name from enrolled e join users u on (e.student_id=u.id) where course_id=?";
		$result = $this->db->query($sql,$course_id)->result();
		return $result;
		

	}


	function submitAttendance($att_data){

		$sql = "INSERT INTO `attendance` (`att_id`, `course_id`, `student_id`, `attended`, `date`) VALUES";
		foreach ($att_data as $key => $value) {
			$course_id = $key;
			
			foreach ($value as $x => $y) {
				$student_id = $x;
				$is_present = $y;
				$sql .= "('', '$course_id', '$student_id', '$is_present',  CURRENT_TIMESTAMP),";
			}


		}
		
		$sql = rtrim($sql, ",");
		$result = $this->db->query($sql);

		return $result;
	}


	function getAllStdEnrolled($course_id){
		$sql = "select e.id, (e.student_id), u.first_name, u.last_name, e.grade from enrolled e join users u on (e.student_id=u.id) where course_id=? group by e.student_id";
		$result = $this->db->query($sql,$course_id)->result();
		return $result;
	}


	function saveLink($link){

		$sql = "INSERT INTO `livelinks`(`id`, `link`, `posted_on`) VALUES ('', '$link', CURRENT_TIMESTAMP)";
		
		$result = $this->db->query($sql);

		return $result;
	}



		function save_grade($grade){

			//$sql = "INSERT INTO table (id, name, age) VALUES(1, "A", 19) ON DUPLICATE KEY UPDATE    
			//		name="A", age=19";
			echo "<pre>";
			//var_dump($grade);

			foreach ($grade as $key => $value) {
				$course_id = $key;
				
				//var_dump($value);

				foreach ($value as $x => $y) {
					$student_id = $y['student_id'];
					$grade = $y['grade'];
					$enroll_id = $y['enroll_id'];
				}

			$sql = "INSERT INTO `enrolled` (`id`, `course_id`, `teacher_id`, `student_id`, `grade`, `updated_on`) VALUES ('$enroll_id', '$course_id', '', '$student_id', '$grade', CURRENT_TIMESTAMP) ";

//ON DUPLICATE KEY UPDATE (`id`=$enroll_id, `course_id`='$course_id', `teacher_id`='', `student_id`='$student_id', `grade`='$grade', `updated_on` = CURRENT_TIMESTAMP)

			$result = $this->db->query($sql);
			return $result;

			}







			
		}

		function getCourseAtt($course_id, $student_id){
			$sql = "select a.student_id, u.first_name, u.last_name, a.attended, a.date from attendance a join users u on (a.student_id=u.id) where course_id=$course_id AND student_id=$student_id ";
			
				$result=$this->db->query($sql)->result();
				return $result;

		}

		function getAllGrades($student_id){
			$sql = "select e.course_id, c.course_name, e.grade from enrolled e join course c on (e.course_id=c.id) where e.student_id=$student_id";

			$result=$this->db->query($sql)->result();
				return $result;
		}


	}
?>