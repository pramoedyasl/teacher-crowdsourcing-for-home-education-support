<?php
class TheModel extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }
	
	public function check_username($username)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('tb_user');
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function login($data)
	{
		$this->db->where('username', $data['username']);
		$this->db->where('password', $data['password']);
		$query = $this->db->get('tb_user');

		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}

	}

	public function insert_new_profle($data)
	{
		return $this->db->insert('tb_user', $data);
	}

	public function get_profile($username)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('tb_user');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}

	}
}
