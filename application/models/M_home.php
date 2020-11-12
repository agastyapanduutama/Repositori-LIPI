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



}

/* End of file M_home.php */
