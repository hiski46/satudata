<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DataModel');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data',
            'controller' => $this,
            'data_instansi' => $this->DataModel->get_all_instansi()
        );
        $this->load->view('dashboard/tentang', $data);
    }

    public function hitung($id)
    {
        $jlh = $this->DataModel->jumlah_data($id);
        echo $jlh;
    }

    public function userid()
    {
        $id = $this->uri->segment(3);
        $data['user'] = $this->DataModel->tampil_userid($id);
        $this->load->view('dashboard/detail', $data);
    }
}
