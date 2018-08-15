<?php

	/**
	 * 
	 */
	class Common extends CI_Model
	{
		
		function save_registration($data) {

		if ($this -> db -> insert('users', $data)) {
			return TRUE;
		}
	}


		
	}
?>