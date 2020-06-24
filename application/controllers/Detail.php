<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function index(){
        $this->load->view('dashboard/detail');
    }
}