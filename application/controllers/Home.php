<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	protected $public = array();
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Security_model', 'secure');
		$this->secure->isLogin();
		// Your own constructor code
		$this->public['title'] 	= 'Home';
		$this->public['menu'] 	= 'home';
		$this->public['submenu'] = null;
		$this->public['css']	= null;
		$this->public['script']	= null;
		$this->load->model('Kategori_model', 'kategori');
		$this->load->model('Artikel_model', 'artikel');
	}
	public function index()
	{
		$this->public['script'] = 'home/script';
		$data['public'] = $this->public;
		$data['content'] = 'home/index';
		$kategori = $this->kategori->getDashboardByPenggunaID($this->session->userdata('id_pengguna'));
		//dd($kategori);
		$data['kategori'] = $kategori;
		//dd($data['countada']);
		$this->load->view('layouts/main-layout/index', $data);
	}
}
