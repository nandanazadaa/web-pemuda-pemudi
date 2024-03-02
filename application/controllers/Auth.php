<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

    // Login Admin
	public function index()
	{

		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {

			// Gagal validasi
			$data['title'] = 'Login Admin';

			$this->load->view('Templates/auth_header',$data);
		    $this->load->view('Auth/login',$data);
            $this->load->view('Templates/auth_footer',$data);
		} else {

			// Lolos validasi
			$this->_login();
		}
	}

	private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('admin', ['username' => $username])->row_array();

        //usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    // if($user['role_id'] == 2){
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('Admin');

                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username ini sudah tidak aktif!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
            redirect('Auth');
        }
    }

	public function registration()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password dont match !',
			'min_length' => 'password too short !',
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



		if ($this->form_validation->run() == false) {

			$data['title'] = 'Register Hotel';
			$this->load->view('Templates/auth_header', $data);
			$this->load->view('Auth/registration', $data);
			$this->load->view('Templates/auth_footer', $data);
		} else {

			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
                'role_id' => 1,
                'is_active' => 1,
			];
			$this->db->insert('admin', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Akun anda berhasil dibuat !
		  	</div>');
			redirect('Auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Anda Berhasil Logout!</div>');
		redirect('Auth');
	}
}
