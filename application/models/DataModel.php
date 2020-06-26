<?php 
    defined('BASEPATH') OR exit ('No direct script access aloowed');

    class DataModel extends CI_Model 
    {
        public function get_all_instansi(){
            $query = $this->db->select('*')->where('role_id','2')->order_by('id', 'DESC')->get('public.user');
            return $query->result();
        }
    }
    
?>