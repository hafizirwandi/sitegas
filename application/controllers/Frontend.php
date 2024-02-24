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
		$this->load->model('Halaman_depan_model', 'hd');
	}
	public function index()
	{

		$data['public'] = $this->public;
		$data['content'] = 'frontend/index';

		$section_1 = json_decode($this->hd->find('1')['hd_json'], TRUE);
		$data['about'] = $section_1;

		//Section 2
		$section_2 = json_decode($this->hd->find('2')['hd_json'], TRUE);
		$data['section_2'] = $section_2;
		if ($section_2['via'] == '1') {
			//via kategori
			$kat = $this->kategori->find($section_2['id_kategori']);
			$data['read_more_2'] = site_url('article?cat=') . $kat['slug'];
			$data['artikel_2'] = $this->artikel->findAllWhereLimit(['d.id_kategori' => $section_2['id_kategori'], 'a.status' => '1'], 4);
		} elseif ($section_2['via'] == '2') {
			//via kabkota
			$kabkota = $this->kab_kota->find($section_2['id_kk']);
			$data['read_more_2'] = site_url('article?kabkota=') . $kabkota['slug'];
			$data['artikel_2'] = $this->artikel->findAllWhereLimit(['a.id_kk' => $section_2['id_kk'], 'a.status' => '1'], 4);
		}

		//Section 3
		$section_3 = json_decode($this->hd->find('4')['hd_json'], TRUE);
		$data['section_3'] = $section_3;
		if ($section_3['via'] == '1') {
			//via kategori
			$kat = $this->kategori->find($section_3['id_kategori']);
			$data['read_more_3'] = site_url('article?cat=') . $kat['slug'];
			$data['artikel_3'] = $this->artikel->findAllWhereLimit(['d.id_kategori' => $section_3['id_kategori'], 'a.status' => '1'], 4);
		} elseif ($section_3['via'] == '2') {
			//via kabkota
			$kabkota = $this->kab_kota->find($section_3['id_kk']);
			$data['read_more_3'] = site_url('article?kabkota=') . $kabkota['slug'];
			$data['artikel_3'] = $this->artikel->findAllWhereLimit(['a.id_kk' => $section_2['id_kk'], 'a.status' => '1'], 4);
		}

		//Section 4
		$section_4 = json_decode($this->hd->find('5')['hd_json'], TRUE);
		$data['section_4'] = $section_4;
		if ($section_4['via'] == '1') {
			//via kategori
			$kat = $this->kategori->find($section_4['id_kategori']);
			$data['read_more_4'] = site_url('article?cat=') . $kat['slug'];
			$data['artikel_4'] = $this->artikel->findAllWhereLimit(['d.id_kategori' => $section_4['id_kategori'], 'a.status' => '1'], 4);
		} elseif ($section_4['via'] == '2') {
			//via kabkota
			$kabkota = $this->kab_kota->find($section_4['id_kk']);
			$data['read_more_4'] = site_url('article?kabkota=') . $kabkota['slug'];
			$data['artikel_4'] = $this->artikel->findAllWhereLimit(['a.id_kk' => $section_2['id_kk'], 'a.status' => '1'], 4);
		}


		// dd($data);

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
	public function hubungi_kami()
	{
		$this->load->model('Halaman_model', 'halaman');

		$this->public['title'] = 'Hubungi Kami';
		$halaman = json_decode($this->halaman->find('1')['halaman_json'], TRUE);
		$data['data'] = $halaman;
		$data['public'] = $this->public;
		$data['content'] = 'frontend/hubungi_kami';
		$data['kabkota'] = $this->kab_kota->findAll();
		$this->load->view('frontend/layout', $data);
	}
}
