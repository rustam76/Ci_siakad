<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_khs extends CI_Model
{
    public function tampilData($npm, $smt)
    {
        $where = array('npm' => $npm, 'semester' => $smt);
        $this->db->where($where);
        $this->db->select('krs.semester, matakuliah.kd_mk, matakuliah.nama_mk, matakuliah.sks, krs.npm');
        $this->db->from('krs');
        $this->db->JOIN('matakuliah', 'matakuliah.kd_mk=krs.kd_mk');
        $query = $this->db->get();
        return $query->result();
    }

    public function ambil_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function tampilkhsmhs($npm, $smt)
    {
        $where = array('npm' => $npm, 'semester' => $smt);
        $this->db->where($where);
        $this->db->select('krs.semester, matakuliah.kd_mk, matakuliah.nama_mk, matakuliah.sks, krs.npm');
        $this->db->from('krs');
        $this->db->JOIN('matakuliah', 'matakuliah.kd_mk=krs.kd_mk');
        $query = $this->db->get();
        return $query->result();
    }

}
