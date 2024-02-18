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
		$this->load->model('Kab_kota_model', 'kabkota');
		$this->load->model('Artikel_model', 'artikel');
	}
	public function index()
	{
		$this->public['script'] = 'home/script';
		$data['public'] = $this->public;
		$data['content'] = 'home/index';
		$data['kategori'] = $this->artikel->getDashboardByKategori();
		$data['kabkota'] = $this->artikel->getDashboardByKabkota();

		$lim = 0;
		$chart1['nama_kab_kota'] = [];
		$chart1['jlh'] = [];
		foreach ($data['kabkota'] as $r) {
			$lim++;
			if ($lim == 6) break;
			array_push($chart1['nama_kab_kota'], $r['nama_kab_kota']);
			array_push($chart1['jlh'], (int) $r['jlh']);
		}
		$data['chart1'] = $chart1;


		$chart2['bulan'] = json_encode(listBulan('12'));

		//Chart2
		$kabkota = $this->kabkota->findAll();
		$chart_2 = [];
		foreach ($kabkota as $r) {
			$temp['name'] = $r['nama_kab_kota'];

			$data_per_month = $this->artikel->getAllDataPerMonth($r['id_kk']);
			$data_temp = [];
			foreach ($data_per_month as $j) {
				$data_temp[] = (int) $j['jumlah_artikel'];
			}
			$temp['data'] = $data_temp;
			$chart_2[] = $temp;
		}

		$chart2['data'] = json_encode($chart_2);
		$data['chart2'] = $chart2;

		//dd($chart2);
		//dd($data['countada']);
		$this->load->view('layouts/main-layout/index', $data);
	}
}
