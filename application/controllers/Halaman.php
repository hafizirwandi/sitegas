<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman extends CI_Controller
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
        $this->public['title']     = 'Halaman';
        $this->public['menu']     = 'halaman';
        $this->public['submenu'] = '';
        $this->public['css']    = null;
        $this->public['script']    = null;
        $this->csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
    }
    public function index()
    {
        $this->load->model('Halaman_model', 'halaman');
        //  canController('view kabkota');
        $data['public']  = $this->public;
        $data['content'] = 'halaman/index';
        $data['csrf']    = $this->csrf;
        $data['sub_content'] = 'halaman/hubungi_kami';
        $data['halaman'] = $this->halaman->find('1');
        $data['data'] = json_decode($data['halaman']['halaman_json'], TRUE);

        $subcontent = $this->input->get('subcontent');

        $this->load->view('layouts/main-layout/index', $data);
    }


    public function save()
    {
        $post = $this->input->post();

        $this->load->model('Halaman_model', 'halaman');

        $data = [
            'id_halaman' => $post['id_halaman'],
            'halaman_json' => json_encode($post),
        ];
        $this->halaman->save($data);
        $alert = alert('primary', 'Data berhasil disimpan.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
}
