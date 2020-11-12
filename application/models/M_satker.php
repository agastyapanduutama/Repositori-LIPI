<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_satker extends CI_Model {

	public function data()
	{
		$this->db->select('*');
		$this->db->from('t_satker');
		$this->db->order_by('id_satker', 'desc');
		$this->db->limit(3);
		return $this->db->get()->result();
	}
	

}

/* End of file M_satker.php */
/* Location: ./application/models/M_satker.php */