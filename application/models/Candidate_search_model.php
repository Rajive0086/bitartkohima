<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Candidate_search_model extends CI_Model{

    function fatch_data($query)
    {
        $this->db->select("*");
        $this->db->from("users");
        if($query!='')
        {
            $this->db->like('first_name',$query);
            $this->db->or_like('last_name',$query);
            $this->db->or_like('skill',$query);
            $this->db->or_like('work_exp',$query);
            $this->db->or_like('field_of_interest',$query);
            
        }
        return $this->db->get();
    }
    function get_user($user_id)
    {
        $this->db->where('user_id',$user_id);
        $query = $this->db->get_where('users', array('user_id' => $user_id));
        return $query->row();
    }
}