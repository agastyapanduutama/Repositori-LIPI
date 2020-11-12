<?php

class M_karya extends CI_Model
{

    public $tipe = null;
    public $satuan = null;


    function __construct()
    {
        parent::__construct();
        $this->table = "t_karya";
        $this->table1 = "t_user";
        $this->column_order = array(null,  'judul_karya', 'penulis', 'tahun'); 
        $this->column_search = array( 'judul_karya', 'penulis', 'tahun');
        $this->order = array('id_karya' => 'desc');
    }

    private function _get_datatables_query()
    {
        
        $this->db->select('id_karya,judul_karya, penulis, tahun, no_arsip, t_karya.status, t_user.nama_user');
        $this->db->from($this->table, $this->table1);
        $this->db->join($this->table1, 't_user.id = t_karya.user', 'left');
        if ($this->session->userdata('level') > 1 && $this->tipe != '3') {
            $this->db->where('user', $this->session->userdata('id_user'));
        }

        if ($this->tipe == '3') {
            $this->db->where('t_karya.status', $this->tipe);   
        }


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
        // $cek = $this->db->get_where($this->table, array('judul_karya' => $data['judul_karya'] ))->num_rows();
        // if ($cek == 1) {
        //     return false;
        // } else {
            $this->db->insert($this->table, $data);
            return $this->cekPerubahan();
        // }
    }

    function get($id)
    {
        return $this->db->get_where('t_karya', $this->req->id('id_karya', $id))->row();
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

    function data_karya()
    {
        $this->db->select('*');
        $this->db->from('t_karya');
        $this->db->join('t_publikasi', 't_publikasi.id_publikasi = t_karya.id_publikasi', 'left');
        $this->db->join('t_satker', 't_satker.id_satker = t_karya.id_satker', 'left');
        $this->db->join('t_subjek', 't_subjek.id_subjek = t_karya.id_subjek', 'left');
        $this->db->order_by('tanggal', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    function data_satker()
    {
        $this->db->select('*');
        $this->db->from('t_satker');
        $this->db->order_by('id_satker', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    function data_publikasi()
    {
        $this->db->select('*');
        $this->db->from('t_publikasi');
        $this->db->order_by('id_publikasi', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
    function data_subjek()
    {
        $this->db->select('*');
        $this->db->from('t_subjek');
        $this->db->order_by('id_subjek', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    function dataKarya($id)
    {
        $this->db->from('t_karya');
        $this->db->join('t_publikasi', 't_publikasi.id_publikasi = t_karya.id_publikasi', 'left');
        $this->db->join('t_satker', 't_satker.id_satker = t_karya.id_satker', 'left');
        $this->db->join('t_subjek', 't_subjek.id_subjek = t_karya.id_subjek', 'left');
        $this->db->where('id_karya', $id);
        return $this->db->get()->row();
    }

    function tagKarya($tag)
    {
        $this->db->from('t_karya');
        $this->db->join('t_publikasi', 't_publikasi.id_publikasi = t_karya.id_publikasi', 'left');
        $this->db->join('t_satker', 't_satker.id_satker = t_karya.id_satker', 'left');
        $this->db->join('t_subjek', 't_subjek.id_subjek = t_karya.id_subjek', 'left');
        $this->db->like('tag', $tag, 'BOTH');
        return $this->db->get()->result();
    }

    function cariKarya($keywords)
    {
        $this->db->from('t_karya');
        $this->db->join('t_publikasi', 't_publikasi.id_publikasi = t_karya.id_publikasi', 'left');
        $this->db->join('t_satker', 't_satker.id_satker = t_karya.id_satker', 'left');
        $this->db->join('t_subjek', 't_subjek.id_subjek = t_karya.id_subjek', 'left');
        $this->db->like('abstrak', $keywords, 'BOTH');
        $this->db->or_like('judul_karya', $keywords, 'BOTH');
        return $this->db->get()->result();
    }

    function dataSatuan($id)
    {
        $this->db->select('*');
        $this->db->from('t_karya');
        $this->db->join('t_publikasi', 't_publikasi.id_publikasi = t_karya.id_publikasi', 'left');
        $this->db->join('t_satker', 't_satker.id_satker = t_karya.id_satker', 'left');
        $this->db->join('t_subjek', 't_subjek.id_subjek = t_karya.id_subjek', 'left');
        $this->db->order_by('tanggal', 'ASC');
        if ($this->satuan == 1) {
            $this->db->where('t_karya.id_publikasi', $id);
        }
        if ($this->satuan == 2) {
            $this->db->where('t_karya.id_satker', $id);
        }
        if ($this->satuan == 3) {
            $this->db->where('t_karya.id_subjek', $id);
        }
        $query = $this->db->get();
        return $query->result();
    }

    function ambilSatuan($tipe)
    {

        $this->db->select('*');
        if ($this->satuan == 1) {
            $this->db->from('t_publikasi');
            $this->db->order_by('id_publikasi', 'ASC');
        }
        if ($this->satuan == 2) {
            $this->db->from('t_satker');
            $this->db->order_by('id_satker', 'ASC');
        }
        if ($this->satuan == 3) {
            $this->db->from('t_subjek');
            $this->db->order_by('id_subjek', 'ASC');
        }
        $query = $this->db->get();
        return $query->result();
    }



function getNomorUrut()
    {
        $urut = "LIPI0000";

        $this->db->select("id_karya");
        $this->db->from('t_karya');
        $this->db->distinct();
        $nomor = $this->db->get()->num_rows();
        $panjang = strlen($nomor);
        $urut_ = substr($urut, 0, strlen($urut) - $panjang);
        $nomor = $nomor+1;
        $tahun = date('Y', time());
        return "$urut_$nomor-$tahun"; 
      
    }


    
}
