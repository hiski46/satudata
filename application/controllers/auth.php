<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('DataModel');
    }

	public function index(){
        $this->load->view('dashboard/satudata');

        
        
    }

    public function cari(){
        $key = $this->input->post('data');
        $this->form_validation->set_rules('data', 'data', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('dashboard/satudata');
        }else{
            $data['data']=$this->DataModel->search($key);
            $this->load->view('dashboard/view',$data);
        }
        
        
    }
}