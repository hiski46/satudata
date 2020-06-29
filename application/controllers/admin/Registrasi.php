<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }




    public function index()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[6]|matches[password2]', ['matches' => 'Password tidak sama', 'min_length' => 'Password terlalu Pendek']);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/registrasi');
        } else {

            $data =
                [
                    'name' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'image' => 'default.jpg',
                    'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                    'role_id' => 2,
                    'is_active' => 1,
                    'date' => time()

                ];
            $this->db->insert('public.user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Selamat akun baru berhasil dibuat,Silahkan Login </div>');
            redirect('admin/login');
        }
    }
}
