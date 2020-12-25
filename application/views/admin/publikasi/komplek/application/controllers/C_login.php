<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_login');
        
    }
    

    public function index()
    {
        $this->load->view('admin/login');
        
    }

    function aksi()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $where = array(
            'username' => $user,
            'password' => sha1($pass)
        );
        if ($this->M_login->cek($where) == true) {
            $userData = $this->M_login->getData();

                $session = array(
                    'id' => $userData->id,
                    'username' => $userData->username,
                    'level' => $userData->level,
                    'nama_user' => $userData->nama_user,
                );
                $this->session->set_userdata($session);
               redirect('admin/dashboard','refresh');
               
            } else {
                $this->session->set_flashdata('warning', 'Username atau Password salah');
                redirect('admin/login','refresh');
        }
    }

    public function logout()
    {
            $this->session->sess_destroy();
            redirect(base_url('admin/login'));
    }
}

/* End of file C_login.php */
