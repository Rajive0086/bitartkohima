<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer_registration extends CI_Controller 
{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('employer_register_model');
    }
    
    function index(){
        $this->load->view('employerRegistration_view');
    }//end of index()

    function validation()
    {
        $this->form_validation->set_rules('first_name','First Name', 'required|trim|alpha');
        $this->form_validation->set_rules('last_name','Last Name', 'trim|required|alpha');
        $this->form_validation->set_rules('gender','Gender', 'required|max_length[6]');
        $this->form_validation->set_rules('address','Street Address', 'trim|required');
        $this->form_validation->set_rules('city_town','City/Town', 'trim|required|alpha');
        $this->form_validation->set_rules('state','State', 'trim|required|alpha|trim');
        $this->form_validation->set_rules('company_firm_name','Company/firm Name', 'trim|required');
        $this->form_validation->set_rules('email','Email Id', 'trim|required|valid_email|is_unique[employer_table.email]');
        // //$this->form_validation->set_rules('mobile_no','Mobile number', 'trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('mobile_no','Mobile Number', 'required|regex_match[/^[0-9]{10}$/]');//{10} for 10 digits number
        $this->form_validation->set_rules('password','Password', 'trim|required|min_length[6]|max_length[40]');
        $this->form_validation->set_rules('passconf','Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('terms','', 'required');

        
       
        //******** Run Validation ***************
        if($this->form_validation->run() !== FALSE)
        {
            $verification_key=md5(rand());
            $encrypted_password=$this->encrypt->encode($this->input->post('password'));

            $data=array(
                'first_name'=>$this->input->post('first_name'),
                'last_name'=>$this->input->post('last_name'),
                'gender'=>$this->input->post('gender'),
                'address'=>$this->input->post('address'),
                'city_town'=>$this->input->post('city_town'),
                'state'=>$this->input->post('state'),
                'company_firm_name'=>$this->input->post('company_firm_name'),
                'email'=>$this->input->post('email'),
                'mobile_no'=>$this->input->post('mobile_no'),
                'password'=>$encrypted_password,
                'verification_key' => $verification_key
            );

            //*********** Insert into database *************/
           $id=$this->employer_register_model->insert($data);

           //*********** Verify email section ************/
           if($id>0)
           {

               $subject="Please verify email for login";
               $message=
                "
                    <p>Hi ".$this->input->post('user_name')."</p>
                    <p>This email verification mail is from Nagaland Job Centre's Login Registration System and it's for testing 
                    purpose only. For testing purpose please click <a href='".base_url()."employer_registration/verify_email/".$verification_key.
                    "'>Link</a>.</p>
                    <p>Once you click this link your email will be verified and you can login using your email id and password.</p>
                    <p>Thank You</p>

                ";
         
                $config = array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'p3plcpnl0492.prod.phx3.secureserver.net',
                    'smtp_port' => 465,
                    'smtp_crypto' => 'ssl',
                    'smtp_user' => 'bitart@youthnet.org.in',
                    'smtp_pass' => 'U^dPjXBQi3$1',
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );
               
               
                $this->load->library('email',$config);
                $this->email->set_newline("\r\n");
                $this->email->from('bitart@youthnet.org.in');
                $this->email->to($this->input->post('email'));
                $this->email->subject($subject);
                $this->email->message($message);

               
                //**** send mail to client's email id
                if($this->email->send()){
                    $this->session->set_userdata('status','1');
                    $this->session->set_flashdata('message','Check in your inbox for email verification mail');
                    redirect('employer_registration');
                }else{
                    //echo $this->email->print_debugger();
                    $this->employer_register_model->delete_last_record();
                    $this->session->set_userdata('status','0');
                    $this->session->set_flashdata('message','Registration Failed, Please Try Again.');
                    redirect('employer_registration');  
                }
           } //end of if (id check)
            
        }//end of form_validation if statement
        else
        {
            $this->index();
        }

    }//end of validation() function
   
    function verify_email(){
        if($this->uri->segment(3)){
           $verification_key=$this->uri->segment(3);

            if($this->employer_register_model->verify_email($verification_key)){
                $data['message']='<h1 class="message is-success">Your Email is successfully verified, now you can login from  <a href="'.base_url().'login"</a></h1>';
            }else{
                $data['message']='<h1>Invalid Link</h1>';
            }
            $this->load->view('employerLogin_view');

        }
    }//end of verify_email() function




} //end of Employer_registration class