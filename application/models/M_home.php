<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

      function data_karya()
    {
        $this->db->select('*');
        $this->db->from('t_karya');
        $this->db->join('t_publikasi', 't_publikasi.id_publikasi = t_karya.id_publikasi', 'left');
        $this->db->join('t_satker', 't_satker.id_satker = t_karya.id_satker', 'left');
        $this->db->join('t_subjek', 't_subjek.id_subjek = t_karya.id_subjek', 'left');
        $this->db->order_by('tanggal', 'ASC');
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query->result();
    }

}

/* End of file M_home.php */
