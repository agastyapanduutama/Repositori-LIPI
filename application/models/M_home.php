<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

      function data_karya($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('t_karya');
        $this->db->join('t_publikasi', 't_publikasi.id_publikasi = t_karya.id_publikasi', 'left');
        $this->db->join('t_satker', 't_satker.id_satker = t_karya.id_satker', 'left');
        $this->db->join('t_subjek', 't_subjek.id_subjek = t_karya.id_subjek', 'left');
        $this->db->order_by('tanggal', 'ASC');
        $this->db->where('status', '1');
        $this->db->limit($limit, $start);
        // $this->db->limit($start);
        $query = $this->db->get();
        return $query->result();
    }

    

    function detailKarya($id)
    {
        $this->db->from('t_karya kar');
        $this->db->join('t_publikasi pub', 'pub.id_publikasi = kar.id_publikasi', 'left');
        $this->db->join('t_satker sat', 'sat.id_satker = kar.id_satker', 'left');
        $this->db->join('t_subjek sub', 'sub.id_subjek = kar.id_subjek', 'left');
        $this->db->where('id_karya', $id);
        return $this->db->get()->row();
    }

    function tagKarya($limit, $start, $tags)
    {
    
        $this->db->from('t_karya kar');
         $this->db->join('t_publikasi pub', 'pub.id_publikasi = kar.id_publikasi', 'left');
        $this->db->join('t_satker sat', 'sat.id_satker = kar.id_satker', 'left');
        $this->db->join('t_subjek sub', 'sub.id_subjek = kar.id_subjek', 'left');
        $this->db->like('tag', $tags, 'BOTH');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();

    }

    function tagKaryaTotal($tags)
    {
    
        $this->db->from('t_karya kar');
         $this->db->join('t_publikasi pub', 'pub.id_publikasi = kar.id_publikasi', 'left');
        $this->db->join('t_satker sat', 'sat.id_satker = kar.id_satker', 'left');
        $this->db->join('t_subjek sub', 'sub.id_subjek = kar.id_subjek', 'left');
        $this->db->like('tag', $tags, 'BOTH');
        // $this->db->limit($limit, $start);
        return $this->db->get()->result();

    }

    function cariKarya($limit, $start,$keywords)
    {
    
        $this->db->from('t_karya kar');
         $this->db->join('t_publikasi pub', 'pub.id_publikasi = kar.id_publikasi', 'left');
        $this->db->join('t_satker sat', 'sat.id_satker = kar.id_satker', 'left');
        $this->db->join('t_subjek sub', 'sub.id_subjek = kar.id_subjek', 'left');
        $this->db->like('judul_karya', $keywords, 'BOTH');
        $this->db->or_like('abstrak', $keywords, 'BOTH');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();

    }

    function cariSama($keywords)
    {
    
        $this->db->from('t_karya kar');
         $this->db->join('t_publikasi pub', 'pub.id_publikasi = kar.id_publikasi', 'left');
        $this->db->join('t_satker sat', 'sat.id_satker = kar.id_satker', 'left');
        $this->db->join('t_subjek sub', 'sub.id_subjek = kar.id_subjek', 'left');
        $this->db->like('judul_karya', $keywords, 'BOTH');
        $this->db->or_like('abstrak', $keywords, 'BOTH');
        return $this->db->get()->num_rows();

    }

    function dataSatuan($limit, $start, $id)
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

        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    function dataSatuanAll($id)
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

        // $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    function ambilSatuan($tipe)
    {

        // $this->db->select('*');
        if ($this->satuan == 1) {
            $this->db->select('COUNT(t_karya.id_publikasi) as total, nama_publikasi, t_publikasi.id_publikasi');
            $this->db->from('t_publikasi');
            $this->db->join('t_karya', 't_karya.id_publikasi = t_publikasi.id_publikasi', 'left');
            $this->db->order_by('total', 'DESC');
            $this->db->group_by('t_publikasi.id_publikasi');
            
        }
        if ($this->satuan == 2) {
            $this->db->select('COUNT(t_karya.id_satker) as total, nama_satker, t_satker.id_satker');
            $this->db->from('t_satker');
            $this->db->join('t_karya', 't_karya.id_satker = t_satker.id_satker', 'left');
            $this->db->order_by('total', 'DESC');
            $this->db->group_by('t_satker.id_satker');
            
        }
        if ($this->satuan == 3) {
            $this->db->select('COUNT(t_karya.id_subjek) as total, nama_subjek, t_subjek.id_subjek');
            $this->db->from('t_subjek');
            $this->db->join('t_karya', 't_karya.id_subjek = t_subjek.id_subjek', 'left');
            $this->db->order_by('total', 'DESC');
            $this->db->group_by('t_subjek.id_subjek');
            
        }
        
        if ($this->satuan == 4) {

            $this->db->distinct();
            $this->db->select('count(tahun) as total, tahun');
            $this->db->from('t_karya');
            $this->db->group_by('tahun');
            $this->db->order_by('tahun', 'desc');
            
        }

        $query = $this->db->get();
        return $query->result();
    }

    public function tahun()
    {
        $this->db->distinct();
        $this->db->select('count(tahun) as total, tahun');
        $this->db->from('t_karya');
        $this->db->group_by('tahun');
        $this->db->order_by('tahun', 'desc');
        $this->db->limit(3);
        return $this->db->get();

    }

    public function tahunKarya($tahun)
    {

        $this->db->from('t_karya');
        $this->db->where('tahun', $tahun);
        // $this->db->group_by('tahun');
        return $this->db->get();

    }

    function dataTahun($limit, $start, $tahun)
    {
        $this->db->select('*');
        $this->db->from('t_karya');
        $this->db->join('t_publikasi', 't_publikasi.id_publikasi = t_karya.id_publikasi', 'left');
        $this->db->join('t_satker', 't_satker.id_satker = t_karya.id_satker', 'left');
        $this->db->join('t_subjek', 't_subjek.id_subjek = t_karya.id_subjek', 'left');
        $this->db->order_by('id_karya', 'DESC');
        $this->db->where('tahun', $tahun);
        $this->db->limit($limit, $start);
        // $this->db->limit($start);
        $query = $this->db->get();
        return $query->result();
    }



}

/* End of file M_home.php */
