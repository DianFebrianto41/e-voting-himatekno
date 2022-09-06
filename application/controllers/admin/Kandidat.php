<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kandidat extends CI_Controller
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

        $data['rows'] = $this->db->get('kandidat')->result();

        $this->load->view('template/admin_sidebar');
        $this->load->view('template/admin_header');
        $this->load->view('admin/kandidat', $data);
        $this->load->view('template/admin_footer');
    }

    public function insert()
    {

        $nama_kandidat = $this->input->post('nama_kandidat');


        $data = array(
            'nama_kandidat' => $nama_kandidat,



        );

        if ($this->Main_models->insert2($data, 'kandidat')) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
            Data Berhasil ditambahkan!</div>');

            redirect('admin/kandidat');
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-warning" role="alert">
            Data gagal ditambakan!</div>');
            redirect('admin/kandidat');
        }
    }

    public function update()
    {

        $foto = $_FILES['foto']['name'];

        if ($foto) {

            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
            $config['max_size']             = 2048;


            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo $this->upload->display_errors();
            } else {
                $cekFotoLama = $this->db->get_where('kandidat', ['id' => $this->input->post('id')])->row();
                if ($cekFotoLama->foto != 'default.png') {
                    unlink('/assets/img/' . $cekFotoLama->foto);
                }

                $fotoBaru = $this->upload->data('file_name');
                $kandidat['foto'] = $fotoBaru;
            }
        }
        $kandidat['nama_kandidat'] = $this->input->post('nama_kandidat', true);
        $kandidat['nama_calon'] = $this->input->post('nama_calon', true);

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kandidat', $kandidat);
        $this->session->set_flashdata('message', '
        <div class="alert alert-warning" role="alert">
        Data Berhasil Diupdate!</div>');

        redirect('admin/kandidat');
    }

    public function hapus($id)
    {
        $this->db->delete('kandidat', ['id' => $id]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">
            Data Berhasil Dihapus!</div>');
            redirect('admin/kandidat');
        }
    }
}
