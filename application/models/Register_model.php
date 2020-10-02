<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_model extends CI_Model{

	function insert($data){
		$this->db->insert('users',$data);
		return $this->db->insert_id(); 
	}//end of insert()
	
		function verify_email($key){
		$this->db->where('verification_key',$key);
		$this->db->where('is_email_verified','no');
		$query=$this->db->get('users');
		//echo $query->num_row();
		if($query->num_rows() > 0){
			$data=array(
				'is_email_verified' =>'yes'
			);
			$this->db->where('verification_key',$key);
			$this->db->update('users',$data);
			return true;
		}else{
			return false;
		}
	}//end of verify_email()

}//end of class