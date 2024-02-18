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
        return $this->db->select('a.*,b.nama as nama_pengguna,c.logo,c.nama_kab_kota')
            ->join('tb_pengguna b', 'b.id_pengguna=a.created_by', 'left')
            ->join('tb_kab_kota c', 'c.id_kk=b.id_kk', 'left')
            ->where('a.id_artikel', $id)
            ->get($this->table . ' a')->row_array();
    }
    public function findWhere($where)
    {
        return $this->db->select('a.*,b.nama as nama_pengguna,c.logo,c.nama_kab_kota')
            ->join('tb_pengguna b', 'b.id_pengguna=a.created_by', 'left')
            ->join('tb_kab_kota c', 'c.id_kk=b.id_kk', 'left')
            ->where($where)
            ->get($this->table . ' a')->row_array();
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
    public function findAllJoin($str_params = null)
    {
        $query =  $this->db->select("a.*,b.nama as nama_pengguna,c.logo,c.nama_kab_kota,(select count('d.id_comment') from tb_comment d where d.id_artikel=a.id_artikel) as jlh_comment")
            ->join('tb_pengguna b', 'b.id_pengguna=a.created_by', 'left')
            ->join('tb_kab_kota c', 'c.id_kk=a.id_kk', 'left')
            ->join('tb_kategori_artikel d', 'd.id_artikel=a.id_artikel', 'left');
        if ($str_params) {
            $query->where($str_params);
        }
        return $query->get($this->table . ' a')->result_array();
    }

    public function findAllArtikel($str_params = null)
    {

        $query =  $this->db->select('a.*,b.nama as nama_pengguna,c.logo,c.nama_kab_kota')
            ->join('tb_pengguna b', 'b.id_pengguna=a.created_by', 'left')
            ->join('tb_kab_kota c', 'c.id_kk=b.id_kk', 'left')
            ->join('tb_kategori_artikel d', 'd.id_artikel=a.id_artikel', 'left');

        if ($str_params) {
            $query->where($str_params);
        }

        return  $query->get($this->table . ' a')->result_array();
    }
    public function findAllLatest($limit = 3)
    {

        $query =  $this->db->select('a.*,b.nama as nama_pengguna,c.logo,c.nama_kab_kota')
            ->join('tb_pengguna b', 'b.id_pengguna=a.created_by', 'left')
            ->join('tb_kab_kota c', 'c.id_kk=b.id_kk', 'left')
            ->join('tb_kategori_artikel d', 'd.id_artikel=a.id_artikel', 'left')
            ->where('a.status', '1')
            ->order_by('a.published_at', 'desc');
        return  $query->get($this->table . ' a', $limit)->result_array();
    }
    public function findAllWhereLimit($str_params = null, $limit = null)
    {

        $query =  $this->db->select('a.*,b.nama as nama_pengguna,c.logo,c.nama_kab_kota')
            ->join('tb_pengguna b', 'b.id_pengguna=a.created_by', 'left')
            ->join('tb_kab_kota c', 'c.id_kk=b.id_kk', 'left')
            ->join('tb_kategori_artikel d', 'd.id_artikel=a.id_artikel', 'left');

        if ($str_params) {
            $query->where($str_params);
        }

        return  $query->get($this->table . ' a', $limit)->result_array();
    }
    public function  getDashboardByKategori()
    {
        return  $this->db->select(
            "c.*,(select count('a.id_artikel') from tb_artikel a 
            join tb_kategori_artikel b on b.id_artikel = a.id_artikel
            where b.id_kategori = c.id_kategori  and a.status='1') as jlh"
        )->from('tb_kategori c')->order_by('jlh', 'desc')->get()->result_array();
    }
    public function  getDashboardByKabkota()
    {
        return  $this->db->select(
            "c.*,(select count('a.id_artikel') from tb_artikel a 
            where a.id_kk = c.id_kk  and a.status='1') as jlh"
        )->from('tb_kab_kota c')->order_by('jlh', 'desc')->get()->result_array();
    }
    public function getAllDataPerMonth($id_kk)
    {
        $year = date('Y');
        return $this->db->query("SELECT LPAD(b.month, 2, '0') AS bulan, IFNULL(a.jlh, 0) AS jumlah_artikel
            FROM (
                SELECT 1 AS month UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 UNION SELECT 6
                UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10 UNION SELECT 11 UNION SELECT 12
            ) AS b
            LEFT JOIN (
                SELECT SUBSTRING(published_at, 6, 2) AS bulan, COUNT(id_artikel) AS jlh
                FROM tb_artikel 
                WHERE id_kk='$id_kk' and status = '1' AND (published_at BETWEEN '$year-01-01' AND '$year-12-31') 
                GROUP BY bulan
            ) AS a ON a.bulan = LPAD(b.month, 2, '0') order by bulan asc")->result_array();
    }
}
