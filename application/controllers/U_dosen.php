<?php
defined('BASEPATH') or exit('No direct script access allowed');

class U_dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('M_dosenusers');
    }

    public function index()
	{
		$this->load->library('session');

		$data= array(
			'title' => "Home Siakad User",
			'user'  => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
            'dosen' => $this->M_dosenusers->tampilData()
			);

		$this->load->view('users/templates/user_header',$data);
		$this->load->view('users/templates/user_sidebar',$data);
		$this->load->view('users/u_dosen',$data);
		$this->load->view('users/templates/user_footer');
	}

    public function tambah()
    {
        $title['judul'] = 'Tambah Dosen User';

        $this->load->view('users/templates/user_header', $title);
        $this->load->view('users/templates/user_sidebar');
        $this->load->view('users/v_formDSN');
        $this->load->view('users/templates/user_footer');
    }

   
}
