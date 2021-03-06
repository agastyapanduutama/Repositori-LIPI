<?php

class M_publikasi extends CI_Model
{


    function __construct()
    {
        parent::__construct();
        $this->table = "t_publikasi";
        $this->column_order = array(null,  'nama_publikasi', 'keterangan'); 
        $this->column_search = array( 'nama_publikasi', 'keterangan');
        $this->order = array('id_publikasi' => 'desc');
    }

    private function _get_datatables_query()
    {

        $this->db->from($this->table);
        

        $i = 0;

        foreach ($this->column_search as $item)
        {
            if ($_POST['search']['value'])
            {

                if ($i === 0)
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    function cekPerubahan()
    {
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function insert($data)
    {
        $cek = $this->db->get_where($this->table, array('nama_publikasi' => $data['nama_publikasi'] ))->num_rows();
        if ($cek == 1) {
            return false;
        } else {
            $this->db->insert($this->table, $data);
            return $this->cekPerubahan();
        }
    }

    function get($id)
    {
        return $this->db->get_where($this->table, $this->req->id('id_publikasi', $id))->row();
    }

    function update($data, $where)
    {
        $this->db->where($where);
        $this->db->update($this->table, $data);
        return $this->cekPerubahan();
    }

    function delete($where)
    {
        $this->db->where($where);
        $this->db->delete($this->table);
        return $this->cekPerubahan();
    }

   

    function data_publikasi()
    {
        $this->db->select('*');
        $this->db->from('t_publikasi');
        $this->db->order_by('id_publikasi', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

     public function data_karya()
    {
        $this->db->select('id_karya,judul_karya, penulis, tahun, no_arsip, t_karya.status, t_user.nama_user');
        $this->db->from('t_karya');
        $this->db->join('t_user', 't_user.id = t_karya.user', 'left');
        $this->db->where('t_karya.status', 1);
        $this->db->order_by('tanggal', 'desc');
        return $this->db->get()->result();
    }

     public function data_karya_dashboard()
    {
        $this->db->select('id_karya,judul_karya, penulis, tahun, no_arsip, t_karya.status, t_user.nama_user');
        $this->db->from('t_karya');
        $this->db->join('t_user', 't_user.id = t_karya.user', 'left');
        $this->db->where('t_karya.status', 1);
        $this->db->order_by('tanggal', 'desc');
        $this->db->limit(5);
        return $this->db->get()->result();
    }

    function total_karya()
    {

        $this->db->select('*');
        $this->db->from('t_karya');
        $this->db->where('status', '1');
        if ($this->session->userdata('level') != '1') {
            $this->db->where('user', $this->session->userdata('id'));
        }
        return $query = $this->db->get()->num_rows();


        // return $this->db->query("SELECT * FROM t_karya WHERE status = 1")->num_rows();
    }
    
    function total_non_karya()
    {
        $this->db->select('*');
        $this->db->from('t_karya');
        $this->db->where('status', '3');
        if ($this->session->userdata('level') != '1') {
            $this->db->where('user', $this->session->userdata('id'));
        }
        return $query = $this->db->get()->num_rows();

    }
}
