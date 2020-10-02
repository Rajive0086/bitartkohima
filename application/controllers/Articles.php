<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articles extends CI_Controller {
	public function index()
	{
        $this->load->model('Articles_model');
		
		
		$data['articles']=$this->Articles_model->getArticles();
        $this->load->view('Articles',$data);
    }
    public function jobPost()
	{
        $this->load->view('Job_post');
    }
    function articlesfetch()
	{
        $query=$this->input->post('query');
        
        $output='';
        $query='';
        $this->load->model('Articles_model');
        if($this->input->post('query'))
        {
            $query=$this->input->post('query');

        }

        $data=$this->Articles_model->fatch_data($query);
        
        
        if($data->num_rows()>0)
        {
            foreach($data->result() as $row)
            {
                $output .='
                <img src="images/articles/'.$row->pics.'" width=100%>
                <h2 class="subtitle is-5 has-text-weight-bold center ">'.$row->description.'</h2>'; 
            }
        }
        
        
        echo $output; 
	}
}