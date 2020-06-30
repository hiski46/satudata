<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Operator extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/operator');
    }
}
