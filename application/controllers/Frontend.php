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
		$this->load->model('Kategori_model', 'kategori');
		$this->load->model('Kab_kota_model', 'kab_kota');
		$this->load->model('Artikel_model', 'artikel');
	}
	public function index()
	{
		$data['public'] = $this->public;
		$data['content'] = 'frontend/index';
		$data['kabkota'] = $this->kab_kota->findAll();
		$data['kabkota1'] = $this->kab_kota->findAllLimit(6);
		$data['artikel1'] = $this->artikel->findAllWhereLimit([], 4);

		$this->load->view('frontend/layout', $data);
	}
	public function article()
	{
		$cat = str_replace("'", "", htmlspecialchars($this->input->get('cat'), ENT_QUOTES));
		$kabkota = str_replace("'", "", htmlspecialchars($this->input->get('kabkota'), ENT_QUOTES));
		$str_params = [];

		$kat = $this->kategori->findWhere(['slug' => $cat]);
		if ($kat) {

			$str_params['d.id_kategori'] = $kat['id_kategori'];
		}
		$data['kabkota'] = [];

		$kabkota = $this->kab_kota->findWhere(['slug' => $kabkota]);
		if ($kabkota) {

			$data['kabkota'] = $kabkota;
			$str_params['c.id_kk'] = $kabkota['id_kk'];
		}

		$data['latest_post'] = $this->artikel->findAllLatest();

		//dd($str_params);
		if ($str_params) {
			$artikel = $this->artikel->findAllArtikel($str_params);
		} else {
			$artikel = $this->artikel->findAllArtikel();
		}
		//dd($artikel);
		foreach ($artikel as &$r) {
			$r['kategori'] = $this->kategori->findKategoriArtikelAllByArtikelID($r['id_artikel']);
		}
		$this->public['title'] = 'Artikel';
		$data['public'] = $this->public;
		$data['artikel'] = $artikel;
		$data['content'] = 'frontend/artikel';
		$data['kategori'] = $this->kategori->findAll();
		$data['kab_kota'] = $this->kab_kota->findAll();
		$this->load->view('frontend/layout', $data);
	}
	public function article_detail($artikel_slug)
	{

		$data['public'] = $this->public;
		$data['latest_post'] = $this->artikel->findAllLatest();
		$artikel = $this->artikel->findWhere(['a.slug' => $artikel_slug]);
		// dd($artikel);
		$data['artikel'] = $artikel;
		$data['content'] = 'frontend/artikel_detail';
		$data['kategori'] = $this->kategori->findAll();
		$data['kab_kota'] = $this->kab_kota->findAll();

		$this->load->view('frontend/layout', $data);
	}
	public function kabupaten_kota()
	{
		$this->public['title'] = 'Kabupaten Kota';
		$data['public'] = $this->public;
		$data['content'] = 'frontend/kabupaten_kota';
		$data['kabkota'] = $this->kab_kota->findAll();
		$this->load->view('frontend/layout', $data);
	}
}
