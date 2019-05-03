<?php  
	/**
	* 
	*/
	class Petugas_model extends CI_model
	{
		
		public function getAllPetugas()
		{
			$query = $this->db->get('petugas');
			return $query->result_array();
		}

		public function tambahDataPetugas()
		{
			$data = [
				"nama_pet" => $this->input->post('nama_pet', true),
				"alamat_pet" => $this->input->post('alamat_pet', true),
				
			];

			$this->db->insert('petugas',$data);
		}

		public function hapusDataPetugas($Kd_Petugas)
		{
			$this->db->where('Kd_Petugas', $Kd_Petugas);
			$this->db->delete('petugas');
		}

		public function getPetugasById($Kd_Petugas)
		{
			return $this->db->get_where('petugas',['Kd_Petugas'=>$Kd_Petugas])->row_array();
		}

		public function editDataPetugas()
		{
			$data = [
				"nama_pet" => $this->input->post('nama_pet', true),
				"alamat_pet" => $this->input->post('alamat_pet', true),
			];

			$this->db->where('Kd_Petugas', $this->input->post('id'));
			$this->db->update('petugas',$data);
		}
	}

?>