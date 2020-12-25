<?php

defined('BASEPATH') or exit('No direct script access allowed');

class C_tim extends CI_Controller
{

    public function index()
    {
        $kat = $this->db->get('tb_tim')->result();

        $data = array(
            'title' => "tim",
            'tim' => $kat,
            'konten' => 'admin/tim/index'
        );

        $this->load->view('admin/templates/template', $data, FALSE);
    }

    public function tambah()
    {

        $i = $this->input;
        $data = array(
            'nama_tim' => $i->post('nama_tim'),
            'keterangan'    => $i->post('keterangan'),
        );

        $this->session->set_flashdata('success', 'Berhasil menambahkn tim');
        $this->db->insert('tb_tim', $data);
        redirect('admin/tim', 'refresh');
    }

    public function edit($id)
    {
        $kat = $this->db->get('tb_tim', ['id' => $id])->row();
        $data = array(
            'title' => "Edit tim",
            'tim' => $kat,
            'konten' => 'admin/tim/edit'
        );

        $this->load->view('admin/templates/template', $data, FALSE);
    }

    public function aksiEdit($id)
    {
        $i = $this->input;
        $data = array(
            'id'    => $id,
            'nama_tim' => $i->post('nama_tim'),
            'keterangan'    => $i->post('keterangan'),
        );
        $this->db->where('id', $id);
        $this->db->update('tb_tim', $data);

        $this->session->set_flashdata('success', 'berhasil mengubah data');
        redirect('admin/tim', 'refresh');
    }

    public function aksiHapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_tim');
        $this->session->set_flashdata('success', 'berhasil menghapus data');
        redirect('admin/tim', 'refresh');
    }
}

/* End of file C_tim.php */
