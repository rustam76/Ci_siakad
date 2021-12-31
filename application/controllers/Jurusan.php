<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_jurusan');
        $this->load->library('session');
    }

    public function index()
    {


        $data= array(
        'title' => "Home Siakad Jurusan",
        'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
        'jurusan' => $this->M_jurusan->tampilData()
        );

        //$title['judul'] = 'Jurusan-Siakad';
        //$data['jurusan'] = $this->M_jurusan->tampilData();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar',$data);
        $this->load->view('admin/jurusan', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function tambah()
    {
        //$title['judul'] = 'Tambah Jurusan';

        $data= array(
            'title' => "Tambah Jurusan",
            'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
            );

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/v_formJUR', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function simpan()
    {
        $data['kd_jur'] = $this->input->post('kd_jur');
        $data['nama_jur'] = $this->input->post('nama_jur');

        $this->db->insert('jurusan', $data);
        redirect('Jurusan');
    }

    public function hapus($kode_jurusan)
    {
        $where = array('kd_jur' => $kode_jurusan);
        $this->M_jurusan->hapus_jurusan($where);
        redirect('Jurusan');
    }

    public function edit($kode_jurusan)
    {
        $where = array('kd_jur' => $kode_jurusan);
        //$data['jurusan'] = $this->M_jurusan->edit_data($where, 'jurusan')->result();

        $data= array(
            'title' => "Home Siakad Jurusan",
            'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
            'jurusan' => $this->M_jurusan->edit_data($where, 'jurusan')->result()
            );

        //untuk memanggil formnya
        $title['judul'] = 'Form Edit Jurusan';
        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/v_editJUR', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function update()
    {
        $kd_jur = $this->input->post('kd_jur');
        $nm_jur = $this->input->post('nama_jur');

        $data = array(
            'kd_jur' => $kd_jur,
            'nama_jur' => $nm_jur
        );

        $where = array('kd_jur' => $kd_jur);

        $this->M_jurusan->update_data($where, $data, 'jurusan');
        redirect('Jurusan');
    }
}
