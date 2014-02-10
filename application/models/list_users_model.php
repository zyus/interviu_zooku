<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//creating a list_user class
class list_users_model extends CI_Model {
	//setting start controller for list_users_model
	public function list_users()
	{
		//select all users and order them by first_name desc
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by("first_name", "desc"); 

		//return values		
		$resuls = $this->db->get();

		return $resuls->result();
	}
}

?>