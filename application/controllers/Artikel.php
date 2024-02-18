<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{

    protected $public = array();
    protected $csrf;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Security_model', 'secure');
        $this->secure->isLogin();
        // Your own constructor code
        $this->public['title']     = 'Artikel';
        $this->public['menu']     = 'artikel';
        $this->public['submenu'] = '';
        $this->public['css']    = null;
        $this->public['script']    = null;
        $this->csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

        $this->load->model('Comment_model', 'comment');
        $this->load->model('Artikel_model', 'artikel');
        $this->load->model('Kategori_model', 'kategori');
        $this->load->model('Kab_kota_model', 'kabkota');
    }
    public function index()
    {

        $str_params = [];
        $kat = $this->input->get('kat');
        $status = $this->input->get('status');
        $kabkota = $this->input->get('kabkota');
        if ($kat != '99' && isset($kat)) {
            $str_params['d.id_kategori'] = $kat;
        }
        if ($status != '99' && isset($status)) {
            $str_params['a.status'] = $status;
        }
        if ($kabkota != '99' && isset($kabkota)) {
            $str_params['a.id_kk'] = $kabkota;
        }
        if ($this->session->userdata('role') == '2') {
            $str_params['a.id_kk'] = $this->session->userdata('id_kk');
        }
        //dd($str_params);

        //  canController('view artikel');
        $artikel = $this->artikel->findAllJoin($str_params);
        //  dd($artikel);
        foreach ($artikel as &$r) {
            $r['kategori'] = $this->kategori->findKategoriArtikelAllByArtikelID($r['id_artikel']);
        }
        $data['kategori'] = $this->kategori->findAll();
        $data['kabkota'] = $this->kabkota->findAll();
        //dd($artikel);
        $data['public']  = $this->public;
        $data['content'] = 'artikel/index';
        $data['data']    = $artikel;
        $data['csrf']    = $this->csrf;
        $this->load->view('layouts/main-layout/index', $data);
    }
    public function add()
    {
        $this->public['menu'] = 'tambah-artikel';
        $data['public']  = $this->public;
        $data['content'] = 'artikel/add';

        if ($this->session->userdata('role') == '1') {
            $kabkota = $this->kabkota->findAll();
        } else {
            $kabkota = $this->kabkota->findAllWhere(['id_kk' => $this->session->userdata('id_kk')]);
        }
        $data['kabkota'] = $kabkota;
        $data['kategori'] = $this->kategori->findAll();
        $data['csrf']    = $this->csrf;
        $this->load->view('layouts/main-layout/index', $data);
    }
    public function detail($id)
    {
        $artikel = $this->artikel->find($id);
        $data['data'] = $artikel;
        $data['kategori1'] = $this->kategori->findKategoriArtikelAllByArtikelID($artikel['id_artikel']);
        $data['comment'] = $this->comment->findAllWhere(['a.id_artikel' => $artikel['id_artikel']]);

        $data['public']  = $this->public;
        $data['content'] = 'artikel/detail';
        $data['csrf']    = $this->csrf;
        $this->load->view('layouts/main-layout/index', $data);
    }
    public function edit($id)
    {
        if ($this->session->userdata('role') == '1') {
            $kabkota = $this->kabkota->findAll();
        } else {
            $kabkota = $this->kabkota->findAllWhere(['id_kk' => $this->session->userdata('id_kk')]);
        }
        $data['kabkota'] = $kabkota;
        $data['public']  = $this->public;
        $data['content'] = 'artikel/edit';
        $data['kategori'] = $this->kategori->findAll();
        $artikel = $this->artikel->find($id);
        $data['data'] = $artikel;
        $data['kategori1'] = $this->kategori->findKategoriArtikelAllByArtikelID($artikel['id_artikel']);

        $data['csrf']    = $this->csrf;
        $this->load->view('layouts/main-layout/index', $data);
    }

    public function save()
    {
        $data = $this->input->post();
        $config['upload_path']   = './uploads/artikel';
        $config['allowed_types'] = 'png|jpg';
        $config['max_size']      = 5024;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);

        if ($_FILES['file_gambar_utama']['error'] !== 4) {
            $this->upload->do_upload('file_gambar_utama');
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $data['gambar_utama'] = $upload_data['file_name'];
        }
        if (!$data['slug']) {
            $data['slug'] = url_title($data['judul'], '-', TRUE);
        }

        unset($data['id_kategori']);
        $id =   $this->artikel->save($data);
        if ($data['id_artikel']) {
            $id = $data['id_artikel'];
        }

        $this->kategori->deleteKategoriArtikelWhere(['id_artikel' => $id]);

        foreach ($this->input->post('id_kategori') as $r) {
            $array = array(
                'id_artikel' => $id,
                'id_kategori' => $r,
                'id_ka' => '',
            );
            $this->kategori->saveKategoriArtikel($array);
        }

        $alert = alert('primary', 'Data berhasil disimpan.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
    public function delete()
    {
        $id = $this->input->post('id');
        $this->artikel->delete($id);
        $alert = alert('primary', 'Data berhasil dihapus.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
    public function save_comment()
    {
        $data = $this->input->post();
        // dd($data);
        $this->comment->save($data);
        $alert = alert('primary', 'Data berhasil disimpan.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
}
