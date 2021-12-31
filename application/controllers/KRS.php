<?php

class KRS extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model(['M_mahasiswa', 'M_matakuliah', 'M_krs']);
        $this->load->library('session');
    }

    public function index()
    {
        
        //$title['judul'] = 'KRS';
        //$mahasiswa = $this->M_mahasiswa->tampilData();
        //$matakuliah = $this->M_matakuliah->tampilData();
        //$data = array('mahasiswa' => $mahasiswa, 'matkul' => $matakuliah,);

        $data= array(
            'title' => "KRS",
            'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
            'mahasiswa' => $this->M_mahasiswa->tampilData(),
            'matakuliah' => $this->M_matakuliah->tampilData()
            );

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/v_formKRS', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function simpan()
    {
        $data['semester'] = $this->input->post('semester');
        $data['npm'] = $this->input->post('npm');
        $data['kd_mk'] = $this->input->post('kd_mk');

        $this->db->insert('krs', $data);
        redirect('KRS');
    }

    public function filter($npm_mhs)
    {
        $where = array('npm' => $npm_mhs);

        //$data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array();
        //untuk menangkap user yang sedang login (diatas)

        $data= array(
        'title' => "Filter",
        'krs' => $this->M_krs->ambil_data($where, 'krs')->result(),
        'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm_mhs')] )->row_array()
        );

        //$where = array('npm' => $npm_mhs);
        //$data['krs'] = $this->M_krs->ambil_data($where, 'krs')->result();

        //$title['judul'] = 'Filter';

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar',$data);
        $this->load->view('admin/filter_krs', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function tampilData()
    {

        $npmnya = $this->input->post('npm');
        $semesternya = $this->input->post('smt');
        
        $where = array('npm' => $npmnya);

        $data= array(
            'title' => "Filter",
            'krs' => $this->M_krs->tampilData($npmnya, $semesternya),
            'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm_mhs')] )->row_array()
            );
    

        //$data['krs'] = $this->M_krs->tampilData($npmnya, $semesternya);
        //$title['judul'] = 'Tampil KRS';

        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/templates/admin_sidebar', $data);
        $this->load->view('admin/krs', $data);
        $this->load->view('admin/templates/admin_footer');
    }
}
