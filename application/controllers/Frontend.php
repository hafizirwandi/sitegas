<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{

	protected $public = array();
	public function __construct()
	{
		parent::__construct();

		// Your own constructor code
		$this->public['title'] 	= 'Home';
		$this->public['menu'] 	= 'home';
		$this->public['css']	= null;
		$this->public['script']	= null;
		$this->load->model('Lahan_model', 'lahan');
	}
	public function index()
	{

		$data['public'] = $this->public;

		$this->load->view('frontend/index', $data);
	}
}
