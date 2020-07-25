<?php
defined('BASEPATH') or exit('No direct script access aloowed');

class DataModel extends CI_Model
{
    public function get_all_instansi()
    {
        $query = $this->db->select('*')->where('role_id', '2')->order_by('id', 'DESC')->get('public.user');
        return $query->result();
    }


    public function tampil_userid($id)
    {
        // $query = $this->db->select('*')->where('id_owner', $id)->get('public.data');
        // return $query->result();
        $this->db->select('*');
        $this->db->where('id_owner');
        $this->db->from('public.data');
        $this->db->order_by('id_data', 'ASC');

<<<<<<< HEAD
        return $this->db->get();
    }
=======
        public function tampildata()
        {
            $query = $this->db->select('*')->where('id_data', NULL)->get('public.data');
            return $query->result();
        }

        public function input_data($data,$table){
            $this->db->insert($table,$data);
        }
>>>>>>> 9dabe3f98f71498de34b988f4cc405d35d4aae1d

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($id)
    {
        $query = $this->db->delete("public.data", $id);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function hapus_data_user($id)
    {
        $query = $this->db->query('DELETE FROM public.data WHERE id_owner =' . $id . ';');
        return $query;
    }
    public function hapus_user($id)
    {
        $this->hapus_data_user($id);
        $query = $this->db->query('delete from public.user where id =' . $id . ';');
        return $query;
    }

    public function jumlah_data($id)
    {
        $query = $this->db->query('select * from public.data inner join public.user on public.data.id_owner = public.user.id where public.user.id=' . $id . ';');
        $total = $query->num_rows();
        return $total;
    }

<<<<<<< HEAD
    public function edit_data($id, $judul, $file, $kategori, $keterangan, $tgl_perbarui)
    {
        $query = $this->db->query("UPDATE public.data SET judul ='$judul',keterangan='$keterangan',kategori='$kategori',file='$file',tgl_perbarui='$tgl_perbarui' WHERE id_data=$id ;");
        return $query;
    }

    // public function namadangambar($id){
    //     $query = $this->db->select('*')->where('id',$id)->get('public.user');
    //     return $query->result();
    // }
    public function edit_foto($id, $foto)
    {
        $query = $this->db->query("UPDATE public.user SET image ='$foto' WHERE id=$id ;");
        return $query;
=======
        // public function namadangambar($id){
        //     $query = $this->db->select('*')->where('id',$id)->get('public.user');
        //     return $query->result();
        // }
        public function edit_foto($id,$foto)
        {
            $query = $this->db->query("UPDATE public.user SET image ='$foto' WHERE id=$id ;");
            return $query;
        }

        public function search($key){
            $this->db->like('LOWER(judul)', strtolower($key));
            $this->db->or_like('LOWER(keterangan)', strtolower($key));
            $this->db->or_like('LOWER(kategori)', strtolower($key));

            $hasil = $this->db->get('public.data')->result();
            return $hasil;
        }
<<<<<<< HEAD

        public function searchDataAdmin($key,$id){
            $this->db->like('LOWER(judul)', strtolower($key));
            $this->db->or_like('LOWER(keterangan)', strtolower($key));
            $this->db->or_like('LOWER(kategori)', strtolower($key));
            $this->db->where('id_owner', $id);

            $hasil = $this->db->get('public.data')->result();
            return $hasil;
        }

        public function searchUser($key){
            $this->db->like('LOWER(name)', strtolower($key));
            $this->db->or_like('LOWER(email)', strtolower($key));
            $this->db->where('role_id', 2);

            $hasil = $this->db->get('public.user')->result();
            return $hasil;
        }
=======
>>>>>>> 9dabe3f98f71498de34b988f4cc405d35d4aae1d
>>>>>>> 37f42118e4a2387b2a4705ad42bf5f1b9fb826a4
    }
}
