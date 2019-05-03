<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login');
		}
		else{
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user1 = $this->db->get_where('petugas', ['Username' => $username])->row_array();
		$user = $this->db->get_where('petugas', ['Password' => $password])->row_array();

		if ($user1) {
			# usernya ada
			if (password_verify('$password', $user['password']) && $username == $user1['username']) {
				$data=['username' => $user1['username']];
			}
			$this->session->set_userdata($data);
			redirect('anggota');
		}
		else
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Petugas is not registered!</div>');
			redirect('auth');
		}

	}
}
?>