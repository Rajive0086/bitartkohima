<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Login_model extends CI_Model{
	function can_login($email,$password){

        $this->db->where('email',$email);
        $query=$this->db->get('users');

        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                if($row->is_email_verified == 'yes'){
                    $store_password=$this->encrypt->decode($row->password);
                    if($password == $store_password){
                        $this->session->set_userdata('user_id',$row->user_id);
						$this->session->set_userdata('first_name',$row->first_name);
                    }else{
                        return 'Wrong Password';
                    }
                }else{
                    return 'First verify your email address';
                }
            }//end of foreach loop
        }
    }//end of function can_login()
}//end of class Login_model
?>