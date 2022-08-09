<?php
class Lahan extends CI_Controller
{
    protected $public = array();
    protected $csrf;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Security_model', 'secure');
        $this->secure->isLogin();
        // Your own constructor code
        $this->public['title']      = 'Lahan';
        $this->public['menu']       = 'lahan';
        $this->public['submenu']    = null;
        $this->public['css']        = null;
        $this->public['script']     = null;

        $this->csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

        $this->load->model('lahan_model', 'lahan');
    }

    public function index()
    {
        $data['public'] = $this->public;
        $data['content'] = 'lahan/index';
        $data['data'] = $this->lahan->findAll();
        $data['csrf'] = $this->csrf;
        $this->load->view('layouts/main-layout/index', $data);
    }

    public function add()
    {
        $data['csrf'] = $this->csrf;
        $this->load->view('lahan/add', $data);
    }

    public function save()
    {
        $data = $this->input->post();
        //upload foto lahan
        $config['upload_path']   = './uploads/foto_lahan';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jiff';
        $config['max_size']      = 5024;
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);

        $data['foto_lahan'] = $this->input->post('foto_lahan2');
        if ($_FILES['foto_lahan']['error'] !== 4) {
            if (!$this->upload->do_upload('foto_lahan')) {
            } else {
                $upload_data = $this->upload->data();
                $data['foto_lahan'] = $upload_data['file_name'];
            }
        }

        //upload scan sertifikat
        $config2['upload_path']   = './uploads/scan_sertifikat';
        $config2['allowed_types'] = 'pdf';
        $config2['max_size']      = 5024;
        $config2['encrypt_name'] = TRUE;
        $this->upload->initialize($config2);

        $data['scan_sertifikat'] = $this->input->post('scan_sertifikat2');
        if ($_FILES['scan_sertifikat']['error'] !== 4) {
            if (!$this->upload->do_upload('scan_sertifikat')) {
                $this->session->set_flashdata('message', $this->upload->display_errors('', ''));
                return redirect($this->agent->referrer());
            } else {
                $upload_data = $this->upload->data();
                $data['scan_sertifikat'] = $upload_data['file_name'];
            }
        }
        unset($data['foto_lahan2']);
        unset($data['scan_sertifikat2']);
        $this->lahan->save($data);
        $alert = alert('primary', "<strong>Berhasil!</strong> Data lahan berhasil disimpan.");
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }

    public function edit($id)
    {
        $data['csrf'] = $this->csrf;
        $data['data'] = $this->lahan->find($id);
        $this->load->view('lahan/edit', $data);
    }
    public function detail($id)
    {
        $data['data'] = $this->lahan->find($id);
        $this->load->view('lahan/detail', $data);
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->lahan->delete($id);
        $alert = alert('primary', "<strong>Berhasil!</strong> Data lahan berhasil dihapus.");
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());
    }
}
