<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_kategori extends CI_Controller {

    public function index()
    {
        $kat = $this->db->get('tb_kategori')->result();
        
        $data = array(
            'title' => "Kategori" , 
            'kategori' => $kat , 
            'konten' => 'admin/kategori/index'
        );

        $this->load->view('admin/templates/template', $data, FALSE);
    }

    public function tambah()
    {

        $i = $this->input;
        $data = array(
            'nama_kategori' => $i->post('nama_kategori'), 
            'keterangan'    => $i->post('keterangan'), 
        );

        if ($this->db->get_where('tb_kategori',['nama_kategori' => $data['nama_kategori']])->num_rows() > 0) {
            $this->session->set_flashdata('warning', 'Nama Kategori Sudah ada');
        }else{
            $this->db->insert('tb_kategori',$data);
            $this->session->set_flashdata('success', 'Berhasil menambahkn Kategori');
        }
        redirect('admin/kategori','refresh');

    }

    public function edit($id)
    {
        $kat = $this->db->get('tb_kategori', ['id' => $id])->row();
        $data = array(
            'title' => "Edit Kategori",
            'kategori' => $kat,
            'konten' => 'admin/kategori/edit'
         );

         $this->load->view('admin/templates/template', $data, FALSE);
         
    }

    public function aksiEdit($id)
    {
        $i = $this->input;
        $data = array(
            'id'    => $id,
            'nama_kategori' => $i->post('nama_kategori'),
            'keterangan'    => $i->post('keterangan'),
        );
        $this->db->where('id', $id);
        $this->db->update('tb_kategori',$data);

        $this->session->set_flashdata('success', 'berhasil mengubah data');
        redirect('admin/kategori', 'refresh');
    }

    public function aksiHapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_kategori');
        $this->session->set_flashdata('success', 'berhasil menghapus data');
        redirect('admin/kategori','refresh');
    }
}

/* End of file C_kategori.php */
