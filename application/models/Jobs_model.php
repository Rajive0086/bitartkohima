<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_model extends CI_Model
{

    public function getJobOpenings()
    {
        $query=$this->db->get('templates');

        if($query->num_rows()>0){
            return $query->result();
        }else{
            return NULL;
        }
    }//end of function jobOpenings()

    public function getJobDetails($job_id){
        $this->db->where('job_id',$job_id);
        $query=$this->db->get('templates');

        if($query->num_rows()>0){
            foreach($query->result() as $row){
                $results= array(
                    'job_title' => $row->job_title,
                    'location' => $row->location,
                    'company' =>$row->company,
                    'description'=>$row->description,
                    'salary' =>$row->salary
                );
            }
            return $results;
        }else{
            return null;
        }
    }//end of getJobDetails()

    public function get_latest_jobs()
    {
        $query=$this->db->query('select * from templates ORDER BY temp_id DESC LIMIT 4');
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
    public function getletestjobs()
    {
        $query=$this->db->query('select * from job_openings ORDER BY job_no DESC ');
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
        $this->db->from("job_openings");
        if($query!='')
        {
            $this->db->like('job_title',$query);
            $this->db->or_like('job_location',$query);
            $this->db->or_like('company',$query);



        }
        return $this->db->get();
    }
    function get_user($job_id)
    {
        $this->db->where('job_id',$job_id);
        $query = $this->db->get_where('job_openings', array('job_id' => $job_id));
        return $query->row();
    }

     public function insert_job($data){

        if(!$this->db->insert('job_openings',$data)){
            return 0;
           
        }else{
            return 1;   
        }
    }//end of insert_job

    public function all_jobsByEmployer(){
        $this->db->select("*");
        $this->db->from('job_openings');
        $query=$this->db->get();
        return $query;
    }//end of fetch_allJobs()
    
}//end of class

?>
