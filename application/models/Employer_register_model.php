<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employer_register_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function insert($data){
        $this->db->insert('employer_table',$data);
        return $this->db->insert_id();
    }//end of insert()

    function delete_last_record(){
        $latest_table_id=$this->db->insert_id();
        $this->db->where('employer_id', $latest_table_id);
        $this->db->delete('employer_table');
    }

    function verify_email($key){
        $this->db->where('verification_key',$key);
        $this->db->where('is_account_verified','no');
        $query=$this->db->get('employer_table');
        if($query->num_rows() > 0){
            $data=array(
                'is_account_verified' => 'yes'
            );
            $this->db->where('verification_key',$key);
            $this->db->update('employer_table',$data);
            return true;
        }else{
            return false;
        }
    }//end of verify_email()

}//end of Employer_register_model class