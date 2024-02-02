<?php
class Artikel_model extends CI_Model
{
    protected $table = 'tb_artikel';
    protected $primary_key = 'id_artikel';

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
            return $this->db->insert_id();
        }
    }

    public function delete($id)
    {
        return $this->db->where($this->primary_key, $id)->delete($this->table);
    }
    public function findAllJoin()
    {
        return $this->db->select('a.*,b.nama as nama_pengguna,c.logo,c.nama_kab_kota')
            ->join('tb_pengguna b', 'b.id_pengguna=a.created_by', 'left')
            ->join('tb_kab_kota c', 'c.id_kk=b.id_kk', 'left')
            ->get($this->table . ' a')->result_array();
    }
}
