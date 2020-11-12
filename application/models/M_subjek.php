<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_subjek extends CI_Model {

	public function data()
	{
		$this->db->select('*');
		$this->db->from('t_subjek');
		$this->db->order_by('id_subjek', 'desc');
		$this->db->limit(3);
		return $this->db->get()->result();
	}
	

}

/* End of file M_subjek.php */
/* Location: ./application/models/M_subjek.php */