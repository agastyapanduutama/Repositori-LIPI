<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_publikasi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //cek login
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }

        $this->load->model('admin/M_publikasi', 'publikasi');
    }

    public function list()
    {
        $data = array(
            'title'  => 'Data Publikasi',
            'menu'   => 'publikasi',
            'script' => 'publikasi',
            'konten' => 'admin/publikasi/list'
        );

        $this->load->view('admin/templates/templates', $data, FALSE);
    }

    function getPublikasi()
    {
        echo json_encode($this->publikasi->data_publikasi());
    }

    function data()
    {
        error_reporting(0);
        $list = $this->publikasi->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $idNa = $this->req->acak($field->id_publikasi);
            // $idNa = $field->id;
            $button = "
                <button class='btn btn-danger btn-sm' id='delete' data-id='$idNa'><i class='fas fa-trash-alt'></i></button>
                <button class='btn btn-warning btn-sm' id='edit' data-id='$idNa'><i class='fas fa-pencil-alt'></i></button>
            ";
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama_publikasi;
            $row[] = $field->keterangan;
            $row[] = $button;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->publikasi->count_all(),
            "recordsFiltered" => $this->publikasi->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }

    function get($id)
    {
        $data = $this->publikasi->get($id);
        foreach ($data as $key => $value) {
            if (strtolower($key) == 'id') {
                $data->$key = $this->req->acak($value);
            }
        }
        echo json_encode($data);
    }

    function insert()
    {
        $data = $this->req->all();
        if ($this->publikasi->insert($data) == true) {
            $msg = array(
                'status' => 'ok',
                'msg' => 'Berhasil menambahkan data !'
            );
        } else {
            $msg = array(
                'status' => 'fail',
                'msg' => 'Gagal menambahkan data !'
            );
        }
        echo json_encode($msg);
    }

    function update()
    {
        $id = $this->input->post('id_publikasi');
        $data = $this->req->all(['id_publikasi' => false]);

        // if ($this->anggota->update($data, array('sha1(id_anggota)' => $id)) == true) {
        if ($this->publikasi->update($data, array('id_publikasi' => $id)) == true) {
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

    function delete($id)
    {

        if ($this->publikasi->delete($this->req->id('id_publikasi', $id)) == true) {
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
