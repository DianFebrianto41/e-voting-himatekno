<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'form_validation');
        $this->load->model('Main_models');

        if ($this->session->userdata('level') != 'admin') {
            redirect('auth');
        }
    }


    public function index()
    {

        $data['rows'] = $this->db->get('kelas')->result();

        $this->load->view('template/admin_sidebar');
        $this->load->view('template/admin_header');
        $this->load->view('admin/kelas', $data);
        $this->load->view('template/admin_footer');
    }

    public function insert()
    {

        $nama = $this->input->post('nama');

        $data = array(
            'nama' => $nama,
        );

        if ($this->Main_models->insert2($data, 'kelas')) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
            Data Berhasil ditambahkan!</div>');

            redirect('admin/kelas');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning" role="alert">
            Data gagal ditambakan!</div>');
            redirect('admin/kelas');
        }
    }

    public function update()
    {

        $id_kelas  = $_GET['id_kelas'];
        $nama = $this->input->post('nama');


        $data = array(
            'nama' => $nama,
        );

        $where = array(
            'id_kelas' => $id_kelas,
        );

        // var_dump($data, $where);
        // die;

        $this->Main_models->update_data('kelas', $data, $where);
        $this->session->set_flashdata('message', '
        <div class="alert alert-warning" role="alert">
        Data Berhasil Diupdate!</div>');
        redirect('admin/kelas/');
    }

    public function hapus($id)
    {
        $this->db->delete('kelas', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">
            Data Berhasil Dihapus!</div>');
            redirect('admin/kelas');
        }
    }
}
