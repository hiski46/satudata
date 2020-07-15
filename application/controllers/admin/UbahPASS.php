<?php
defined('BASEPATH') or exit('No direct script access allowed');


class UbahPASS extends CI_Controller
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
        
        $this->form_validation->set_rules('lama', 'Password Lama', 'required|trim' );
        $this->form_validation->set_rules('baru', 'Password Baru', 'required|trim|matches[ulang]|min_length[6]' );
        $this->form_validation->set_rules('ulang','Ulang Password', 'required|trim|matches[baru]|min_length[6]' );

        
        if ($this->form_validation->run()== false) {
            $this->load->view('admin/ubahpass',$data);
        }else{
            $password_lama = $this->input->post('lama');
            $password_baru = $this->input->post('baru');
            if(!password_verify($password_lama, $data['user']['password'] )){
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pasword Lama Salah</div>');
                redirect('admin/ubahpass');
            }else{
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Baru Tidak Boleh Sama dengan yang baru</div>');
                    redirect('admin/ubahpass');
                }else {
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('public.user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Diubah</div>');
                    redirect('admin/ubahpass');
                }
            }
        }
        
        
    }

}
