<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Employer_login_model extends CI_Model{

		function can_login($email,$password){
			$this->db->where('email',$email);
			$query=$this->db->get('employer_table');

			if($query->num_rows()>0){
				foreach($query->result() as $row){
					if($row->is_account_verified == 'yes'){
						$store_password=$this->encrypt->decode($row->password);
						if($password == $store_password){
							$this->session->set_userdata('employer_id',$row->employer_id);
							$this->session->set_userdata('first_name',$row->first_name);
							return '1';
						}//end of password check
						else{
							return '2';//when wrong password is entered
						}
					}//end of is_account_verfied check
					else{
						return '3';//when email is not verfied;
					}//when is_account_verfied check fails
				}//end foreach()
			}//end of num_rows check
			else{
				return '4';//when email is not registered
			}//if email does not exist
		}//end of can_login() function
		

	}//end of class Employer_login_model