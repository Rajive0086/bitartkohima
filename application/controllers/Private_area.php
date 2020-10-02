<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_area extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user_id')){
			redirect('login');
		}
	}//end of function __construct()

	function index(){
		//echo "Welcome User";
		//echo '<p align="center"><a href="'.base_url().'private_area/logout">Logout</a></p>';
		$this->load->view('home_view');
	}
	
	function logout(){
		$data=$this->session->all_userdata();
		foreach($data as $row=>$row_value){
			$this->session->unset_userdata($row);
		}
		redirect('home');
	}//end of function logout()
}//end of class