<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('register_model');
		//$this->load->helper('form');
	}
	public function index(){
		$this->load->view('register_view');

	}


	function validation(){
		$this->form_validation->set_rules('first_name','First Name','trim|required|alpha|trim');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|alpha|trim');
		$this->form_validation->set_rules('email','Email Address','required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('gender','Gender','required|max_length[6]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[65]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('terms','','required');
		
		 //******** Run Validation ***************
		if($this->form_validation->run()){
			$verification_key=md5(rand());
			$encrypted_password=$this->encrypt->encode($this->input->post('password'));
			$data=array(
				'first_name' => $this->input->post('first_name'),
				'last_name'  => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				 'gender' => $this->input->post('gender'),
				'password'=>$encrypted_password,
				'verification_key' => $verification_key,
			);
			//*********** Insert into database *************/
			$id=$this->register_model->insert($data);

			//*********** Verify email section ************/
			if($id>0){
				$subject="Please verify email for login";

				$message =
				" 
				 	<p>Hi ".$this->input->post('user_name')."</p>
				   	<p>This email verification mail from NJC's Login Register System is for Testing Process only. For Testing purpose click this <a href='".base_url()."register/verify_email/".$verification_key."'>link</a>.</p>
				   <p>Once you click this link your email will be verfied and you can login into system.</p>
				   <p>Thank You</p>
				";

					$config = array(
					'protocol' => 'smtp',
					'smtp_host' => 'p3plcpnl0492.prod.phx3.secureserver.net',
					'smtp_port' => 465,
					'smtp_crypto' => 'ssl',
					'smtp_user' => 'bitart@youthnet.org.in',
					'smtp_pass' => 'U^dPjXBQi3$1',
					'mailtype'  => 'html',
					'charset'   => 'iso-8859-1',
					'wordwrap'  => TRUE
				);

				$this->load->library('email',$config);
				$this->email->set_newline("\r\n");
				$this->email->from('bitart@youthnet.org.in');
				$this->email->to($this->input->post('email'));
				$this->email->subject($subject);
				$this->email->message($message);
				//**** send mail to client's email id
				if($this->email->send()){
					$this->session->set_flashdata('message', 'Check in your email for email verification mail');
					redirect('register');
				}

			}//end of if statement
		}// end of form validation if statement
		else
		{
			$this->index();
		}
	} //end of validation function
	
	function verify_email(){
		if($this->uri->segment(3)){
			$verification_key=$this->uri->segment(3);
	
			if($this->register_model->verify_email($verification_key)){
				$data['message'] ='<h1 class="message is-success">Your Email is successfully verified, now you can login from <a href="'.base_url().'login"></a></h1>';
			} else{
				$data['message']='<h1>Invalid Link</h1>';
			}
			$this->load->view('emailVerified_view',$data);
		}
	}//end of verify_email()
	
	
	

}//end of Class