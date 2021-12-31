<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dosenusers extends CI_Model
{
    public function tampilData()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $query = $this->db->get();
        return $query->result();
    }

}
