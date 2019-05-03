<?php  
	
	/**
	* 
	*/
	class Petugas extends CI_controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('Petugas_model');
			$this->load->library('form_validation');	
		}

		public function index()
		{
			
			$data['judul'] = 'Daftar Petugas';
			$data['petugas'] = $this->Petugas_model->getAllPetugas();
			$this->load->view('templates/header',$data);
			$this->load->view('petugas/index',$data);
			$this->load->view('templates/footer');
		}

		public function tambah()
		{
			$data['judul'] = 'Form Tambah Petugas';

			$this->form_validation->set_rules('nama_pet','Nama','required');
			$this->form_validation->set_rules('alamat_pet','Alamat','required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header',$data);
				$this->load->view('petugas/tambah');
				$this->load->view('templates/footer');
			}
			else{
				$this->Petugas_model->tambahDataPetugas();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('petugas');
			}
		}

		public function hapus($Kd_Petugas)
		{
			$this->Petugas_model->hapusDataPetugas($Kd_Petugas);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('petugas');
		}

		public function detail($Kd_Petugas)
		{
			$data['judul'] = 'Detail Data Petugas';
			$data['petugas'] = $this->Petugas_model->getPetugasById($Kd_Petugas);
			$this->load->view('templates/header', $data);
			$this->load->view('petugas/detail', $data);
			$this->load->view('templates/footer');
		}

		public function edit($Kd_Petugas)
		{
			$data['judul'] = 'Form Edit Data Petugas';
			$data['petugas'] = $this->Petugas_model->getPetugasById($Kd_Petugas);

			$this->form_validation->set_rules('nama_pet','Nama','required');
			$this->form_validation->set_rules('alamat_pet','Alamat','required');
		
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header',$data);
				$this->load->view('petugas/edit',$data);
				$this->load->view('templates/footer');
			}
			else{
				$this->Petugas_model->editDataPetugas();
				$this->session->set_flashdata('flash','Diubah');
				redirect('petugas');
			}
		}
	}
?>