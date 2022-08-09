<?php

class Login extends CI_Controller
{
  private $public;
  private $csrf;
  public function __construct()
  {
    parent::__construct();
    $this->public['title']   = 'Login';
    $this->csrf = array(
      'name' => $this->security->get_csrf_token_name(),
      'hash' => $this->security->get_csrf_hash()
    );
    $this->load->model('Pengguna_model', 'pengguna');
  }
  public function index()
  {
    $data['public'] = $this->public;
    $data['csrf'] = $this->csrf;


    $this->load->view('layouts/login/index', $data);
  }

  public function auth_login()
  {
    $post = $this->input->post();

    $data = [
      'username' => $post['username'],
      'password' => md5($post['password']),
    ];

    $cek_login = $this->pengguna->authLogin($data);

    if ($cek_login->num_rows() == 0) {
      $alert = alert('danger', 'Username atau Password anda salah.');
      $this->session->set_flashdata('message', $alert);
      redirect($this->agent->referrer());

      die();
    } else {
      $user = $cek_login->row_array();
      $session = [
        'id_pengguna' => $user['id_pengguna'],
        'username' => $user['username'],
        'nama' => $user['nama'],
        'role' => $user['level_login'],
        'gambar' => $user['gambar'],
        'no_hp' => $user['no_hp'],
        'email' => $user['email'],
        'islogin' => TRUE,
      ];

      $this->session->set_userdata($session);

      $alert = alert('primary', 'Anda berhasil login.');
      $this->session->set_flashdata('message', $alert);



      redirect(site_url('home'));
      die();
    }
  }
  public function logout()
  {
    $this->session->sess_destroy();
    redirect('login');
  }
}
