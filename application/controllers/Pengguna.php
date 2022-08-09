<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
  protected $public = array();
  protected $csrf;

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Security_model', 'secure');
    $this->secure->isLogin();
    // Your own constructor code
    $this->public['title']   = 'Pengguna';
    $this->public['menu']   = 'pengguna';
    $this->public['submenu'] = null;
    $this->public['css']  = null;
    $this->public['script']  = null;

    $this->csrf = array(
      'name' => $this->security->get_csrf_token_name(),
      'hash' => $this->security->get_csrf_hash()
    );
    $this->load->model('Pengguna_model', 'pengguna');
  }

  public function index()
  {
    $data['public'] = $this->public;
    $data['content'] = 'pengguna/index';
    $data['data'] = $this->pengguna->findAll();
    $data['csrf'] = $this->csrf;
    $this->load->view('layouts/main-layout/index', $data);
  }

  public function add()
  {
    $data['csrf'] = $this->csrf;
    $data['public'] = $this->public;
    $this->load->view('pengguna/add', $data);
  }

  public function edit($id)
  {
    $data['csrf'] = $this->csrf;
    $data['data'] = $this->pengguna->find($id);
    $data['public'] = $this->public;

    $this->load->view('pengguna/edit', $data);
  }

  public function save()
  {
    $post = $this->input->post();
    if ($post['id_pengguna'] != '' && $post['password'] == '') {
      $password = $this->pengguna->find($post['id_pengguna'])['password'];
      $pesan = 'diubah';
    } elseif ($post['id_pengguna'] != '' && $post['password'] != '') {
      $password = md5($post['password']);
      $pesan = 'diubah';
    } elseif ($post['id_pengguna'] == '') {
      if ($this->cek_username($post['username']) == true) {
        $alert = alert('danger', 'Username telah digunakan , Gunakan username lain!');
        $this->session->set_flashdata('message', $alert);
        redirect($this->agent->referrer());

        die();
      }
      $password = md5($post['password']);
      $pesan = 'ditambahkan';
      $data_simpan = [
        'created_by' => $this->session->userdata['id_pengguna'],
        'created_at' => date('Y-m-d h:i:s')
      ];
    }
    $data = [
      'id_pengguna' => $post['id_pengguna'],
      'username' => $post['username'],
      'password' => $password,
      'nama' => $post['nama'],
      'level_login' => $post['level_login'],

      'updated_by' => $this->session->userdata['id_pengguna'],
      'updated_at' => date('Y-m-d h:i:s')
    ];

    if ($data_simpan != null) {
      $data = array_merge($data, $data_simpan);
    }

    $this->pengguna->save($data);

    // echo json_encode($save);
    // die;

    $alert = alert('primary', '<strong>Berhasil!</strong> Pengguna berhasil disimpan');
    $this->session->set_flashdata('message', $alert);
    redirect($this->agent->referrer());
  }

  public function cek_username($username)
  {
    $cek = $this->pengguna->findUsername($username);
    if ($cek->num_rows() != 0) {
      return true;
    } else {
      return false;
    }
  }

  public function delete()
  {
    $id = $this->input->post('id');

    $this->pengguna->delete($id);


    $alert = alert('primary', '<strong>Berhasil!</strong> Pengguna berhasil dihapus');

    $this->session->set_flashdata('message', $alert);
    redirect($this->agent->referrer());
  }
}
