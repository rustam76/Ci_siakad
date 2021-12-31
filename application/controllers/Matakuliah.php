<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model(['M_matakuliah', 'M_dosen']);
        $this->load->library('session');
    }

    public function index()
    {
        

        //$data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array();
        //untuk menangkap user yang sedang login (diatas)

        $data= array(
        'title' => "Home Siakad Mata Kuliah",
        'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
        'matakuliah' => $this->M_matakuliah->tampilData()
        );

        //$title['judul'] = 'Matakuliah-Siakad';
        //$data['matakuliah'] = $this->M_matakuliah->tampilData();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar',$data);
        $this->load->view('admin/matakuliah', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function tambah()
    {
        

        //$data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array();
        //untuk menangkap user yang sedang login (diatas)

        $data= array(
        'title' => "Home Siakad Mata Kuliah",
        'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
        'dosen' => $this->M_dosen->tampilData()
        );

        //$title['judul'] = 'Tambah Matakuliah';
        //$data['dosen'] = $this->M_dosen->tampilData();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/v_formmk', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function simpan()
    {
        $data['kd_mk'] = $this->input->post('kd_mk');
        $data['nama_mk'] = $this->input->post('nama_mk');
        $data['sks'] = $this->input->post('sks');
        $data['nip_dosen'] = $this->input->post('nip');

        $this->db->insert('matakuliah', $data);
        redirect('Matakuliah');
    }

    public function hapus($kode_mk)
    {
        $where = array('kd_mk' => $kode_mk);
        $this->M_matakuliah->hapus_mk($where);
        redirect('Matakuliah');
    }

    public function edit($kode_mk)
    {
        $where = array('kd_mk' => $kode_mk);
        //$data['matakuliah'] = $this->M_matakuliah->edit_data($where, 'matakuliah')->result();

        $data= array(
            'title' => "Home Siakad Mata Kuliah",
            'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
            'matakuliah' => $this->M_matakuliah->edit_data($where, 'matakuliah')->result()
            );

        //untuk memanggil formnya
        //$title['judul'] = 'Form Edit';
        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/v_editMK', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function update()
    {
        $kd_mk = $this->input->post('kd_mk');
        $nama = $this->input->post('nama_mk');
        $sks = $this->input->post('sks');

        $data = array(
            'kd_mk' => $kd_mk,
            'nama_mk' => $nama,
            'sks' => $sks
        );

        $where = array('kd_mk' => $kd_mk);

        $this->M_matakuliah->update_data($where, $data, 'matakuliah');
        redirect('Matakuliah');
    }
}
