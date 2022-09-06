<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf');
    }


    public function index()
    {
        $data['rows'] = $this->db->get('suara')->result();
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Laporan-Dompdf-Codeigniter.pdf";
        $this->pdf->load_view('suara', $data);
    }
}
