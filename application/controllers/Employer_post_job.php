<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer_post_job extends CI_Controller {

	public function __construct(){
		parent::__construct();
			$this->load->library('form_validation');
			$this->load->model('jobs_model');
			if(!$this->session->userdata('employer_id')){
			 	redirect(employer_login);
			}
	}//end of constructor

	function index(){
		//$this->load->view('employer_post_job_view');
		$this->load->view('employer_post_job_view');
	}//end index() 

	function submit_job(){
		$this->form_validation->set_rules('company','Comapny/Firm','trim|required');
		$this->form_validation->set_rules('job_location','Job Location','trim|required');
		$this->form_validation->set_rules('job_title','Job Title','trim|alpha|required');
		$this->form_validation->set_rules('job_experience','Job Experience','trim|required');
		$this->form_validation->set_rules('job_description','Job Description','trim|required');
		$this->form_validation->set_rules('salary','Salary','trim|required');
		

		if($this->form_validation->run()){
			$data=array(
				'company' => $this->input->post('company'),
				'job_location'  => $this->input->post('job_location'),
				'job_title' => $this->input->post('job_title'),
				'job_experience' => $this->input->post('job_experience'),
				'job_description' => $this->input->post('job_description'),
				'salary' => $this->input->post('salary'),
				'job_posted_by' => 'employer'
			);
			
			$job_insert_status=$this->jobs_model->insert_job($data);
			if($job_insert_status=='1'){
				 $this->session->set_flashdata('job_post_message', "Job Posted successfully!");
				 $this->index();
			}else{
				$this->session->set_flashdata('job_post_message', "Job Failed to insert!");
			}

		}
		//if validation fails
		else{
			echo "validation failed";
		}//on validation failure
	}//end of submit_job()

	

	// function post_job(){
	// 	$this->load->view('employer_post_job');
	// }



}//end of Register class