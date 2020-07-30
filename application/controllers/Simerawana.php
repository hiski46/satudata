<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simerawana extends CI_Controller {


	public function index(){
        $this->load->view('dashboard/simerawana');

        
        
    }

    public function cari(){
        $this->load->view('dashboard/simerawana');
    }
}