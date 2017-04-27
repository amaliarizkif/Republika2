<?php

Class Model_login extends CI_Model {

		public function add_user($data_user){
			$query = $this->db->insert('user', $data_user);
			return $query;
		}

		public function get_user($email, $password){
			$query = $this->db->get_where('user', 
				array(
					'email' => $email,
					'password' => md5($password)
					));
			return $query;
		}
	
}

?>