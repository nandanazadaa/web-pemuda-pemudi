<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['text_header']=$this->db->get('text_header')->row_array();
		$data['update_acara']=$this->db->get('text_acara')->row_array();
		$data['update_banefit']=$this->db->get('text_banefit')->row_array();
		$data['update_about']=$this->db->get('text_about')->row_array();



		$this->load->view('Dashboard/home',$data);
	}
}


