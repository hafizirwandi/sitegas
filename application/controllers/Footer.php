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
        $this->load->model('Footer_one_model', 'footer_one');
        $this->load->model('Footer_two_model', 'footer_two');
        $this->load->model('Footer_three_model', 'footer_three');
        $this->load->model('Footer_four_model', 'footer_four');
        $this->load->model('Link_model', 'link');
        //  canController('view kabkota');
        $data['public']  = $this->public;
        $data['content'] = 'footer/index';
        $data['csrf']    = $this->csrf;
        $data['sub_content'] = 'footer/footer_one';
        $data['footer'] = $this->footer_one->find('1');

        $subcontent = $this->input->get('subcontent');
        if ($subcontent == 'footer-two') {
            $data['link'] = $this->link->findAllWhere(['footer' => 'footer-two']);
            $data['footer'] = $this->footer_two->find('1');
            $data['sub_content'] = 'footer/footer_two';
        } elseif ($subcontent == 'footer-three') {
            $data['link'] = $this->link->findAllWhere(['footer' => 'footer-three']);
            $data['footer'] = $this->footer_three->find('1');
            $data['sub_content'] = 'footer/footer_three';
        } elseif ($subcontent == 'footer-four') {
            $data['footer'] = $this->footer_four->find('1');
            $data['sub_content'] = 'footer/footer_four';
        }
        $this->load->view('layouts/main-layout/index', $data);
    }
    public function add_link($footer)
    {
        $data['csrf']    = $this->csrf;
        $data['footer'] = $footer;
        $this->load->view('footer/add_link', $data);
    }
    public function edit_link($id)
    {
        $this->load->model('Link_model', 'link');
        $data['csrf']    = $this->csrf;
        $data['data'] = $this->link->find($id);
        $this->load->view('footer/edit_link', $data);
    }

    public function save_link()
    {
        $this->load->model('Link_model', 'link');
        $data = $this->input->post();
        $this->link->save($data);
        $alert = alert('primary', 'Data berhasil disimpan.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }

    public function save_footer($type)
    {
        $data = $this->input->post();

        $this->load->model('Footer_one_model', 'footer_one');
        $this->load->model('Footer_two_model', 'footer_two');
        $this->load->model('Footer_three_model', 'footer_three');
        $this->load->model('Footer_four_model', 'footer_four');

        if ($type == 'one') {
            $config['upload_path']   = './uploads/footer';
            $config['allowed_types'] = 'png|jpg';
            $config['max_size']      = 5024;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if ($_FILES['file_logo']['error'] !== 4) {
                $this->upload->do_upload('file_logo');
                $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                $data['logo'] = $upload_data['file_name'];
            }
            $this->footer_one->save($data);
        }

        if ($type == 'two') {
            $this->footer_two->save($data);
        }

        if ($type == 'three') {
            $this->footer_three->save($data);
        }
        if ($type == 'four') {
            $this->footer_four->save($data);
        }

        $alert = alert('primary', 'Data berhasil disimpan.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
}
