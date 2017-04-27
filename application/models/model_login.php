<?php

Class Model_login extends CI_Model {

		public function add_user($data_user){
			$query = $this->db->insert('user', $data_user);
			return $query;
		}

		public function get_user($table, $where)
		{
			return $this->db->get_where($table,$where);
			return $query;
		}
	
}

?>