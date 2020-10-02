<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer_zone extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('employer_id')){
			redirect(employer_login);
		}
	}//end of constructor

	function index(){
		redirect('Employer_manage_jobs');
		//$this->load->view('Employer_zone_view');
	}//end index() 

	function logout(){
		$data=$this->session->all_userdata();
		foreach($data as $row => $row_value){
			$this->session->unset_userdata($row);
		}
		redirect('home');
	}//end of function logout()




}//end of Register class