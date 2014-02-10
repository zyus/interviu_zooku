<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//creating a register class
class register_model extends CI_Model {
	//setting start controller for register
	public function register()
	{
		//geting all the post values and setting them in a data array,
		//ready to be inserted in the database
		$user_data = array(
						   	'first_name'	=> $this->input->post('firstname', TRUE) ,
						   	'last_name' 	=> $this->input->post('lastname', TRUE)  ,
						   	'email'			=> $this->input->post('useremail', TRUE) ,
						   	'website' 		=> $this->input->post('userwebsite', TRUE)
						);
		//registering the user
		$this->db->insert('users', $user_data); 
	}
}

?>