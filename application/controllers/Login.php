<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Login extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->library('session');
		

    }
    function registerMe()
    {
        
            $this->load->view("recruiter_registration");
        
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->isLoggedIn();
      
    }
    
    /**
     * This function used to check the user is logged in or not
     */
    function isLoggedIn()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
      
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            
            $this->load->view('Recruiter_login_view');
        }
        else
        {
            redirect('/dashboard');
        }
        
    }
    
    
    /**
     * This function used to logged in user
     */
    public function loginMe()
    {
        $this->form_validation->set_rules('Email_id','Email Address','required|trim|valid_email');
    	$this->form_validation->set_rules('Password','Password','required');
        if($this->form_validation->run())
        {
            $result=$this->login_model->loginMe($this->input->post('Email_id'),$this->input->post('Password'));
            
            if($result=='')
            
            {
				
                
                $sessionArray = array(
                    'isLoggedIn' => TRUE
                );
                $this->session->set_userdata($sessionArray);
                redirect('/dashboard');
            }
            else
            {
    			$this->session->set_flashdata('message',$result);
    			redirect('login');
    		}

    	}//form_validation if statement
        else
        {

    		$this->index();
    	}
        
    }

    /**
     * This function used to load forgot password view
     */
    public function forgotPassword()
    {
        $isLoggedIn = $this->session->userdata('isLoggedIn');
        
        if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
        {
            $this->load->view('forgotPassword');
        }
        else
        {
            redirect('/dashboard');
        }
    }
    
    /**
     * This function used to generate reset password request link
     */
    function resetPasswordUser()
    {
        $status = '';
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('login_email','Email','trim|required|valid_email');
                
        if($this->form_validation->run() == FALSE)
        {
            $this->forgotPassword();
        }
        else 
        {
            $email = strtolower($this->security->xss_clean($this->input->post('login_email')));
            
            if($this->login_model->checkEmailExist($email))
            {
                $encoded_email = urlencode($email);
                
                $this->load->helper('string');
                $data['email'] = $email;
                $data['activation_id'] = random_string('alnum',15);
                $data['createdDtm'] = date('Y-m-d H:i:s');
                $data['agent'] = getBrowserAgent();
                $data['client_ip'] = $this->input->ip_address();
                
                $save = $this->login_model->resetPasswordUser($data);                
                
                if($save)
                {
                    $data1['reset_link'] = base_url() . "resetPasswordConfirmUser/" . $data['activation_id'] . "/" . $encoded_email;
                    $userInfo = $this->login_model->getCustomerInfoByEmail($email);

                    if(!empty($userInfo)){
                        $data1["name"] = $userInfo->name;
                        $data1["email"] = $userInfo->email;
                        $data1["message"] = "Reset Your Password";
                    }

                    $sendStatus = resetPasswordEmail($data1);

                    if($sendStatus){
                        $status = "send";
                        setFlashData($status, "Reset password link sent successfully, please check mails.");
                    } else {
                        $status = "notsend";
                        setFlashData($status, "Email has been failed, try again.");
                    }
                }
                else
                {
                    $status = 'unable';
                    setFlashData($status, "It seems an error while sending your details, try again.");
                }
            }
            else
            {
                $status = 'invalid';
                setFlashData($status, "This email is not registered with us.");
            }
            redirect('/forgotPassword');
        }
    }

    /**
     * This function used to reset the password 
     * @param string $activation_id : This is unique id
     * @param string $email : This is user email
     */
    function resetPasswordConfirmUser($activation_id, $email)
    {
        // Get email and activation code from URL values at index 3-4
        $email = urldecode($email);
        
        // Check activation id in database
        $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);
        
        $data['email'] = $email;
        $data['activation_code'] = $activation_id;
        
        if ($is_correct == 1)
        {
            $this->load->view('newPassword', $data);
        }
        else
        {
            redirect('/login');
        }
    }
    
    /**
     * This function used to create new password for user
     */
    function createPasswordUser()
    {
        $status = '';
        $message = '';
        $email = strtolower($this->input->post("email"));
        $activation_id = $this->input->post("activation_code");
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('password','Password','required|max_length[20]');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->resetPasswordConfirmUser($activation_id, urlencode($email));
        }
        else
        {
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');
            
            // Check activation id in database
            $is_correct = $this->login_model->checkActivationDetails($email, $activation_id);
            
            if($is_correct == 1)
            {                
                $this->login_model->createPasswordUser($email, $password);
                
                $status = 'success';
                $message = 'Password reset successfully';
            }
            else
            {
                $status = 'error';
                $message = 'Password reset failed';
            }
            
            setFlashData($status, $message);

            redirect("/login");
        }
    }
    function recruiterAdd(){
		$this->form_validation->set_rules('Company','Company','trim|required|trim');
		$this->form_validation->set_rules('First_Name','First Name','trim|required|alpha|trim');
		$this->form_validation->set_rules('Last_Name','Last Name','trim|required|alpha|trim');
		$this->form_validation->set_rules('Designation','Designation','trim|required|alpha|trim');
		
        $this->form_validation->set_rules('Email_id', 'Email Address', 'required|trim|valid_email|is_unique[recruiter.Email_id]');
       $this->form_validation->set_rules('Password','Password','trim|required|min_length[6]|max_length[65]');
	  $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[Password]');
        $this->form_validation->set_rules('Phone','Phone','required'); 
        $this->form_validation->set_rules('terms','','required');
       
		 //******** Run Validation ***************
		if($this->form_validation->run()){
            
			$verification_key=md5(rand());
            $encrypted_password=$this->encrypt->encode($this->input->post('Password'));
           
			$data=array(
				'Company' => $this->input->post('Company'),
                'First_Name'  => $this->input->post('First_Name'),
                'Last_Name'  => $this->input->post('Last_Name'),
                'Designation'  => $this->input->post('First_Name'),
                
				'Email_id' => $this->input->post('Email_id'),
                 'Password'=>$encrypted_password,
                 'Phone' => $this->input->post('Phone'),
                'verification_key' => $verification_key,
                
            );
           
			//*********** Insert into database *************/
			$id=$this->User_model->Recruiter_insert($data);

			//*********** Verify email section ************/
			if($id>0){
				$subject="Please verify email for login";
                
				$message =
				" 
				 	<p>Hi ".$this->input->post('First_Name')."</p>
				   	<p>This email verification mail from NJC's Login Register System is for Testing Process only. For Testing purpose click this <a href='".base_url()."Login/verify_email/".$verification_key."'>link</a>.</p>
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
				$this->email->to($this->input->post('Email_id'));
				$this->email->subject($subject);
				$this->email->message($message);
				//**** send mail to client's email id
				if($this->email->send()){
					$this->session->set_flashdata('message', 'Check in your email for email verification mail');
					redirect('registerMe');
				}

			}//end of if statement
		}// end of form validation if statement
		else
		{
			$this->registerMe();
		}
	} //end of validation function
	function verify_email(){
		if($this->uri->segment(3)){
			$verification_key=$this->uri->segment(3);

			if($this->User_model->verify_email($verification_key)){
				$data['message'] ='<h1 class="message is-success">Your Email is successfully verified, now you can login from <a href="'.base_url().'login"></a></h1>';
			} else{
				$data['message']='<h1>Invalid Link</h1>';
			}
			$this->load->view('emailVerified_view',$data);
		}
	}//end of verify_email()

}

?>