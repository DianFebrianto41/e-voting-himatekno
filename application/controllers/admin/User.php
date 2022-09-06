<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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

        // $data['rows'] = $this->db->get('user')->result();

        $data['rows'] = $this->db->select('*, user.nama as nama_user')->from('user')->join('kelas', 'kelas.id_kelas = user.kelas_id', 'left')->get()->result();
        $this->load->view('template/admin_sidebar');
        $this->load->view('template/admin_header');
        $this->load->view('admin/user', $data);
        $this->load->view('template/admin_footer');
    }


    public function update()
    {

        $id  = $_GET['id'];
        $nim = $this->input->post('nim');
        $nama_user = $this->input->post('nama');
        $kelas_id = $this->input->post('nama');
        $email = $this->input->post('email');
        $status = $this->input->post('status');


        $data = array(
            'nim' => $nim,
            'nama' => $nama_user,
            'nama' => $kelas_id,
            'email' => $email,
            'status' => $status,
        );

        $where = array(
            'id' => $id,
        );

        // var_dump($data, $where);
        // die;

        $this->Main_models->update_data('user', $data, $where);
        $this->session->set_flashdata('message', '
        <div class="alert alert-warning" role="alert">
        Data Berhasil Diupdate!</div>');
        redirect('admin/user/');
    }

    public function hapus($id)
    {
        $this->db->delete('user', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">
            Data Berhasil Dihapus!</div>');
            redirect('admin/user');
        }
    }
}
