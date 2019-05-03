<?php 
	/**
	* 
	*/
	class Anggota extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Anggota_model');
			$this->load->library('form_validation');
		}
		
		public function index()
		{
			$data['judul'] = 'Daftar Anggota';
			$data['anggota'] = $this->Anggota_model->getAllAnggota();
			$this->load->view('templates/header',$data);
			$this->load->view('anggota/index',$data);
			$this->load->view('templates/footer');
		}

		public function tambah()
		{
			$data['judul'] = 'Form Tambah Anggota';

			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('prodi','Prodi','required');
			$this->form_validation->set_rules('jenjang','Jenjang','required');
			$this->form_validation->set_rules('alamat','Alamat','required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header',$data);
				$this->load->view('anggota/tambah');
				$this->load->view('templates/footer');
			}
			else{
				$this->Anggota_model->tambahDataAnggota();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('Anggota');
			}
		}

		public function hapus($Kd_Anggota)
		{
			$this->Anggota_model->hapusDataAnggota($Kd_Anggota);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('Anggota');
		}

		public function detail($Kd_Anggota)
		{
			$data['judul'] = 'Detail Data Anggota';
			$data['anggota'] = $this->Anggota_model->getAnggotaById($Kd_Anggota);
			$this->load->view('templates/header', $data);
			$this->load->view('anggota/detail', $data);
			$this->load->view('templates/footer');
		}


		public function edit($Kd_Anggota)
		{
			$data['judul'] = 'Form Edit Data Anggota';
			$data['anggota'] = $this->Anggota_model->getAnggotaById($Kd_Anggota);

			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('prodi','Prodi','required');
			$this->form_validation->set_rules('jenjang','Jenjang','required');
			$this->form_validation->set_rules('alamat','Alamat','required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header',$data);
				$this->load->view('anggota/edit',$data);
				$this->load->view('templates/footer');
			}
			else{
				$this->Anggota_model->editDataAnggota();
				$this->session->set_flashdata('flash','Diubah');
				redirect('Anggota');
			}
		}
	}

	
?>