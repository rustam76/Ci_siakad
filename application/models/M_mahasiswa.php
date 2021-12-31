<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mahasiswa extends CI_Model
{
    public function tampilData()
    {
        $this->db->select('mahasiswa.npm, mahasiswa.nama_mhs, mahasiswa.alamat, jurusan.nama_jur, dosen.nama_dosen, mahasiswa.foto');
        $this->db->from('mahasiswa');
        $this->db->JOIN('jurusan', 'jurusan.kd_jur=mahasiswa.kd_jur');
        $this->db->JOIN('dosen', 'dosen.nip=mahasiswa.nip_pembimbing');
        $query = $this->db->get();
        return $query->result();
    }

    public function hapus_mahasiswa($where)
    {
        $this->db->where($where);
        $this->db->delete('mahasiswa');
    }

    // public function tampil($where)
    // {
    //     $this->db->where($where);
    //     $this->db->select('krs.semester, matakuliah.kd_mk, matakuliah.nama_mk, matakuliah.sks');
    //     $this->db->from('krs');
    //     $this->db->JOIN('matakuliah', 'matakuliah.kd_mk=krs.kd_mk');
    //     $query = $this->db->get();
    //     return $query->result();
    // }
}
