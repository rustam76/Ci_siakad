<?php
class Siakad extends CI_Controller {

    public function index() 
    {
        $this->load->library('session');

        //$data['user'] = $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array();
        //untuk menangkap user yang sedang login (diatas)

        $data= array(
        'title' => "Home Siakad",
        'user' => $this->db->get_where('user', ['npm' => $this->session->userdata('npm')] )->row_array(),
        );
      
        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('users/templates/user_sidebar', $data);
        $this->load->view('users/home',$data);
        $this->load->view('admin/templates/admin_footer');
    }

}
?>