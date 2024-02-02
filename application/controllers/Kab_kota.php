<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kab_kota extends CI_Controller
{

    protected $public = array();
    protected $csrf;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Security_model', 'secure');
        $this->secure->isLogin();
        // Your own constructor code
        $this->public['title']     = 'Kabupaten Kota';
        $this->public['menu']     = 'kab-kota';
        $this->public['submenu'] = '';
        $this->public['css']    = null;
        $this->public['script']    = null;
        $this->csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

        $this->load->model('Kab_kota_model', 'kabkota');
    }
    public function index()
    {
        //  canController('view kabkota');
        $data['public']  = $this->public;
        $data['content'] = 'kabkota/index';
        $data['data']     = $this->kabkota->findAll();
        $data['csrf']    = $this->csrf;
        $this->load->view('layouts/main-layout/index', $data);
    }
    public function add()
    {
        $data['csrf']    = $this->csrf;
        $this->load->view('kabkota/add', $data);
    }
    public function edit($id = null)
    {

        $data['csrf']    = $this->csrf;
        $data['data']    = $this->kabkota->find($id);

        $this->load->view('kabkota/edit', $data);
    }

    public function save()
    {
        $data = $this->input->post();
        $config['upload_path']   = './uploads/logo_kab_kota';
        $config['allowed_types'] = 'png|jpg';
        $config['max_size']      = 5024;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);

        if ($_FILES['file_logo']['error'] !== 4) {
            $this->upload->do_upload('file_logo');
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $data['logo'] = $upload_data['file_name'];
        }
        $this->kabkota->save($data);
        $alert = alert('primary', 'Data berhasil disimpan.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
    public function delete()
    {

        $id = $this->input->post('id');
        $this->kabkota->delete($id);
        $alert = alert('primary', 'Data berhasil dihapus.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
}
