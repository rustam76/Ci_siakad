<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_dosen');
        $this->load->library('session');
    }

    public function index()
    {

        //$data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array();
        //untuk menangkap user yang sedang login (diatas)

        $data= array(
        'title' => "Home Siakad Dosen",
        'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
        'dosen' => $this->M_dosen->tampilData()
        );

        //$title['judul'] = 'Dosen-Siakad';
        //$data['dosen'] = $this->M_dosen->tampilData();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar',$data);
        $this->load->view('admin/dosen', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function tambah()
    {
        //$title['judul'] = 'Tambah Dosen';

        $data= array(
            'title' => "Tambah Dosen",
            'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
        );

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/v_formDSN', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function simpan()
    {
        //konfigurasi file yang akan diupload
        $config['upload_path'] = "./assets/foto_dosen";
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['max_size'] = 2048;
        $config['max_width'] = 2024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('Dosen/tambah', $error);
        } else {
            //menangkap data isian dari form inputan
            $data['nip'] = $this->input->post('nip');
            $data['nama_dosen'] = $this->input->post('nama_dosen');
            $data['alamat_dosen'] = $this->input->post('alamat');
            $data['no_telepon'] = $this->input->post('no_telepon');
            $data['foto'] = $this->upload->data('file_name');

            //proses simpan data
            $this->db->insert('dosen', $data);
            // echo "berhasil";
            redirect('Dosen');
        }
    }

    public function hapus($nip_dsn)
    {
        $where = array('nip' => $nip_dsn);
        $this->M_dosen->hapus_dosen($where);
        redirect('Dosen');
    }
}
