<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_user extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        
        $this->load->model('admin/M_user', 'user');
    }

    public function list()
    {
        $data = array(
            'title'  => 'User',
            'menu'   => 'user',
            'script' => 'user',
            'konten' => 'admin/user/list'
        );

        $this->load->view('admin/templates/templates', $data, FALSE);
    }

    function getUser()
    {
        echo json_encode($this->user->data_user());
    }


    function data()
    {
        error_reporting(0);
        $list = $this->user->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            // $idNa = $this->req->acak($field->id);
            $idNa = $field->id;
            $status = ($field->status) == '1' ? "<button class='btn btn-success btn-sm' id='on' data-id='$idNa'><i class='fas fa-toggle-on'></i> On</button>" : "<button class='btn btn-danger btn-sm' id='off' data-id='$idNa'><i class='fas fa-toggle-off'></i> Off</button>";
            // $idNa = $field->id;
            $button = "
                <button class='btn btn-danger btn-sm' id='delete' data-id='$idNa'><i class='fas fa-trash-alt'></i></button>
                <button class='btn btn-warning btn-sm' id='edit' data-id='$idNa'><i class='fas fa-pencil-alt'></i></button>
                <button class='btn btn-info btn-sm' id='reset' data-id='$idNa'><i class='fas fa-sync-alt'></i></button>
            ";
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->username;
            $row[] = $field->nama_user;
            // $row[] = $idNa;
            $row[] = $status;
            $row[] = $button;
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->user->count_all(),
            "recordsFiltered" => $this->user->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }

    function set($id, $action)
    {
        if ($action == 'on') {
            if ($this->user->update(['status' => '1'], ['id' => $id]) == true) {
                $msg = array(
                    'status' => 'ok',
                    'msg' => 'Berhasil Mengaktifkan Akun !'
                );
            } else {
                $msg = array(
                    'status' => 'fail',
                    'msg' => 'Gagal menambahkan data !'
                );
            }
            echo json_encode($msg);
        } elseif ($action == 'off') {
            if ($this->user->update(['status' => '0'], ['id' => $id]) == true) {
                $msg = array(
                    'status' => 'ok',
                    'msg' => 'Berhasil Me-nonaktifkan Akun !'
                );
            } else {
                $msg = array(
                    'status' => 'fail',
                    'msg' => 'Gagal Me-nonaktifkan data !'
                );
            }

            // echo $this->db->last_query();

            echo json_encode($msg);
        } elseif ($action == 'reset') {
            if ($this->user->update(['password' => $this->req->acak('123')], ['id' => $id]) == true) {
                $msg = array(
                    'status' => 'ok',
                    'msg' => 'Berhasil Me-reset Akun !'
                );
            } else {
                $msg = array(
                    'status' => 'fail',
                    'msg' => 'Gagal Me-reset data !'
                );
            }
            // echo $this->db->last_query();
            echo json_encode($msg);
        }
    }

    function get($id)
    {
        // $data = $this->user->get($id);
        $data = $this->db->get_where('t_user', ['id' => $id])->row();
        // foreach ($data as $key => $value) {
        //     if (strtolower($key) == 'id') {
        //         $data->$key = $this->req->acak($value);
        //     }
        // }
        echo json_encode($data);
    }

    function insert()
    {
        $custom = array(
            'password' => $this->req->acak('123')
        );
        $data = $this->req->all($custom);
        if ($this->user->insert($data) == true) {
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
        $id = $this->input->post('id');
        $data = $this->req->all(['id' => false]);

        // $this->req->print($data);

        $this->db->where(['id' => $id]);
        $this->db->update('t_user', $data);

        if ($this->db->affected_rows() > 0) {
            $msg = array(
                'status' => 'ok',
                'msg' => 'Berhasil mengubah data !'
            );
        } else {
            $msg = array(
                'status' => 'fail',
                'msg' => 'Gagal mengubah data !'
            );
        }
        echo json_encode($msg);
    }

    function delete($id)
    {
        if ($this->db->delete('t_user', ['id' => $id]) == true) {
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
