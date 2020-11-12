<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_publikasi extends CI_Model {

	public function data()
	{
		$this->db->select('*');
		$this->db->from('t_publikasi');
		$this->db->order_by('id_publikasi', 'desc');	
		$this->db->limit(3);
		return $this->db->get()->result();
	}
	

}

/* End of file M_publikasi.php */
/* Location: ./application/models/M_publikasi.php */