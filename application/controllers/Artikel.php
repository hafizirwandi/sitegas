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

        $this->load->model('Artikel_model', 'artikel');
        $this->load->model('Kategori_model', 'kategori');
    }
    public function index()
    {
        //  canController('view artikel');
        $artikel = $this->artikel->findAllJoin();
        foreach ($artikel as &$r) {
            $r['kategori'] = $this->kategori->findKategoriArtikelAllByArtikelID($r['id_artikel']);
        }
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

        $data['kategori'] = $this->kategori->findAll();
        $data['csrf']    = $this->csrf;
        $this->load->view('layouts/main-layout/index', $data);
    }
    public function detail()
    {
        $data['public']  = $this->public;
        $data['content'] = 'artikel/detail';

        $data['csrf']    = $this->csrf;
        $this->load->view('layouts/main-layout/index', $data);
    }
    public function edit($id = null)
    {

        $data['csrf']    = $this->csrf;
        $data['data']    = $this->artikel->find($id);

        $this->load->view('artikel/edit', $data);
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
            $data['slug'] = url_title($data['judul']);
        }

        unset($data['id_kategori']);
        $id =   $this->artikel->save($data);
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
}
