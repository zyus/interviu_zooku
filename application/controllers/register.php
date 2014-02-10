<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

//creating a register class
class Register extends CI_Controller {
	//setting start controller for register
	public function index()
	{
        //load the helpers, librarys and models that we need
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->library("form_validation");
		$this->load->model('register_model');

        $validation_rules = array(
                                   array(
                                            'field'   => 'firstname',
                                            'label'   => '"First Name"',
                                            'rules'   => 'trim|required|min_length[4]|max_length[50]|xss_clean'
                                        ),
                                   array(
                                            'field'   => 'lastname',
                                            'label'   => '"Last Name"',
                                            'rules'   => 'trim|required|min_length[4]|max_length[50]|xss_clean'
                                        ),
                                   array(
                                            'field'   => 'useremail',
                                            'label'   => '"Email"',
                                            'rules'   => 'trim|required|valid_email|max_length[60]|is_unique[users.email]|xss_clean'
                                        ),   
                                   array(
                                            'field'   => 'userwebsite',
                                            'label'   => '"Website"',
                                            'rules'   => 'trim|required|callback_valid_url|max_length[60]|xss_clean'
                                        )
                                );
        //In the above validation array, we are : 
            // 1) "trimming" the fields, 
            // 2) limiting the filds to te exact minimum and maximum size, 
            // 3) running the username through the "xss_clean" function, which removes malicious data
            // 4) verifying if the email is unique or not in the database
            // 5) adding a callback validation to the function "valid_url" that exists in this class
        
        // setting up the display type of the errors with bootstrap warning alerts
        
        $this->form_validation->set_error_delimiters('
            <div class="alert alert-warning alert-dismissable form-warning-width">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Warning!</strong><br/>', 
                    //here the error message is inserter
            '</div>');
    
        //seting the rules for validation
		$this->form_validation->set_rules($validation_rules);

        $data['registration_success']="";
        //verifying if all the validations are working run correctly
		if ($this->form_validation->run() != FALSE ) {
            //if the validation is correct we register the user
			$this->register_model->register();
            $data['registration_success'] = '
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Registration Successful!</strong>
                </div>';
		}
        //seting up page title
        $data['page_loaded']="register";
        $data['page_title'] = 'Register|Page';
        $data['welcome_message'] = 'This is my Registration page!';
        //load registration page
		$this->load->view('register',$data);	
	}

    /**
     * Validate URL
     *
     * @access      public
     * @param       string
     * @return      TRUE or FALSE
     */
    public function valid_url($url)
    {
        //creating a regular expression for validating a url
        $pattern = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
        //validating the url
        if (!preg_match($pattern, $url))
        {
            //if the url is invalid the we post a message and return false to the "form_validation"
            $this->form_validation->set_message('valid_url', 'The %s field contains an invalid URL!');
            return FALSE;
        }

        return TRUE;
    }
}
?>