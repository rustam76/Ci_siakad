<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dosen extends CI_Model
{
    public function tampilData()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $query = $this->db->get();
        return $query->result();
    }

    public function hapus_dosen($where)
    {
        $this->db->where($where);
        $this->db->delete('dosen');
    }
}
