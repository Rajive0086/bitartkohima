<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/BaseController.php';
class Recruiter extends BaseController {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Recruiter_login_model');
    }

	public function index()
	{
        $this->load->view('Recruiter_login_view');
       
    }
    public function DeshBoard()
	{
        $this->load->view('common/Recruiter_navbar');
        $this->load->view('deshboard',$this->global, NULL , NULL);
        $this->load->view('common/footer',$this->global, NULL , NULL);
       
    }
    
    
    public function JobPost()
	{
        $this->load->view('common/Recruiter_navbar');
        $this->load->view('Job_post_view');
        $this->load->view('common/footer',$this->global, NULL , NULL);
		
       
    }
    public function forgetPassword()
	{
        $this->load->view('Recruiter_forgotPassword_view.php');
       
    }
    
    public function loginMe()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[32]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $email = strtolower($this->security->xss_clean($this->input->post('email')));
            $password = $this->input->post('password');
            
            $result = $this->Recruiter_login_model->loginMe($email, $password);
            
            if(!empty($result))
            {
                $lastLogin = $this->Recruiter_login_model->lastLoginInfo($result->userId);

                $sessionArray = array('userId'=>$result->userId,                    
                                        'role'=>$result->roleId,
                                        'roleText'=>$result->role,
                                        'name'=>$result->name,
                                        'lastLogin'=> $lastLogin->createdDtm,
                                        'isLoggedIn' => TRUE
                                );

                $this->session->set_userdata($sessionArray);

                unset($sessionArray['userId'], $sessionArray['isLoggedIn'], $sessionArray['lastLogin']);

                $loginInfo = array("userId"=>$result->userId, "sessionData" => json_encode($sessionArray), "machineIp"=>$_SERVER['REMOTE_ADDR'], "userAgent"=>getBrowserAgent(), "agentString"=>$this->agent->agent_string(), "platform"=>$this->agent->platform());

                $this->Recruiter_login_model->lastLogin($loginInfo);
                
                redirect('Recruiter/Deshboard');
            }
            else
            {
                $this->session->set_flashdata('error', 'Email or password mismatch');
                
                $this->index();
            }
        }
    }
    
}