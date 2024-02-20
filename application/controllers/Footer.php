<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Footer extends CI_Controller
{

    protected $public = array();
    protected $csrf;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Security_model', 'secure');
        $this->secure->isLogin();
        // Your own constructor code
        $this->public['title']     = 'Footer';
        $this->public['menu']     = 'footer';
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
        //  canController('view kabkota');
        $data['public']  = $this->public;
        $data['content'] = 'footer/index';
        $data['csrf']    = $this->csrf;
        $data['sub_content'] = 'footer/footer_one';
        $subcontent = $this->input->get('subcontent');
        if ($subcontent == 'footer-two') {
            $data['sub_content'] = 'footer/footer_two';
        } elseif ($subcontent == 'footer-three') {
            $data['sub_content'] = 'footer/footer_two';
        } elseif ($subcontent == 'footer-four') {
            $data['sub_content'] = 'footer/footer_two';
        }
        $this->load->view('layouts/main-layout/index', $data);
    }
}
