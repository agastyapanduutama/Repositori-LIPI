<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_subjek extends CI_Model {

	public function data()
	{
		$this->db->select('COUNT(t_karya.id_subjek) as total, t_subjek.id_subjek, t_subjek.nama_subjek');
		$this->db->from('t_subjek');
		$this->db->join('t_karya', 't_karya.id_subjek = t_subjek.id_subjek', 'left');
		$this->db->group_by('t_subjek.id_subjek');
		$this->db->order_by('total', 'desc');
		$this->db->limit(3);
		return $this->db->get()->result();
	}
	

}

/* End of file M_subjek.php */
/* Location: ./application/models/M_subjek.php */