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
        $this->db->where('id_owner', $id);
        $this->db->order_by('id_data', 'ASC');

        return $this->db->get('public.data')->result();
    }
    public function tampildata()
    {
        $query = $this->db->select('*')->where('id_data', NULL)->get('public.data');
        return $query->result();
    }


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
    public function hapus_foto_user($id)
    {
        $query = $this->db->query('DELETE FROM public.galeri WHERE id_owner =' . $id . ';');
        return $query;
    }
    public function hapus_user($id)
    {
        $this->hapus_data_user($id);
        $this->hapus_foto_user($id);
        $query = $this->db->query('delete from public.user where id =' . $id . ';');
        return $query;
    }

    public function jumlah_data($id)
    {
        $query = $this->db->query('select * from public.data inner join public.user on public.data.id_owner = public.user.id where public.user.id=' . $id . ';');
        $total = $query->num_rows();
        return $total;
    }


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
    }
    // public function namadangambar($id){
    //     $query = $this->db->select('*')->where('id',$id)->get('public.user');
    //     return $query->result();
    // }


    public function search($key)
    {
        $this->db->like('LOWER(judul)', strtolower($key));
        $this->db->or_like('LOWER(keterangan)', strtolower($key));
        $this->db->or_like('LOWER(kategori)', strtolower($key));
        $this->db->or_like('LOWER(tanggal)', strtolower($key));

        $hasil = $this->db->get('public.data')->result();
        return $hasil;
    }

    public function searchDataAdmin($key, $id)
    {
        // $this->db->select('*');
        // $this->db->from('publi.data');
        // $this->db->where('id_owner', $id);
        // $this->db->like('LOWER(judul)', strtolower($key));
        // $this->db->or_like('LOWER(keterangan)', strtolower($key));
        // $this->db->or_like('LOWER(kategori)', strtolower($key));

        // return $this->db->get()->result();
        $query = $this->db->query("SELECT * FROM public.data WHERE id_owner =" . $id . " and (LOWER(judul) like '%" . strtolower($key) . "%' or LOWER(kategori) like '%" . strtolower($key) . "%' or LOWER(keterangan) like '%" . strtolower($key) . "%' or LOWER(tanggal) like '%" . strtolower($key) . "%' );");
        $total = $query->result();
        return $total;
    }

    public function searchUser($key)
    {
        $this->db->like('LOWER(nam)', strtolower($key));
        $this->db->or_like('LOWER(email)', strtolower($key));
        $this->db->where('role_id', 2);

        $hasil = $this->db->get('public.user')->result();
        return $hasil;
    }

    public function get_all_foto()
    {
        $query = $this->db->query('select * from public.galeri inner join public.user on public.galeri.id_owner = public.user.id ;');
        return $query->result();
    }

    public function get_all_fotobyid($id)
    {
        $query = $this->db->query('select * from public.galeri where id_owner=' . $id . ';');
        return $query->result();
    }

    public function hapus_foto($id)
    {
        $query = $this->db->delete("public.galeri", $id);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function input_foto($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
