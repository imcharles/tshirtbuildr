<?php

class User_model extends CI_Model
{
		// retrieves user by email and password
		public function get_user($user)
		{
			return $this->db->where('email', $user['email'])
							->where('password', $user['password'])
							->get("users")
							->row_array();
		}

		// retrieves user by id
		public function get_user_by_id($user_id)
		{
			return $this->db->where('id', $user_id)
							->get("users")
							->row_array();
		}


		public function register_user($user)
		{
			return $this->db->insert("users", $user);
		}
}

