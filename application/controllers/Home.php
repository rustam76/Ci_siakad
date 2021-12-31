<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->library('session');

		$data= array(
			'title' => "Home Siakad",
			'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
			);

		$this->load->view('admin/templates/admin_header', $data);
		$this->load->view('admin/templates/admin_sidebar', $data);
		$this->load->view('admin/home');
		$this->load->view('admin/templates/admin_footer');
	}
}
