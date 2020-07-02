<?php
defined('BASEPATH') or exit('No direct script access allowed');


class DaftarOPD extends CI_Controller
{
    public function index()
    {

        $this->load->view('admin/daftaropd');
    }
}
