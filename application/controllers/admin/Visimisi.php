<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visimisi extends CI_Controller
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

        $data['kandidat'] = $this->db->from('kandidat')->get()->result();
        $data['rows'] = $this->db->from('visimisi')->join('kandidat', 'kandidat.id = visimisi.kandidat_id')->get()->result();

        $this->load->view('template/admin_sidebar');
        $this->load->view('template/admin_header');
        $this->load->view('admin/visimisi', $data);
        $this->load->view('template/admin_footer');
    }

    public function insert()
    {

        $kandidat_id = $this->input->post('kandidat_id');
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');

        $data = array(
            'kandidat_id' => $kandidat_id,
            'visi' => $visi,
            'misi' => $misi,
        );

        if ($this->Main_models->insert2($data, 'visimisi')) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
            Data Berhasil ditambahkan!</div>');

            redirect('admin/visimisi');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning" role="alert">
            Data gagal ditambakan!</div>');
            redirect('admin/visimisi');
        }
    }

    public function update()
    {

        $id_visi  = $_GET['id_visi'];
        $kandidat_id = $this->input->post('kandidat_id');
        $visi = $this->input->post('visi');
        $misi = $this->input->post('misi');


        $data = array(
            'kandidat_id' => $kandidat_id,
            'visi' => $visi,
            'misi' => $misi,


        );

        // var_dump($data);
        // die;

        $where = array(
            'id_visi' => $id_visi,
        );

        // var_dump($data, $where);
        // die;

        $this->Main_models->update_data('visimisi', $data, $where);
        $this->session->set_flashdata('message', '
        <div class="alert alert-warning" role="alert">
        Data Berhasil Diupdate!</div>');
        redirect('admin/visimisi/');
    }
    public function hapus($id_visi)
    {
        $this->db->delete('visimisi', ['id_visi' => $id_visi]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">
            Data Berhasil Dihapus!</div>');
            redirect('admin/visimisi');
        }
    }
}
