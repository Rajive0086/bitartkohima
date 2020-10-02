<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_Cont extends CI_Controller {
    public function loadJpost()
    {


        $this->load->view('job_post');
    }
    public function Jpost()
    {

        $data = array(
            'job_no'=>3,
            'date'=>null,
            'company'=>$this->input->post('company'),
            'location'=>$this->input->post('location'),
            'job_title'=>$this->input->post('title'),
            'Discription'=>$this->input->post('disc'),
            'salery'=>$this->input->post('salary'),
            'address'=>null
          );
          $this->load->model('emp_model');
         $this->emp_model->Jpost_model($data);
         
         
    }
      
   
       
}