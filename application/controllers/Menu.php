<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    protected $public = array();
    protected $csrf;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Security_model', 'secure');
        $this->secure->isLogin();
        // Your own constructor code
        $this->public['title']     = 'Menu';
        $this->public['menu']     = 'menu';
        $this->public['submenu'] = '';
        $this->public['css']    = null;
        $this->public['script']    = null;
        $this->csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

        $this->load->model('Menu_model', 'menu');
    }
    public function index()
    {
        //  canController('view menu');
        $this->public['script'] =  'menu/script';
        $data['public']  = $this->public;
        $data['content'] = 'menu/index';
        $data['data']     = $this->menu->find('1');
        $data['csrf']    = $this->csrf;

        $this->load->view('layouts/main-layout/index', $data);
    }


    public function save()
    {
        $data = $this->input->post();

        $this->menu->save($data);
    }
    public function delete()
    {

        $id = $this->input->post('id');
        $this->menu->delete($id);
        $alert = alert('primary', 'Data berhasil dihapus.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
}
