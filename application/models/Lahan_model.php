<?php
class Lahan_model extends CI_Model
{
    protected $table = 'tb_lahan';
    protected $primary_key = 'id_lahan';

    public function findAll()
    {
        return $this->db->get($this->table)->result_array();
    }
    public function findAllByKelurahan($id)
    {
        return $this->db
            ->where('kelurahan', $id)->get($this->table)->result_array();
    }

    public function findAllByKategori($id)
    {
        return $this->db
            ->where('kategori', $id)->get($this->table)->result_array();
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

    public function delete($id)
    {
        return $this->db->where($this->primary_key, $id)->delete($this->table);
    }
    public function countAll()
    {
        return $this->db->select("
            (select count(b.id_lahan) from tb_lahan b where b.kategori='1') as mesjid,
            (select count(c.id_lahan) from tb_lahan c where c.kategori='2') as gereja,
            (select count(d.id_lahan) from tb_lahan d where d.kategori='3') as sekolah_agama,
            (select count(e.id_lahan) from tb_lahan e where e.kategori='4') as tanah_pemakaman,
        ")->get()->row_array();
    }
    public function countAllByStatusSertifikatAda()
    {
        return $this->db->select("
            (select count(b.id_lahan) from tb_lahan b where b.kategori='1' and (b.no_sertifikat!='' or b.no_sertifikat is not null)) as mesjid,
            (select count(c.id_lahan) from tb_lahan c where c.kategori='2' and (c.no_sertifikat!='' or c.no_sertifikat is not null)) as gereja,
            (select count(d.id_lahan) from tb_lahan d where d.kategori='3' and (d.no_sertifikat!='' or d.no_sertifikat is not null)) as sekolah_agama,
            (select count(e.id_lahan) from tb_lahan e where e.kategori='4' and (e.no_sertifikat!='' or e.no_sertifikat is not null)) as tanah_pemakaman,
        ")->get()->row_array();
    }
}
