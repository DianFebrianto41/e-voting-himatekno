<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();

        if ($this->session->userdata('level') != 'admin') {
            redirect('auth');
        }
        $this->load->model('Main_models');
    }


    public function index()
    {

        $data['total_user'] = $this->db->get('user')->num_rows();
        $data['total_suara'] = $this->db->get('suara')->num_rows();

        $data['kandidat1'] = $this->db->get_where('suara', ['nama_kandidat' => 'Calon ke-1'])->num_rows();
        $data['kandidat2'] = $this->db->get_where('suara', ['nama_kandidat' => 'Calon ke-2'])->num_rows();
        $data['kandidat3'] = $this->db->get_where('suara', ['nama_kandidat' => 'Calon ke-3'])->num_rows();

        $this->load->view('template/admin_sidebar');
        $this->load->view('template/admin_header');
        $this->load->view('admin/dashboard', $data);

        $this->load->view('template/admin_footer');
    }
}
