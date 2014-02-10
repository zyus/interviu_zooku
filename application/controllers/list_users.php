<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//creating a register class
class list_users extends CI_Controller {
	//setting start controller for register
	public function index()
	{
        //load the helpers, librarys and models that we need
		$this->load->helper("url");
		$this->load->model('list_users_model');

        //set up display data
        $data['page_loaded']="list_users";
        $data['page_title'] = 'List Users|Page';
        $data['welcome_message'] = 'This is my List Users page!';
        //get list of users
        $data['list_users'] = $this->list_users_model->list_users();

        //load list_users page
        $this->load->view('list_users',$data);
	}
}
?>