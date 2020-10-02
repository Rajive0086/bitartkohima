<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidate_login extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('login_model');
	}//end of __construct()

    //index function
    public function index(){
        $this->load->view('login_view');
    }//end of function index()

    function validation(){
    	$this->form_validation->set_rules('email','Email Address','required|trim|valid_email');
    	$this->form_validation->set_rules('password','Password','required');
    	if($this->form_validation->run()){
    		$result=$this->login_model->can_login($this->input->post('email'),$this->input->post('password'));
    		if($result == ''){
    			redirect('home');
    		}else{
    			$this->session->set_flashdata('message',$result);
    			redirect('login');
    		}

    	}//form_validation if statement
    	else{

    		$this->index();
    	}
    }//end of function validation()

   function register(){
   	$this->load->view('register_viewq');
   }

}//End of Main class
