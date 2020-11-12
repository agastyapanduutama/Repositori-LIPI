<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_satker extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //cek login
        if (!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }

        $this->load->model('admin/M_satker', 'satker');
    }

    public function list()
    {
        $data = array(
            'title'  => 'Data Satuan Kerja',
            'menu'   => 'satker',
            'script' => 'satker',
            'konten' => 'admin/satker/list'
        );

        $this->load->view('admin/templates/templates', $data, FALSE);
    }

    function getSatker()
    {
        echo json_encode($this->satker->data_satker());
    }

    function data()
    {
        error_reporting(0);
        $list = $this->satker->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $idNa = $this->req->acak($field->id_satker);
            // $idNa = $field->id;
            $button = "
                <button class='btn btn-danger btn-sm' id='delete' data-id='$idNa'><i class='fas fa-trash-alt'></i></button>
                <button class='btn btn-warning btn-sm' id='edit' data-id='$idNa'><i class='fas fa-pencil-alt'></i></button>
            ";
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama_satker;
            $row[] = $field->keterangan;
            $row[] = $button;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->satker->count_all(),
            "recordsFiltered" => $this->satker->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }

    function get($id)
    {
        $data = $this->satker->get($id);
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
        if ($this->satker->insert($data) == true) {
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
        $id = $this->input->post('id_satker');
        $data = $this->req->all(['id_satker' => false]);

        // if ($this->anggota->update($data, array('sha1(id_anggota)' => $id)) == true) {
        if ($this->satker->update($data, array('id_satker' => $id)) == true) {
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

        if ($this->satker->delete($this->req->id('id_satker', $id)) == true) {
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
