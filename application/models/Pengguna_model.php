<?php

class Pengguna_model extends CI_Model
{
  protected $table       = 'tb_pengguna';
  protected $primary_key  = 'id_pengguna';

  public function findAll()
  {
    return $this->db
      ->select('a.*')
      ->from($this->table . ' a')
      ->get()->result_array();
  }

  public function save($data)
  {
    $query = $this->db->set($data)->where($this->primary_key, $data[$this->primary_key]);
    if ($data[$this->primary_key] != '') {
      $query->update($this->table);
      return 'A';
    } else {
      $query->insert($this->table);
      return 'B';
    }
  }

  public function find($id = null)
  {
    return $this->db
      ->where($this->primary_key, $id)
      ->get($this->table)
      ->row_array();
  }

  public function delete($id)
  {
    return $this->db->where($this->primary_key, $id)->delete($this->table);
  }

  public function findUsername($username)
  {
    return $this->db->where('username', $username)->get($this->table);
  }

  public function authLogin($data)
  {
    return $this->db->where('username', $data['username'])
      ->where('password', $data['password'])
      ->get($this->table);
  }
}
