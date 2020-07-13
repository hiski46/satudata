<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller
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
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->session->userdata('id');
        $data['user1'] = $this->DataModel->tampil_userid($id);

        $this->load->view('admin/dashboard', $data);
    }

    public function hapus($id_data){
        $id['id_data'] = $this->uri->segment(4);
        $this->DataModel->hapus_data($id);
        redirect('admin/dashboard');
        
    }

    public function edit(){
        $id= $this->input->post('id');
        $judul=$this->input->post('judul');
        
        
        $file=$_FILES['file']['name'];
        $keterangan=$this->input->post('keterangan');
        $kategori=$this->input->post('kategori');
        $tgl_perbarui=time();
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
                'id_data'=>$id,
                'judul'=>$judul,
                
                
                'file'=>$file,
                'kategori'=>$kategori,
                'keterangan'=>$keterangan,
                'tgl_perbarui'=>time()
            );
        }
        $this->DataModel->edit_data($id,$judul,$file,$kategori,$keterangan,$tgl_perbarui);
        redirect('admin/dashboard');
    }
}
