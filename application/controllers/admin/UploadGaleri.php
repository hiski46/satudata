<?php
defined('BASEPATH') or exit('No direct script access allowed');


class UploadGaleri extends CI_Controller
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
        $this->load->helper('form');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/uploadgaleri', $data);
    }
    

}