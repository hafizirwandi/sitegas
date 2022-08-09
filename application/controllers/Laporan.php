<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	protected $public = array();
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Security_model', 'secure');
		$this->secure->isLogin();
		// Your own constructor code
		$this->public['title'] 	= 'Laporan';
		$this->public['menu'] 	= null;
		$this->public['submenu'] = null;
		$this->public['css']	= null;
		$this->public['script']	= null;
		$this->load->model('Lahan_model', 'lahan');
	}
	public function kelurahan()
	{
		$kelurahan = $this->input->get('kelurahan');
		$this->public['menu'] = 'laporan-kelurahan';
		$data['public'] = $this->public;
		$data['content'] = 'laporan/kelurahan';
		if ($kelurahan) {
			$data['data'] = $this->lahan->findAllByKelurahan($kelurahan);
		} else {
			$data['data'] = $this->lahan->findAll();
		}

		//dd($data['countada']);
		$this->load->view('layouts/main-layout/index', $data);
	}
	public function kategori()
	{
		$kategori = $this->input->get('kategori');
		$this->public['menu'] = 'laporan-kategori';
		$data['public'] = $this->public;
		$data['content'] = 'laporan/kategori';
		if ($kategori) {
			$data['data'] = $this->lahan->findAllByKategori($kategori);
		} else {
			$data['data'] = $this->lahan->findAll();
		}

		//dd($data['countada']);
		$this->load->view('layouts/main-layout/index', $data);
	}
}
