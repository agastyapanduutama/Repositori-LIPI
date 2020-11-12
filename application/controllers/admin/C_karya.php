<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_karya extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //cek login
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }

        $this->load->model('admin/M_karya', 'karya');
    }

    public function list()
    {
        $data = array(
            'title'  => 'Data Karya',
            'menu'   => 'karya',
            'script' => 'karya',
            'konten' => 'admin/karya/list'
        );

        $this->load->view('admin/templates/templates', $data, FALSE);
    }

    public function tambah()
    {
        $noArsip = $this->karya->getNomorUrut(); 

            $data = array(
            'arsip'  => $noArsip,
            'title'  => 'Tambah Karya',
            'menu'   => 'karya',
            'script' => 'karya',
            'konten' => 'admin/karya/add'
        );

        $this->load->view('admin/templates/templates', $data, FALSE);
    
    }

    public function konfirmasi()
    {
            $data = array(
            'title'  => 'konfirmasi Karya',
            'menu'   => 'konfirmasi',
            'script' => 'karya',
            'konten' => 'admin/karya/konfirmasi'
        );

        // echo $this->karya->tipe;

        $this->load->view('admin/templates/templates', $data, FALSE);
    
    }

    function getKarya()
    {
        echo json_encode($this->karya->data_karya());
    }

    function getSubjek()
    {
        echo json_encode($this->karya->data_subjek());
    }

    function getPublikasi()
    {
        echo json_encode($this->karya->data_publikasi());
    }

    function getSatker()
    {
        echo json_encode($this->karya->data_satker());
    }

    function data($tipe = null)
    {

        error_reporting(0);
        if ($tipe == 'konfirmasi') {
            $this->karya->tipe = 3;
        }
        $list = $this->karya->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            // $idNa = $this->req->acak($field->id_karya);
            $idNa = $field->id_karya;
            
            if ($field->status == "1") {
                $status = "Dikonfirmasi";
            }elseif ($field->status == "2") {
                $status = "Disimpan Draf";
            }else{
                $status = "Belum Dikonfirmasi";
            }

            if ($field->status == '3') {
                $button = "
                <button class='btn btn-danger btn-sm' id='delete' data-id='$idNa'><i class='fas fa-trash-alt'></i></button>
                <button class='btn btn-success btn-sm' id='confirm' data-id='$idNa'><i class='fas fa-check-circle'></i></button>
                <a href='karya/update/" . $field->id_karya . "' class='btn btn-warning btn-sm' id='edit' data-id='$idNa'><i class='fas fa-pencil-alt'></i></a>
                <button class='btn btn-primary btn-sm' id='view' data-id='$idNa'><i class='fas fa-eye'></i></button>
            ";
            }

            if ($field->status == '1') {
                $button = "
                <button class='btn btn-danger btn-sm' id='delete' data-id='$idNa'><i class='fas fa-trash-alt'></i></button>
                <button class='btn btn-primary btn-sm' id='view' data-id='$idNa'><i class='fas fa-eye'></i></button>";
            }
            



            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->judul_karya;
            $row[] = $field->penulis;
            $row[] = $field->tahun;
            $row[] = $field->no_arsip;
            $row[] = $status;
            $row[] = $field->nama_user;
            $row[] = $button;
            $row[] = $field->username;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->karya->count_all(),
            "recordsFiltered" => $this->karya->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);

    }

    function get($id)
    {
        $data = $this->karya->get($id);
        foreach ($data as $key => $value) {
            if (strtolower($key) == 'id_karya') {
                $data->$key = $this->req->acak($value);
            }
        }
        echo json_encode($data);
    }

    function insert()
    {

       $config = array(
            'upload_path' => './assets/uploads/karya/',
            'allowed_types' => 'pdf|doc|docx|jpg|jpeg|',
        );

        $this->load->library('upload', $config);

        $uploading = $this->upload->do_upload('file') ? true : false;
        
        if (!$uploading) {
            $msg = array(
                'message' => 'error',
                'data' => $this->upload->display_errors()
            );
        } else {
            $msg = array(
                'message' => 'success',
                'data' => $this->upload->data("file_name")
            );
        }

        // $this->req->print($_POST);
        // $this->req->print($msg);

        $dataIsi = array(
            'file' =>  $msg['data'], 
        );

        $data = $this->req->all($dataIsi);

        // $this->req->print($data);    

        if ($this->karya->insert($data) == true) {
            $msg = array(
                'status' => 'ok',
                'msg' => 'Berhasil menambahkan data !'
            );
        } else {
            $this->session->set_flashdata('failed', 'Terjadi Kesalahan');
            redirect(base_url('admin/karya/tambah'),'refresh');    
        }
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect(base_url('admin/karya'),'refresh');    
    }

    function update()
    {
        $id = $this->input->post('id_karya');
        $data = $this->req->all(['id_karya' => false]);

        if ($this->karya->update($data, array('id_karya' => $id)) == true) {
            $msg = array(
                'status' => 'ok',
                'msg' => 'Berhasil mengubah data !'
            );
        } else {
            $msg = array(
                'status' => 'fail',
                'msg' => 'Gagal mengubah data !'
            );

            echo $this->db->last_query();
        }
        echo json_encode($msg);
    }


    function getNomorUrut()
    {
        echo json_encode($this->karya->getNomorUrut());
    }


    function set($id, $action)
    {
        if ($action == 'konfirmasi') {
            if ($this->karya->update(['status' => '1', 'konfirmasi_user' => $this->session->userdata('id_user')], ['id_karya' => $id]) == true) {
                $msg = array(
                    'status' => 'ok',
                    'msg' => 'Berhasil konfirmasi Karya !'
                );
            } else {
                $msg = array(
                    'status' => 'fail',
                    'msg' => 'Terjadi Kesalahan !'
                );
            }

            echo json_encode($msg);
        }
    }

    function delete($id)
    {

        if ($this->karya->delete(['id_karya' => $id]) == true) {
            $msg = array(
                'status' => 'ok',
                'msg' => 'Berhasil menghapus data !'
            );
        } else {
            $msg = array(
                'status' => 'fail',
                'msg' => 'Gagal menghapus data !'
            );
        }
        echo json_encode($msg);
    }
}
