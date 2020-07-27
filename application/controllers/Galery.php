<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DataModel');
    }

    public function index()
    {
        $data = array(
            'data_foto' => $this->DataModel->get_all_foto()
        );
        $this->load->view('dashboard/galery', $data);
    }
}
