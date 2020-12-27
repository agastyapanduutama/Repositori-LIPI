<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_satker extends CI_Model {

	public function data()
	{
		$this->db->select('COUNT(t_karya.id_satker) as total, t_satker.id_satker, t_satker.nama_satker');
		$this->db->from('t_satker');
		$this->db->join('t_karya', 't_karya.id_satker = t_satker.id_satker', 'left');
		$this->db->group_by('t_karya.id_satker');
		$this->db->order_by('total', 'desc');
		$this->db->limit(3);
		return $this->db->get()->result();
	}
	

}

/* End of file M_satker.php */
/* Location: ./application/models/M_satker.php */