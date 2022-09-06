<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'form_validation');
        $this->load->model('Main_models');
    }

    public function index()
    {

        $data['title'] = 'Auth';
        $data['kandidat1'] = $this->db->get_where('suara', ['nama_kandidat' => 'Calon ke-1'])->num_rows();
        $data['kandidat2'] = $this->db->get_where('suara', ['nama_kandidat' => 'Calon ke-2'])->num_rows();
        $data['kandidat3'] = $this->db->get_where('suara', ['nama_kandidat' => 'Calon ke-3'])->num_rows();

        $this->load->view('template/templateheader');
        $this->load->view('front/home', $data);
        $this->load->view('template/templatefooter');
    }


    public function voting()
    {

        $data['title'] = 'Auth';
        $data['kandidat'] = $this->db->get('kandidat')->result();
        // menentukan user yg sudah memilih
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row();
        $this->load->view('template/templateheader');
        $this->load->view('front/voting', $data);
        $this->load->view('template/templatefooter');
    }


    public function visimisi($id_kandidat)
    {

        $data['title'] = 'Auth';
        $data['kandidat'] = $this->db->get_where('kandidat', ['id' => $id_kandidat])->row();
        $data['visi'] = $this->db->get_where('visimisi', ['kandidat_id' => $id_kandidat])->row();
        $this->load->view('template/templateheader');
        $this->load->view('front/visimisi', $data);
        $this->load->view('template/templatefooter');
    }

    public function pilih_kandidat()
    {
        $this->Main_models->pilih_kandidat();
        $this->Main_models->update_status_user();
        if ($this->db->affected_rows() > 0) {
            $result = ['success' => true];
        } else {
            $result = ['success' => false];
        }

        echo json_encode($result);
    }
}
