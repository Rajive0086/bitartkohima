<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {
	public function index()
	{
    $this->load->model('jobs_model');
		$data ['title'] ='Browse Job';
		$data['page_header']='load data from database';
		$data['firstnames']=$this->jobs_model->get_latest_jobs();
    $this->load->view('job_seeker',$data);
  }
	public function fetch()
	{
        $output='';
        $query='';
        $this->load->model('Jobs_model');
        if($this->input->post('query'))
        {
            $query=$this->input->post('query');

        }
        $data=$this->Jobs_model->fatch_data($query);



        $output .='
        <div class="card-table">
        <div class="content">
                        <table class="table is-fullwidth is-striped">
                        <tbody>
            <tr>
                <th class="has-background-primary has-text-white">Job Title</th>
                <th class="has-background-primary has-text-white">Location</th>
                <th class="has-background-primary has-text-white desktop">Discription</th>
				<th class="has-background-primary has-text-white">Company</th>
				<th class="has-background-primary has-text-white">Action</th>

            <tr>
            ';
        if($data->num_rows()>0)
        {
            foreach($data->result() as $row)
            {
                $output .='

                <tr>
                    <td>'.$row->job_title.'</td>
                    <td>'.$row->job_location.'</td>
                    <td class="desktop">'.$row->job_description.'</td>
                    <td>'.$row->company.'</td>
                    <th> <a class="button is-small is-primary" href=Jobs\jobsId\\'.$row->job_id.'>View</a></th>
                <tr>
                ';
            }
        }
        else
        {
            $output .='

            <tr>
                <td colspan=5>No Data Found</td>
            <th>
            ';
        }
        $output .='</table></div>';
        echo $output;
	}
	public function jobsId($job_id)
    {
        $this->load->model('Jobs_model');
        // assign the data fetched according to an ID to an array
		$data['row'] = $this->Jobs_model->get_user($job_id);
		// load the view - phone.php
		$this->load->view('Job_details_view',$data);
    }
}//end of Jobs class
