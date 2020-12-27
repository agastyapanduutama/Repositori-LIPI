<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_publikasi extends CI_Model {

	public function data()
	{
		$this->db->select('COUNT(t_karya.id_publikasi) as total, t_publikasi.id_publikasi, t_publikasi.nama_publikasi');
		$this->db->from('t_publikasi');
		$this->db->join('t_karya', 't_karya.id_publikasi = t_publikasi.id_publikasi', 'left');
		$this->db->group_by('t_publikasi.id_publikasi');
		$this->db->order_by('total', 'desc');	
		$this->db->limit(3);
		return $this->db->get()->result();
	}
	

}

/* End of file M_publikasi.php */
/* Location: ./application/models/M_publikasi.php */