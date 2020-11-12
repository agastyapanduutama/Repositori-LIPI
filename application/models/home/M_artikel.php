<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model {

	public function data_artikel()
		{
			$this->db->select('*');
			$this->db->from('t_artikel');
			return $this->db->get()->result();
		}	

}

/* End of file M_artikel.php */
/* Location: ./application/models/home/M_artikel.php */