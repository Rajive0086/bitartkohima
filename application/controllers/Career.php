<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends CI_Controller {
	public function index()
	{
        $this->load->view('career_events');
    }
}