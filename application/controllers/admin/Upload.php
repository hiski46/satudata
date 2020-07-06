<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Upload extends CI_Controller
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

        $this->load->view('admin/upload', $data);
    }
    
    public function prosestambahgambar()
    {
        $judul=$this->input->post('judul');
        $file=$_FILES['file']['name'];
        $keterangan=$this->input->post('keterangan');
        $kategori=$this->input->post('kategori');
        $owner=$this->session->userdata('id');

        if ($file=''){}
        else{
            $config['upload_path']='././upload/file';
            $config['allowed_types']='jpg|gif|png|txt|xls|xlsx|doc|docx|pdf|xhtml|ppt|pptx';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                echo "download gagal"; 
                die;
            }else{
                $file=$this->upload->data('file_name');
            }
            $data=array(
                'judul'=>$judul,
                'tanggal'=>time(),
                'id_owner'=>$owner,
                'file'=>$file,
                'kategori'=>$kategori,
                'keterangan'=>$keterangan
            );

            $this->DataModel->input_data($data,'public.data');
            redirect('admin/dashboard');
        }
    }
    
}
