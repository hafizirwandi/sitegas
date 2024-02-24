<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman_depan extends CI_Controller
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
        $this->public['title']     = 'Halaman Depan';
        $this->public['menu']     = 'halaman-depan';
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
        $this->load->model('Halaman_depan_model', 'halaman_depan');
        $this->load->model('Kategori_model', 'kategori');
        $this->load->model('Kab_kota_model', 'kabkota');
        //  canController('view kabkota');
        $this->public['script'] = 'halaman_depan/script';
        $data['public']  = $this->public;
        $data['content'] = 'halaman_depan/index';
        $data['csrf']    = $this->csrf;
        $data['sub_content'] = 'halaman_depan/section_one';
        $data['hd'] = $this->halaman_depan->find('1');

        $subcontent = $this->input->get('subcontent');
        $data['kategori'] = $this->kategori->findAll();
        $data['kabkota'] = $this->kabkota->findAll();
        if ($subcontent == 'section-two') {
            $data['hd'] = $this->halaman_depan->find('2');
            $data['sub_content'] = 'halaman_depan/section_two';
        }
        if ($subcontent == 'section-four') {
            $data['hd'] = $this->halaman_depan->find('4');
            $data['sub_content'] = 'halaman_depan/section_four';
        }
        if ($subcontent == 'section-five') {
            $data['hd'] = $this->halaman_depan->find('5');
            $data['sub_content'] = 'halaman_depan/section_five';
        }
        $data['data'] = json_decode($data['hd']['hd_json'], TRUE);


        $this->load->view('layouts/main-layout/index', $data);
    }


    public function save()
    {
        $post = $this->input->post();

        $this->load->model('Halaman_depan_model', 'halaman_depan');

        if ($post['id_hd'] == '1') {
            $config['upload_path']   = './uploads/halaman';
            $config['allowed_types'] = 'png|jpg';
            $config['max_size']      = 5024;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);

            if ($_FILES['file_gambar_1']['error'] !== 4) {
                $this->upload->do_upload('file_gambar_1');
                $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                $post['gambar_1'] = $upload_data['file_name'];
            }

            if ($_FILES['file_gambar_2']['error'] !== 4) {
                $this->upload->do_upload('file_gambar_2');
                $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                $post['gambar_2'] = $upload_data['file_name'];
            }
        }


        $data = [
            'id_hd' => $post['id_hd'],
            'hd_json' => json_encode($post),
        ];
        $this->halaman_depan->save($data);
        $alert = alert('primary', 'Data berhasil disimpan.');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
}
