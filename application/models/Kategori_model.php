<?php
class Kategori_model extends CI_Model
{
    protected $table = 'tb_kategori';
    protected $primary_key = 'id_kategori';

    public function findAll()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function find($id)
    {
        return $this->db->get_where($this->table, [$this->primary_key => $id])->row_array();
    }

    public function save($data)
    {
        if ($data[$this->primary_key] != '') {
            $data['updated_by'] = $this->session->userdata('id_pengguna');
            $data['updated_at'] = date('Y-m-d H:i:s');
            $query = $this->db->set($data)->where($this->primary_key, $data[$this->primary_key]);
            $query->update($this->table);
        } else {
            $data['created_by'] = $this->session->userdata('id_pengguna');
            $data['created_at'] = date('Y-m-d H:i:s');
            $query = $this->db->set($data)->where($this->primary_key, $data[$this->primary_key]);
            $query->insert($this->table);
        }
    }
    public function saveKategoriArtikel($data)
    {
        if ($data['id_ka'] != '') {
            $data['updated_by'] = $this->session->userdata('id_pengguna');
            $data['updated_at'] = date('Y-m-d H:i:s');
            $query = $this->db->set($data)->where('id_ka', $data['id_ka']);
            $query->update('tb_kategori_artikel');
        } else {
            $data['created_by'] = $this->session->userdata('id_pengguna');
            $data['created_at'] = date('Y-m-d H:i:s');
            $query = $this->db->set($data)->where('id_ka', $data['id_ka']);
            $query->insert('tb_kategori_artikel');
        }
    }

    public function delete($id)
    {
        return $this->db->where($this->primary_key, $id)->delete($this->table);
    }
    public function findKategoriArtikelAllByArtikelID($id)
    {
        return $this->db->select('a.*,b.nama_kategori')
            ->join('tb_kategori b', 'b.id_kategori=a.id_kategori')
            ->where('a.id_artikel', $id)
            ->get('tb_kategori_artikel a')
            ->result_array();
    }
}
