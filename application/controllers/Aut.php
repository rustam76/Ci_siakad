<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aut extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {

        $this->form_validation->set_rules('npm','Npm', 'required|trim', ['required'=>'tidak boleh kosong!'] );
        $this->form_validation->set_rules('password','Password', 'required|trim', ['required'=>'tidak boleh kosong!'] );

        if($this->form_validation->run() == FALSE)
        {
            $title['judul'] = 'Login-Siakad';
            $this->load->view('aut/login', $title);
        }
        else 

        if ($this->form_validation->run() == FALSE)
        {
            $title['judul'] = 'Login-Siakad';
            $this->load->view('aut/login', $title);
        } else
            {
                $this->login();
            }

    }

    private function login()
    {
        $npm=$this->input->post('npm');
        $password=$this->input->post('password');

        $user =$this->db->get_where('user', ['npm' => $npm])->row_array();
        
        if ($user)
        { //jika user login

            //cek password
            if(password_verify($password, $user['password'])) 
            {
                //pasword_verify(untuk mengecek pass)
                $data=array
                (
                    'npm' => $user['npm'],
                    'row_id' => $user['row_id']
                );

                $this->session->set_userdata($data);
                if($user['row_id'] ==1)
                {
                    redirect('Home');
                } else {
                    redirect('Siakad/siakad');
                }
                
            } 
            else 
            {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger" role="alert">
                        Maaf Password Salah!
                    </div>'
                );

                redirect('Aut');

            } 
            
        } else 
        {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger" role="alert">
                    NPM Tidak Terdaftar!
                </div>'
            );
            redirect('Aut');
        }

    }

    public function logout ()
    {
        $this->session->unset_userdata['npm'];
        $this->session->unset_userdata['root_id'];

        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-danger" role="alert">
                Berhasil Logout!
            </div>'
        );
        redirect('Aut');
    }
    


}
