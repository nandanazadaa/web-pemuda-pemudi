<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', 'upload');
		$this->load->model('M_prima');
	}

	public function index()
	{
        $data['user'] = $this->M_prima->profile();
        $data['title'] = 'Dashboard';

        $this->load->view('Templates/header',$data);
        $this->load->view('Templates/topbar',$data);
		$this->load->view('Admin/dashboard',$data);
        $this->load->view('Templates/footer',$data);
	}

	// EDITING TEXT CONTENT

	public function change_text()
	{
		$data['user'] = $this->M_prima->profile();
		$data['text_header']=$this->db->get('text_header')->row_array();
		$data['update_acara']=$this->db->get('text_acara')->row_array();
		$data['update_banefit']=$this->db->get('text_banefit')->row_array();
		$data['update_about']=$this->db->get('text_about')->row_array();
		
        $data['title'] = 'Dashboard';

        $this->load->view('Templates/header',$data);
        $this->load->view('Templates/topbar',$data);
		$this->load->view('Admin/change_text',$data);
        $this->load->view('Templates/footer',$data);
	}

	public function text_header_edit()
	{
        $data = [
            'font_top' => $this->input->post('font_top'),
            'font_center' => $this->input->post('font_center'),
            'font_bottom' => $this->input->post('font_bottom'),
		];
		$this->db->where('id_edit', 1);
		$this->db->update('text_header', $data);
		$this->session->set_flashdata('text_update', '<div class="alert alert-success" role="alert"> Text telah Terupdate! </div>');
		redirect('Admin/change_text');
	}

	public function text_acara_edit()
	{
        $data = [
            'title_acara' => $this->input->post('title_acara'),
            'sub_acara' => $this->input->post('sub_acara')
		];
		$this->db->where('id_acara', 1);
		$this->db->update('text_acara', $data);
		$this->session->set_flashdata('update_acara', '<div class="alert alert-success" role="alert"> Text telah Terupdate! </div>');
		redirect('Admin/change_text');
	}

	public function text_banefit_edit()
	{
        $data = [
            'title_banefit' => $this->input->post('title_banefit'),
            'sub_banefit' => $this->input->post('sub_banefit')
		];
		$this->db->where('id_banefit', 1);
		$this->db->update('text_banefit', $data);
		$this->session->set_flashdata('update_banefit', '<div class="alert alert-success" role="alert"> Text telah Terupdate! </div>');
		redirect('Admin/change_text');
	}

	public function banefit_content()
	{
        $data = [
            'title_banefit' => $this->input->post('title_banefit'),
            'sub_banefit' => $this->input->post('sub_banefit')
		];
		$this->db->where('id_banefit', 1);
		$this->db->update('text_banefit', $data);
		$this->session->set_flashdata('update_banefit', '<div class="alert alert-success" role="alert"> Text telah Terupdate! </div>');
		redirect('Admin/change_text');
	}

	public function about_content()
	{
        $data = [
            'about_title' => $this->input->post('title_about'),
            'about_subtitle' => $this->input->post('sub_about')
		];
		$this->db->where('id_about', 1);
		$this->db->update('text_about', $data);
		$this->session->set_flashdata('update_about', '<div class="alert alert-success" role="alert"> Text telah Terupdate! </div>');
		redirect('Admin/change_text');
	}


	// END EDITING TEXT CONTENT

	public function change_images()
	{
		$data['user'] = $this->M_prima->profile();

		$this->load->view('Templates/header',$data);
		$this->load->view('Templates/topbar',$data);
		$this->load->view('Admin/change_image');
		$this->load->view('Templates/footer',$data);
	}

	public function change_logo()
	{
		$config['upload_path']          =  './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        
        $this->upload->initialize($config);

        $this->upload->do_upload('foto');
        $upload_foto = $this->upload->data('file_name');

		$data = array(
            'foto' => $upload_foto        
        );

		$this->db->where('id',1);
		$this->db->insert('logo', $data);
		$this->session->set_flashdata('image', '<div class="alert alert-success" role="alert"> Data berhasil ditambahkan! </div>');
        redirect('Admin/change_image');
	}

	public function acara_17()
	{
		$data['user'] = $this->M_prima->profile();
        $data['title'] = 'Acara 17 Agustus';

        $this->load->view('Templates/header',$data);
        $this->load->view('Templates/topbar',$data);
		$this->load->view('Admin/acara_17',$data);
        $this->load->view('Templates/footer',$data);
	}
}
