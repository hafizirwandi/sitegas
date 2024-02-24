<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slideshow extends CI_Controller
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
        $this->public['title']     = 'Slideshow';
        $this->public['menu']     = 'slideshow';
        $this->public['submenu'] = '';
        $this->public['css']    = null;
        $this->public['script']    = null;
        $this->csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

        $this->load->model('Slideshow_model', 'slideshow');
    }
    public function index()
    {
        $data['public']  = $this->public;
        $data['content'] = 'slideshow/index';
        $data['data']    = $this->slideshow->findAll();
        $data['csrf']    = $this->csrf;
        $this->load->view('layouts/main-layout/index', $data);
    }
    public function add()
    {
        $this->public['menu'] = 'tambah-slideshow';
        $data['public']  = $this->public;
        $data['content'] = 'slideshow/add';
        $data['csrf']    = $this->csrf;
        $this->load->view('layouts/main-layout/index', $data);
    }

    public function edit($id)
    {

        $data['public']  = $this->public;
        $data['content'] = 'slideshow/edit';
        $slideshow = $this->slideshow->find($id);
        $data['data'] = $slideshow;

        $data['csrf']    = $this->csrf;
        $this->load->view('layouts/main-layout/index', $data);
    }

    public function save()
    {
        $data = $this->input->post();
        $config['upload_path']   = './uploads/slideshow';
        $config['allowed_types'] = 'png|jpg';
        $config['max_size']      = 5024;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);

        if ($_FILES['file_slideshow']['error'] !== 4) {
            $this->upload->do_upload('file_slideshow');
            $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
            $data['slideshow'] = $upload_data['file_name'];
        }


        $this->slideshow->save($data);

        $alert = alert('primary', 'Data berhasil disimpan.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
    public function delete()
    {
        $id = $this->input->post('id');
        $this->slideshow->delete($id);
        $alert = alert('primary', 'Data berhasil dihapus.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
}
