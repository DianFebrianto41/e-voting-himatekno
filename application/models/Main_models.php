<?php

class Main_models extends CI_Model
{

    private $table = 'user';

    private $id = 'id_admin';


    public function cekAdmin($nim)
    {
        return $this->db->get_where($this->table, ['nim' => $nim])->row_array();
    }

    public function insert($data, $table)
    {
        // $this->db->set($data);
        // echo $this->db->get_compiled_insert($table);
        // die;
        $this->db->insert($table, $data);
    }

    public function insert2($data, $table)
    {
        // $this->db->set($data);
        // echo $this->db->get_compiled_insert($table);die;
        $this->db->insert($table, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function update_data($table, $data, $where)
    {
        // $this->db->set($data);
        // $a = $this->db->get_compiled_update($table);
        // var_dump($a);
        // die;
        $this->db->update($table, $data, $where);
    }

    public function pilih_kandidat()
    {

        $data = [
            'user_id' => $this->input->post('user_id'),
            'nama_kandidat' => $this->input->post('nama_kandidat'),

        ];

        $this->db->insert('suara', $data);
    }

    public function update_status_user()
    {
        $data = ['status' => 1];


        $this->db->where('id', $this->input->post('user_id'));
        $this->db->update('user', $data);
    }
}
