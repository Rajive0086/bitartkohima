<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer_login extends CI_Controller 
{
    public function __construct(){
    	parent::__construct();
    	$this->load->library('form_validation');
    	$this->load->library('encrypt');
    	$this->load->model('employer_login_model');
        if($this->session->userdata('user_id'))
        {
            redirect('home');
            
        }
        elseif(!$this->session->userdata('employer_id'))
        {
            //$this->index();
        }else
        {
            redirect('employer_zone');
        }
    }//end of __construct()

    function index(){
        $this->load->view('employerLogin_view');
    }//end of index()

    function validation(){
    	$this->form_validation->set_rules('email','Email Address', 'required|trim|valid_email');
    	$this->form_validation->set_rules('password','Password', 'required');
       echo  $this->input->post('password');


    	if($this->form_validation->run())
    	{
           
    		$result=$this->employer_login_model->can_login($this->input->post('email'),$this->input->post('password'));
    		switch ($result){
    			case '1':
    			     redirect('employer_zone');
    			     break;
    			case '2': $this->index();break;
    			case '3': echo "Verify Email first";break;
                case '4': echo "Your email is not registered with NJC"; break;
                // default:
                //     echo 'email does not exist';
    		}//end of switch()
    	}
    	else
    	{
    		$this->index();
    	}
    }//end of validation() function

}//end of Employer_login class