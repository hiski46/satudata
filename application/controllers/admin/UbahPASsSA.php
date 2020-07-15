<?php
defined('BASEPATH') or exit('No direct script access allowed');


class UbahPASsSA extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('admin/login');
        } elseif ($this->session->userdata('role_id') != 1) {
            redirect('admin/salah');
        }
    }
    public function index()
    {
        $this->load->view('admin/ubahpassSA');
    }
}
