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

        public function hapus_data_user($id){
            $query = $this->db->query('DELETE FROM public.data WHERE id_owner ='.$id.';');
            return $query;
        }
        public function hapus_user($id){
            $this->hapus_data_user($id);
            $query = $this->db->query('delete from public.user where id ='.$id.';');
            return $query;
        
        }

        public function jumlah_data($id){
            $query=$this->db->query('select * from public.data inner join public.user on public.data.id_owner = public.user.id where public.user.id='.$id.';');
            $total = $query->num_rows();
            return $total;
        }

        public function edit_data($id){
            $query = $this->db->query('UPDATE public.data SET judul ='.$id->judul.',keterangan='.$id->keterangan.',kategori='.$id->kategori.'file='.$id->file.'tgl_perbarui='.$id->tgl_perbarui.'WHERE id_data='.$id->id.';');
        }
    }
    
?>