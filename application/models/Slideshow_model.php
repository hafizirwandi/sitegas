<?php
class Slideshow_model extends CI_Model
{
    protected $table = 'tb_slideshow';
    protected $primary_key = 'id_slideshow';



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
}
