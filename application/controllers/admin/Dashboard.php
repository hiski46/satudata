<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('admin/login');
        } elseif ($this->session->userdata('role_id') != 2) {
            redirect('admin/salah');
        }
        $this->load->model('DataModel');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->session->userdata('id');
        $data['user1'] = $this->DataModel->tampil_userid($id);

        $this->load->view('admin/dashboard', $data);
    }
}
