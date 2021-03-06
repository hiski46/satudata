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
        $this->load->library('form_validation');
        $this->load->model('DataModel');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id = $this->session->userdata('id');
        $data['user1'] = $this->DataModel->tampil_userid($id);

        $this->load->view('admin/dashboard', $data);
    }

    public function hapus($id_data)
    {
        $id['id_data'] = $this->uri->segment(4);
        $this->DataModel->hapus_data($id);
        redirect('admin/dashboard');
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');


        $file = $_FILES['file']['name'];
        $file_lama = $this->input->post('file_lama');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $tgl_perbarui = date('d F Y', time());
        if ($file == '') {
            $file = $file_lama;
        } else {
            $config['upload_path'] = '././upload/file';
            $config['allowed_types'] = 'jpg|gif|png|txt|xls|xlsx|doc|docx|pdf|xhtml|ppt|pptx';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                echo "download gagal";
                die;
            } else {
                $file = $this->upload->data('file_name');
            }
            $data = array(
                'id_data' => $id,
                'judul' => $judul,


                'file' => $file,
                'kategori' => $kategori,
                'keterangan' => $keterangan,
                'tgl_perbarui' => time()
            );
        }
        $this->DataModel->edit_data($id, $judul, $file, $kategori, $keterangan, $tgl_perbarui);
        redirect('admin/dashboard');
    }

    public function foto()
    {
        $id = $this->session->userdata('id');

        $foto = $_FILES['foto']['name'];

        if ($foto == '') {
            redirect('admin/detailadmin');
        } else {
            $config['upload_path'] = '././upload/foto';
            $config['allowed_types'] = 'jpg|gif|png';
            $config['max_size']             = 10000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                echo "download gagal";
                die;
            } else {
                $foto = $this->upload->data('file_name');
            }
        }
        $this->DataModel->edit_foto($id, $foto);
        redirect('admin/detailadmin');
    }

    public function cari()
    {
        $id = $this->session->userdata('id');
        $keyword = $this->input->post('data');
        $dat['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $dat['user1'] = $this->DataModel->searchDataAdmin($keyword, $id);
        $this->load->view('admin/dashboard_cari', $dat);
    }
}
