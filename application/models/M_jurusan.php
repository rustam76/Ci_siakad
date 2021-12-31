<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jurusan extends CI_Model
{
    public function tampilData()
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        $query = $this->db->get();
        return $query->result();
    }

    public function simpanJUR($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_jurusan($where)
    {
        $this->db->where($where);
        $this->db->delete('jurusan');
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
