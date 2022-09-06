<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'form_validation');
    }

    public function index()
    {
        $data['title'] = 'Auth';
        $data['kelas'] = $this->db->get('kelas')->result();
        $this->load->view('template/templateheader');
        $this->load->view('front/auth', $data);
        $this->load->view('template/templatefooter');
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'nama', 'trim|required', [
            'required' => '%s tidak boleh kosong*'
        ]);

        $this->form_validation->set_rules('nim', 'nim', 'trim|required|is_unique[user.nim]', [
            'required' => '%s tidak boleh kosong*',
            'is_unique' => '%s sudah tersedia*'
        ]);

        $this->form_validation->set_rules('email', 'email', 'trim|required', [
            'required' => '%s tidak boleh kosong*'
        ]);

        $this->form_validation->set_rules('password', 'password', 'trim|required', [
            'required' => '%s tidak boleh kosong*'
        ]);




        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'nim' => $this->input->post('nim', true),
                'kelas_id' => $this->input->post('kelas_id', true),
                'email' => $this->input->post('email', true),
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'level' => 'mahasiswa'

            ];

            $this->db->insert('user', $data);
            if ($this->db->affected_rows() > 0) {
                echo "<script>
                alert('Registrasi berhasil');
                window.location.href = '" . site_url('auth') . "';
            
                </script>";
            }
        }
    }

    public function login()
    {
        $cek_nim = $this->db->get_where('user', ['nim' => $this->input->post('nim1', 'true')])->row();

        if ($cek_nim) {  //admin

            if (password_verify($this->input->post('password1'), $cek_nim->password)) {
                if ($cek_nim->level == 'admin') {

                    $data_session = [
                        'id'     => $cek_nim->id,
                        'nama'     => $cek_nim->nama,
                        'level'  => $cek_nim->level
                    ];

                    $this->session->set_userdata($data_session);
                    redirect('admin/dashboard');
                } else { // siswa

                    $data_session = [
                        'id'     => $cek_nim->id,
                        'nama'     => $cek_nim->nama,
                        'level'  => $cek_nim->level
                    ];

                    $this->session->set_userdata($data_session);
                    redirect('home');
                }
            } else {
                echo "<script>
                alert('password yang anda masukan salah');
                window.location.href = '" . site_url('auth') . "';
            
                </script>";
            }
        } else {
            echo "<script>
                alert('Nim yang anda masukan salah');
                window.location.href = '" . site_url('auth') . "';
                </script>";
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
