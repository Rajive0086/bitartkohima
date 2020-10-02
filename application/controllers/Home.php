<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('jobs_model');
				$this->load->helper('text');
    }//end of __construct()

	public function index()
	{
		$data['jobs']=$this->jobs_model->get_latest_jobs();
		$this->load->view('home_view',$data);
	}

	public function getJobDetails(){

		if($this->input->post('job_id')){
			$job_id=$this->input->post('job_id');
			$data['result']=$this->jobs_model->getJobDetails($job_id);
			$this->load->view('job_details_view',$data);
		}//end of if statment
	}//end of getJobDetails()

}
