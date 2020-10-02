<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer_manage_jobs extends CI_Controller {

	public function __construct(){
		parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('jobs_model');
			if(!$this->session->userdata('employer_id')){
			 	redirect(employer_login);
			}
	}//end of constructor

	function index(){
		$data['jobsByEmployer']=$this->jobs_model->all_jobsByEmployer();
		$this->load->view('employer_manage_jobs_view',$data);
	}//end index() 



	



}//end of Employer_manage_jobs class