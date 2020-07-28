<?php
defined('BASEPATH') or exit('No direct script access allowed');


class DetailADMIN extends CI_Controller
{
     public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('admin/login');
        } elseif ($this->session->userdata('role_id') != 2) {
            redirect('admin/salah');
        }
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/detailadmin', $data);
    }

    public function gantiEmail()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('email', 'email', 'required|trim' );
        $this->form_validation->set_rules('pass', 'pass', 'required|trim' );
        

        if ($this->form_validation->run()== false) {
            $this->load->view('admin/DetailADMIN',$data);
        }else{
            $id=$this->session->userdata('id');
            $pass=$this->input->post('pass');
            $email=$this->input->post('email');
            if(!password_verify($pass, $data['user']['password'] )){
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pasword Salah</div>');
                redirect('admin/DetailADMIN');
            }else{
                    $this->db->set('email', $email);
                    $this->db->where('id', $id);
                    $this->db->update('public.user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Diubah</div>');
                    $this->logout();
            }
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">  Silahkan Login Dengan Email yang Baru </div>');
        redirect('admin/login');
    }
}
