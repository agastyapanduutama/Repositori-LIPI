<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    public function index()
    {

        $aktifitas = $this->db->get_where('tb_konten', ['tipe', 1])->num_rows();
        $perumahan = $this->db->get_where('tb_konten', ['tipe', 2])->num_rows();
        $terjual   = $this->db->get('tb_unit')->row()->u_terjual;
        $tim       = $this->db->get('tb_tim')->num_rows();
        

        $data = array(
            'aktifitas' => $aktifitas,
            'perumahan' => $perumahan,
            'terjual'   => $terjual,
            'tim'       => $tim,
            'title'     => "Halaman Dashboard ",
            'konten'    => "admin/dashboard", 
        );

        $this->load->view('admin/templates/template', $data, FALSE);
        
    }

}

/* End of file C_admin.php */
