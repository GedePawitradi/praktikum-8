<?php  
	/**
	* 
	*/
	class Buku extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Buku_model');
			$this->load->library('form_validation');
		}
		
		public function index()
		{
			$data['judul'] = 'Daftar Buku';
			$data['buku'] = $this->Buku_model->getAllBuku();
			$this->load->view('templates/header',$data);
			$this->load->view('buku/index',$data);
			$this->load->view('templates/footer');
		} 

		public function tambah()
		{
			$data['judul'] = 'Form Tambah Buku';

			$this->form_validation->set_rules('judul','Judul','required');
			$this->form_validation->set_rules('pengarang','Pengarang','required');
			$this->form_validation->set_rules('penerbit','Penerbit','required');
			$this->form_validation->set_rules('tahun_terbit','Tahun Terbit','required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header',$data);
				$this->load->view('buku/tambah');
				$this->load->view('templates/footer');
			}
			else{
				$this->Buku_model->tambahDataBuku();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('Buku');
			}
		}

		public function hapus($Kd_Register)
		{
			$this->Buku_model->hapusDataBuku($Kd_Register);
			$this->session->set_flashdata('flash','Dihapus');
			redirect('buku');
		}

		public function detail($Kd_Register)
		{
			$data['judul'] = 'Detail Data Buku';
			$data['buku'] = $this->Buku_model->getBukuById($Kd_Register);
			$this->load->view('templates/header', $data);
			$this->load->view('buku/detail', $data);
			$this->load->view('templates/footer');
		}

		public function edit($Kd_Register)
		{
			$data['judul'] = 'Form Edit Data Anggota';
			$data['buku'] = $this->Buku_model->getBukuById($Kd_Register);

			$this->form_validation->set_rules('judul','Judul','required');
			$this->form_validation->set_rules('pengarang','Pengarang','required');
			$this->form_validation->set_rules('penerbit','Penerbit','required');
			$this->form_validation->set_rules('tahun_terbit','Tahun_Terbit','required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('templates/header',$data);
				$this->load->view('buku/edit',$data);
				$this->load->view('templates/footer');
			}
			else{
				$this->Buku_model->editDataBuku();
				$this->session->set_flashdata('flash','Diubah');
				redirect('buku');
			}
		}
	}
?>