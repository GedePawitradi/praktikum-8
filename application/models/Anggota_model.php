<?php 
	/**
	* 
	*/
	class Anggota_model extends CI_model
	{
		
		public function getAllAnggota()
		{
			$query = $this->db->get('anggota');
			return $query->result_array();
		}

		public function tambahDataAnggota()
		{
			$data = [
				"nama" => $this->input->post('nama', true),
				"prodi" => $this->input->post('prodi', true),
				"jenjang" => $this->input->post('jenjang', true),
				"alamat" => $this->input->post('alamat', true)
			];

			$this->db->insert('anggota',$data);
		}

		public function hapusDataAnggota($Kd_Anggota)
		{
			$this->db->where('Kd_Anggota', $Kd_Anggota);
			$this->db->delete('anggota');
		}

		public function getAnggotaById($Kd_Anggota)
		{
			return $this->db->get_where('anggota',['Kd_Anggota'=>$Kd_Anggota])->row_array();
		}

		public function editDataAnggota()
		{
			$data = [
				"nama" => $this->input->post('nama', true),
				"prodi" => $this->input->post('prodi', true),
				"jenjang" => $this->input->post('jenjang', true),
				"alamat" => $this->input->post('alamat', true)
			];

			$this->db->where('Kd_Anggota', $this->input->post('id'));
			$this->db->update('anggota',$data);
		}
	}


?>