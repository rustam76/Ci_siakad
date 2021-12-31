<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model(['M_mahasiswa', 'M_jurusan', 'M_dosen', 'M_krs']);
        $this->load->library('session');
    }

    public function index()
    {

        //$data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array();
        //untuk menangkap user yang sedang login (diatas)

        $data= array(
        'title' => "Home Siakad Mahasiswa",
        'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
        'mahasiswa' => $this->M_mahasiswa->tampilData()
        );

        //$title['judul'] = 'Data Mahasiswa';
        //$data['mahasiswa'] = $this->M_mahasiswa->tampilData();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar',$data);
        $this->load->view('admin/mahasiswa', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function tambah()
    {

        //$title['judul'] = 'Tambah Mahasiswa';

        //$data['jurusan'] = $this->M_jurusan->tampilData();
        //$data['dosen'] = $this->M_dosen->tampilData();
        // //$data['krs'] = $this->M_krs->tampilData();

        $data= array(
            'title' => "Tambah Mahasiswa",
            'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
            'jurusan' => $this->M_jurusan->tampilData(),
            'dosen' => $this->M_dosen->tampilData()
            );

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/v_formMHS', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function simpan()
    {
        //konfigurasi file yang akan diupload
        $config['upload_path'] = "./assets/foto_mhs";
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['max_size'] = 2048;
        $config['max_width'] = 2024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('Mahasiswa/tambah', $error);
        } else {
            //menangkap data isian dari form inputan
            $data['npm'] = $this->input->post('npm');
            $data['nama_mhs'] = $this->input->post('nama_mhs');
            $data['alamat'] = $this->input->post('alamat');
            $data['kd_jur'] = $this->input->post('kd_jur');
            $data['nip_pembimbing'] = $this->input->post('nip');
            $data['foto'] = $this->upload->data('file_name');

            //proses simpan data
            $this->db->insert('mahasiswa', $data);
            // echo "berhasil";
            redirect('Mahasiswa');
        }
    }

    public function hapus($npm_mhs)
    {
        $where = array('npm' => $npm_mhs);
        $this->M_mahasiswa->hapus_mahasiswa($where);
        redirect('Mahasiswa');
    }

    // public function tampil($npm_mhs)
    // {
    //     $where = array('npm' => $npm_mhs);

    //     $title['judul'] = 'Tampil KRS';
    //     // $data['mahasiswa'] = $this->M_mahasiswa->tampil($where);
    //     $data['krs'] = $this->M_krs->tampilData($where);

    //     $this->load->view('admin/templates/admin_header', $title);
    //     $this->load->view('admin/templates/admin_sidebar');
    //     $this->load->view('admin/krs', $data);
    //     $this->load->view('admin/templates/admin_footer');
    // }
}
