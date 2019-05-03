<?php  
	/**
	* 
	*/
	class Home_model extends CI_model
	{
		
		function __construct(argument)
		{
			$join = $this->db->join('peminjaman', 'Kd_anggota = Kd_Anggota');
			return $join->result_array();
			return $this->db->get()->result;
		}

		function public getAllPinjam()
		{
			$query = $this->db->get('peminjaman');
			return $query->result_array();
		}

		function public tambahDataPinjam()
		{

		}
	}

?>