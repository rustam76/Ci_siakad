<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_matakuliah extends CI_Model
{
    public function tampilData()
    {
        $this->db->select('matakuliah.kd_mk, matakuliah.nama_mk, matakuliah.sks, dosen.nama_dosen');
        $this->db->from('matakuliah');
        $this->db->JOIN('dosen', 'dosen.nip=matakuliah.nip_dosen');
        $query = $this->db->get();
        return $query->result();
    }

    public function simpanMK($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_mk($where)
    {
        $this->db->where($where);
        $this->db->delete('matakuliah');
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
