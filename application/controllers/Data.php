<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
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
        $this->load->view('dashboard/data', $data);
    }

    public function hitung($id)
    {
        $jlh = $this->DataModel->jumlah_data($id);
        echo $jlh;
    }

    public function userid($num = '')
    {
        $perpage = 5;
        $id = $this->uri->segment(3);
        $data['user1'] = $this->db->get_where('user', ['id' => $id])->row_array();
        $data['user'] = $this->DataModel->tampil_userid($id);
        $config['base_url'] = site_url();
        $config['total_rows'] = $this->DataModel->tampil_userid($id)->num_rows();
        $config['per_page'] = $perpage;

        $this->pagination->initialize($config);
        $this->load->view('dashboard/detail', $data);
    }
}
