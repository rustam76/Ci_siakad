<?php

class KHS extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_mahasiswa');
        $this->load->model('M_khs');
        $this->load->model('M_matakuliah');
        $this->load->library('session');
    }

    public function index()
    {
        //$data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array();
        //untuk menangkap user yang sedang login (diatas)

        $data= array(
        'title' => "Home Siakad KHS",
        'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
        'mhs' => $this->M_mahasiswa->tampilData()
        );

        //$title['judul'] = 'KHS';
        //$data['mhs'] = $this->M_mahasiswa->tampilData();

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar',$data);
        $this->load->view('admin/khs_filter',$data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function detail()
    {
        $npmnya = $this->input->post('npm');
        $semesternya = $this->input->post('smt');

        $data= array(
            'title' => "Tampil KRS",
            'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
            'mhs' => $this->M_mahasiswa->tampilData(),
            'khs' => $this->M_khs->tampilData($npmnya, $semesternya)
            );
        // // $where = array('npm' => $npm_mhs);
        // // $data['krs'] = $this->M_krs->tampilData();

        //$npmnya = $this->input->post('npm');
        //$semesternya = $this->input->post('smt');

        //$data['khs'] = $this->M_khs->tampilData($npmnya, $semesternya);
        //$title['judul'] = 'Tampil KRS';

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/khs', $data);
        $this->load->view('admin/templates/admin_footer', $data);
    }

    public function nilai()
    {
        $data= array(
            'title' => "Input Nilai",
            'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array()
            );

        //$title['judul'] = 'Tampil Nilai';

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar',$data);
        $this->load->view('admin/nilai',$data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function simpan_nilai()
    {
        $data= array(
            'npm' => $this->input->post('npm'),
            'kd_mk' => $this->input->post('kd_mk'),
            'semester' => $this->input->post('semester'),
            'nilai' => $this->input->post('nilai')
            );

            $this->db->insert('khs', $data);

            //$this->load->view('admin/templates/admin_header', $data);
            //$this->load->view('admin/templates/admin_sidebar',$data);
            //$this->load->view('admin/nilai',$data);
            //$this->load->view('admin/templates/admin_footer');
    }


}
