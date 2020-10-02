<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index()
	{
        $this->load->view('aboutUs_view');
    }
    public function cf()
	{
        $this->load->view('candidate_profile');
    }
}
