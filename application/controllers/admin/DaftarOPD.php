<?php
defined('BASEPATH') or exit('No direct script access allowed');


class DaftarOPD extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DataModel');
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
}
