<?php 
    defined('BASEPATH') OR exit ('No direct script access aloowed');

    class DataModel extends CI_Model 
    {
        public function get_all_instansi(){
            $query = $this->db->select('*')->where('role_id','2')->order_by('id', 'DESC')->get('public.user');
            return $query->result();
        }


        public function tampil_userid($id)
        {
            $query = $this->db->select('*')->where('id_owner',$id)->get('public.data');
            return $query->result();
        }

        public function input_data($data,$table){
            $this->db->insert($table,$data);
        }

        public function hapus_data($id){
            $query = $this->db->delete("public.data", $id);

            if($query){
                return true;
            }else {
                return false;
            }
        }

        public function jumlah_data($id){
            $query=$this->db->query('select * from public.data inner join public.user on public.data.id_owner = public.user.id where public.user.id='.$id.';');
            $total = $query->num_rows();
            return $total;
        }
    }
    
?>