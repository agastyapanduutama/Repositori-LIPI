<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_unit extends CI_Controller {
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_unit', 'unit');
        
    }
    

    public function index()
    {

        $unit = $this->unit->data();
        
        $data = array(
            'title'     => "Pengaturan Unit" ,
            'data'      => $unit ,
            'konten'    => 'admin/unit/index' 
        );

        $this->load->view('admin/templates/template', $data, FALSE);
        
    }

    public function aksiEdit($id)
    {
        $unit = $this->unit->get($id);
        
        $data = array(
            'title'     => "Edit Unit",
            'data'      => $unit,
            'konten'    => 'admin/unit/edit' 
        );

        $this->load->view('admin/templates/template', $data, FALSE);
        

    }

    public function aksiSimpan($id)
    {

        // $this->req->print($_POST);
        $i = $this->input;
        $data = array(
            'id' => $id,
            'u_total' => $i->post('totalUnit'),
            'u_terjual' => $i->post('totalTerjual'),
            'u_sisa' => $i->post('totalTersisa'),
        );

        $this->unit->update($data);
        $this->session->set_flashdata('success', 'Berhasil merubah unit');
        redirect('admin/unit','refresh');
        
        
    }

}

/* End of file C_unit.php */
