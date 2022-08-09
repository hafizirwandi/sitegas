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
		$this->load->model('Lahan_model', 'lahan');
	}
	public function index()
	{
		$this->public['script'] = 'home/script';
		$data['public'] = $this->public;
		$data['content'] = 'home/index';
		$data['count'] = $this->lahan->countAll();
		$data['countada'] = $this->lahan->countAllByStatusSertifikatAda();
		//dd($data['countada']);
		$this->load->view('layouts/main-layout/index', $data);
	}
}
