<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        // $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        // $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/login');
        }
    }
}
