<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_unit extends CI_Model {

    public function data()
    {
        $this->db->from('tb_unit');
        return $this->db->get()->result();
    }

    public function get($id)
    {
        $this->db->from('tb_unit');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tb_unit', $data);
    }

}

/* End of file M_unit.php */
