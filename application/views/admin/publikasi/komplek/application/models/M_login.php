<?php

class M_login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->table = "tb_user";
    }

    function cek($data)
    {
        $cek = $this->db->get_where($this->table, $data)->num_rows();
        if ($cek > 0) {
            return true;
        } else {
            return false;
        }
    }

    function getData()
    {
        return $this->db->query($this->db->last_query())->row();
    }

}
