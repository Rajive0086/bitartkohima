<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model
{
    public function getArticles()
    {
        $query=$this->db->query('select * from articles ORDER BY articles_id DESC LIMIT 15');
      // var_dump($query);die;
        if($query->num_rows()>0)
        {
            return $query->result();
            //return $query->result();
        }
        else
        {
            return NULL;
        }
    }
    function fatch_data($query)
    {
        $this->db->select("*");
        $this->db->from("articles");
        
        if($query!='')
        {
            $this->db->like('articles_id',$query);
        }
        return $this->db->get();
    }
}