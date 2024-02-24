<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    protected $public = array();
    protected $csrf;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Security_model', 'secure');
        $this->secure->isLogin();
        // Your own constructor code
        if ($this->session->userdata('role') != '1') {
            show_error('Maaf, anda tidak diizinkan mengakses modul ini');
        }
        $this->public['title']     = 'Kategori';
        $this->public['menu']     = 'kategori';
        $this->public['submenu'] = '';
        $this->public['css']    = null;
        $this->public['script']    = null;
        $this->csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

        $this->load->model('Kategori_model', 'kategori');
    }
    public function index()
    {
        //  canController('view kategori');
        $data['public']  = $this->public;
        $data['content'] = 'kategori/index';
        $data['data']     = $this->kategori->findAll();
        $data['csrf']    = $this->csrf;
        $this->load->view('layouts/main-layout/index', $data);
    }
    public function add()
    {
        $data['csrf']    = $this->csrf;
        $this->load->view('kategori/add', $data);
    }
    public function edit($id = null)
    {

        $data['csrf']    = $this->csrf;
        $data['data']    = $this->kategori->find($id);

        $this->load->view('kategori/edit', $data);
    }

    public function save()
    {
        $data = $this->input->post();
        $data['slug'] = url_title($data['nama_kategori'], '-', TRUE);
        $this->kategori->save($data);
        $alert = alert('primary', 'Data berhasil disimpan.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
    public function delete()
    {

        $id = $this->input->post('id');
        $this->kategori->delete($id);
        $alert = alert('primary', 'Data berhasil dihapus.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
}
