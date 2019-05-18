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

			return $this->db->insert('anggota',$data);
		}

		public function hapusDataAnggota($Kd_Anggota)
		{

			$this->db->where($Kd_Anggota);
			return $this->db->delete('anggota');
		}

		public function getAnggotaById($Kd_Anggota)
		{
			return $this->db->get_where('anggota',['Kd_Anggota'=>$Kd_Anggota])->row_array();
		}

		public function editDataAnggota($where,$data)
		{
			$this->db->where($where);
			return $this->db->update('anggota', $data);
		}

		public function baris()
		{
			return $this->db->get('anggota')->num_rows();
		}
	}


?>