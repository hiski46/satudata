<?php
defined('BASEPATH') or exit('No direct script access allowed');


class DetailADMIN extends CI_Controller
{
    public function index()
    {

        $this->load->view('admin/detailadmin');
    }
}
