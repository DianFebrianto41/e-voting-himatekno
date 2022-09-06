<?php

defined('BASEPATH') or exit('No direct script access allowed');
define('DOMPDF_ENABLE_AUTOLOAD', false);
define("DOMPDF_ENABLE_REMOTE", false);

class Suara extends CI_Controller
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
        $data['user'] = $this->db
            ->from('user')
            ->get()
            ->result();
        $data['rows'] = $this->db
            ->from('suara')
            ->join('user', 'user.id = suara.user_id')
            ->get()
            ->result();

        if (isset($_POST['date_from'])) {
            $from = $this->input->post('date_from');
            $to = $this->input->post('date_to');
            $data['rows'] = $this->db
                ->from('suara')
                ->join('user', 'user.id = suara.user_id')
                ->where('suara.created >=', $from)
                ->where('suara.created <=', $to)
                ->get()
                ->result();
        }

        $this->load->view('template/admin_sidebar');
        $this->load->view('template/admin_header');
        $this->load->view('admin/suara', $data);
        $this->load->view('template/admin_footer');
    }

    public function hapus($id_suara)
    {
        $this->db->delete('suara', ['id_suara' => $id_suara]);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata(
                'message',
                '
            <div class="alert alert-danger" role="alert">
            Data Berhasil Dihapus!</div>'
            );
            redirect('admin/suara');
        }
    }

    public function print()
    {
        $data['rows'] = $this->db
            ->from('suara')
            ->join('user', 'user.id = suara.user_id')
            ->get()
            ->result();
        $this->load->view('print/suara', $data);
    }

    public function pdf()
    {
        $this->load->Library('dompdf_gen');
        $data['rows'] = $this->db
            ->from('suara')
            ->join('user', 'user.id = suara.user_id')
            ->get()
            ->result();
        $html = $this->load->view('laporan/suara_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('laporan_Data_Pemilih.pdf', array('Attachment' => 0));
    }
}
