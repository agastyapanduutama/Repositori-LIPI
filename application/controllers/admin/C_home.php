<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
        if (!$this->session->userdata('logged_in')) {
                redirect(base_url('admin/login'));
            }
        $this->load->model('admin/M_publikasi', 'publikasi');
        $this->load->model('admin/M_user', 'user');
	}

    public function home()
    {
        $total_karya = $this->publikasi->total_karya();
        $total_karya_non = $this->publikasi->total_non_karya();
        $total_kontributor = $this->user->total_kontributor();
        $total_pustakawan = $this->user->total_pustakawan();
        $karya = $this->publikasi->data_karya_dashboard();

        $data = array(
                      'to_pub'          => $total_karya,
                      'to_non_pub'      => $total_karya_non,
                      'to_kontrib'      => $total_kontributor,
                      'to_pusta'        => $total_pustakawan,
                      'karya'           => $karya,
                      'title'           => 'Dashboard - Repositori Karya Lembaga Ilmu Pengetahuan Indonesia' ,
                      'konten'          => 'admin/home/dashboard' 
                    );

        $this->load->view('admin/templates/wrapper', $data, FALSE);
     
        // $this->req->print($_SESSION);

    }

}

/* End of file C_home.php */
