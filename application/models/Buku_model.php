<?php  
	/**
	* 
	*/
	class Buku_model extends CI_model
	{
		
		public function getAllBuku()
		{
			$query = $this->db->get('buku');
			return $query->result_array();
		}

		public function tambahDataBuku()
		{
			$data = [
				"judul" => $this->input->post('judul', true),
				"pengarang" => $this->input->post('pengarang', true),
				"penerbit" => $this->input->post('penerbit', true),
				"tahun_terbit" => $this->input->post('tahun_terbit', true)
			];

			$this->db->insert('buku',$data);
		}

		public function hapusDataBuku($Kd_Register)
		{
			$this->db->where('Kd_Register', $Kd_Register);
			$this->db->delete('buku');
		}

		public function getBukuById($Kd_Register)
		{
			return $this->db->get_where('buku',['Kd_Register'=>$Kd_Register])->row_array();
		}

		public function editDataBuku()
		{
			$data = [
				"judul" => $this->input->post('judul', true),
				"pengarang" => $this->input->post('pengarang', true),
				"penerbit" => $this->input->post('penerbit', true),
				"tahun_terbit" => $this->input->post('tahun_terbit', true)
			];

			$this->db->where('Kd_Register', $this->input->post('id'));
			$this->db->update('buku',$data);
		}
	}
?>