<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Emp_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function Jpost_model($data)
    {
        $this->db->insert('job_openings',$data);
    

        $this->load->model('model_jobes');
        $data['user_data']=$this->model_jobes->getjobtitle();
		//var_dump($rock);
		$data ['title'] ='Browse Job';
        $this->load->view('welcome_message', $data);
        return true;
    }
}