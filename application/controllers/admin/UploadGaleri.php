<?php
defined('BASEPATH') or exit('No direct script access allowed');


class UploadGaleri extends CI_Controller
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
        $id = $this->session->userdata('id');
        $data['foto'] = $this->DataModel->get_all_fotobyid($id);

        $this->load->view('admin/uploadgaleri', $data);
    }

    public function hapus($id_data)
    {
        $id['id'] = $this->uri->segment(4);
        $this->DataModel->hapus_foto($id);
        redirect('admin/UploadGaleri');
    }

    public function upload()
    {
        $judul = $this->input->post('judul');
        $file = $_FILES['file']['name'];
        $keterangan = $this->input->post('keterangan');
        $owner = $this->session->userdata('id');

        if ($file = '') {
        } else {
            $config['upload_path'] = '././upload/foto';
            $config['allowed_types'] = 'jpg|gif|png';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                echo "download gagal";
                die;
            } else {
                $file = $this->upload->data('file_name');
            }
            $data = array(
                'gambar' => $file,
                'judul' => $judul,
                'keterangan' => $keterangan,
                'id_owner' => $owner,
                'tanggal' => date('d F Y', time())
            );

            $this->DataModel->input_foto($data, 'public.galeri');
            // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">  Anda Berhasil Menambahkan Data </div>');
            redirect('admin/uploadgaleri');
        }
    }
}
