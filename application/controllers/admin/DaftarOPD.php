<?php
defined('BASEPATH') or exit('No direct script access allowed');


class DaftarOPD extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DataModel');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data = array(
            'title' =>'Data',
            'controller' => $this,
            'data_instansi' => $this->DataModel->get_all_instansi() 
        );
        $this->load->view('admin/daftaropd', $data);
    }

    public function hapus(){
        $id_user=$this->uri->segment(4);
        $this->DataModel->hapus_user($id_user);
        redirect('admin/daftaropd');
    }

    public function gantipassword()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('pass1', 'Password Lama', 'required|trim' );
        $this->form_validation->set_rules('pwbaru', 'Password Baru', 'required|trim|matches[ulangpw]|min_length[6]' );
        $this->form_validation->set_rules('ulangpw','Ulang Password', 'required|trim|matches[pwbaru]|min_length[6]' );

        
        if ($this->form_validation->run()== false) {
            // $this->load->view('admin/DaftarOPD',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Belum Diubah</div>');
                redirect('admin/daftaropd');
        }else{
            $password_lama = $this->input->post('pass1');
            $password_baru = $this->input->post('pwbaru');
            if(!password_verify($password_lama, $data['user']['password'] )){
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pasword Anda Salah</div>');
                redirect('admin/daftaropd');
            }else{
                $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
                $this->db->set('password', $password_hash);
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('public.user');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Diubah</div>');
                redirect('admin/daftaropd');
            }
        }
    }
}
